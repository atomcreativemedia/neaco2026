<?php
$post_type = 'products';
$the_cat = get_field('footer_menu_4','option');
$args = array(
    'post_type' => $post_type,
    'orderby'   => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_category',
            'field'    => 'slug',
            'terms'    => $the_cat->name
        ),
    ),
);
$my_query = null;
$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) : ?>
	<h6><?php echo esc_html( $the_cat->name ); ?></h6>
	<ul>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); $postid = get_the_ID(); ?>
		<li><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
<?php endif;
wp_reset_query();  // Restore global post data stomped by the_post(). ?>