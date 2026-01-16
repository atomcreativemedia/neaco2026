<?php
if(get_sub_field('pb_options_showcase__section_id')) {
	$pb_options_showcase__section_id = get_sub_field('pb_options_showcase__section_id');
} else {
	$pb_options_showcase__section_id = '';
}
$introduction_content = get_sub_field('pb_options_showcase__introduction') ?: '';
if(get_sub_field('pb_options_showcase__products_rp')) {
	$products = get_sub_field('pb_options_showcase__products_rp');
}
?>
<section class="page-builder__options-showcase" id="<?= esc_attr($pb_options_showcase__section_id); ?>">
	<div class="container">
		<?php if ($introduction_content): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-12 text-start">
				<div class="page-builder__options-showcase__intro">
					<?= wp_kses_post($introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($products)) : ?>
	    <div class="row justify-content-center">
	    	<div class="col-11 col-md-12">
	    		<div class="page-builder__options-showcase__products">
	    			<div class="row justify-content-center gy-5">
				    	<?php foreach ($products as $product) :
			    			$product_image = $product['pb_options_showcase__products_rp__product_image'] ?: '';
								$image_url = $product_image['url']; // Full-size image URL
						        $image_alt = $product_image['alt']; // Alt text
						        $image_size = $product_image['sizes']['large'];
			    			
			    			$product_name = $product['pb_options_showcase__products_rp__product_name'] ?: '';
			    			$product_desc = $product['pb_options_showcase__products_rp__product_description'] ?: '';
			    			$product_link = $product['pb_options_showcase__products_rp__item_link'] ?: '';
			    			
			    			if ($product_name) {
			    			    $name_output = $product_link 
			    			        ? '<a href="' . esc_url($product_link) . '">' . esc_html($product_name) . '</a>' 
			    			        : esc_html($product_name);
			    			} ?>
			    		<div class="col-12 col-md-6">
					    	<div class="page-builder__options-showcase__product">
						    	<div class="page-builder__options-showcase__product-heading">
						    		<div class="page-builder__options-showcase__product-name">
						    			<h3><?= $name_output; ?></h3>
						    		</div>
						    		<img src="<?= esc_url($image_size); ?>" alt="<?= esc_attr($image_alt); ?>" class="page-builder__options-showcase__product-image">
						    	</div>
						    	<div class="page-builder__options-showcase__product-description">
					    			<?= wp_kses_post($product_desc); ?>
						    	</div>
			    			</div>
			    		</div>
				    	<?php endforeach; ?>
		    		</div>
	    		</div>
		    </div>
	    </div>
		<?php endif; ?>
	</div>
</section>