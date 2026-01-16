<?php
	get_header();
	
	$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	
	$main_class = 'product-range';
	if(have_rows('prod_range_content_blocks',$category)) {
		$main_class .= ' product-range--page-builder';
	}
?>
	<main class="<?= esc_attr($main_class); ?>">
		<?php get_template_part('template-parts/templates/product-range/range-heading'); ?>
		
		<?php 
		if(have_rows('prod_range_content_blocks',$category)) :
			while(have_rows('prod_range_content_blocks',$category)): the_row();
				if(get_row_layout() == 'pr_cb__prod_ranges') { get_template_part('template-parts/templates/product-range/content-blocks/product-ranges'); }
				if(get_row_layout() == 'pr_cb__products') { get_template_part('template-parts/templates/product-range/content-blocks/products'); }
				if(get_row_layout() == 'pr_cb__article') { get_template_part('template-parts/templates/product-range/content-blocks/article'); }
				if(get_row_layout() == 'pr_cb__text_block_image') { get_template_part('template-parts/templates/product-range/content-blocks/text-block-image'); }
				if(get_row_layout() == 'pr_cb__comparison') { get_template_part('template-parts/templates/product-range/content-blocks/comparison'); }
				if(get_row_layout() == 'pr_cb__usps') { get_template_part('template-parts/templates/product-range/content-blocks/usps'); }
				if(get_row_layout() == 'pr_cb__usps_rollover') { get_template_part('template-parts/templates/product-range/content-blocks/usps-rollover'); }
				if(get_row_layout() == 'pr_cb__usps_rollover_sq') { get_template_part('template-parts/templates/product-range/content-blocks/usps-rollover-square'); }
				if(get_row_layout() == 'pr_cb__services') { get_template_part('template-parts/templates/product-range/content-blocks/services'); }
				if(get_row_layout() == 'pr_cb__testimonials') { get_template_part('template-parts/templates/product-range/content-blocks/testimonials'); }
				if(get_row_layout() == 'pr_cb__faqs') { get_template_part('template-parts/templates/product-range/content-blocks/faqs'); }
				if(get_row_layout() == 'pr_cb__resources') { get_template_part('template-parts/templates/product-range/content-blocks/resources'); }
				if(get_row_layout() == 'pr_cb__companies') { get_template_part('template-parts/templates/product-range/content-blocks/companies'); }
				if(get_row_layout() == 'pr_cb__merchants') { get_template_part('template-parts/templates/product-range/content-blocks/merchants'); }
			endwhile;
		else :
			get_template_part('template-parts/templates/product-range/description');
			get_template_part('template-parts/templates/product-range/categories');
			get_template_part('template-parts/templates/product-range/products');
			get_template_part('template-parts/templates/product-range/description-lower');
			get_template_part('template-parts/templates/product-range/resources');
			get_template_part('template-parts/templates/product-range/companies');
			get_template_part('template-parts/templates/product-range/merchants');
			get_template_part('template-parts/templates/product-range/faqs');
		endif; ?>
	</main>
<?php get_footer(); ?>
