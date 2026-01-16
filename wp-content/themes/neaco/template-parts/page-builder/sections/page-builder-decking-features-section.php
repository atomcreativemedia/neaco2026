<?php
/**
 * Decking Features Section (CPT-powered)
 */

// Your CPT slug (from ACF Post Type key)
$post_type = 'decking-system-detai'; // <-- CONFIRM THIS VALUE

$args = array(
    'post_type'      => $post_type,
    'posts_per_page' => 3,
    'order'          => 'ASC',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
<section class="decking_features_section <?= esc_attr($pb_text_block_section_padding); ?>" id="<?= esc_attr($pb_text_block_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_section_background_colour); ?>;">

	<style>
	.decking_features_grid {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 30px;
	}

	.decking_feature_icon {
		height: 65px;
		margin-bottom: 15px;
	}
	
	.decking_features_section .image_background {
		width: 100%;
		height: 100%;
		-o-object-fit: cover;
		object-fit: cover;
		display: block;
		transition: .35s ease-in-out;
	}
	
	.decking_feature_inner {
		position: relative;
	}
	
	.decking_feature_inner .overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(265deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.80) 100%);
		padding: 25px;
		box-sizing: border-box;
		display: flex;
		flex-direction: column;
		justify-content: end;
	}
	
	.decking_feature_inner .overlay * {
		color: #FFFFFF;
	}
	
	.decking_feature_inner .overlay h4 {
		font-weight: bold;
		font-size: 32px;
		margin-bottom: 10px;
	}
	
	.decking_feature_card {
		border-radius: 15px / 15px;
		overflow: hidden;
	}
	
	#engineered_decking_txt {
		margin-bottom: 1rem;
	}
	
	#engineered_decking_txt .col-11.col-md-10 {
		width: 100% !important;
	}
	
	#engineered_decking_txt .col-md-6.text-center.text-md-start {
		
	}
	
	@media (max-width: 1499px) {
		.decking_feature_icon {
			height: 50px;
			margin-bottom: 10px;
		}
		.decking_feature_inner .overlay h4 {
			font-size: 28px;
			margin-bottom: 5px;
		}
		.decking_feature_inner .overlay p {
			font-size: 18px;
		}
	}
	
	@media (max-width: 1199px) {
		.decking_feature_icon {
			height: 40px;
		}
		.decking_feature_inner .overlay h4 {
			font-size: 24px;
		}
		.decking_feature_inner .overlay {
			padding: 15px;
		}
	}
	
	@media (max-width: 1099px) {
		.decking_feature_card {
			aspect-ratio: 2 / 3;
		}
		.decking_feature_inner {
			height: 100%;
		}
	}
	
	@media (max-width: 799px) {
		.decking_features_grid {
			grid-template-columns: 1fr;
			gap: 15px;
		}
		.decking_feature_card {
			aspect-ratio: 4/1.5;
		}
	}
	
	@media (max-width: 599px) {
		.decking_feature_card {
			aspect-ratio: 5/4;
		}
	}
	
	@media (max-width: 390px) {
		.decking_feature_card {
			aspect-ratio: 6/5;
		}
	}
	
	@media (max-width: 360px) {
		.decking_feature_card {
			aspect-ratio: 2/2.3;
		}
	}
	</style>

	<div class="container">

		<div class="decking_features_grid">

			<?php while ($query->have_posts()) : $query->the_post(); ?>

				<?php
					// ACF fields
					$title   = get_the_title();
					$content = get_the_content();

					$icon = get_field('detail_icon');
					$bg   = get_field('background_image');
					// Clean the URLs
					$icon_url = $icon ? esc_url($icon) : '';
					$bg_url   = $bg ? esc_url($bg) : '';
				?>

				<div class="decking_feature_card">
				
					<div class="decking_feature_inner">
					
						<img class="image_background" alt="" src="<?php echo $bg_url; ?>">
						
						<div class="overlay">
						
							<div>
						
								<?php if ($icon_url) : ?>
									<img class="decking_feature_icon"
										 src="<?php echo $icon_url; ?>"
										 alt="">
								<?php endif; ?>

								<?php if ($title) : ?>
									<h4><?php echo esc_html($title); ?></h4>
								<?php endif; ?>

								<?php if ($content) : ?>
									<p><?php echo esc_html($content); ?></p>
								<?php endif; ?>
								
							</div>

						</div>

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
