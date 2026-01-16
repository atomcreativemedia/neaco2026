<?php
$slug = get_query_var('pagename'); 

if ($slug != 'new-homepage') {
	// Section ID fallback
	$title_page_heading_section_id = get_field('title_page_heading_section_id') ?: 'page-heading';

	$title_page_heading_overlay = '0,0,0';
	$col_class = 'col-11 col-md-12 col-lg-9 col-xxl-7';
	$title_page_heading_background_type = 'image';
	$simple_heading_text = '';
	$content = '';
	$enable_simple_heading = false;

	// Handle taxonomy-specific logic
	if (is_tax('product_category') || is_tax('project_category')) {
		$category = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

		if ($category) {
			$background_image = get_field('title_page_heading_background_image', $category);
			$background_image_url = $background_image['sizes']['large'] ?? '';
			
			$padding = get_field('title_page_heading_section_padding', $category);
			$overlay_strength = get_field('title_page_heading_overlay_strength', $category);
			$content_alignment = get_field('title_page_heading_content_alignment', $category);
			$range_title = get_field('title_page_range_title', $category) ?: $category->name;
			$content = get_field('title_page_content', $category);
		}
	} else {
		// Page/post-based fields
		if (get_field('title_page_heading_background_type') === 'video') {
			$title_page_heading_background_type = 'video';
		} else {
			$background_image = get_field('title_page_heading_background_image');
			$background_image_url = $background_image['sizes']['large'] ?? '';
		}

		// Simple heading mode
		if (get_field('title_page_heading_enable_simple_heading') && $title_page_heading_background_type === 'image') {
			$enable_simple_heading = true;
			$simple_heading_text = get_field('title_page_heading_simple_heading_text') ?: '';
		}

		$padding = get_field('title_page_heading_section_padding');
		$overlay_strength = get_field('title_page_heading_overlay_strength');
		$content_alignment = get_field('title_page_heading_content_alignment');
		$content = get_field('title_page_content');
	}

	// Determine splash section classes
	if (have_rows('title_page_heading_slide_slides') && !$enable_simple_heading && $title_page_heading_background_type !== 'video') {
		$splash_section_class = 'page-heading__background-splash page-heading__background-splash--' . $title_page_heading_background_type . ' page-heading__splash-slider';
		$splash_item_class = 'page-heading__splash-item page-heading__splash-item--' . $title_page_heading_background_type . ' page-heading__splash-item-slide';
	} else {
		$splash_section_class = 'page-heading__background-splash page-heading__background-splash--' . $title_page_heading_background_type;
		$splash_item_class = 'page-heading__splash-item page-heading__splash-item--' . $title_page_heading_background_type;

		if ($enable_simple_heading) {
			$col_class = 'col-12';
			$splash_section_class .= ' simple-heading';
			$padding = 'small';
			$content_alignment = 'text-start';
		}
	}
	?>

	<section class="page-heading" id="<?= esc_attr($title_page_heading_section_id); ?>">
		<div class="<?= esc_attr($splash_section_class); ?>">
			<?php if ($title_page_heading_background_type === 'image') : ?>
				<?php if ($enable_simple_heading) : ?>
					<div class="page-heading__overlay--simple-heading"></div>
				<?php endif; ?>

				<?php if (!empty($background_image_url)) : ?>
					<div class="<?= esc_attr($splash_item_class); ?> bg-img" style="background-image:url(<?= esc_url($background_image_url); ?>);"></div>
				<?php endif; ?>

				<?php if (have_rows('title_page_heading_slide_slides') && !$enable_simple_heading) : ?>
					<?php while (have_rows('title_page_heading_slide_slides')) : the_row(); ?>
						<?php $slide_img = get_sub_field('title_page_heading_slide_background_image'); ?>
						<?php if ($slide_img) : ?>
							<div class="<?= esc_attr($splash_item_class); ?> bg-img" style="background-image:url(<?= esc_url($slide_img); ?>);"></div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php else : ?>
				<div class="<?= esc_attr($splash_item_class); ?>">
					<video autoplay muted loop playsinline webkit-playsinline>
						<source src="<?= esc_url(get_field('title_page_heading_background_video_webm')); ?>" type="video/webm">
						<source src="<?= esc_url(get_field('title_page_heading_background_video_mp4')); ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			<?php endif; ?>
		</div>

		<div class="page-heading__content page-heading__content--padding-<?= esc_attr($padding); ?>">
			<div class="container">
				<div class="row justify-content-center">
					<div class="<?= esc_attr($col_class); ?>">
						<?php if (!$enable_simple_heading) : ?>
							<div class="page-heading__overlay" style="background-color:rgba(<?= esc_attr($title_page_heading_overlay); ?>,<?= esc_attr($overlay_strength); ?>);">
						<?php endif; ?>

							<div class="page-heading__content-container <?= esc_attr($content_alignment); ?>">
								<?php if (is_tax('product_category') || is_tax('project_category')) : ?>
									<h1><?= esc_html($range_title); ?></h1>
								<?php endif; ?>

								<?php if (!empty($simple_heading_text)) : ?>
									<h1 class="simple-heading"><?= esc_html($simple_heading_text); ?></h1>
								<?php endif; ?>

								<?php if (!empty($content) && !$enable_simple_heading) : ?>
									<?= $content; ?>
								<?php endif; ?>

								<?php if (!is_tax('product_category')) : ?>
									<?php if (have_rows('title_page_heading_buttons')) : ?>
										<?php while (have_rows('title_page_heading_buttons')) : the_row(); ?>
											<p class="button <?= esc_attr(get_sub_field('title_page_heading_buttons_button_colour')); ?>">
												<a href="<?= esc_url(get_sub_field('title_page_heading_buttons_button_destination')); ?>">
													<?= esc_html(get_sub_field('title_page_heading_buttons_button_text')); ?>
												</a>
											</p>
										<?php endwhile; ?>
									<?php endif; ?>

									<?php if (get_field('title_page_heading_nbs_button')) : ?>
										<div class="page-heading__content__nbs-button">
											<?php the_field('title_page_heading_nbs_button'); ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>
							</div>

						<?php if (!$enable_simple_heading) : ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
} else {
	// Section ID fallback
	$title_page_heading_section_id = get_field('title_page_heading_section_id') ?: 'page-heading';

	$title_page_heading_overlay = '0,0,0';
	$col_class = 'col-11 col-md-12 col-lg-9 col-xxl-7';
	$title_page_heading_background_type = 'image';
	$simple_heading_text = '';
	$content = '';
	$enable_simple_heading = false;

	// Handle taxonomy-specific logic
	if (is_tax('product_category') || is_tax('project_category')) {
		$category = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

		if ($category) {
			$background_image = get_field('title_page_heading_background_image', $category);
			$background_image_url = $background_image['sizes']['large'] ?? '';
			
			$padding = get_field('title_page_heading_section_padding', $category);
			$overlay_strength = get_field('title_page_heading_overlay_strength', $category);
			$content_alignment = get_field('title_page_heading_content_alignment', $category);
			$range_title = get_field('title_page_range_title', $category) ?: $category->name;
			$content = get_field('title_page_content', $category);
		}
	} else {
		// Page/post-based fields
		if (get_field('title_page_heading_background_type') === 'video') {
			$title_page_heading_background_type = 'video';
		} else {
			$background_image = get_field('title_page_heading_background_image');
			$background_image_url = $background_image['sizes']['large'] ?? '';
		}

		// Simple heading mode
		if (get_field('title_page_heading_enable_simple_heading') && $title_page_heading_background_type === 'image') {
			$enable_simple_heading = true;
			$simple_heading_text = get_field('title_page_heading_simple_heading_text') ?: '';
		}

		$padding = get_field('title_page_heading_section_padding');
		$overlay_strength = get_field('title_page_heading_overlay_strength');
		$content_alignment = get_field('title_page_heading_content_alignment');
		$content = get_field('title_page_content');
	}

	// Determine splash section classes
	if (have_rows('title_page_heading_slide_slides') && !$enable_simple_heading && $title_page_heading_background_type !== 'video') {
		$splash_section_class = 'page-heading__background-splash page-heading__background-splash--' . $title_page_heading_background_type . ' page-heading__splash-slider';
		$splash_item_class = 'page-heading__splash-item page-heading__splash-item--' . $title_page_heading_background_type . ' page-heading__splash-item-slide';
	} else {
		$splash_section_class = 'page-heading__background-splash page-heading__background-splash--' . $title_page_heading_background_type;
		$splash_item_class = 'page-heading__splash-item page-heading__splash-item--' . $title_page_heading_background_type;

		if ($enable_simple_heading) {
			$col_class = 'col-12';
			$splash_section_class .= ' simple-heading';
			$padding = 'small';
			$content_alignment = 'text-start';
		}
	}
	?>

	<section class="page-heading" id="<?= esc_attr($title_page_heading_section_id); ?>">
		<div class="<?= esc_attr($splash_section_class); ?>">
			<?php if ($title_page_heading_background_type === 'image') : ?>
				<?php if ($enable_simple_heading) : ?>
					<div class="page-heading__overlay--simple-heading"></div>
				<?php endif; ?>

				<?php if (!empty($background_image_url)) : ?>
					<div class="<?= esc_attr($splash_item_class); ?> bg-img" style="background-image:url(<?= esc_url($background_image_url); ?>);"></div>
				<?php endif; ?>

				<?php if (have_rows('title_page_heading_slide_slides') && !$enable_simple_heading) : ?>
					<?php while (have_rows('title_page_heading_slide_slides')) : the_row(); ?>
						<?php $slide_img = get_sub_field('title_page_heading_slide_background_image'); ?>
						<?php if ($slide_img) : ?>
							<div class="<?= esc_attr($splash_item_class); ?> bg-img" style="background-image:url(<?= esc_url($slide_img); ?>);"></div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php else : ?>
				<div class="<?= esc_attr($splash_item_class); ?>">
					<video autoplay muted loop playsinline webkit-playsinline>
						<source src="<?= esc_url(get_field('title_page_heading_background_video_webm')); ?>" type="video/webm">
						<source src="<?= esc_url(get_field('title_page_heading_background_video_mp4')); ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			<?php endif; ?>
		</div>
		
		<style>
			.page-heading__content-container h1 {
				font-weight: bold;
				line-height: 1;
			}
		</style>

		<div style="background: linear-gradient(265deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.80) 100%);" class="page-heading__content page-heading__content--padding-<?= esc_attr($padding); ?>">
			<div class="container-fluid container-xl">
				<div class="row">
					<div class="<?= esc_attr($col_class); ?>">
						<?php if (!$enable_simple_heading) : ?>
							<div class="page-heading__overlay" style="background-color:rgba(<?= esc_attr($title_page_heading_overlay); ?>,<?= esc_attr($overlay_strength); ?>);">
						<?php endif; ?>

							<div class="page-heading__content-container <?= esc_attr($content_alignment); ?>">
								<?php if (is_tax('product_category') || is_tax('project_category')) : ?>
									<h1><?= esc_html($range_title); ?></h1>
								<?php endif; ?>

								<?php if (!empty($simple_heading_text)) : ?>
									<h1 class="simple-heading"><?= esc_html($simple_heading_text); ?></h1>
								<?php endif; ?>

								<?php if (!empty($content) && !$enable_simple_heading) : ?>
									<?= $content; ?>
								<?php endif; ?>

								<?php if (!is_tax('product_category')) : ?>
									<?php if (have_rows('title_page_heading_buttons')) : ?>
										<?php while (have_rows('title_page_heading_buttons')) : the_row(); ?>
											<p class="button <?= esc_attr(get_sub_field('title_page_heading_buttons_button_colour')); ?>">
												<a href="<?= esc_url(get_sub_field('title_page_heading_buttons_button_destination')); ?>">
													<?= esc_html(get_sub_field('title_page_heading_buttons_button_text')); ?>
												</a>
											</p>
										<?php endwhile; ?>
									<?php endif; ?>

									<?php if (get_field('title_page_heading_nbs_button')) : ?>
										<div class="page-heading__content__nbs-button">
											<?php the_field('title_page_heading_nbs_button'); ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>
								
								<div id="explore_container">
								
									<a href="#home_top_block">
									
										<p>Explore</p>
										
										<svg xmlns="http://www.w3.org/2000/svg" width="15" height="49" viewBox="0 0 15 49" fill="none">
										  <path d="M6.65685 48.7071C7.04737 49.0976 7.68054 49.0976 8.07106 48.7071L14.435 42.3431C14.8255 41.9526 14.8255 41.3195 14.435 40.9289C14.0445 40.5384 13.4113 40.5384 13.0208 40.9289L7.36395 46.5858L1.7071 40.9289C1.31658 40.5384 0.683411 40.5384 0.292887 40.9289C-0.0976378 41.3195 -0.0976377 41.9526 0.292887 42.3431L6.65685 48.7071ZM7.36395 0L6.36395 4.37114e-08L6.36395 48L7.36395 48L8.36395 48L8.36395 -4.37114e-08L7.36395 0Z" fill="white"/>
										</svg>
									
									</a>
								
								</div>
								
							</div>

						<?php if (!$enable_simple_heading) : ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}
