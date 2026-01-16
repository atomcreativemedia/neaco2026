<?php get_header();
/* Template Name: Contact Page */ ?>

<main class="contact-page">
	<?php
		get_template_part('template-parts/sections/page-heading');
		
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		
		get_template_part('template-parts/templates/contact-page/main');
		
		if(get_field('display_map')) {
			get_template_part('template-parts/templates/contact-page/map');
		}
		
		if( have_rows('contact_merchants_repeater') ) {
			get_template_part('template-parts/templates/contact-page/merchants');
		}
		
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		} ?>
</main>
<?php get_footer(); ?>