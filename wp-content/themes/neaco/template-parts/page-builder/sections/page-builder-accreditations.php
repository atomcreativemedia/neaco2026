<?php
if(get_sub_field('pb_accreditations_section_id')) {
	$pb_accreditations_section_id = get_sub_field('pb_accreditations_section_id');
} else {
	$pb_accreditations_section_id = '';
}
if(get_sub_field('pb_accreditations_section_background_colour')) {
	$pb_accreditations_section_background_colour = get_sub_field('pb_accreditations_section_background_colour');
} else {
	$pb_accreditations_section_background_colour = 'rgb(255,255,255)';
}
if(get_sub_field('pb_accreditations_section_padding')) {
	$pb_accreditations_section_padding = get_sub_field('pb_accreditations_section_padding');
} else {
	$pb_accreditations_section_padding = 'pad';
}
?>
<section class="page-builder__accreditations <?= $pb_accreditations_section_padding; ?>" id="<?= $pb_accreditations_section_id; ?>" style="background-color:<?= $pb_accreditations_section_background_colour; ?>;">
		<?php if( have_rows('accreditations','option') ) : ?>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col col-md-12">
					<div class="page-builder__accreditations__items accreditations__items__slider">
						<?php while( have_rows('accreditations','option') ) : the_row(); ?>
						<div class="page-builder__accreditations__item">
							<?php if (get_sub_field('link')) : if (is_user_logged_in()) : ?><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php endif; endif; ?>
							<?php $pb_accreditations_accreditation_logo_image = get_sub_field('logo_image');
							// vars
							$pb_accreditations_accreditation_logo_image_url = $pb_accreditations_accreditation_logo_image['url'];
							$pb_accreditations_accreditation_logo_image_alt = $pb_accreditations_accreditation_logo_image['alt'];
							$pb_accreditations_accreditation_logo_image_title = $pb_accreditations_accreditation_logo_image['title']; ?>
							<img src="<?= $pb_accreditations_accreditation_logo_image_url; ?>" alt="" class="page-builder__accreditations__item-logo img-fluid">
							<?php if (get_sub_field('link')) : if (is_user_logged_in()) : ?></a><?php endif; endif; ?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
</section>