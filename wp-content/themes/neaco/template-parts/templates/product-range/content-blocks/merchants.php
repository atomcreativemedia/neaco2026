<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$section_id = get_sub_field('pr_cb__merchants__section_id') ?: 'merchants';
if(get_sub_field('pr_cb__merchants__introduction', $category)) {
	$intro = get_sub_field('pr_cb__merchants__introduction', $category);
}
if(get_sub_field('pr_cb__merchants__merchants_rp', $category)) {
	$merchants = get_sub_field('pr_cb__merchants__merchants_rp', $category);
}
?>
<section class="product-range__merchants" id="<?= esc_attr($section_id); ?>">
	<div class="container">
		<?php if(isset($intro)) : ?>
		<div class="row justify-content-center justify-content-md-center">
			<div class="col-12 col-md-10">
				<div class="product-range__merchants__intro text-center">
					<?= wp_kses_post($intro); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($merchants)) : ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="product-range__merchants__merchants">
					<div class="row justify-content-center">
						<?php foreach ($merchants as $merchant ) : ?>
						<div class="col-12 col-md-8 col-lg-6">
							<p class="product-range__merchants__merchant-item">
								<?php if ($merchant['pr_cb__merchants__merchants_rp__heading']) : ?><span class="product-range__merchants__merchant-heading"><strong><?= esc_html($merchant['pr_cb__merchants__merchants_rp__heading']); ?></strong></span><br><?php endif; ?>
								<?php if ($merchant['pr_cb__merchants__merchants_rp__business_name']) : ?><span class="product-range__merchants__merchant-bname"><strong><?php echo $merchant['pr_cb__merchants__merchants_rp__business_name']; ?></strong></span><br><?php endif; ?>
								<?php if ($merchant['pr_cb__merchants__merchants_rp__logo']) : ?><?php if ($merchant['pr_cb__merchants__merchants_rp__website']) : ?><a href="<?php echo $merchant['pr_cb__merchants__merchants_rp__website']; ?>" target="_blank" class="product-range__merchants__item-logo-link"><?php endif; ?><img src="<?php echo $merchant['pr_cb__merchants__merchants_rp__logo']; ?>" class="product-range__merchants__item-logo img-fluid"><?php if ($merchant['pr_cb__merchants__merchants_rp__website']) : ?></a><?php endif; ?><br><?php endif; ?>
								<?php if ($merchant['pr_cb__merchants__merchants_rp__contact_name']) : ?><span class="product-range__merchants__merchant-cname"><strong><i class="fa-solid fa-user"></i> <?php echo $merchant['pr_cb__merchants__merchants_rp__contact_name']; ?></strong></span><br><?php endif; ?>
								<?php if ($merchant['pr_cb__merchants__merchants_rp__phone']) : ?><span class="product-range__merchants__merchant-phone"><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $merchant['pr_cb__merchants__merchants_rp__phone']; ?>" target="_blank"><?php echo $merchant['pr_cb__merchants__merchants_rp__phone']; ?></a></span><br><?php endif; ?>
								<?php if ($merchant['pr_cb__merchants__merchants_rp__email']) : ?><span class="product-range__merchants__merchant-email"><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $merchant['pr_cb__merchants__merchants_rp__email']; ?>" target="_blank"><?php echo $merchant['pr_cb__merchants__merchants_rp__email']; ?></a></span><br><?php endif; ?>
								<?php if ($merchant['pr_cb__merchants__merchants_rp__website']) : ?><span class="product-range__merchants__merchant-website"><i class="fa-solid fa-globe-pointer"></i> <a href="<?php echo $merchant['pr_cb__merchants__merchants_rp__website']; ?>" target="_blank"><?php echo $merchant['pr_cb__merchants__merchants_rp__website']; ?></a></span><br><?php endif; ?>
							</p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>