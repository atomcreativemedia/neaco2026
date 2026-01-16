<?php

$section_id = get_sub_field('pb_featured_content_slider__section_id') ?: '';

if(get_sub_field('pb_featured_content_slider__introduction')) {
	$intro = get_sub_field('pb_featured_content_slider__introduction');
}
if(get_sub_field('pr_cb__services__bg_image')) {
	$bg_img = get_sub_field('pr_cb__services__bg_image');
	
	$bg_image_url = $bg_img['url']; // Full-size image URL
    $bg_image_alt = $bg_img['alt']; // Alt text
    $bg_image_size = $bg_img['sizes']['large'];
	
}
if(get_sub_field('pb_featured_content_slider__slides_rp')) {
	$slides = get_sub_field('pb_featured_content_slider__slides_rp');
}
if(get_sub_field('pb_featured_content_slider__buttons_rp')) {
	$buttons = get_sub_field('pb_featured_content_slider__buttons_rp');
}
?>
<section class="page-builder__featured-content-slider" id="<?= esc_attr($section_id); ?>">
	
	<?php if(get_sub_field('pb_featured_content_slider__introduction') || isset($buttons)) : ?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row justify-content-center justify-content-lg-start">
					<div class="col-11 col-lg-8 col-xl-6">
						<div class="page-builder__featured-content-slider__intro">
							<?php if(get_sub_field('pb_featured_content_slider__introduction')) {
								echo wp_kses_post(get_sub_field('pb_featured_content_slider__introduction'));
							}
							if(isset($buttons)) : ?>
		    	    		    <div class="page-builder__featured-content-slider__buttons">
		    	    		    	<?php foreach ($buttons as $button) {
		    	    	    			$label = $button['pb_featured_content_slider__buttons_rp__button_label'];
		    	    	    			$destination = $button['pb_featured_content_slider__buttons_rp__button_destination'];
		    	    	    			echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
		    	    		    	} ?>
		    	    		    </div>
				    		<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if(isset($slides)) :
		$random_slider_id = 'slider-' . generateRandomString(6); ?>
	<div class="page-builder__featured-content-slider__slider-container" data-slider-id="<?= $random_slider_id; ?>">
		<div class="page-builder__featured-content-slider__background-image-slider" id="<?= $random_slider_id; ?>-bg">
	    	<?php foreach ($slides as $slide) :
				$slide_image = $slide['pb_featured_content_slider__slides_rp__image'];
					$slide_image_url = $slide_image['url'];
				    $slide_image_alt = $slide_image['alt'];
				    $slide_image_size = $slide_image['sizes']['large']; ?>
				<div class="page-builder__featured-content-slider__background-image-slider-item bg-img" style="background-image:url(<?= $slide_image_url; ?>);"></div>
			<?php endforeach; ?>
		</div>
		<div class="page-builder__featured-content-slider__slider-overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row justify-content-center justify-content-lg-start">
							<div class="col-11 col-lg-8 col-xl-6">
							    <div class="page-builder__featured-content-slider__slider" id="<?= $random_slider_id; ?>-content">
							    	<?php foreach ($slides as $slide) :
										$slide_service = $slide['pb_featured_content_slider__slides_rp__service'];
										$slide_buttons = $slide['pb_featured_content_slider__slides_rp__btns_rp'];
										?>
					    				<div class="page-builder__featured-content-slider__slider-item">
					    					<div class="page-builder__featured-content-slider__slider-item-content the-content">
						    					<?= wp_kses_post($slide_service);
						    					
	    										if(isset($slide_buttons)) : ?>
	    					    	    		    <div class="page-builder__featured-content-slider__slider-item-content-buttons">
	    					    	    		    	<?php foreach ($slide_buttons as $slide_button) {
	    					    	    	    			$slide_button_label = $slide_button['pb_featured_content_slider__slides_rp__btns_rp__btn_label'];
	    					    	    	    			$slide_button_destination = $slide_button['pb_featured_content_slider__slides_rp__btns_rp__btn_destination'];
	    					    	    	    			echo '<p class="button"><a href="'.esc_url($slide_button_destination).'">'.esc_html($slide_button_label).'</a></p>';
	    					    	    		    	} ?>
	    					    	    		    </div>
	    							    		<?php endif; ?>
						    					
						    					
						    				</div>
					    				</div>
						    		<?php endforeach; ?>
							    </div>
							    <div class="page-builder__featured-content-slider__slider-arrows" id="<?= $random_slider_id; ?>-arrows"></div>
					    	</div>
					    </div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
</section>
