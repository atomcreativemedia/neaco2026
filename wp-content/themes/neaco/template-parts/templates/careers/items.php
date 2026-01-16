<?php 
$post_type = 'careers';
$args = array(
    'post_type' => $post_type,
    'posts_per_page' => -1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) : ?>
<div class="careers__items">
	<?php while ($my_query->have_posts()) : $my_query->the_post();
		$postid = get_the_ID();
		$department = get_field_object( 'career_post_department' );
		$value = $department['value'];
		$label = $department['choices'][ $value ]; ?>
		<div class="careers__item <?php echo esc_attr($value); ?> filtered">
			<div class="careers__item-heading">
				<h3><a class="careers__item-anchor" href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h3>
			</div>
			<?php if ( (get_field('contract')) || (get_field('salary')) || (get_field('location')) ) : ?>
			<p class="careers__item-options"><?php if (get_field('contract')) : ?><span class="careers__item-option careers__item-option--contract"><?php the_field('contract'); ?></span><?php endif; ?><?php if (get_field('salary')) : ?><span class="careers__item-option careers__item-option--salary">£<?php the_field('salary'); ?></span><?php endif; ?><?php if (get_field('location')) : ?><span class="careers__item-option careers__item-option--location"><?php the_field('location'); ?></span><?php endif; ?></p>
			<?php endif; ?>
			<h6 class="careers__item-department"><?php echo esc_html($label); ?></h6>
			<?php if (get_field('snippet')) : ?>
			<p class="career__item-snippet">
				<?php the_field('snippet'); ?>
			</p>
			<?php endif; ?>
			<p class="button grey-green"><a href="<?php the_permalink() ?>">Apply Today</a></p>
		</div>
	<?php endwhile; ?>		
</div>
<?php endif;
	wp_reset_query();  // Restore global post data stomped by the_post(). ?>