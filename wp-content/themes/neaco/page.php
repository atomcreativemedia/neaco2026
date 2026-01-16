<?php get_header(); ?>
	<main class="default-page">
		<?php get_template_part('template-parts/sections/page-heading'); ?>
		<?php
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		}
		?>
	</main>
<?php get_footer(); ?>