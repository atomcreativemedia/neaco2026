<?php
if(get_field('quick_links_section_id')) {
	$quick_links_section_id = get_field('quick_links_section_id');
} else {
	$quick_links_section_id = '';
}
?>
<section class="front-page__quick-links" id="<?php echo $quick_links_section_id; ?>">
	<div class="container">
		<?php if (get_field('quick_links_intro')): ?>
		<div class="row justify-content-center justify-content-md-start">
			<div class="col-11 col-md-6">
				<div class="front-page__quick-links__intro">
					<?php the_field('quick_links_intro') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php
			if( have_rows('quick_links_rep') ) :
			$count = 0;
		?>
		<div class="row">
			<div class="col">
				<div class="front-page__quick-links__links">
					<div class="row justify-content-center">
					<?php while( have_rows('quick_links_rep') ) : the_row(); ?>
						<?php if ($count == 0 || $count == 3) {
							$col_class = "col-md-5";
						} else {
							$col_class = "col-md-7";
						} ?>
						<div class="col-11 <?= $col_class; ?>">
							<div class="front-page__quick-links__link bg-img" style="background-image:url(<?php the_sub_field('quick_links_rep_background_image'); ?>);">
								<a class="front-page__quick-links__anchor front-page__quick-links__anchor--<?php the_sub_field('quick_links_rep_overlay_colour'); ?>" href="<?php the_sub_field('quick_links_link'); ?>">
									<div class="front-page__quick-links__link-overlay link-overlay"></div>
									<div class="front-page__quick-links__link-content link-content">
										<div class="front-page__quick-links__link-content--inner link-content--inner">
											<h3 class="front-page__quick-links__link-title link-title"><?php the_sub_field('quick_links_rep_title'); ?></h3>
											<p class="front-page__quick-links__link-description link-description"><?php the_sub_field('quick_links_rep_description'); ?></p>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php
						$count++;
						endwhile;
					?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>