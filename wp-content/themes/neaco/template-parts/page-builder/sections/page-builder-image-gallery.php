<?php
if(get_sub_field('pb_image_gallery_section_id')) {
	$pb_image_gallery_section_id = get_sub_field('pb_image_gallery_section_id');
} else {
	$pb_image_gallery_section_id = '';
}

if (get_sub_field('pb_image_gallery_gallery_type') == 'modula') {
	$container_class = 'container-fluid';
	$intro_col_class = '10 col-lg-8 col-xl-6';
} else {
	$container_class = 'container';
	$intro_col_class = '8';
}

if(get_sub_field('pb_image_gallery_section_padding')) {
	$pb_image_gallery_section_padding = get_sub_field('pb_image_gallery_section_padding');
} else {
	$pb_image_gallery_section_padding = 'pad';
}

?>
<section class="page-builder__image-gallery <?= $pb_image_gallery_section_padding; ?>" id="<?= $pb_image_gallery_section_id; ?>" style="background-color:<?php the_sub_field('pb_image_gallery_section_background_colour'); ?>;">
	<div class="container">
		<?php if (get_sub_field('pb_image_gallery_introduction_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-<?= $intro_col_class; ?> text-center">
				<div class="page-builder__image-gallery__intro page-builder__image-gallery__intro--<?php the_sub_field('pb_image_gallery_content_colour'); ?>">
					<?php the_sub_field('pb_image_gallery_introduction_content') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="<?= $container_class; ?>">
		<?php if (get_sub_field('pb_image_gallery_gallery_type') == 'modula') : ?>
			<div class="row justify-content-center">
				<div class="col-11 col-md-12">
					<?php echo do_shortcode( get_sub_field('pb_image_gallery_modula_gallery_shortcode') ); ?>
				</div>
			</div>
		<?php else : ?>
			<?php if( have_rows('pb_image_gallery_images') ) : ?>
			<div class="row justify-content-center">
				<div class="col">
					<div class="page-builder__image-gallery__images">
						<div class="row">
							<?php while( have_rows('pb_image_gallery_images') ) : the_row(); ?>
							<div class="col-6 col-md-3">
								<div class="page-builder__image-gallery__image">
									<div href="<?php the_sub_field('pb_image_gallery_image'); ?>" data-fancybox="gallery" data-caption="<?php the_sub_field('pb_image_gallery_image_caption'); ?>" class="page-builder__image-gallery__anchor">
										<div class="page-builder__image-gallery__gallery-image-container bg-img" style="background-image:url(<?php the_sub_field('pb_image_gallery_image'); ?>);"></div>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</section>

<!-- <div id="neacobox" class="neacobox">
	<div class="container-lg d-flex flex-column flex-middle h-100">
		<div class="row justify-content-center h-100">
			<div class="col-10 col-sm-11 h-100">
				<div class="neacobox__body h-100">
					<div class="neacobox__header">
						<span class="neacobox__close" onclick="neacoBox.close()">&times;</span>
					</div>
					<div class="neacobox__main">
						<div class="neacobox__image-wrapper" onclick="event.stopPropagation();">
							<img id="neacobox-image-current" class="neacobox__image" src="" alt="">
							<img id="neacobox-image-next" class="neacobox__image" src="" alt="">
							<div id="neacobox-caption" class="neacobox__caption" onclick="event.stopPropagation();"></div>
						</div>
						<div class="neacobox__arrows">
							<a class="prev" onclick="neacoBox.changeSlide(-1)">&#10094;</a>
							<a class="next" onclick="neacoBox.changeSlide(1)">&#10095;</a>
						</div>
					</div>
					<div class="neacobox__footer">
						<div class="neacobox__thumbnails"></div>
						<div class="neacobox__thumbnail-nav">
							<span class="neacobox__thumbnail-nav--left" onclick="neacoBox.scrollThumbnails(-1)">&#10094;</span>
							<span class="neacobox__thumbnail-nav--right" onclick="neacoBox.scrollThumbnails(1)">&#10095;</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->