<?php get_header(); ?>
	<main class="front-page">
		<?php get_template_part('template-parts/sections/page-heading'); ?>
		
		<?php
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		
		if (get_field('display_featured_content')) {
			get_template_part('template-parts/templates/front-page/featured-content');
		}
		
		if (get_field('display_quick_links')) {
			get_template_part('template-parts/templates/front-page/quick-links');
		}
		
		if (get_field('display_mission_statement')) {
			get_template_part('template-parts/templates/front-page/mission-statement');
		}
		
		if (get_field('display_featured_content_lower')) {
			get_template_part('template-parts/templates/front-page/featured-content-lower');
		}
		
		if (get_field('display_why_choose_us')) {
			get_template_part('template-parts/templates/front-page/why-choose-us');
		}
		
		if (get_field('display_companies')) {
			get_template_part('template-parts/templates/front-page/companies');
		}
		
		if (get_field('display_quick_links_lower')) {
			get_template_part('template-parts/templates/front-page/quick-links-lower');
		}
		
		if (get_field('display_accreditations')) {
			get_template_part('template-parts/templates/front-page/accreditations');
		}
		
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		}
		
		?>
	</main>
<?php get_footer(); ?>