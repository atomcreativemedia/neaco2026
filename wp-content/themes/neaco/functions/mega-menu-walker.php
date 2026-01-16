<?php
/**
 * Neaco mega-menu walker for taxonomy-term menu items.
 *
 * Behaviour:
 * - Top-level menu item behaves normally unless ACF checkbox `enable_mega_menu` is true.
 * - If enabled, we render a mega panel containing:
 *		- Parent term ACF WYSIWYG: `mega_desc`
 *		- Cards for selected child menu items (the ones nested under it in WP Menus)
 *			- Child term ACF image: `mega_img`
 *			- Child term ACF text: `mega_range`
 * - Child menu items under a mega-enabled parent are removed from the normal menu output
 *   and only rendered inside the mega panel.
 */

/**
 * Build mega children arrays on parent items, then remove those children
 * from the normal wp_nav_menu() output so the walker can render them in-panel.
 */
function neaco_megamenu_prepare_menu_objects($items, $args) {
	if (empty($items) || !is_array($items)) {
		return $items;
	}

	// Index items by ID for quick lookups.
	$by_id = [];
	foreach ($items as $it) {
		$by_id[(int) $it->ID] = $it;
	}

	// Identify mega-enabled top-level items.
	$mega_parent_ids = [];
	foreach ($items as $it) {
		if ((int) $it->menu_item_parent !== 0) {
			continue;
		}

		$enabled = false;
		if (function_exists('get_field')) {
			$enabled = (bool) get_field('enable_mega_menu', $it);
		}

		if ($enabled) {
			$mega_parent_ids[(int) $it->ID] = true;
			$it->neaco_mega_enabled = true;
			$it->neaco_mega_children = [];
		} else {
			$it->neaco_mega_enabled = false;
		}
	}

	if (empty($mega_parent_ids)) {
		return $items;
	}

	// Helper: find nearest mega-enabled ancestor for a given item ID.
	$get_mega_ancestor = function($item) use ($by_id, $mega_parent_ids) {
		$guard = 0;
		$current = $item;

		while (!empty($current->menu_item_parent) && $guard < 50) {
			$parent_id = (int) $current->menu_item_parent;
			if (isset($mega_parent_ids[$parent_id])) {
				return $parent_id;
			}
			if (!isset($by_id[$parent_id])) {
				break;
			}
			$current = $by_id[$parent_id];
			$guard++;
		}

		return 0;
	};

	// Attach direct children to mega parents, and mark descendants for removal.
	$remove_ids = [];

	foreach ($items as $it) {
		$it_id = (int) $it->ID;
		$parent_id = (int) $it->menu_item_parent;

		if ($parent_id === 0) {
			continue;
		}

		$mega_ancestor_id = $get_mega_ancestor($it);
		if (!$mega_ancestor_id) {
			continue;
		}

		// Remove all descendants of a mega parent from normal output.
		$remove_ids[$it_id] = true;

		// Only store direct children for rendering cards.
		if ($parent_id === $mega_ancestor_id && isset($by_id[$mega_ancestor_id])) {
			if (!isset($by_id[$mega_ancestor_id]->neaco_mega_children) || !is_array($by_id[$mega_ancestor_id]->neaco_mega_children)) {
				$by_id[$mega_ancestor_id]->neaco_mega_children = [];
			}
			$by_id[$mega_ancestor_id]->neaco_mega_children[] = $it;
		}
	}

	// Filter out removed items.
	$filtered = [];
	foreach ($items as $it) {
		if (isset($remove_ids[(int) $it->ID])) {
			continue;
		}
		$filtered[] = $it;
	}

	return $filtered;
}
add_filter('wp_nav_menu_objects', 'neaco_megamenu_prepare_menu_objects', 20, 2);


/**
 * Walker: outputs mega panel for mega-enabled top-level items.
 */
class Neaco_Mega_Menu_Walker extends Walker_Nav_Menu {

	public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$classes = empty($item->classes) ? [] : (array) $item->classes;

		$is_mega = (!empty($item->neaco_mega_enabled) && $depth === 0);

		if ($is_mega) {
			$classes[] = 'has-mega-menu';
		}

		$class_names = join(' ', array_filter($classes));
		$class_attr = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

		$output .= $indent . '<li' . $class_attr . '>';

		$atts = [];
		$atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
		$atts['target'] = !empty($item->target) ? $item->target : '';
		$atts['rel']	= !empty($item->xfn) ? $item->xfn : '';
		$atts['href']	= !empty($item->url) ? $item->url : '';

		if ($is_mega) {
			$atts['aria-haspopup'] = 'true';
			$atts['aria-expanded'] = 'false';
		}

		$attributes = '';
		foreach ($atts as $attr => $value) {
			if ($value === '') {
				continue;
			}
			$value = ($attr === 'href') ? esc_url($value) : esc_attr($value);
			$attributes .= ' ' . $attr . '="' . $value . '"';
		}

		$title = apply_filters('the_title', $item->title, $item->ID);

		$output .= '<a' . $attributes . '>' . wp_kses_post($title) . '</a>';

		if ($is_mega) {
			$output .= $this->render_mega_panel($item);
		}
	}

	public function end_el(&$output, $item, $depth = 0, $args = null) {
		$output .= "</li>\n";
	}

	private function render_mega_panel($item) {
		$children = (!empty($item->neaco_mega_children) && is_array($item->neaco_mega_children)) ? $item->neaco_mega_children : [];

		// Parent term details.
		$parent_term = $this->get_term_from_menu_item($item);
		$parent_desc = '';

		if ($parent_term && function_exists('get_field')) {
			$parent_desc = get_field('mega_desc', $parent_term);
		}

		ob_start();
		?>
		<div class="mega-menu" role="region" aria-label="<?php echo esc_attr($item->title); ?>">
			<div class="container">
				<div class="row">
					<div class="col px-0">
						<div class="mega-menu__inner">
							
							<?php if (!empty($children)) : ?>
								<div class="mega-menu__cards">
									<?php foreach ($children as $child_item) : ?>
										<?php
										$term = $this->get_term_from_menu_item($child_item);
										if (!$term) {
											continue;
										}
										
										$img = null;
										$range = '';
										
										if (function_exists('get_field')) {
											$img = get_field('mega_img', $term);
											$range = (string) get_field('mega_range', $term);
										}
										
										$term_link = get_term_link($term);
										if (is_wp_error($term_link)) {
											continue;
										}
										?>
										<a class="mega-card" href="<?php echo esc_url($term_link); ?>">
											<div class="mega-card__media">
												<?php echo $this->render_acf_image($img, 'large', ['class' => 'mega-card__img']); ?>
											</div>
											<div class="mega-card__body">
												<div class="mega-card__title"><?php echo esc_html($term->name); ?></div>
												<?php if (!empty($range)) : ?>
													<div class="mega-card__range"><?php echo esc_html($range); ?></div>
												<?php endif; ?>
											</div>
										</a>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
							
							<div class="mega-menu__desc">
								<?php
								// WYSIWYG content is trusted editor content, so output with wp_kses_post.
								if (!empty($parent_desc)) {
									echo wp_kses_post($parent_desc);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}

	private function get_term_from_menu_item($item) {
		// Menu item for a taxonomy term typically has:
		// $item->object == 'product_category' (taxonomy)
		// $item->type == 'taxonomy'
		// $item->object_id == term_id
		if (empty($item->type) || $item->type !== 'taxonomy') {
			return null;
		}
		if (empty($item->object) || $item->object !== 'product_category') {
			return null;
		}

		$term_id = (int) $item->object_id;
		if (!$term_id) {
			return null;
		}

		$term = get_term($term_id, 'product_category');
		if (!$term || is_wp_error($term)) {
			return null;
		}

		return $term;
	}

	private function render_acf_image($img, $size = 'large', $attrs = []) {
		// Supports ACF image return formats: ID, array, or URL.
		if (empty($img)) {
			return '';
		}

		$attachment_id = 0;

		if (is_numeric($img)) {
			$attachment_id = (int) $img;
		} elseif (is_array($img) && !empty($img['ID'])) {
			$attachment_id = (int) $img['ID'];
		}

		if ($attachment_id) {
			return wp_get_attachment_image($attachment_id, $size, false, $attrs);
		}

		// URL fallback
		if (is_string($img) && filter_var($img, FILTER_VALIDATE_URL)) {
			$attr_str = '';
			foreach ($attrs as $k => $v) {
				$attr_str .= ' ' . esc_attr($k) . '="' . esc_attr($v) . '"';
			}
			return '<img src="' . esc_url($img) . '"' . $attr_str . ' alt="" loading="lazy" decoding="async">';
		}

		return '';
	}
}
