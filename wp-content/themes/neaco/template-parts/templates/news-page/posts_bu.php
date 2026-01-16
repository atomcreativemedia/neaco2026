<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
global $my_query;
$type = 'post';
$args=array(
	'post_type' => $type,
	'post_status' => 'publish',
	'paged' => $paged,
	'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) : ?>
<section class="news-page__posts" id="posts-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10 col-md-12">
				<div class="row">
					<?php while ($my_query->have_posts()) : $my_query->the_post();
					
					$post_image_url = '';	
					if (has_post_thumbnail()) {
				        $post_image_url = get_the_post_thumbnail_url($post->ID, 'large');
				    } else {
				        $post_image = get_field('title_page_heading_background_image', $post->ID);
				        if ($post_image) {
				            $post_image_url = $post_image['sizes']['large'];
				        }
				    }
					
					$excerpt = get_the_excerpt( $post->ID );
					$author = get_the_author_meta('display_name');
					$date = get_the_date();
					?>
					<div class="col-md-4">
						<div class="news-page__post">
							<?php if (!empty($post_image_url)) : ?>
							<div class="news-page__post-image-container">
								<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
									<div class="news-page__post-image bg-img" style="background-image:url(<?php echo $post_image_url; ?>);"></div>
								</a>
							</div>
							<?php endif; ?>
							<div class="news-page__post-content">
								<h3 class="news-page__post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<div class="news-page__post-meta">
									<div class="news-page__post-categories">
									<?php
										$categories = get_the_category();
										$output = '';
										if ( ! empty( $categories ) ) {
											foreach( $categories as $category ) {
											$output .= '<a class="news-page__post-category" href="' . esc_url( get_term_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
											}
											echo trim( $output );
										}
									?>
									</div>
									
									<p class="news-page__post-author-date">
										<span class="news-page__post-author"><i class="far fa-pencil"></i> <?php echo $author; ?></span>
										<span class="news-page__post-date"><i class="far fa-calendar-alt"></i> <?php echo $date; ?></span>
									</p>
								</div>
								
								<div class="news-page__post-excerpt">
									<?php echo $excerpt; ?>
								</div>
								<div class="news-page__post-readmore">
									<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="row">
					<div class="col">
						<div class="news-page__pagination">
							<?php post_pagination(); ?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php wp_reset_query(); ?>
<?php else : ?>
<section class="news-page__noposts">
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