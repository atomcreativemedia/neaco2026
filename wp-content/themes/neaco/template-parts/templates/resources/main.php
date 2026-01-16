<section class="resources__main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="resources__slider-pager">
					
				</div>
				<div class="resources__slider">
					<?php while( have_rows('resource_categories') ) : the_row(); ?>
					<div class="resources__resource-category resource-category-slide">
						<div class="resources__category-desc">
							<h2><?php the_sub_field('resource_category_title'); ?></h2>
							<?php the_sub_field('resource_category_description'); ?>
						</div>
						<?php if( have_rows('resources') ) : ?>
						<div class="resources__items">
							<div class="row">
								<?php while( have_rows('resources') ) : the_row(); ?>
								<div class="col-6 col-md-3">
									<div class="resources__item">
										<?php if(get_sub_field('resource_thumb')) {
											$resource_thumb = get_sub_field('resource_thumb');
										} else {
											$resource_thumb = get_sub_field('resource_file');
										} ?>
										<div class="resources__item-thumb bg-img" style="background-image:url(<?= $resource_thumb; ?>);">
											<a href="<?php the_sub_field('resource_file'); ?>" class="resources__item-link" target="_blank">
												<i class="fa-duotone fa-circle-down"></i>
											</a>
										</div>
										<h4 class="resources__item-title"><a href="<?php the_sub_field('resource_file'); ?>" target="_blank"><?php the_sub_field('resource_title'); ?></a></h4>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>