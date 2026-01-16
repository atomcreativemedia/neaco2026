<?php
if(get_sub_field('pb_resources_section_id')) {
	$pb_resources_section_id = get_sub_field('pb_resources_section_id');
} else {
	$pb_resources_section_id = '';
}

if(get_sub_field('pb_resources_section_background_colour')) {
	$pb_resources_section_background_colour = get_sub_field('pb_resources_section_background_colour');
} else {
	$pb_resources_section_background_colour = '#ffffff';
}

if(get_sub_field('pb_resources_content_colour')) {
	$pb_resources_content_colour = get_sub_field('pb_resources_content_colour');
} else {
	$pb_resources_content_colour = 'dark';
}

if(get_sub_field('pb_resources_section_padding')) {
	$pb_resources_section_padding = get_sub_field('pb_resources_section_padding');
} else {
	$pb_resources_section_padding = 'pad';
}
?>
<section class="page-builder__resources <?= $pb_resources_section_padding; ?>" id="<?= $pb_resources_section_id; ?>" style="background-color:<?= $pb_resources_section_background_colour; ?>;">
	<div class="container">
		<div class="row justify-content-center mb-4">
			<div class="col-10 text-center">
				<div class="page-builder__resources__intro-text content-colour--<?= $pb_resources_content_colour; ?>">
					<?php the_sub_field('pb_resources_intro_text'); ?>
				</div>
			</div>
		</div>
		
		<div class="row justify-content-center">
			<div class="col-11 col-lg-10 col-xl-8 text-center">
				<?php if( have_rows('pb_resources_resources_rp') ) : ?>
				<div class="page-builder__resources__items content-colour--<?= $pb_resources_content_colour; ?>">
					<div class="row">
						<?php while( have_rows('pb_resources_resources_rp') ) : the_row(); ?>
						<div class="col-6 col-md-3">
							<div class="page-builder__resources__item">
								<?php if(get_sub_field('pb_resources_resources_rp__resource__resource_thumb')) {
									$resource_thumb = get_sub_field('pb_resources_resources_rp__resource__resource_thumb');
								} else {
									$resource_thumb = get_sub_field('pb_resources_resources_rp__resource__resource_file');
								} ?>
								<div class="page-builder__resources__item-thumb bg-img" style="background-image:url(<?= $resource_thumb; ?>);">
									<a href="<?php the_sub_field('pb_resources_resources_rp__resource__resource_file'); ?>" class="page-builder__resources__item-link" target="_blank">
										<i class="fa-duotone fa-circle-down"></i>
									</a>
								</div>
								<h4 class="page-builder__resources__item-title"><a href="<?php the_sub_field('pb_resources_resources_rp__resource__resource_file'); ?>" target="_blank"><?php the_sub_field('pb_resources_resources_rp__resource__resource_title'); ?></a></h4>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>