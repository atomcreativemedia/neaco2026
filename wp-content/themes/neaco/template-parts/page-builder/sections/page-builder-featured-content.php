<?php
if(get_sub_field('pb_featured_content_section_id')) {
	$pb_featured_content_section_id = get_sub_field('pb_featured_content_section_id');
} else {
	$pb_featured_content_section_id = '';
}
if(get_sub_field('pb_featured_content_background_type') == 'video') {
	$pb_featured_content_background_type = 'video';
} else {
	$pb_featured_content_background_type = 'image';
	if(get_sub_field('pb_featured_content_image')) {
		$pb_featured_content_image = get_sub_field('pb_featured_content_image');
	}
}
if(get_sub_field('pb_featured_content_overlay_background_setting')) {
	$pb_featured_content_overlay_background_setting = get_sub_field('pb_featured_content_overlay_background_setting');
} else {
	$pb_featured_content_overlay_background_setting = 'black';
}

if(get_sub_field('pb_featured_content_content_padding')) {
	$pb_featured_content_content_padding = get_sub_field('pb_featured_content_content_padding');
} else {
	$pb_featured_content_content_padding = 'large';
}
?>

<section class="page-builder__featured-content" id="<?= $pb_featured_content_section_id; ?>">
	
	<div class="page-builder__featured-content__background-splash">
		<div class="page-builder__featured-content__splash-item page-builder__featured-content__splash-item--<?= $pb_featured_content_background_type; ?><?php if ($pb_featured_content_background_type == 'image') : ?> bg-img" style="background-image:url(<?php echo esc_url($pb_featured_content_image); ?>);<?php endif; ?>">
			<?php if ($pb_featured_content_background_type == 'video') : ?>
				<video autoplay muted loop playsinline webkit-playsinline>
					<source src="<?php the_sub_field('pb_featured_content_background_video_webm'); ?>" type="video/webm">
					<source src="<?php the_sub_field('pb_featured_content_background_video_mp4'); ?>" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="page-builder__featured-content__overlay page-builder__featured-content__overlay--<?= $pb_featured_content_overlay_background_setting; ?> page-builder__featured-content__overlay--padding-<?= $pb_featured_content_content_padding; ?>">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-11 col-md-12">
					<div class="page-builder__featured-content__content-container">
						<div class="row justify-content-<?php the_sub_field('pb_featured_content_content_alignment_mobile'); ?> justify-content-md-<?php the_sub_field('pb_featured_content_content_alignment_desktop'); ?>">
							<div class="col-10 col-lg-6 text-<?php the_sub_field('pb_featured_content_content_alignment_mobile'); ?> text-md-<?php the_sub_field('pb_featured_content_content_alignment_desktop'); ?>">
								<div class="page-builder__featured-content__content">
									<?php the_sub_field('pb_featured_content_content'); ?>
									
									<?php if( have_rows('pb_featured_content_buttons') ) :
									while( have_rows('pb_featured_content_buttons') ) : the_row(); ?>
									<p class="button <?php the_sub_field('pb_featured_content_button_colour'); ?>"><a href="<?php the_sub_field('pb_featured_content_button_destination'); ?>"><?php the_sub_field('pb_featured_content_button_text'); ?></a></p>
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