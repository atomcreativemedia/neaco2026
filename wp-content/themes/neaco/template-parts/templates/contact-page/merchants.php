<?php
if( have_rows('contact_merchants_repeater') ) :
?>
	<section class="contact-page__merchants">
		<?php if (get_field('contact_merchants_intro')): ?>
		<div class="container">
			<div class="row justify-content-center justify-content-md-center">
				<div class="col-11 col-md-6">
					<div class="contact-page__merchants__intro text-center">
						<?php the_field('contact_merchants_intro') ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php $merchants = get_field( 'contact_merchants_repeater' );
			if ( is_array( $merchants ) ) : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="contact-page__merchants__merchants">
						<div class="row justify-content-center">
							<?php foreach ($merchants as $merchant ) : ?>
							<div class="col-10 col-md-6">
								<p class="contact-page__merchants__merchant-item">
									<?php if ($merchant['contact_merchants_repeater_heading']) : ?><span class="contact-page__merchants__merchant-heading"><strong><?php echo $merchant['contact_merchants_repeater_heading']; ?></strong></span><br><?php endif; ?>
									<?php if ($merchant['contact_merchants_repeater_business_name']) : ?><span class="contact-page__merchants__merchant-bname"><strong><?php echo $merchant['contact_merchants_repeater_business_name']; ?></strong></span><br><?php endif; ?>
									<?php if ($merchant['contact_merchants_repeater_logo']) : ?><?php if ($merchant['contact_merchants_repeater_website']) : ?><a href="<?php echo $merchant['contact_merchants_repeater_website']; ?>" target="_blank" class="contact-page__merchants__item-logo-link"><?php endif; ?><img src="<?php echo $merchant['contact_merchants_repeater_logo']; ?>" class="contact-page__merchants__item-logo img-fluid"><?php if ($merchant['contact_merchants_repeater_website']) : ?></a><?php endif; ?><br><?php endif; ?>
									<?php if ($merchant['contact_merchants_repeater_contact_name']) : ?><span class="contact-page__merchants__merchant-cname"><strong><i class="fa-solid fa-user"></i> <?php echo $merchant['contact_merchants_repeater_contact_name']; ?></strong></span><br><?php endif; ?>
									<?php if ($merchant['contact_merchants_repeater_phone']) : ?><span class="contact-page__merchants__merchant-phone"><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $merchant['contact_merchants_repeater_phone']; ?>" target="_blank"><?php echo $merchant['contact_merchants_repeater_phone']; ?></a></span><br><?php endif; ?>
									<?php if ($merchant['contact_merchants_repeater_email']) : ?><span class="contact-page__merchants__merchant-email"><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $merchant['contact_merchants_repeater_email']; ?>" target="_blank"><?php echo $merchant['contact_merchants_repeater_email']; ?></a></span><br><?php endif; ?>
									<?php if ($merchant['contact_merchants_repeater_website']) : ?><span class="contact-page__merchants__merchant-website"><i class="fa-solid fa-globe-pointer"></i> <a href="<?php echo $merchant['contact_merchants_repeater_website']; ?>" target="_blank"><?php echo $merchant['contact_merchants_repeater_website']; ?></a></span><br><?php endif; ?>
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