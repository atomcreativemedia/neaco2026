<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

$section_id = get_sub_field('pr_cb__prod_ranges__section_id') ?: 'services';

if(get_sub_field('pr_cb__services__introduction', $category)) {
	$intro = get_sub_field('pr_cb__services__introduction', $category);
}
if(get_sub_field('pr_cb__services__bg_image', $category)) {
	$bg_img = get_sub_field('pr_cb__services__bg_image', $category);
	
	$bg_image_url = $bg_img['url']; // Full-size image URL
    $bg_image_alt = $bg_img['alt']; // Alt text
    $bg_image_size = $bg_img['sizes']['large'];
	
}
if(get_sub_field('pr_cb__services__services_rp', $category)) {
	$services = get_sub_field('pr_cb__services__services_rp', $category);
}
if(get_sub_field('pr_cb__services__buttons_rp', $category)) {
	$services_buttons = get_sub_field('pr_cb__services__buttons_rp', $category);
}
?>
<section class="product-range__services" id="<?= esc_attr($section_id); ?>">
	
	<?php if(get_sub_field('pr_cb__services__introduction') || isset($services_buttons)) : ?>
	<div class="container-fluid">
		<div class="row justify-content-start justify-content-md-center">
			<div class="col-10">
				<div class="row justify-content-start">
					<div class="col-12 col-lg-10 col-xl-8 col-xxl-6 mb-5">
						<div class="product-range__services__intro">
							<?php if(get_sub_field('pr_cb__services__introduction')) {
								echo wp_kses_post(get_sub_field('pr_cb__services__introduction'));
							}
							if(isset($services_buttons)) : ?>
		    	    		    <div class="product-range__services__buttons">
		    	    		    	<?php foreach ($services_buttons as $button) {
		    	    	    			$label = $button['pr_cb__services__buttons_rp__button_label'];
		    	    	    			$destination = $button['pr_cb__services__buttons_rp__button_destination'];
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
	
	<?php if(isset($services)) : ?>
	<div class="product-range__services__slider-container">
		<div class="product-range__services__background-image-slider">
	    	<?php foreach ($services as $service) :
				$service_image = $service['pr_cb__services__services_rp__image'];
					$service_image_url = $service_image['url']; // Full-size image URL
				    $service_image_alt = $service_image['alt']; // Alt text
				    $service_image_size = $service_image['sizes']['large']; ?>
				<div class="product-range__services__background-image-slider-item bg-img" style="background-image:url(<?= $service_image_url; ?>);"></div>
			<?php endforeach; ?>
		</div>
		<div class="product-range__services__slider-overlay">
			<div class="container-fluid">
				<div class="row justify-content-start justify-content-md-center">
					<div class="col-10">
						<div class="row justify-content-start">
							<div class="col-12 col-lg-10 col-xl-8 col-xxl-6">
							    <div class="product-range__services__slider">
							    	<?php foreach ($services as $service) :
										$service_service = $service['pr_cb__services__services_rp__service']; ?>
					    				<div class="product-range__services__slider-item">
					    					<div class="product-range__services__slider-item-content the-content">
						    					<?= wp_kses_post($service_service); ?>
						    				</div>
					    				</div>
						    		<?php endforeach; ?>
							    </div>
							    <div class="product-range__services__slider-arrows"></div>
					    	</div>
					    </div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
</section>
