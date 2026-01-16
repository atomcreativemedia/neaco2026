<?php
if(get_field('accreditations_section_id')) {
	$accreditations_section_id = get_field('accreditations_section_id');
} else {
	$accreditations_section_id = '';
}
?>
<section class="front-page__accreditations" id="<?php echo $accreditations_section_id; ?>">
	<?php if (get_field('accreditations_introduction','option')): ?>
	<div class="container">
		<div class="row justify-content-center justify-content-md-center">
			<div class="col-11 col-md-6">
				<div class="front-page__accreditations__intro text-center">
					<?php the_field('accreditations_introduction','option') ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if( have_rows('accreditations','option') ) : ?>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col col-md-12">
				<div class="front-page__accreditations__items accreditations__items__slider">
					<?php while( have_rows('accreditations','option') ) : the_row(); ?>
					<div class="front-page__accreditations__item">
						<?php if (get_sub_field('link')) : if (is_user_logged_in()) : ?><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php endif; endif; ?>
						<?php $accreditations_rep_logo_image = get_sub_field('logo_image');
						// vars
						$accreditations_rep_logo_image_url = $accreditations_rep_logo_image['url'];
						$accreditations_rep_logo_image_alt = $accreditations_rep_logo_image['alt'];
						$accreditations_rep_logo_image_title = $accreditations_rep_logo_image['title']; ?>
						<img src="<?= $accreditations_rep_logo_image_url; ?>" alt="" class="front-page__accreditations__item-logo img-fluid">
						<?php if (get_sub_field('link')) : if (is_user_logged_in()) : ?></a><?php endif; endif; ?>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>