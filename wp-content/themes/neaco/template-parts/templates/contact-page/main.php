<section class="contact-page__main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-lg-6 mb-5 mb-lg-0">
				<div class="contact-page__form">
					<div class="row">
						<?php if (get_field('contact_form_introduction')): ?>
						<div class="col mb-4">
							<div class="contact-page__form-introduction">
								<?php the_field('contact_form_introduction') ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<?php if(get_field('contact_form_to_use')) : $form = get_field('contact_form_to_use'); ?>
					<div class="contact-page__the-form">
		                <?php gravity_form($form['id'], false, false, false, '', true); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-11 col-lg-6">
				<div class="contact-page__details">
					<div class="row">
						<?php if (get_field('additional_contact_introduction')): ?>
						<div class="col mb-4">
							<div class="contact-page__details-introduction">
								<?php the_field('additional_contact_introduction') ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					
					<?php if (get_field('departments_to_display')) : ?>
					<div class="contact-page__the-details">
						
						
						<?php if (get_field('display_head_office')): ?>
						<div class="contact-page__the-details__department">
							<h5 class="contact-page__the-details__department-name">Head Office</h5>
							<p class="contact-page__the-details__department-contact-item contact-page__the-details__department-contact-item--address"><i class="fa-light fa-map-marker-alt"></i><a href="<?php the_field('link_to_maps','option') ?>" target="_blank"><?php if(get_field('address_line_1','option')) : the_field('address_line_1','option');  ?>, <?php endif; ?><?php if(get_field('address_line_2','option')) : the_field('address_line_2','option');  ?>, <?php endif; ?><?php if(get_field('town_city','option')) : the_field('town_city','option');  ?>, <?php endif; ?><?php if(get_field('county','option')) : the_field('county','option');  ?>, <?php endif; ?><?php if(get_field('postcode','option')) : the_field('postcode','option');  ?><?php endif; ?></a></p>
							<p class="contact-page__the-details__department-contact-item contact-page__the-details__department-contact-item--phone"><?php the_field('primary_contact_number_icon','option') ?><a href="tel:<?php the_field('contact_number','option'); ?>" target="_blank"><?php the_field('contact_number','option'); ?></a></p>
							<p class="contact-page__the-details__department-contact-item contact-page__the-details__department-contact-item--email"><?php the_field('primary_email_address_icon','option') ?><a href="mailto:<?php the_field('email_address','option'); ?>" target="_blank"><?php the_field('email_address','option'); ?></a></p>
						</div>
						<?php endif; ?>
						
		                <?php $departments_to_display = get_field_object('departments_to_display');
						$dd_values = $departments_to_display['value'];
						foreach($dd_values as $dd_value) : ?>
							<?php while (have_rows('company_departments','option')) : the_row(); ?>
								<?php if (get_sub_field('department_name') == $dd_value) : ?>
									<div class="contact-page__the-details__department">
										<h5 class="contact-page__the-details__department-name"><?php the_sub_field('department_name'); ?></h5>
										<p class="contact-page__the-details__department-contact-item contact-page__the-details__department-contact-item--phone"><?php the_field('primary_contact_number_icon','option') ?><a href="tel:<?php the_sub_field('department_contact_number'); ?>" target="_blank"><?php the_sub_field('department_contact_number'); ?></a></p>
										<p class="contact-page__the-details__department-contact-item contact-page__the-details__department-contact-item--email"><?php the_field('primary_email_address_icon','option') ?><a href="mailto:<?php the_sub_field('department_email_address'); ?>" target="_blank"><?php the_sub_field('department_email_address'); ?></a></p>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>