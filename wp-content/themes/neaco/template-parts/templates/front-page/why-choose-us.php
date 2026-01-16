<?php
if(get_field('why_choose_us_section_id')) {
	$why_choose_us_section_id = get_field('why_choose_us_section_id');
} else {
	$why_choose_us_section_id = 'why-choose-us';
}
?>
<section class="front-page__why-choose-us" id="<?php echo $why_choose_us_section_id; ?>">
	<div class="container">
		<?php if (get_field('why_choose_us_intro')): ?>
		<div class="row justify-content-center justify-content-md-center">
			<div class="col-11 col-md-8">
				<div class="front-page__why-choose-us__intro text-center">
					<?php the_field('why_choose_us_intro'); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if( have_rows('why_choose_us_usps') ) : ?>
		<div class="row">
			<div class="col">
				<div class="front-page__why-choose-us__usps">
					<div class="row justify-content-center">
						
						<?php while( have_rows('why_choose_us_usps') ) : the_row(); ?>
						<div class="col-10 col-md-6 col-lg-4 animateBlock notAnimated left">
							<div class="front-page__why-choose-us__usp text-start">
								<div class="row">
									<div class="col-3">
										<p class="front-page__why-choose-us__usp-icon"><?php the_sub_field('why_choose_us_usps_usp_icon'); ?></p>
									</div>
									<div class="col-9">
										<h4 class="front-page__why-choose-us__usp-heading"><?php the_sub_field('why_choose_us_usps_usp_heading'); ?></h4>
										<p class="front-page__why-choose-us__usp-text"><?php the_sub_field('why_choose_us_usps_usp_text'); ?></p>
									</div>
								</div>
							</div>
						</div>
						
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>