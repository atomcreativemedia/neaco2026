<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

if(get_sub_field('pr_cb__article__section_id', $category)) {
	$section_id = get_sub_field('pr_cb__article__section_id', $category);
}

$section_class = 'product-range__article';
$container_class = 'container-fluid';
$row_class = 'row justify-content-center';
$col_class = 'col-11 col-md-10 col-lg-8';
$content_class = 'product-range__article__content';
$buttons_class = 'product-range__article__buttons';

$bg_colour = get_sub_field('pr_cb__article__background_colour', $category) ?: '#FFFFFF';
$content_colour = get_sub_field('pr_cb__article__content_colour', $category) ?: 'dark';

if(get_sub_field('pr_cb__article__showcase_article', $category) != 0) {
	$showcase = 1;
	
	$bg_img = get_sub_field('pr_cb__article__background_image', $category) ?: '';
	$bg_img_align = get_sub_field('pr_cb__article__image_alignment', $category) ?: 'right';
	
	$section_class .= ' product-range__article--showcase bg-img bg-img--align-'.esc_attr($bg_img_align);
	$content_class .= ' text-start';
	$buttons_class .= ' justify-content-start';
	
	if($bg_img_align === 'right') {
		$row_class .= ' justify-content-lg-start';
	} else {
		$row_class .= ' justify-content-lg-end';
	}
	
	$col_class .= ' col-xl-5 offset-lg-1';
} else {
	$content_class .= ' text-center';
	if($bg_colour !== '#FFFFFF') {
		$section_class .= ' pad';
	}
}
if(get_sub_field('pr_cb__article__icon', $category)) {
	$article_icon = get_sub_field('pr_cb__article__icon', $category);
}
if(get_sub_field('pr_cb__article__article', $category)) {
	$article_content = get_sub_field('pr_cb__article__article', $category);
}
if(get_sub_field('pr_cb__article__buttons__rp', $category)) {
	$article_buttons = get_sub_field('pr_cb__article__buttons__rp', $category);
}
if(isset($article_content)) :
?>
<section class="<?= esc_attr($section_class); ?>" id="<?= esc_attr($section_id); ?>"<?php echo ' style="background-color:'.esc_attr($bg_colour).';'; if ($showcase) { echo 'background-image:url('.esc_url($bg_img).');"'; } else { echo '"'; } ?>>
	<div class="<?= esc_attr($container_class); ?>">
		<div class="<?= esc_attr($row_class); ?>">
			<div class="<?= esc_attr($col_class); ?>">
				<div class="<?= esc_attr($content_class); ?> content-colour--<?= esc_attr($content_colour); ?>">
					
					<?php if(isset($article_icon)) : ?>
					<div class="product-range__article__icon">
						<?= wp_kses_post($article_icon); ?>
					</div>
					<?php endif;
					
					if(isset($article_content)) {
						echo wp_kses_post($article_content);
					}
					
					if(isset($article_buttons)) : ?>
				    <div class="<?= esc_attr($buttons_class); ?>">
				    	<?php foreach ($article_buttons as $button) {
			    			$label = $button['pr_cb__article__buttons__rp_button_label'];
			    			$destination = $button['pr_cb__article__buttons__rp_button_destination'];
			    			$style = $button['pr_cb__article__buttons__rp_button_style'];
			    			echo '<p class="button '.esc_attr($style).'"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
				    	} ?>
				    </div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>