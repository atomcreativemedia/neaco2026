<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$section_id = get_sub_field('pr_cb__comparison__section_id', $category) ?: 'comparison';
if(get_sub_field('pr_cb__comparison__section_heading', $category)) {
	$section_heading = get_sub_field('pr_cb__comparison__section_heading', $category);
}
if(get_sub_field('pr_cb__comparison__compare_a_heading', $category)) {
	$compare_a_heading = get_sub_field('pr_cb__comparison__compare_a_heading', $category);
}
if(get_sub_field('pr_cb__comparison__compare_a_text', $category)) {
	$compare_a_text = get_sub_field('pr_cb__comparison__compare_a_text', $category);
}
if(get_sub_field('pr_cb__comparison__compare_b_heading', $category)) {
	$compare_b_heading = get_sub_field('pr_cb__comparison__compare_b_heading', $category);
}
if(get_sub_field('pr_cb__comparison__compare_b_text', $category)) {
	$compare_b_text = get_sub_field('pr_cb__comparison__compare_b_text', $category);
}
if(get_sub_field('pr_cb__comparison__products_rp', $category)) {
	$comparison_products = get_sub_field('pr_cb__comparison__products_rp', $category);
}
if(get_sub_field('pr_cb__comparison__buttons_rp', $category)) {
	$comparison_buttons = get_sub_field('pr_cb__comparison__buttons_rp', $category);
}
?>
<section class="product-range__comparison" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<?php if(isset($section_heading)) : ?>
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="product-range__comparison__heading">
					<h2><?= wp_kses_post($section_heading); ?></h2>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-5 text-center text-lg-end">
						<div class="product-range__comparison__compare product-range__comparison__compare--a">
							<?php if(isset($compare_a_heading)) {
								echo '<h2>'.wp_kses_post($compare_a_heading).'</h2>';
							} if(isset($compare_a_text)) {
								echo '<p>'.esc_html($compare_a_text).'</p>';
							} ?>
						</div>
					</div>
					<div class="col-12 col-lg-2 text-center">
						<div class="product-range__comparison__compare-vs">
							<div class="product-range__comparison__compare-vs-pill">
								<span>VS</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-5 text-center text-lg-start">
						<div class="product-range__comparison__compare product-range__comparison__compare--b">
							<?php if(isset($compare_b_heading)) {
								echo '<h2>'.wp_kses_post($compare_b_heading).'</h2>';
							} if(isset($compare_b_text)) {
								echo '<p>'.esc_html($compare_b_text).'</p>';
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php if(isset($comparison_products)) : ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
			    <div class="product-range__comparison__products">
			    	<div class="row justify-content-center gy-4">
    			    	<?php foreach ($comparison_products as $product) :
    			    		if(isset($product['pr_cb__comparison__products_rp__product_image'])) {
								$product_image = $product['pr_cb__comparison__products_rp__product_image'];
								$image_url = $product_image['url']; // Full-size image URL
						        $image_alt = $product_image['alt']; // Alt text
						        $image_size = $product_image['sizes']['medium'];
							}
    		    			if(isset($product['pr_cb__comparison__products_rp__product_name'])) {
								$product_name = $product['pr_cb__comparison__products_rp__product_name'];
							}
    		    			if(isset($product['pr_cb__comparison__products_rp__product_description'])) {
								$product_desc = $product['pr_cb__comparison__products_rp__product_description'];
							}
    		    			if(isset($product['pr_cb__comparison__products_rp__item_link'])) {
								$item_link = $product['pr_cb__comparison__products_rp__item_link'];
							} ?>
    		    			<div class="col-12 col-md-6 col-lg-4">
    		    				<div class="product-range__comparison__product">
    		    					
    		    					<?php if($item_link !== '') : ?><a href="<?= esc_url($item_link); ?>"><?php endif; ?>
    		    					
    		    					<div class="product-range__comparison__product-image">
	    		    					<?php if(isset($image_url)) {
											echo '<img src="'.esc_url($image_size).'" alt="'.esc_url($image_alt).'">';
										} ?>
    		    					</div>
    		    					<div class="product-range__comparison__product-text">
	    		    					<?php if(isset($product_name)) {
											echo '<p class="product-range__comparison__product-name">'.esc_html($product_name).'</p>';
										} if(isset($product_desc)) {
											echo '<p class="product-range__comparison__product-desc">'.esc_html($product_desc).'</p>';
										} ?>
    		    					</div>
    		    					
    		    					<?php if($item_link !== '') : ?></a><?php endif; ?>
    		    					
    		    				</div>
    		    			</div>
    		    		<?php endforeach; ?>
			    	</div>
			    </div>
	    	</div>
	    </div>
		<?php endif; ?>
		
		<?php if(isset($comparison_buttons)) : ?>
		<div class="row justify-content-center">
			<div class="col-12 text-center">
			    <div class="product-range__comparison__buttons">
			    	<?php foreach ($comparison_buttons as $button) {
		    			$label = $button['pr_cb__comparison__buttons_rp__button_label'];
		    			$destination = $button['pr_cb__comparison__buttons_rp__button_destination'];
		    			echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
			    	} ?>
			    </div>
	    	</div>
	    </div>
		<?php endif; ?>
	</div>
</section>