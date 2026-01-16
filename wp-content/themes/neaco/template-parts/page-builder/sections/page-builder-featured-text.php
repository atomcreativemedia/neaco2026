<?php
if(get_sub_field('bp_featured_text_section_id')) {
	$bp_featured_text_section_id = get_sub_field('bp_featured_text_section_id');
} else {
	$bp_featured_text_section_id = '';
}
if(get_sub_field('pb_featured_text_quote_mark_colour')) {
	$pb_featured_text_quote_mark_colour = get_sub_field('pb_featured_text_quote_mark_colour');
} else {
	$pb_featured_text_quote_mark_colour = 'green';
}
?>
<section class="page-builder__featured-text" id="<?= $bp_featured_text_section_id; ?>" style="background-color:<?php the_sub_field('pb_featured_text_section_background_colour'); ?>;">
	<div class="container">
		<?php if (get_sub_field('pb_featured_text_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8">
				<div class="page-builder__featured-text__content page-builder__featured-text__content--<?php the_sub_field('pb_featured_text_content_colour'); ?>">
					<p class="page-builder__featured-text__content-quote quote-mark--<?= $pb_featured_text_quote_mark_colour; ?>"><?php the_sub_field('pb_featured_text_content') ?></p>
					
					<?php if (get_sub_field('pb_featured_text_name') || get_sub_field('pb_featured_text_company')) : ?>
					<p class="page-builder__featured-text__content-name-company">
						<?php if (get_sub_field('pb_featured_text_name')) : ?><span class="page-builder__featured-text__content-name"><?php the_sub_field('pb_featured_text_name') ?></span><?php endif; ?>
						<?php if (get_sub_field('pb_featured_text_name') && get_sub_field('pb_featured_text_company')) : ?> | <?php endif; ?>
						<?php if (get_sub_field('pb_featured_text_company')) : ?><span class="page-builder__featured-text__content-company"><?php the_sub_field('pb_featured_text_company') ?></span><?php endif; ?>
					</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>