<?php
$main_article_section_id = get_field('main_article_section_id') ?: 'main-article';

$post_type_class = (get_post_type() == 'post') ? 'post-type-post' : 'post-type-page';

if (get_post_type() == 'post') {
    $main_article_content_alignment_mobile = 'start';
    $main_article_content_alignment_desktop = 'start';
}  else {
	$main_article_content_alignment_mobile = get_field('main_article_content_alignment_mobile') ?: 'center';
	$main_article_content_alignment_desktop = get_field('main_article_content_alignment_desktop') ?: 'start';
}

$main_article_section_classes = 'main-article';
$main_article_section_classes .= ' main-article--' . esc_attr($post_type_class);
$main_article_section_classes .= ' text-' . esc_attr($main_article_content_alignment_mobile);
$main_article_section_classes .= ' text-md-' . esc_attr($main_article_content_alignment_desktop);
?>
<section class="<?= esc_attr(trim($main_article_section_classes)); ?>" id="<?= $main_article_section_id; ?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 col-xl-10">
				<article>
					<?php the_content(); ?>
					
					<?php if(get_field('main_article_display_button')) : ?>
					<p class="button <?php the_field('main_article_button_colour'); ?>"><a href="<?php the_field('main_article_button_destination'); ?>"><?php the_field('main_article_button_text'); ?></a></p>
					<?php endif; ?>
				</article>
			</div>
		</div>
	</div>
</section>