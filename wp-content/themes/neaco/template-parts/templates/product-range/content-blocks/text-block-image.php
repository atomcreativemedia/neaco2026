<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

if(get_sub_field('pr_cb__text_block_image__section_id', $category)) {
	$section_id = get_sub_field('pr_cb__text_block_image__section_id', $category);
} else {
	$section_id = '';
}

if(get_sub_field('pr_cb__text_block_image__alignment', $category)) {
	$img_alignment = get_sub_field('pr_cb__text_block_image__alignment', $category);
} else {
	$img_alignment = 'order-lg-0';
}

	if($img_alignment === 'order-lg-0') {
		$text_col_padding = 'ps-xl-5';
	} else {
		$text_col_padding = 'pe-xl-5';
	}

if(get_sub_field('pr_cb__text_block_image__placement', $category)) {
	$img_placement = get_sub_field('pr_cb__text_block_image__placement', $category);
} else {
	$img_placement = 'background';
}

if(get_sub_field('pr_cb__text_block_image__content', $category)) {
	$content = get_sub_field('pr_cb__text_block_image__content', $category);
} else {
	$content = '';
}

if(get_sub_field('pr_cb__text_block_image__image', $category)) {
	$image = get_sub_field('pr_cb__text_block_image__image', $category);
} else {
	$image = '';
}

if(get_sub_field('pr_cb__text_block_image__buttons__rp', $category)) {
	$buttons = get_sub_field('pr_cb__text_block_image__buttons__rp', $category);
}

?>
<section class="product-range__text-block-image" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<div class="row justify-content-center g-0">
			<div class="col-11 col-md-10 col-lg-6 col-xl-6 order-lg-1 <?= esc_attr($text_col_padding); ?>">
				<div class="product-range__text-block-image__content">
					<?= wp_kses_post($content);
					if(isset($buttons)) : ?>
    	    		    <div class="product-range__text-block-image__buttons">
    	    		    	<?php foreach ($buttons as $button) {
    	    	    			$label = $button['pr_cb__text_block_image__buttons__rp_button_text'];
    	    	    			$destination = $button['pr_cb__text_block_image__buttons__rp_button_destination'];
    	    	    			echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
    	    		    	} ?>
    	    		    </div>
		    		<?php endif; ?>
				</div>
			</div>
			<div class="col-11 col-md-10 col-lg-6 col-xl-4 <?= esc_attr($img_alignment); ?> position-relative">
				<div class="product-range__text-block-image__image bg-img"<?php if ($img_placement == 'background') : ?> style="background-image:url(<?= esc_url($image); ?>);"<?php endif; ?>>
					<?php if ($img_placement != 'background') : ?><img src="<?= esc_url($image); ?>" alt="" class="img-fluid"><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>