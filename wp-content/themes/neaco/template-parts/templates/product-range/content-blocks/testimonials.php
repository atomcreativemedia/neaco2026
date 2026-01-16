<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

if(get_sub_field('pr_cb__testimonials_section_id', $category)) {
	$section_id = get_sub_field('pr_cb__testimonials_section_id', $category);
}

$introduction = get_sub_field('pr_cb__testimonials_introduction', $category) ?: '';

if(get_sub_field('pr_cb__testimonials_testimonials_rp', $category)) {
	$testimonials = get_sub_field('pr_cb__testimonials_testimonials_rp', $category);
}
?>
<section class="product-range__testimonials" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<?php if ($introduction): ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center">
				<div class="product-range__testimonials__intro">
					<div class="product-range__testimonials__intro-stars"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
					<?= wp_kses_post($introduction); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($testimonials)) : ?>
	    <div class="row justify-content-center">
	    	<div class="col-8 py-5 mb-5">
	    		<div class="product-range__testimonials__testimonials-slider">
			    	<?php foreach ($testimonials as $testimonial) :
		    			$text = $testimonial['pr_cb__testimonials_testimonials_rp_text'] ?: ''; 
		    			$source = $testimonial['pr_cb__testimonials_testimonials_rp_source'] ?: ''; ?>
			    		<div class="product-range__testimonials__testimonials-slider-item text-center">
			    			<p><?= esc_html($text); ?></p>
			    			<p><strong><?= esc_html($source); ?></strong></p>
			    		</div>
			    	<?php endforeach; ?>
	    		</div>
		    </div>
		    <div class="col-8">
			    <div class="product-range__testimonials__slider-arrows"></div>
		    </div>
	    </div>
		<?php endif; ?>
	</div>
</section>