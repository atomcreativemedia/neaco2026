<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if( have_rows('prodcat_resources__resources_rp',$category) ) :
?>
	<section class="product-range__resources">
		
		<?php $resources = get_field( 'prodcat_resources__resources_rp',$category );
			if ( is_array( $resources ) ) : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-11 col-md-8">
					<div class="product-range__resources__items">
						<div class="row justify-content-center">
							<?php foreach ($resources as $resource ) : ?>
							<div class="col-4 col-xl-3 text-center">
								<div class="product-range__resources__item">
									<?php
										$resource_file = $resource['prodcat_resources__resources_rp__resource_file'];
										if($resource['prodcat_resources__resources_rp__resource_thumb']) {
											$resource_thumb = $resource['prodcat_resources__resources_rp__resource_thumb'];
										} else {
											$resource_thumb = $resource['prodcat_resources__resources_rp__resource_file'];
										}
										$resource_title = $resource['prodcat_resources__resources_rp__resource_title'];
									?>
									
									<div class="product-range__resources__item-thumb bg-img" style="background-image:url(<?= $resource_thumb; ?>);">
										<a href="<?= $resource_file ?>" class="product-range__resources__item-link" target="_blank">
											<i class="fa-duotone fa-circle-down"></i>
										</a>
									</div>
									<h4 class="product-range__resources__item-title"><a href="<?= $resource_file ?>" target="_blank"><?= $resource_title; ?></a></h4>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</section>
<?php endif; ?>