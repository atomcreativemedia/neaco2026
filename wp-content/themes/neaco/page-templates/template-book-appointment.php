<?php get_header();
/* Template Name: Book Appointment */ ?>

<main class="book-appointment">
	<?php if (is_user_logged_in()) {
		get_template_part('template-parts/sections/page-heading');
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		get_template_part('template-parts/templates/book-appointment/main');
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		}
	} else {
		get_template_part('template-parts/global/user-login-form');
	} ?>
</main>
<?php get_footer(); ?>