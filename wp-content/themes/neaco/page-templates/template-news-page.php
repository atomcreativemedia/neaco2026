<?php get_header();
/* Template Name: News Page */ ?>
<main class="news-page">
	<?php
		get_template_part('template-parts/sections/page-heading');
		get_template_part('template-parts/templates/news-page/posts');
	?>
</main>
<?php get_footer(); ?>