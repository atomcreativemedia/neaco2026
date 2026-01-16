<?php
/**
 * Decking Features Section (CPT-powered)
 */

$post_type = 'why-choose-neaco';

$pb_text_block_section_id = get_sub_field('section_id') ?: '';
$pb_text_block_section_background_colour = get_sub_field('section_background_colour');
$pb_text_block_content_colour = get_sub_field('pb_text_block_content_colour') ?: 'dark';
$pb_text_block_section_padding = get_sub_field('pb_text_block_section_padding') ?: 'pad';

$args = array(
    'post_type'      => $post_type,
    'order'          => 'ASC',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
<section class="why_choose_neaco_section <?= esc_attr($pb_text_block_section_padding); ?>" id="<?= esc_attr($pb_text_block_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_section_background_colour); ?>;">

	<style>
	
		#why_choose_neaco_txt_one {
			padding-bottom: 30rem;
			margin-bottom: -34rem;
		}
	
		.why_choose_neaco_section .item {
			background: #3B4752;
			padding: 90px 25px 25px 25px;
			box-sizing: border-box;
		}
		
		.why_choose_neaco_section .item * {
			color: #ffffff;
		}
		
		.why_choose_neaco_section .item .icon_container img {
			height: 60px;
		}
		
		.why_choose_neaco_section .item .icon_container {
			margin-bottom: 10px;
		}
		
		.why_choose_neaco_section .item h3 {
			margin-bottom: 10px;
		}
		
		.why_choose_neaco_grid {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			gap: 1rem;
		}
		
		@media (max-width: 1199px) {
			.why_choose_neaco_section .item .icon_container img {
				height: 50px;
			}
			.why_choose_neaco_section .item {
				background: #3B4752;
				padding: 70px 20px 20px 20px;
			}
		}
		
		@media (max-width: 991px) {
			.why_choose_neaco_grid {
				grid-template-columns: 1fr 1fr;
			}
		}
		
		@media (max-width: 899px) {
			.features_graphic {
				margin-top: 30px;
			}
			.features_graphic .item img {
				width: 120px;
			}
		}
		
		@media (max-width: 799px) {
			.why_choose_neaco_section .item .icon_container img {
				height: 40px;
			}
			#why_choose_neaco_txt_one {
				margin-bottom: -30rem;
			}
		}
		
		
		@media  (max-width: 450px) {
			.why_choose_neaco_grid {
				grid-template-columns: 1fr;
			}
			.why_choose_neaco_section .item {
				padding: 25px;
			}
		}
		
		@media (max-width: 400px) {
			.features_graphic .item img {
				width: 85px;
			}
		}
	
	</style>

	<div class="container">

		<div class="why_choose_neaco_grid">

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
