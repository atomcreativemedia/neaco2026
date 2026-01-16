<?php
/**
 * Decking Features Section (CPT-powered)
 */

$post_type = 'why-engineers-arch';

$args = array(
    'post_type'      => $post_type,
    'order'          => 'ASC',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
<section class="why_engineers_architects_neaco_section <?= esc_attr($pb_text_block_section_padding); ?>" id="<?= esc_attr($pb_text_block_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_section_background_colour); ?>;">

	<style>
	
		#why_engineers_architects_neaco {
			margin-bottom: 2rem;
		}
		#speak_to_a_specification_expert {
			margin-top: 1rem;
		}
	
		.why_engineers_architects_neaco_grid {
			display: flex;
			flex-direction: row;
			justify-content: center;
			flex-wrap: wrap;
			gap: 4rem;
		}
		
		.why_engineers_architects_neaco_grid .item {
			width: 340px;
		}
		
		.why_engineers_architects_neaco_grid .item .icon_container {
			display: flex;
			justify-content: center;
			margin-bottom: 1rem;
		}
		
		.why_engineers_architects_neaco_grid .item .icon_container img {
			height: 120px;
		}
		
		.why_engineers_architects_neaco_grid .item * {
			text-align: center;
		}
		
		.why_engineers_architects_neaco_grid .item h3 {
			font-size: 28px;
			font-weight: bold;
		}
		
		@media (max-width: 1599px) {
			.why_engineers_architects_neaco_grid .item {
				width: 300px;
			}
		}
		
		@media (max-width: 1499px) {
			.why_engineers_architects_neaco_grid .item {
				width: 250px;
			}
		}
		
		@media (max-width: 1299px) {
			.why_engineers_architects_neaco_grid .item {
				width: 265px;
			}
			.why_engineers_architects_neaco_grid .item .icon_container img {
				height: 90px;
			}
			.why_engineers_architects_neaco_grid {
				gap: 2rem;
			}
		}
		
		@media (max-width: 799px) {
			.why_engineers_architects_neaco_grid .item {
				width: 320px;
			}	
		}
		
		@media (max-width: 699px) {
			.why_engineers_architects_neaco_grid .item {
				width: 280px;
			}
			.why_engineers_architects_neaco_grid {
				column-gap: 2rem;
				row-gap: 1rem;
			}
		}
		
		@media (max-width: 650px) {
			.why_engineers_architects_neaco_grid .item .icon_container img {
				height: 70px;
			}
			.why_engineers_architects_neaco_grid .item {
				width: 250px;
			}
			.why_engineers_architects_neaco_grid .item h3 {
				font-size: 22px;
			}
		}
		
		@media (max-width: 599px) {
			.why_engineers_architects_neaco_grid .item {
				width: 220px;
			}
		}
		
		@media (max-width: 499px) {
			.why_engineers_architects_neaco_grid .item {
				width: 180px;
			}
		}
		
		@media (max-width: 400px) {
			.why_engineers_architects_neaco_grid .item {
				width: 100%;
			}
			.why_engineers_architects_neaco_grid .item h3 {
				margin-bottom: 15px;
				font-size: 21px;
			}
			.why_engineers_architects_neaco_grid {
				row-gap: 1rem;
			}
		}
	
	</style>

	<div class="container">

		<div class="why_engineers_architects_neaco_grid">

			<?php while ($query->have_posts()) : $query->the_post(); ?>

				<?php
					// ACF fields
					$title = get_the_title();
					$content = get_the_content();

					$icon = get_field('icon');
					$icon_url = $icon ? esc_url($icon) : '';
				
				?>
				
				<div class="item">
				
					<div class="icon_container">
					
						<img src="<?php echo $icon_url; ?>">
					
					</div>
					
					<div>
					
						<h3><?php echo $title; ?></h3>
						
						<p><?php echo $content; ?></p>
					
					</div>
				
				</div>

				
			<?php endwhile; ?>

		</div>

	</div>
	
</section>

<?php
endif;
wp_reset_postdata();
?>
