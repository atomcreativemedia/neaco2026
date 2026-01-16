<?php
if(get_field('quick_links_lower_section_id')) {
	$quick_links_lower_section_id = get_field('quick_links_lower_section_id');
} else {
	$quick_links_lower_section_id = 'quick-links-lower';
}
?>
<section class="front-page__quick-links-lower bg-img" id="<?php echo $why_choose_us_section_id; ?>" style="background-image:url(<?php the_field('quick_links_lower_background_image'); ?>);">
	<div class="front-page__quick-links-lower__overlay">
		<div class="container">
			<?php if( have_rows('quick_links_lower_quick_links') ) : ?>
			<div class="row">
				<div class="col">
					<div class="front-page__quick-links-lower__links">
						<div class="row justify-content-center">
							<?php while( have_rows('quick_links_lower_quick_links') ) : the_row(); ?>
							<div class="col-10 col-md-5">
								<div class="front-page__quick-links-lower__link text-center">
									<div class="front-page__quick-links-lower__link-text"><?php the_sub_field('quick_links_lower_quick_link_text'); ?></div>
									<p class="front-page__quick-links-lower__link-button button white-green"><a href="<?php the_sub_field('quick_links_lower_quick_link_button_link'); ?>"><?php the_sub_field('quick_links_lower_quick_link_button_label'); ?></a></p>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>