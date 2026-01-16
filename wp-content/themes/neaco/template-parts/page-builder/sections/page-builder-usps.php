<?php
if(get_sub_field('pb_usps_section_id')) {
	$pb_usps_section_id = get_sub_field('pb_usps_section_id');
} else {
	$pb_usps_section_id = '';
}
$content_align = get_sub_field('pb_usps_content_alignment') ?: 'start';
$content_colour = get_sub_field('pb_usps_content_colour');
$icon_colour = get_sub_field('pb_usps_icon_colour') ?: 'default';
?>
<section class="page-builder__usps" id="<?= esc_attr($pb_usps_section_id); ?>" style="background-color:<?php the_sub_field('pb_usps_section_background_colour'); ?>;">
	<div class="container">
		<?php if (get_sub_field('pb_usps_introduction_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-6 text-<?= esc_attr($content_align); ?>">
				<div class="page-builder__usps__intro page-builder__usps__intro--<?= $content_colour; ?>">
					<?php the_sub_field('pb_usps_introduction_content') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if( have_rows('pb_usps_usps') ) : ?>
		<div class="row justify-content-center">
			<?php while( have_rows('pb_usps_usps') ): the_row(); ?>
			<div class="col-11 col-md-3 page-builder__usps__usp-container text-<?= esc_attr($content_align); ?>">
				<div class="page-builder__usps__usp page-builder__usps__usp--<?= esc_attr($content_colour); ?>">
					<?php if (get_sub_field('pb_usps_usp_link')) : ?><a href="<?php the_sub_field('pb_usps_usp_link') ?>" class="page-builder__usps__usp-link"><?php endif; ?>
						<div class="page-builder__usps__usp-icon page-builder__usps__usp-icon--colour-<?= esc_attr($icon_colour); ?>"><?php the_sub_field('pb_usps_usp_icon') ?></div>
						<h3 class="page-builder__usps__usp-heading"><?php the_sub_field('pb_usps_usp_heading') ?></h3>
						<p class="page-builder__usps__usp-desc"><?php the_sub_field('pb_usps_usp_text') ?></p>
					<?php if (get_sub_field('pb_usps_usp_link')) : ?></a><?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>