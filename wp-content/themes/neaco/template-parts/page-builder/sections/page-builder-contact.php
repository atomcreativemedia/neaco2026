<?php
if(get_sub_field('pb_contact_section_id')) {
	$pb_contact_section_id = get_sub_field('pb_contact_section_id');
} else {
	$pb_contact_section_id = '';
}
if(get_sub_field('pb_contact_section_background_colour')) {
	$pb_contact_section_background_colour = get_sub_field('pb_contact_section_background_colour');
} else {
	$pb_contact_section_background_colour = 'rgb(255,255,255)';
}

if(get_sub_field('pb_contact_content_colour')) {
	$pb_contact_content_colour = get_sub_field('pb_contact_content_colour');
} else {
	$pb_contact_content_colour = 'dark';
}

if(get_sub_field('pb_contact_section_padding')) {
	$pb_contact_section_padding = get_sub_field('pb_contact_section_padding');
} else {
	$pb_contact_section_padding = 'pad';
}
?>

<section class="page-builder__contact <?= $pb_contact_section_padding; ?>" id="<?= $pb_contact_section_id; ?>" style="background-color:<?= $pb_contact_section_background_colour; ?>;">
	<div class="container">
		<div class="row justify-content-center">
			<?php if (get_field('contact_section_introduction','option')): ?>
			<div class="col-11 col-md-6 px-md-5">
			
				<div class="page-builder__contact__content content-colour--<?= $pb_contact_content_colour; ?>">
					<?php the_field('contact_section_introduction','option'); ?>
					
					<?php if (get_field('contact_section_display_departments','option')) : ?>
					<hr>
					<div class="page-builder__contact__departments">
						<?php $contact_section_display_departments = get_field_object('contact_section_display_departments','option');
						$dd_values = $contact_section_display_departments['value'];
						foreach($dd_values as $dd_value) : ?>
							<?php while (have_rows('company_departments','option')) : the_row(); ?>
								<?php if (get_sub_field('department_name') == $dd_value) : ?>
									<div class="page-builder__contact__department">
										<h5 class="page-builder__contact__department-name"><?php the_sub_field('department_name'); ?></h5>
										<p class="page-builder__contact__department-contact-item page-builder__contact__department-contact-item--phone"><?php the_field('primary_contact_number_icon','option') ?><a href="tel:<?php the_sub_field('department_contact_number'); ?>" target="_blank"><?php the_sub_field('department_contact_number'); ?></a></p>
										<p class="page-builder__contact__department-contact-item page-builder__contact__department-contact-item--email"><?php the_field('primary_email_address_icon','option') ?><a href="mailto:<?php the_sub_field('department_email_address'); ?>" target="_blank"><?php the_sub_field('department_email_address'); ?></a></p>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
					
				</div>
				
			</div>
			<?php endif; ?>
			
			<div class="col-11 col-md-6 px-md-5">
				<div class="page-builder__contact__form">
					<?php if(get_field('contact_section_form_to_use','option')) {
						$form = get_field('contact_section_form_to_use','option');
						gravity_form($form['id'], false, false, false, '', true);
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>