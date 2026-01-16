<?php

	$term_id = get_queried_object()->term_id;
	$taxonomy_name = 'product_category';
	
	$termchildren = get_terms(
		$taxonomy_name,
		array(
			'parent' => $term_id,
			'hide_empty' => true,
			'orderby' => 'meta_value_num', // Options: 'name', 'slug', 'term_id', 'count', or 'meta_value'.
			'meta_key'       => 'custom_order',
			'order' => 'ASC', // Use 'ASC' or 'DESC'.
		)
	);
	
	if ( !empty( $termchildren ) && !is_wp_error( $termchildren ) ) :
		
	$section_id = get_sub_field('pr_cb__prod_ranges__section_id') ?: 'product-ranges';
?>
<section class="product-range__ranges" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-md-center">
			<?php if(get_sub_field('pr_cb__prod_ranges__introduction')) : ?>
			<div class="col-12 col-md-5 col-xxl-5 mb-4 mb-md-0 offset-md-1 pe-xl-5">
				<div class="product-range__ranges__intro">
					<?= wp_kses_post(get_sub_field('pr_cb__prod_ranges__introduction')); ?>
					<?php if (have_rows('pr_cb__prod_ranges__buttons_rp')) : ?>
					    <div class="product-range__ranges__intro-buttons">
					        <?php while (have_rows('pr_cb__prod_ranges__buttons_rp')) : the_row();
					        	$label = get_sub_field('pr_cb__prod_ranges__buttons_rp__button_label');
					            $destination = get_sub_field('pr_cb__prod_ranges__buttons_rp__button_destination');
					            if ($label && $destination) {
					            	echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
					            } ?>
					        <?php endwhile; ?>
					    </div>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			
			<div class="col-12 col-md-6 pe-md-0">
				<div class="product-range__ranges__slider">
					<?php
					foreach ( $termchildren as $child ) :
						$count = $child->count;
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
						<div class="product-range__ranges__slider-item">
							<div class="product-range__ranges__slider-item-background bg-img" style="background-image:url(<?php echo esc_url($item_background_image_url); ?>);"></div>
							<div class="product-range__ranges__slider-item-overlay the-overlay">
								<div class="product-range__ranges__slider-item-content the-content">
									<h2 class="product-range__ranges__slider-item-title the-title"><?= esc_html($item_title); ?></h2>
									<div class="product-range__ranges__slider-item-description the-description">
										<?php if (isset($item_content)) {
											echo wp_kses_post($item_content);
										} ?>
										<div class="product-range__ranges__slider-item-button">
											<a class="btn" href="<?= esc_url($item_link); ?>" style="background-color:#3B4752;color:#EFF2F5;">Take a Look <i class="fa-light fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<!-- <div class="product-range__ranges__slider-pager"></div> -->
				<div class="product-range__ranges__slider-arrows"></div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>