<?php get_header();
/* Template Name: Projects */ ?>
<main class="projects">
	<?php get_template_part('template-parts/sections/page-heading'); ?>
	<?php
	if(get_field('main_article_display_main_article')) {
		get_template_part('template-parts/sections/main-article');
	} ?>
	<?php get_template_part('template-parts/templates/projects/categories'); ?>
	<?php get_template_part('template-parts/templates/projects/projects'); ?>
</main>
<?php get_footer(); ?>