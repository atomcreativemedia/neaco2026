<?php get_header(); ?>
	<?php $page_branding = get_field('page_branding') ?: 'default'; ?>
	<main class="product-page page-builder page-branding--<?= esc_attr($page_branding); ?>">
		<?php get_template_part('template-parts/sections/page-heading'); ?>
		<?php
		if(get_field('main_article_display_main_article')) {
			get_template_part('template-parts/sections/main-article');
		}
		
		if(have_rows('page_builder_content_blocks')) {
			get_template_part('template-parts/page-builder/page-builder');
		}
		
		if (get_field('display_newsletter_section')) {
			get_template_part('template-parts/global/newsletter-section');
		}
		?>
	</main>
<?php get_footer(); ?>