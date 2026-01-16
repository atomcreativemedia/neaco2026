<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if(get_field('show_product_list',$category)) :
?>
<section class="product-range__products">
	<div class="container-fluid">
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
			<div class="col-11 col-md-6 col-lg-4 mb-4 product-range__product-container">
				<div class="product-range__product-img bg-img" style="background-image:url(<?php echo esc_url($background_image_url); ?>);">
					<a class="product-range__product-img__anchor the-anchor" href="<?php the_permalink(); ?>">
						<div class="product-range__product-img__overlay the-overlay">
							<div class="product-range__product-img__content the-content">
								<h3 class="product-range__product-img__title the-title"><?php echo the_title(); ?></h3>
								<div class="product-range__product-img__icon the-icon">
									<i class="fa-light fa-chevron-right"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="product-range__product-desc">
					<p><?= $product_text_snippet; ?></p>
					<a class="btn" href="<?php the_permalink(); ?>" style="background-color:#3B4752;color:#EFF2F5;">Take a Look <i class="fa-light fa-chevron-right"></i></a>
				</div>
			</div>
				<?php endwhile;
			endif;
			wp_reset_query();  // Restore global post data stomped by the_post(). ?>
		</div>
	</div>
</section>
<?php endif; ?>