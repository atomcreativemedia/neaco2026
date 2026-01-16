<?php
$current_user = wp_get_current_user();
if( ! $current_user->user_firstname ) {
	$user_name = $current_user->user_login;
} else {
	$user_name = $current_user->user_firstname;
}
?>
<section class="login-drawer">
	<div class="login-drawer__layer-1">
		<div class="login-drawer__main-container">
			<div class="login-drawer__header d-flex justify-content-between align-items-center">
				<div class="login-drawer__logo-container me-5">
					<?php
					if(get_field('member_drawer_logo','option')) :
						$member_drawer_logo = get_field('member_drawer_logo','option');
						// vars
						$member_drawer_logo_url = $member_drawer_logo['url'];
						$member_drawer_logo_alt = $member_drawer_logo['alt'];
						$member_drawer_logo_title = $member_drawer_logo['title'];
					?>
					<a href="<?php echo home_url(); ?>"><img
						src="<?php echo $member_drawer_logo_url; ?>"
						alt="<?php echo $member_drawer_logo_alt; ?>"
						title="<?php echo $member_drawer_logo_title; ?>"
						class="img-fluid login-drawer__logo"></a>
					<?php else : ?>
					<a class="login-drawer__sitename" href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
					<?php endif; ?>
				</div>
				<div class="login-drawer__close close-login ms-5">
					<span class="login-click"><i class="fa-light fa-times"></i></span>
				</div>
			</div>
			
			<div class="login-drawer__body">
				<?php if (is_user_logged_in()) : ?>
					<h6>Welcome, <?= $user_name; ?>!</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'membership-menu' ) ); ?>
				<?php else : ?>
					<h6>Log into your account</h6>
					<?php echo do_shortcode('[custom_login_form]'); ?>
					<p><a href="<?php the_field('account_registration_page','option'); ?>">Don't have an account?</a></p>
				<?php endif; ?>
			</div>
			
			<div class="login-drawer__footer d-flex flex-column">
				<?php if (is_user_logged_in()) : ?>
				<div class="login-drawer__footer__item mb-auto">
					<span class="login-drawer__footer__item-content"><a href="<?php echo wp_logout_url(get_permalink()); ?>"><i class="fa-light fa-arrow-right-from-bracket"></i><span class="ms-2">Logout</span></a></span>
				</div>
				<?php endif; ?>
				<div class="login-drawer__footer__item mb-2">
					<span class="login-drawer__footer__item-content"><a href="tel:<?php the_field('contact_number','option') ?>"><i class="fa-light fa-phone"></i><span class="ms-2"><?php the_field('contact_number','option') ?></span></a></span>
				</div>
				<div class="login-drawer__footer__item mb-2">
					<span class="login-drawer__footer__item-content"><a href="mailto:<?php the_field('email_address','option') ?>" target="_blank"><i class="fa-light fa-envelope"></i><span class="ms-2"><?php the_field('email_address','option') ?></span></a></span>
				</div>
				<div class="login-drawer__footer__item d-flex">
					<?php if( have_rows('social_media_profiles','option') ) : ?>
					<?php while( have_rows('social_media_profiles','option') ) : the_row(); ?>
					<div class="login-drawer__footer__item--sm me-3"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('icon'); ?></a></div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>