<?php

$block_content = get_sub_field('content');
$pb_text_block_section_id = get_sub_field('section_id') ?: '';
$pb_text_block_section_background_colour = get_sub_field('section_background_colour') ?: 'rgb(255,255,255)';
$pb_text_block_content_colour = get_sub_field('pb_text_block_content_colour') ?: 'dark';
$pb_text_block_section_padding = get_sub_field('pb_text_block_section_padding') ?: 'pad';

$post_type = 'about-neacos-product';

$args = array(
    'post_type'      => $post_type,
    'posts_per_page' => 4,
    'order'          => 'ASC',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
<section class="product_offerings_section <?= esc_attr($pb_text_block_section_padding); ?>" id="<?= esc_attr($pb_text_block_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_section_background_colour); ?>;">

	<style>
	
	.product_offerings_section {
		margin-top: -170px;
		padding-top: 15rem;
	}
	
	.product_offerings_section .container .content {
		width: 70%;
	}
	
	.accordion_controls_container {
		display: flex;
		flex-direction: row;
		align-items: center;
		gap: 50px;
		margin-bottom: 30px;
	}
	.accordion_controls_container h2 {
		margin: 0;
	}
	
	.accordion_controls_container .controls {
		display: flex;
		flex-direction: row;
		gap: 10px;
		align-items: center;
	}
	
	.accordion_controls_container .controls div p {
		margin: 0;
	}
	
	.accordion_controls_container .controls div {
		background: #AAC642;
		width: 45px;
		aspect-ratio: 1/1;
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
	}
	
	.accordion_controls_container .controls div svg {
		transition: 0.35s ease-in-out;
	}
	
	.accordion_controls_container .controls div:hover svg {
		transform: translateX(5px);
	}
	
	.accordion_controls_container .controls div:nth-child(1) {
		transform: scaleX(-1);
	}
	
	.our_value_arrows {
		display: flex;
		flex-direction: row;
		align-items: center;
		gap: 15px;
	}
	
	.our_value_arrows img {
		width: 28px;
		transition: 0.35s ease-in-out;
	}
	
	.our_value-arrows img:hover {
		transform: translateX(_5px);
	}
	
	.our_value_arrows .next_arrow,
	.our_value_arrows .prev_arrow {
		cursor: pointer;
	}
	
	.product_offerings_container {
		position: relative;
		display: flex;
		flex-direction: row;
		gap: 25px;
		margin-top: 25px;
	}
	
	.rotated-content {
		transform: rotate(90deg);
	}
	
	.rotated_content h3 {
		color: #ffffff;
		margin-bottom: 0;
		width: 630px;
	}
	
	.accordion_item {
		position: relative;
		width: 130px;
		height: 600px;
		border-radius: 5px / 5px;
		overflow: hidden;
		cursor: pointer;
		transition: 0.5s ease-in-out;
	}
	
	.accordion_item.selected {
		width: 100%;
		box-shadow: 0px 0px 12px 0px rgb(0, 0, 0, 40%);
	}
	
	.closed_content {
		display: flex;
		flex-direction: column;
		justify-content: flex-end;
		gap: 35px;
		height: 100%;
		padding: 25px;
		box-sizing: border-box;
		position: relative;
		z-index: 2;
		transition: 0.5s ease-in-out;
	}
	
	.closed_content div {
		transform: rotate(270deg);
		transform-origin: center;
		color: white;
	}
	
	.closed_content div h3 {
		font-size: 40px;
		font-weight: bold;
		margin: 0;
	}
	
	.open_content {
		display: flex;
		flex-direction: column;
		justify-content: end;
		position: relative;
		z-index: 1;
		padding: 35px;
		box-sizing: border-box;
		width: 60%;
		height: 100%;
		opacity: 0;
		transform: translateX(-100%);
		visibility: hidden;
		transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
		background: rgba(59, 71, 82, 0.90);
	}
	
	.open_content.selected {
		opacity: 1;
		visibility: visible;
		transform: translateX(0);
	}
	
	.open_content h3,
	.open_content p {
		color: #ffffff;
	}
	
	.open_content h3 {
		font-size: 40px;
		font-style: normal;
		font-weight: 600;
		margin-bottom: 25px;
		position: relative;
	}
	
	.open_content h3::after {
		content: '';
		position: absolute;
		top: 58px;
		left: 0;
		background: #ffffff;
		width: 70px;
		height: 2px;
	}
	
	.accordion_item .open-content.selected {
		display: flex;
		visibility: visible;
		opacity: 1;
		transform: translateX(0);
	}
	
	.accordion_item.selected .closed_content {
		display: none;
	}
	
	.closed_content img,
	.open_content img {
		height: 40px;
	}
	
	.open_content img {
		margin-bottom: 20px;
	}
	
	.open_content .cta {
		display: flex;
		flex-direction: row;
		gap: 15px;
		text-decoration: none;
	}
	.open_content .cta p {
		margin: 0;
	}
	.open_content .cta svg {
		transition: 0.35s ease-in-out;
	}
	.open_content .cta:hover svg {
		transform: translateX(5px);
	}
	
	.image_container img {
		position: absolute;
		width: 100%;
		height: 100%;
		-o-object-fit: cover;
		object-fit: cover;
		display: block;
	}
	
	.image_container::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(0deg, rgba(170, 198, 66, 0.90) 40.38%, rgba(170, 198, 66, 0.00) 100%);
		pointer-events: none;
		z-index: 1;
		transition: 0.5s ease-in-out;
	}
	
	.accordion_item.selected .image_container::before {
		background: rgba(0, 0, 0, 50%);
	}
	
	.accordion_item.selected .image_container::before {
		background: unset !important;
	}
	
	@media (max-width: 1299px) {
		.product_offerings_section {
			margin-top: -170px;
			padding-top: 10rem;
		}
	}
	
	@media (max-width: 1199px) {
		.open_content {
			width: 80%;
		}
	}
	
	@media (max-width: 799px) {
		.open_content {
			width: 100%;
		}
		.open_content h3 {
			font-size: 30px;
		}
		.open_content h3::after {
			top: 48px;
			width: 60px;
			height: 2px;
		}
		.closed_content div h3 {
			font-size: 30px;
		}
		.product_offerings_section .container .content {
			width: 100%;
		}
		.accordion_controls_container .controls {
			display: none;
		}
	}
	
	@media (max-width: 650px) {
		.product_offerings_container {
			flex-direction: column;
		}
		.accordion_item {
			width: 100%;
			max-height: 100px;
			transition: max-height 0.5s ease-in-out;
		}
		.accordion_item.selected {
			max-height: 500px;
		}
		.closed_content {
			justify-content: center;
		}
		.closed_content div {
			transform: rotate(0deg);
		}
		.closed_content div h3 {
			font-size: 30px;
		}
		.image_container::before {
			background: linear-gradient(90deg, rgba(170, 198, 66, 0.90) 40.38%, rgba(170, 198, 66, 0.00) 100%);
		 }
	}
	
	@media (max-width: 599px) {
		.product_offerings_section {
			margin-top: -110px;
			padding-top: 9rem;
		}
	}
	
	@media (max-width: 360px) {
		.accordion_item.selected {
			max-height: 1000px;
		}
	}
		
	</style>

	<div class="container">
	
		<div class="content">
			
			<?php echo $block_content; ?>
		
		</div>

		<div class="product_offerings_container">

			<?php while ($query->have_posts()) : $query->the_post(); ?>

				<?php
					// ACF fields
					$title   = get_the_title();
					$content = get_the_content();
					
					$url = get_field('url');
					$bg   = get_field('background');
					$bg_url   = $bg ? esc_url($bg) : '';
				?>
				
				<div id="value" class="accordion_item">

					<div class="image_container">
						<img alt="" src="<?php echo $bg_url; ?>">
					</div>

					<div class="closed_content">
						<div>
							<h3><?php echo esc_html( $title ); ?></h3>
						</div>
					</div>

					<div class="open_content">
					
						<div>
					
							<h3><?php echo esc_html( $title ); ?></h3>

							<div>
							
								<p><?php echo wp_kses_post( $content ); ?></p>
								
								<a class="cta" href="<?php echo $url; ?>">
									<p>Explore</p>
									
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="31" viewBox="0 0 16 31" fill="none">
									  <path d="M3.26935 8.49906L4.68401 7.1299L12.3893 14.5919C12.5136 14.7114 12.6121 14.8536 12.6794 15.0102C12.7467 15.1668 12.7813 15.3348 12.7813 15.5044C12.7813 15.674 12.7467 15.842 12.6794 15.9986C12.6121 16.1552 12.5136 16.2974 12.3893 16.417L4.68401 23.8828L3.27068 22.5136L10.5027 15.5064L3.26935 8.49906Z" fill="white"/>
									</svg>
								</a>
								
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
