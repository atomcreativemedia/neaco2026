<div class="footer__main">
	<div class="container-fluid container-lg">
		<?php 
			$colClass = 'col-12 col-md-4';
			$rowClass = 'row mb-md-5';
			if(is_singular( 'landing-pages' )) {
				$colClass = 'col-12 col-md-12';
				$rowClass = 'row';
			}
		?>
		<div class="<?= $rowClass; ?>">
			<div class="<?= $colClass; ?>">
				<div class="footer__main--section-1">
					<div class="row">
						<div class="col-12">
							<div class="footer__main__logo-container mb-3 mb-md-5">
								<?php
								if(get_field('footer_logo','option')) :
									$footer_logo = get_field('footer_logo','option');
									// vars
									$footer_logo_url = $footer_logo['url'];
									$footer_logo_alt = $footer_logo['alt'];
									$footer_logo_title = $footer_logo['title'];
								?>
								<?php if(!is_singular( 'landing-pages' )) : ?><a href="<?php echo home_url(); ?>"><?php endif; ?><img
									src="<?php echo $footer_logo_url; ?>"
									alt="<?php echo $footer_logo_alt; ?>"
									title="<?php echo $footer_logo_title; ?>"
									class="img-fluid footer__main__logo"><?php if(!is_singular( 'landing-pages' )) : ?></a><?php endif; ?>
								<?php else : ?>
								<a class="footer__main__sitename" href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							</div>
							<div class="footer__main__contact">
								<div class="footer__main__contact mb-3">
									<span class="footer__main__contact-item"><a href="tel:<?php the_field('contact_number','option') ?>"><?php the_field('primary_contact_number_icon','option') ?><?php the_field('contact_number','option') ?></a></span>
								</div>
								<div class="footer__main__contact mb-3">
									<span class="footer__main__contact-item"><a href="mailto:<?php the_field('email_address','option') ?>" target="_blank"><?php the_field('primary_email_address_icon','option') ?></i><?php the_field('email_address','option') ?></a></span>
								</div>
								<div class="footer__main__contact">
									<span class="footer__main__contact-item"><a href="<?php the_field('link_to_maps','option') ?>" target="_blank"><i class="fa-light fa-map-marker-alt"></i><?php if(get_field('address_line_1','option')) : the_field('address_line_1','option');  ?>, <?php endif; ?><?php if(get_field('address_line_2','option')) : the_field('address_line_2','option');  ?>, <?php endif; ?><?php if(get_field('town_city','option')) : the_field('town_city','option');  ?>, <?php endif; ?><?php if(get_field('county','option')) : the_field('county','option');  ?>, <?php endif; ?><?php if(get_field('postcode','option')) : the_field('postcode','option');  ?><?php endif; ?>
										</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if(!is_singular( 'landing-pages' )) : ?>
			<div class="col-12 col-md-8">
				<div class="row">
					<div class="col-12 col-xl-6">
						<div class="footer__main--section-2">
							<div class="row">
								<div class="col-6">
									<div class="footer__main__menu">
										<?php get_template_part('template-parts/global/footer/footer-product-menu--1'); ?>
									</div>
								</div>
								<div class="col-6">
									<div class="footer__main__menu">
										<?php get_template_part('template-parts/global/footer/footer-product-menu--2'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="footer__main__menu footer__main--section-3">
							<div class="row">
								<div class="col-6">
									<div class="footer__main__menu">
										<?php get_template_part('template-parts/global/footer/footer-product-menu--3'); ?>
									</div>
								</div>
								<div class="col-6">
									<div class="footer__main__menu">
										<?php get_template_part('template-parts/global/footer/footer-product-menu--4'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
				
			
			
			
			
			<?php endif; ?>
		</div>
		<?php if(!is_singular( 'landing-pages' )) : ?>
		<div class="row">
			<div class="col-12 col-md-5">
				<div class="footer__main--section-4">
					<div class="row">
						<div class="col-12">
							<div class="footer__main__menu footer__main__menu--inline mb-3">
								<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
							</div>
							<div class="footer__main__item">
								<div class="login-click">
									<?php if (is_user_logged_in()) {
										$login_icon = 'fa-user-unlock';
									} else {
										$login_icon = 'fa-user-lock';
									} ?>
									<span class="footer__main__contact-item footer__main__contact-item--smol"><i class="fa-light <?= $login_icon; ?>"></i>Architect’s Lounge</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-7">
				<div class="footer__main--section-5">
					<div class="row">
						<div class="col-12 text-md-end">
							<div class="footer__main__menu footer__main__menu--inline">
								<?php wp_nav_menu( array( 'theme_location' => 'terms-menu' ) ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>