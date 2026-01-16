<section class="menu-drawer">
	<div class="menu-drawer__layer-1">
		<div class="menu-drawer__main-container">
			<div class="menu-drawer__header d-flex justify-content-between align-items-center">
				<div class="menu-drawer__logo-container me-5">
					<?php
					if(get_field('menu_drawer_logo','option')) :
						$menu_drawer_logo = get_field('menu_drawer_logo','option');
						// vars
						$menu_drawer_logo_url = $menu_drawer_logo['url'];
						$menu_drawer_logo_alt = $menu_drawer_logo['alt'];
						$menu_drawer_logo_title = $menu_drawer_logo['title'];
					?>
					<a href="<?php echo home_url(); ?>"><img
						src="<?php echo $menu_drawer_logo_url; ?>"
						alt="<?php echo $menu_drawer_logo_alt; ?>"
						title="<?php echo $menu_drawer_logo_title; ?>"
						class="img-fluid menu-drawer__logo"></a>
					<?php else : ?>
					<a class="menu-drawer__sitename" href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
					<?php endif; ?>
				</div>
				<div class="menu-drawer__close close-menu ms-5">
					<span class="menu-click"><i class="fa-light fa-times"></i></span>
				</div>
			</div>
			
			<div class="menu-drawer__body">
				<?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				<?php
				wp_nav_menu([
					'theme_location' => 'main-menu',
					'walker' => new Neaco_Mega_Menu_Walker(),
					'container' => false,
				]);
				?>
			</div>
			
			<div class="menu-drawer__footer d-flex flex-column">
				<div class="menu-drawer__footer__item mb-auto">
					<span class="menu-drawer__footer__item-content"><a href="#"><i class="fa-light fa-user-unlock"></i><span class="ms-2">Architect’s Lounge</span></a></span>
				</div>
				
				<div class="menu-drawer__footer__item mb-2">
					<span class="menu-drawer__footer__item-content"><a href="tel:<?php the_field('contact_number','option') ?>"><i class="fa-light fa-phone"></i><span class="ms-2"><?php the_field('contact_number','option') ?></span></a></span>
				</div>
				<div class="menu-drawer__footer__item mb-2">
					<span class="menu-drawer__footer__item-content"><a href="mailto:<?php the_field('email_address','option') ?>" target="_blank"><i class="fa-light fa-envelope"></i><span class="ms-2"><?php the_field('email_address','option') ?></span></a></span>
				</div>
				<div class="menu-drawer__footer__item d-flex">
					<?php if( have_rows('social_media_profiles','option') ) : ?>
					<?php while( have_rows('social_media_profiles','option') ) : the_row(); ?>
					<div class="menu-drawer__footer__item--sm me-3"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('icon'); ?></a></div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>