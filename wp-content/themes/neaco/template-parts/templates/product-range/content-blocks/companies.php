<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$section_id = get_sub_field('pr_cb__prod_ranges__section_id') ?: 'companies';
if(get_sub_field('pr_cb__companies__introduction', $category)) {
	$intro = get_sub_field('pr_cb__companies__introduction', $category);
}
if(get_sub_field('pr_cb__companies__companies_rp', $category)) {
	$companies = get_sub_field('pr_cb__companies__companies_rp', $category);
}
?>
<section class="product-range__companies" id="<?= esc_attr($section_id); ?>">
	<?php if(isset($intro)) : ?>
	<div class="container-fluid">
		<div class="row justify-content-center justify-content-md-center">
			<div class="col-12 col-md-6">
				<div class="product-range__companies__intro text-center">
					<?= wp_kses_post($intro); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if(isset($companies)) : ?>
	<div class="row justify-content-center g-0">
		<div class="col col-md-12 col-lg-11 col-xxl-10">
			<div class="product-range__companies__items">
				<?php foreach ($companies as $company ) : ?>
				<div class="product-range__companies__item popIn">
					<img src="<?php echo $company['pr_cb__companies__companies_rp__logo_image']['url']; ?>" alt="<?php echo $company['pr_cb__companies__companies_rp__logo_image']['alt']; ?>" title="<?php echo $company['pr_cb__companies__companies_rp__logo_image']['title']; ?>" class="product-range__companies__item-logo img-fluid">
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>