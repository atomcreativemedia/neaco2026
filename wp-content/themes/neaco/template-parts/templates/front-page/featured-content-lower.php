<?php
if(get_field('featured_content_lower_section_id')) {
	$featured_content_lower_section_id = get_field('featured_content_lower_section_id');
} else {
	$featured_content_lower_section_id = 'featured-content-lower';
}

if(get_field('featured_content_lower_image')) {
	$featured_content_lower_image = get_field('featured_content_lower_image');
}

if(get_field('featured_content_lower_overlay_background_setting')) {
	$featured_content_lower_overlay_background_setting = get_field('featured_content_lower_overlay_background_setting');
} else {
	$featured_content_lower_overlay_background_setting = 'black';
}

if(get_field('featured_content_lower_content_padding')) {
	$featured_content_lower_content_padding = get_field('featured_content_lower_content_padding');
} else {
	$featured_content_lower_content_padding = 'large';
}

if(get_field('featured_content_lower_enable_parallax')) {
	$featured_content_lower_background_attachment = 'fixed';
} else {
	$featured_content_lower_background_attachment = 'scroll';
}
?>

<section class="front-page__featured-content front-page__featured-content--<?= $featured_content_lower_background_attachment; ?> bg-img" id="<?= $featured_content_lower_section_id; ?>" style="background-image:url(<?= $featured_content_lower_image; ?>);">
	<div class="front-page__featured-content__overlay front-page__featured-content__overlay--<?= $featured_content_lower_overlay_background_setting; ?> front-page__featured-content__overlay--padding-<?= $featured_content_lower_content_padding; ?>">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-11 col-md-12">
					<div class="front-page__featured-content__content-container">
						<div class="row justify-content-<?php the_field('featured_content_lower_content_alignment_mobile'); ?> justify-content-md-<?php the_field('featured_content_lower_content_alignment_desktop'); ?>">
							<div class="col-9 col-md-6 text-<?php the_field('featured_content_lower_content_alignment_mobile'); ?> text-md-<?php the_field('featured_content_lower_content_alignment_desktop'); ?>">
								<div class="front-page__featured-content__content">
									<?php the_field('featured_content_lower_content'); ?>
									
									<?php if( have_rows('featured_content_lower_buttons') ) :
									while( have_rows('featured_content_lower_buttons') ) : the_row(); ?>
									<p class="button <?php the_sub_field('featured_content_lower_button_colour'); ?>"><a href="<?php the_sub_field('featured_content_lower_button_destination'); ?>"><?php the_sub_field('featured_content_lower_button_text'); ?></a></p>
									<?php endwhile;
									endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>