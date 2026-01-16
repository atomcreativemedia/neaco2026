<?php
if(get_sub_field('pb_info_slider_section_id')) {
	$pb_info_slider_section_id = get_sub_field('pb_info_slider_section_id');
} else {
	$pb_info_slider_section_id = '';
}
?>
<section class="page-builder__info-slider" id="<?= $pb_info_slider_section_id; ?>" style="background-color:<?php the_sub_field('pb_info_slider_section_background_colour'); ?>;">
	<div class="container">
		
		<?php if (get_sub_field('pb_info_slider_introduction_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 text-center">
				<div class="page-builder__info-slider__intro page-builder__info-slider__intro--<?php the_sub_field('pb_info_slider_content_colour'); ?>">
					<?php the_sub_field('pb_info_slider_introduction_content') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		
		
		<?php if( have_rows('pb_info_slider_slides') ) : ?>
		<div class="row justify-content-center">
			<div class="col">
				<div class="page-builder__info-slider__info-slider-container">
					<?php while( have_rows('pb_info_slider_slides') ) : the_row(); ?>
						<div class="page-builder__info-slider__slide bg-img" style="background-image:url('<?php the_sub_field('pb_info_slider_slide_image'); ?>');">
							<div class="row justify-content-center">
								<div class="col-12 col-md-10 col-lg-8 col-xl-6">
									<div class="page-builder__info-slider__slide-overlay" style="background-color:<?php the_sub_field('pb_info_slider_content_container_background'); ?>;">
										<div class="page-builder__info-slider__slide-content page-builder__info-slider__slide-content--<?php the_sub_field('pb_info_slider_slide_content_colour'); ?> text-center">
											<?php the_sub_field('pb_info_slider_slide_content'); ?>
											<?php if (get_sub_field('pb_info_slider_add_button')) : ?>
											<div class="page-builder__info-slider__slide-content-buttons">
												<p class="button <?php the_sub_field('pb_info_slider_button_colour'); ?>"><a href="<?php the_sub_field('pb_info_slider_button_destination'); ?>"><?php the_sub_field('pb_info_slider_button_text'); ?></a></p>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
