<?php get_header();
/* Template Name: Careers */ ?>

<main class="careers">
	<?php get_template_part('template-parts/sections/page-heading');
	
	if(get_field('main_article_display_main_article')) {
		get_template_part('template-parts/sections/main-article');
	}
	
	get_template_part('template-parts/templates/careers/main');
	
	if (get_field('display_newsletter_section')) {
		get_template_part('template-parts/global/newsletter-section');
	} ?>
</main>
<?php get_footer(); ?>