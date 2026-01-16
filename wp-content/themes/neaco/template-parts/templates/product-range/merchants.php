<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if( have_rows('prodcat_merchants_repeater',$category) ) :
?>
	<section class="product-range__merchants">
		<?php if (get_field('prodcat_merchants_intro',$category)): ?>
		<div class="container">
			<div class="row justify-content-center justify-content-md-center">
				<div class="col-11 col-md-6">
					<div class="product-range__merchants__intro text-center">
						<?php the_field('prodcat_merchants_intro',$category) ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php $merchants = get_field( 'prodcat_merchants_repeater',$category );
			if ( is_array( $merchants ) ) : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="product-range__merchants__merchants">
						<div class="row justify-content-center">
							<?php foreach ($merchants as $merchant ) : ?>
							<div class="col-10 col-md-6">
								<p class="product-range__merchants__merchant-item">
									<?php if ($merchant['prodcat_merchants_repeater_heading']) : ?><span class="product-range__merchants__merchant-heading"><strong><?php echo $merchant['prodcat_merchants_repeater_heading']; ?></strong></span><br><?php endif; ?>
									<?php if ($merchant['prodcat_merchants_repeater_business_name']) : ?><span class="product-range__merchants__merchant-bname"><strong><?php echo $merchant['prodcat_merchants_repeater_business_name']; ?></strong></span><br><?php endif; ?>
									<?php if ($merchant['prodcat_merchants_repeater_logo']) : ?><?php if ($merchant['prodcat_merchants_repeater_website']) : ?><a href="<?php echo $merchant['prodcat_merchants_repeater_website']; ?>" target="_blank" class="product-range__merchants__item-logo-link"><?php endif; ?><img src="<?php echo $merchant['prodcat_merchants_repeater_logo']; ?>" class="product-range__merchants__item-logo img-fluid"><?php if ($merchant['prodcat_merchants_repeater_website']) : ?></a><?php endif; ?><br><?php endif; ?>
									<?php if ($merchant['prodcat_merchants_repeater_contact_name']) : ?><span class="product-range__merchants__merchant-cname"><strong><i class="fa-solid fa-user"></i> <?php echo $merchant['prodcat_merchants_repeater_contact_name']; ?></strong></span><br><?php endif; ?>
									<?php if ($merchant['prodcat_merchants_repeater_phone']) : ?><span class="product-range__merchants__merchant-phone"><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $merchant['prodcat_merchants_repeater_phone']; ?>" target="_blank"><?php echo $merchant['prodcat_merchants_repeater_phone']; ?></a></span><br><?php endif; ?>
									<?php if ($merchant['prodcat_merchants_repeater_email']) : ?><span class="product-range__merchants__merchant-email"><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $merchant['prodcat_merchants_repeater_email']; ?>" target="_blank"><?php echo $merchant['prodcat_merchants_repeater_email']; ?></a></span><br><?php endif; ?>
									<?php if ($merchant['prodcat_merchants_repeater_website']) : ?><span class="product-range__merchants__merchant-website"><i class="fa-solid fa-globe-pointer"></i> <a href="<?php echo $merchant['prodcat_merchants_repeater_website']; ?>" target="_blank"><?php echo $merchant['prodcat_merchants_repeater_website']; ?></a></span><br><?php endif; ?>
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
<?php endif; ?>