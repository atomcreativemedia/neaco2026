<?php get_header(); ?>
	<main class="career-post">
		<?php get_template_part('template-parts/sections/page-heading');
		
		get_template_part('template-parts/templates/career-post/content');
		
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		} ?>
	</main>
<?php get_footer(); ?>