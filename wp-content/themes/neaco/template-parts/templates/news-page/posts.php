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
if ( isset($_GET['category']) && $_GET['category'] !== '' && $_GET['category'] !== 'all' ) {
  $args['category_name'] = sanitize_text_field( $_GET['category'] );
}
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) : ?>
<section class="news-page__posts" id="posts-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-10 col-xl-11 col-xxl-12">
				<div class="news-page__filter pb-5">
					<?php $news_url = esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>
					<form method="GET" id="category-filter" action="<?php echo get_post_type_archive_link('post'); ?>">
						<div class="custom-select-wrapper">
							<select name="category" id="category-select">
								<option value="" disabled <?php echo (!isset($_GET['category']) || $_GET['category'] === '') ? 'selected' : ''; ?>>Filter</option>
								<option value="all" <?php echo (isset($_GET['category']) && $_GET['category'] === 'all') ? 'selected' : ''; ?>>All Categories</option>
								<?php
									$categories = get_categories();
									$current_category = isset($_GET['category']) ? $_GET['category'] : '';
									foreach ( $categories as $category ) {
										$selected = $current_category == $category->slug ? 'selected' : '';
										echo '<option value="' . esc_attr( $category->slug ) . '" ' . $selected . '>' . esc_html( $category->name ) . '</option>';
									}
								?>
							</select>
							<span class="custom-chevron"><i class="fa-solid fa-chevron-down"></i></span>
						</div>
					</form>
					<script>
						const filterForm = document.getElementById('category-filter');
						const categorySelect = document.getElementById('category-select');
						
						categorySelect.addEventListener('change', function() {
							const selectedCategory = this.value;
							const baseUrl = '<?php echo $news_url; ?>';
							const newUrl = selectedCategory ? `${baseUrl}?category=${selectedCategory}` : baseUrl;
							window.location.href = newUrl;
						});
					</script>
				</div>
				<div class="news-page__posts-list">
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
				$excerpt = get_the_excerpt( $post->ID ); ?>
					<div class="news-page__post bg-img" style="background-image:url(<?= esc_url($post_image_url); ?>);">
						
						<div class="news-page__post-overlay news-page__post-overlay--overlay-1"></div>
						<div class="news-page__post-overlay news-page__post-overlay--overlay-2"></div>
						
						<div class="news-page__post-content">
							<div class="news-page__post-content-header">
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
								</div>
								<h3 class="news-page__post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							</div>
							
							<div class="news-page__post-content-text">
								<div class="news-page__post-desc">
									<?php echo $excerpt; ?>
								</div>
							</div>
							
							<div class="news-page__post-readmore">
								<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="row">
					<div class="col">
						<div class="news-page__pagination pt-5">
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