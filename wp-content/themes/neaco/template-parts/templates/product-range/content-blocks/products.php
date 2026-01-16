<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$section_id = get_sub_field('pr_cb__products__section_id') ?: 'products';
?>
<section class="product-range__products" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<?php if(get_sub_field('pr_cb__products__introduction')) : ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center mb-5">
				<div class="product-range__products__intro">
					<?= wp_kses_post(get_sub_field('pr_cb__products__introduction')); ?>
					<?php if (have_rows('pr_cb__products__buttons_rp')) : ?>
					    <div class="product-range__products__intro-buttons">
					        <?php while (have_rows('pr_cb__products__buttons_rp')) : the_row();
					        	$label = get_sub_field('pr_cb__products__buttons_rp__button_label');
					            $destination = get_sub_field('pr_cb__products__buttons_rp__button_destination');
					            if ($label && $destination) {
					            	echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
					            } ?>
					        <?php endwhile; ?>
					    </div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<div class="row justify-content-center row-cols-md-3">
					<?php
					$post_type = 'products';
					$args = array(
					    'post_type' => $post_type,
					    'posts_per_page' => -1,
					    'tax_query' => array(
					        array(
					            'taxonomy' => 'product_category',
					            'field'    => 'slug',
					            'terms'    => $category->slug
					        ),
					    ),
					);
					
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) :
						while ($my_query->have_posts()) : $my_query->the_post();
							$postid = get_the_ID();
							
							$background_image = get_field('title_page_heading_background_image', $postid);
								$background_image_url = $background_image['url'];
								$background_image_size = 'large';
						    	$large = $background_image['sizes'][ $background_image_size ];
							$product_text_snippet = get_field('product_text_snippet', $postid);
							?>
					<div class="col-12 col-md-6 col-lg-4 mb-4 product-range__products__items">
						<div class="product-range__products__item bg-img" style="background-image:url(<?php echo esc_url($background_image_url); ?>);">
							<a class="product-range__products__item-anchor the-anchor" href="<?php esc_url(the_permalink()); ?>">
								<div class="product-range__products__item-overlay the-overlay">
									<div class="product-range__products__item-content the-content">
										<h3 class="product-range__products__item-title the-title"><?= esc_html(the_title()); ?></h3>
										<div class="product-range__products__item-icon the-icon d-none d-md-block">
											<i class="fa-light fa-chevron-right"></i>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="product-range__products__item-desc">
							<p><?= $product_text_snippet; ?></p>
							<a class="btn" href="<?php esc_url(the_permalink()); ?>" style="background-color:#3B4752;color:#EFF2F5;">Take a Look <i class="fa-light fa-chevron-right"></i></a>
						</div>
					</div>
						<?php endwhile;
					endif;
					wp_reset_query();  // Restore global post data stomped by the_post(). ?>
				</div>
			</div>
		</div>
	</div>
</section>
