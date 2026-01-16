<?php
	$term_id = get_queried_object()->term_id;
	$taxonomy_name = 'product_category';
	
	$termchildren = get_terms(
		$taxonomy_name,
		array(
			'parent' => $term_id,
			'hide_empty' => true
		)
	);
	
	if ( !empty( $termchildren ) && !is_wp_error( $termchildren ) ) :
?>
<section class="product-range__categories">
	<div class="container-fluid">
		<div class="row justify-content-center row-cols-md-3">
			<?php
			foreach ( $termchildren as $child ) :
				$count = $child->count;
				/*$catid = $child->term_id;*/
				if($count <= 1) {
					
					$post_type = 'products';
					$args = array(
					    'post_type' => $post_type,
					    'posts_per_page' => -1,
					    'tax_query' => array(
					        array(
					            'taxonomy' => 'product_category',
					            'field'    => 'slug',
					            'terms'    => $child->slug
					        ),
					    ),
					);
					
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) :
						while ($my_query->have_posts()) : $my_query->the_post();
							$postid = get_the_ID();
							$item_link = get_the_permalink($postid);
							$item_background_image = get_field('title_page_heading_background_image', $postid);
								$item_background_image_url = $item_background_image['url'];
								$item_background_image_size = 'large';
								$large = $item_background_image['sizes'][ $item_background_image_size ];
							$item_title = get_the_title($postid);
							$item_content = '<p>'.get_field('product_text_snippet', $postid).'</p>';
						endwhile;
					endif;
				} else {
					$item_link = get_term_link( $child, $taxonomy_name );
					$item_background_image = get_field('title_page_heading_background_image', $child);
						$item_background_image_url = $item_background_image['url'];
						$item_background_image_size = 'large';
						$large = $item_background_image['sizes'][ $item_background_image_size ];
					if(get_field('title_page_range_title', $child)) {
						$item_title = get_field('title_page_range_title', $child);
					} else {
						$item_title = $child->name;
					}
					if(get_field('title_page_content', $child)) {
						$item_content = get_field('title_page_content', $child);
					}
				}
				?>
			<div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mb-4 product-range__category-container-outer">
				<div class="product-range__category-container">
					<div class="product-range__category__img bg-img" style="background-image:url(<?php echo esc_url($item_background_image_url); ?>);">
						<a class="product-range__category__anchor the-anchor" href="<?= $item_link; ?>">
							<div class="product-range__category__overlay the-overlay">
								<div class="product-range__category__overlay-content">
									<h2 class="product-range__category__title the-title"><?= $item_title; ?></h2>
									<div class="product-range__category__title-icon the-title-icon">
										<i class="fa-light fa-chevron-right"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="product-range__category__description the-description">
						<?php if (isset($item_content)) {
							echo $item_content;
						} ?>
						<a class="btn" href="<?= $item_link; ?>" style="background-color:#3B4752;color:#EFF2F5;">Take a Look <i class="fa-light fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>