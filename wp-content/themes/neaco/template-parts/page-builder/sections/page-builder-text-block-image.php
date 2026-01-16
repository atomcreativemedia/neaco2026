<?php
if(get_sub_field('pb_text_block_image_section_id')) {
	$pb_text_block_image_section_id = get_sub_field('pb_text_block_image_section_id');
} else {
	$pb_text_block_image_section_id = '';
}

if(get_sub_field('pb_text_block_image_section_background_colour')) {
	$pb_text_block_image_section_background_colour = get_sub_field('pb_text_block_image_section_background_colour');
} else {
	$pb_text_block_image_section_background_colour = 'rgb(255,255,255)';
}

if(get_sub_field('pb_text_block_image_content_colour')) {
	$pb_text_block_image_content_colour = get_sub_field('pb_text_block_image_content_colour');
} else {
	$pb_text_block_image_content_colour = 'dark';
}

if(get_sub_field('pb_text_block_image_alignment')) {
	$pb_text_block_image_alignment = get_sub_field('pb_text_block_image_alignment');
} else {
	$pb_text_block_image_alignment = 'order-lg-0';
}

	if($pb_text_block_image_alignment === 'order-lg-0') {
		$text_col_padding = 'ps-xl-5';
	} else {
		$text_col_padding = 'pe-xl-5';
	}

if(get_sub_field('pb_text_block_image_content')) {
	$pb_text_block_image_content = get_sub_field('pb_text_block_image_content');
} else {
	$pb_text_block_image_content = '';
}

if(get_sub_field('pb_text_block_image_image')) {
	$pb_text_block_image_image = get_sub_field('pb_text_block_image_image');
} else {
	$pb_text_block_image_image = '';
}

if(get_sub_field('pb_text_block_image_buttons')) {
	$buttons = get_sub_field('pb_text_block_image_buttons');
}

?>
<section class="page-builder__text-block-image" id="<?= esc_attr($pb_text_block_image_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_image_section_background_colour); ?>;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-10 col-lg-6 col-xxl-7 order-lg-1 <?= esc_attr($text_col_padding); ?>">
				<div class="page-builder__text-block-image__content content-colour--<?= esc_attr($pb_text_block_image_content_colour); ?>">
					<?= wp_kses_post($pb_text_block_image_content);
					if(isset($buttons)) : ?>
    	    		    <div class="page-builder__text-block-image__buttons">
    	    		    	<?php foreach ($buttons as $button) {
    	    	    			$label = $button['pb_text_block_image_button_text'];
    	    	    			$destination = $button['pb_text_block_image_button_destination'];
    	    	    			echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
    	    		    	} ?>
    	    		    </div>
		    		<?php endif; ?>
				</div>
			</div>
			<div class="col-11 col-md-10 col-lg-6 col-xxl-5 <?= esc_attr($pb_text_block_image_alignment); ?> position-relative">
				<div class="page-builder__text-block-image__image bg-img" style="background-image:url(<?= esc_url($pb_text_block_image_image); ?>);"></div>
			</div>
		</div>
	</div>
</section>