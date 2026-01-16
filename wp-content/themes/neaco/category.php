<?php get_header(); ?>
<main class="post-category">
	
	<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	global $my_query;
	$type = 'post';
	$cat = get_queried_object();
	$cat = $cat->slug;
	$args=array(
		'post_type' => $type,
		'post_status' => 'publish',
		'paged' => $paged,
		'category_name' => $cat,
		'caller_get_posts'=> 1
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) : ?>
	<section class="post-category__posts">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-11 col-md-10 col-xl-11 col-xxl-10">
					<h1 class="post-category__heading"><span class="fancy-heading"><?php single_cat_title(); ?></span></h1>
				</div>
				<div class="col-11 col-md-10 col-xl-11 col-xxl-10">
					<div class="post-category__posts-list">
						<?php
						while ($my_query->have_posts()) : $my_query->the_post();
						
						$post_image_url = '';
						if (has_post_thumbnail()) {
					        $post_image_url = get_the_post_thumbnail_url($post->ID, 'large');
					    } else {
					        $post_image = get_field('title_page_heading_background_image', $post->ID);
					        if ($post_image) {
					            $post_image_url = $post_image['sizes']['large'];
					        }
					    }
					    $excerpt = get_the_excerpt( $post->ID ); ?>
						<div class="post-category__post bg-img" style="background-image:url(<?= esc_url($post_image_url); ?>);">
												
							<div class="post-category__post-overlay post-category__post-overlay--overlay-1"></div>
							<div class="post-category__post-overlay post-category__post-overlay--overlay-2"></div>
							
							<div class="post-category__post-content">
								<div class="post-category__post-content-header">
									<div class="post-category__post-meta">
										<div class="post-category__post-categories">
										<?php
											$categories = get_the_category();
											$output = '';
											if ( ! empty( $categories ) ) {
												foreach( $categories as $category ) {
												$output .= '<a class="post-category__post-category" href="' . esc_url( get_term_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
												}
												echo trim( $output );
											}
										?>
										</div>
									</div>
									<h3 class="post-category__post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								</div>
								
								<div class="post-category__post-content-text">
									<div class="post-category__post-desc">
										<?php echo $excerpt; ?>
									</div>
								</div>
								
								<div class="post-category__post-readmore">
									<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="post-category__pagination">
						<?php post_pagination(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php wp_reset_query(); ?>
	<?php else : ?>
	<section class="post-category__noposts">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Oops...</h2>
					<p>Looks like there's nothing here yet - check back later!</p>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>