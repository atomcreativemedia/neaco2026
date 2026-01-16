<?php get_header(); ?>
 <section class="search-results">
 	
 	<div class="search-results__heading">
	 	<div class="container">
	 		<div class="row justify-content-center">
 				<div class="col-11 col-md-8">
	 				<h1>Seach Results For: <?php the_search_query(); ?></h1>
	 			</div>
 			</div>
 		</div>
 	</div>
 	
 	<?php if( have_posts() ) : ?>
 	<div class="search-results__results">
 		<div class="container">
 			<div class="row justify-content-center">
 				<div class="col-11 col-md-8">
					<?php while (have_posts()) : the_post();
						if ( $post->post_type == 'post' ) {
							$after = 'Post';
						} elseif ( $post->post_type == 'page' ) {
							$after = 'Page';
						} elseif ( $post->post_type == 'products' ) {
							$after = 'Product';
						} elseif ( $post->post_type == 'projects' ) {
							$after = 'Project';
						} else {
							$after = 'Content';
						} ?>
						<div class="search-results__post">
							<h5 class="search-results__post-title"><i class="fa-light fa-arrow-turn-down-right"></i><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> (<?= $after; ?>)</h5>
						</div>
					<?php endwhile; ?>
 				</div>
 			</div>
 		</div>
 	</div>
 	<?php wp_reset_query(); ?>
 	<?php endif; ?>
 	
 </section>
<?php get_footer(); ?>