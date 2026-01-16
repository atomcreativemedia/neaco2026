<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

$section_id = get_sub_field('pr_cb__prod_ranges__section_id') ?: 'faqs';
if(get_sub_field('pr_cb__faqs__introduction', $category)) {
	$intro = get_sub_field('pr_cb__faqs__introduction', $category);
}
if(get_sub_field('pr_cb__faqs__faqs_rp', $category)) {
	$faqs = get_sub_field('pr_cb__faqs__faqs_rp', $category);
}
?>
<section class="product-range__faqs" id="<?= esc_attr($section_id); ?>">
	<?php if(isset($faqs)) : ?>
	<div class="container-fluid">
		<?php if(isset($intro)) : ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="product-range__faqs__intro">
					<?= wp_kses_post($intro); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="product-range__faqs__faqs">
					<?php foreach ($faqs as $faq ) : ?>
					<div class="product-range__faqs__faq faq">
						<div class="product-range__faqs__faq-q faq-q">
							<span><?= esc_html($faq['pr_cb__faqs__faqs_rp__question']); ?></span>
							<div class="plus-minus-toggle"></div>
						</div>
						<div class="product-range__faqs__faq-a faq-a active">
							<?= wp_kses_post($faq['pr_cb__faqs__faqs_rp__answer']); ?>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>