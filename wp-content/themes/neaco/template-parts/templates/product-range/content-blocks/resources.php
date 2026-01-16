<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$section_id = get_sub_field('pr_cb__prod_ranges__section_id') ?: 'resources';
if(get_sub_field('pr_cb__resources__introduction', $category)) {
	$intro = get_sub_field('pr_cb__resources__introduction', $category);
}
if(get_sub_field('pr_cb__resources__resources_rp', $category)) {
	$resources = get_sub_field('pr_cb__resources__resources_rp', $category);
}
?>
<section class="product-range__resources" id="<?= esc_attr($section_id); ?>">
	<?php if(isset($resources)) : ?>
	<div class="container">
		<?php if(isset($intro)) : ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="product-range__faqs__intro text-center">
					<?= wp_kses_post($intro); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="product-range__resources__items">
					<div class="row justify-content-center">
						<?php foreach ($resources as $resource ) : ?>
						<div class="col-6 col-lg-3 text-center">
							<div class="product-range__resources__item">
								<?php
									$resource_file = $resource['pr_cb__resources__resources_rp__resource_file'];
									if($resource['pr_cb__resources__resources_rp__resource_thumb']) {
										$resource_thumb = $resource['pr_cb__resources__resources_rp__resource_thumb'];
									} else {
										$resource_thumb = $resource['pr_cb__resources__resources_rp__resource_file'];
									}
									$resource_title = $resource['pr_cb__resources__resources_rp__resource_title'];
								?>
								<div class="product-range__resources__item-thumb bg-img" style="background-image:url(<?= esc_url($resource_thumb); ?>);">
									<a href="<?= esc_url($resource_file) ?>" class="product-range__resources__item-link" target="_blank">
										<i class="fa-duotone fa-circle-down"></i>
									</a>
								</div>
								<h4 class="product-range__resources__item-title"><a href="<?= esc_url($resource_file) ?>" target="_blank"><?= esc_html($resource_title); ?></a></h4>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>