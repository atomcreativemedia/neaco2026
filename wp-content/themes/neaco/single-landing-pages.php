<?php get_header(); ?>
	<main class="landing-page page-builder">
		<?php get_template_part('template-parts/templates/landing-pages/landing-page-heading'); ?>
		<?php
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		
		if(have_rows('page_builder_content_blocks')) {
			get_template_part('template-parts/page-builder/page-builder');
		}
		
		get_template_part('template-parts/global/newsletter-section');
		?>
	</main>
<?php get_footer(); ?>