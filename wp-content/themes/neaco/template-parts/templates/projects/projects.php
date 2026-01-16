<?php
$post_type = 'projects';

if(is_tax('project_category')) {
	$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$args = array(
	    'post_type' => $post_type,
	    'posts_per_page' => -1,
        'tax_query' => array(
    		array(
    			'taxonomy' => 'project_category',
    			'field'    => 'slug',
    			'terms'    => $category->slug
    		),
    	),
	);
} else {
	$args = array(
	    'post_type' => $post_type,
	    'posts_per_page' => -1,
	    'orderby' => 'rand',
	);
}

$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) : ?>
<section class="projects__items">
	<div class="container-fluid">
		<div class="row justify-content-center row-cols-md-3">
			<div class="col-11 col-md-12">
				<div class="row">
					<?php
						while ($my_query->have_posts()) : $my_query->the_post();
						$post_image = get_field('title_page_heading_background_image', $post->ID);
						$post_image_url = $post_image['url'];
						$post_image_size = 'large';
    					$large = $post_image['sizes'][ $post_image_size ];
					?>
					<div class="col-12 projects__project-item my-3">
						<div class="projects__project-item-bg bg-img" style="background-image:url(<?= $large; ?>);">
							<a class="projects__project-item-anchor project-item-anchor" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<span class="projects__project-item-overlay project-item-overlay"></span>
								<span class="projects__project-item-title project-item-title">
									<h3><?php echo the_title(); ?></h3>
									<?php if (get_field('project_location')) : ?>
									<p class="projects__project-item-location project-item-location"><?php the_field('project_location'); ?></p>
									<?php endif ?>
								</span>
							</a>
						</div>
					</div>
					<?php endwhile; ?>	
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif;
	wp_reset_query();  // Restore global post data stomped by the_post(). ?>

<?php if (get_field('display_newsletter_section')) {
	get_template_part('template-parts/global/newsletter-section');
} ?>