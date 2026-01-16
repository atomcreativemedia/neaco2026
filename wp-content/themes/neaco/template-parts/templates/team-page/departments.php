<section class="team-page__departments">
	<div class="container">
		<?php while( have_rows('departments') ) : the_row(); ?>
		<div class="row">
			<div class="col">
				<div class="team-page__department">
					<?php if (get_sub_field('department_name')) : ?>
					<div class="team-page__department-name">
						<div class="row gx-3">
							<div class="col px-3  px-md-5">
								<h2><span><?php the_sub_field('department_name'); ?></span></h2>
							</div>
						</div>
					</div>
					<?php endif; ?>
					
					<?php if( have_rows('team_bios') ) : ?>
					<div class="team-page__department-profiles">
						<div class="row gx-3">
							<?php while( have_rows('team_bios') ) : the_row(); ?>
							<div class="col-6 col-md-3 px-3 px-md-5">
								<div class="team-page__profile">
									<?php
									if (get_sub_field('main_image')) :
										if(!get_sub_field('secondary_image')) { $bg_img = get_sub_field('main_image'); } else { $bg_img = get_sub_field('secondary_image'); }
									?>
									<div class="team-page__profile__img-holder">
										<div class="team-page__profile__img team-page__profile__img--secondary bg-img" style="background-image:url(<?= $bg_img; ?>);">
											<?php if(get_sub_field('secondary_image')): ?>
											<div class="team-page__profile__img team-page__profile__img--primary bg-img" style="background-image:url(<?php the_sub_field('main_image'); ?>);"></div>
											<?php endif ?>
										</div>
									</div>
									<?php endif; ?>
									
									<h3 class="team-page__profile__name"><?php the_sub_field('name'); ?></h3>
									<p class="team-page__profile__position-title"><?php the_sub_field('position_title'); ?></p>
									<p class="team-page__profile__bio"><?php the_sub_field('bio'); ?></p>
									
									<div class="team-page__profile__contact d-flex">
										<?php if (get_sub_field('contact_phone')) : ?>
										<div class="team-page__profile__contact-icon team-page__profile__contact-icon--phone me-2"><a href="tel:<?php the_sub_field('contact_phone') ?>" target="_blank"><i class="fa-light fa-phone"></i></a></div>
										<?php endif; ?>
										
										<?php if (get_sub_field('contact_email')) : ?>
										<div class="team-page__profile__contact-icon team-page__profile__contact-icon--email me-2"><a href="mailto:<?php the_sub_field('contact_email') ?>" target="_blank"><i class="fa-light fa-envelope"></i></a></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</section>