<?php get_header();
/* Template Name: Account Register */ ?>

<main class="account-register">
	<?php if (!is_user_logged_in()) {
		get_template_part('template-parts/sections/page-heading');
		
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		
		get_template_part('template-parts/templates/account-register/main');
		
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		}
	} else {
		wp_redirect('/my-account/'); exit;
	} ?>
</main>
<?php get_footer(); ?>