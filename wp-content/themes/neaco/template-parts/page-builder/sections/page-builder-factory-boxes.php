<?php

$pb_text_block_section_id = get_sub_field('section_id') ?: '';
$pb_text_block_section_background_colour = get_sub_field('section_background_colour') ?: 'rgb(255,255,255)';
$pb_text_block_content_colour = get_sub_field('pb_text_block_content_colour') ?: 'dark';
$pb_text_block_section_padding = get_sub_field('pb_text_block_section_padding') ?: 'pad';


$post_type = 'factory-box';

$args = array(
    'post_type'      => $post_type,
    'order'          => 'ASC',
);

$query = new WP_Query($args);

if ($query->have_posts()) :

?>

<section class="factory_boxes_container <?= $pb_text_block_section_padding; ?>" id="<?= $pb_text_block_section_id; ?>" style="background-color:<?= $pb_text_block_section_background_colour; ?>;">
	
	<style>
	
	.factory_boxes_container .container {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 2rem;
	}
	
	.factory_boxes_container .item {
		background-color: #3B4752;
		padding: 25px;
		box-sizing: border-box;
	}
	
	.factory_boxes_container .item h3,
	.factory_boxes_container .item p {
		color: #ffffff;
	}
	
	.factory_boxes_container .item h3 {
		font-weight: 600;
		font-size: 30px;
		margin-bottom: 20px;
	}
	
	.factory_boxes_container .item .button a {
		background: #ffffff;
		color: #3B4752 !important;
	}
	
	@media (max-width: 699px) {
		.factory_boxes_container .container {
			grid-template-columns: 1fr;
			gap: 1rem;
		}
		.factory_boxes_container .item h3 {
			font-size: 25px;
			margin-bottom: 15px;
		}
	}
	
	@media (max-width: 400px) {
		.factory_boxes_container .item {
			padding: 15px;
		}
	}
	
	</style>
	
	<div class="container">
	
		<?php while ($query->have_posts()) : $query->the_post(); ?>

			<?php
				// ACF fields
				$title   = get_the_title();
				$content = get_the_content();

				$button_text = get_field('button_text');
				$button_link = get_field('button_link');
	
			?>

			<div class="item">
			
				<?php if ($title) : ?>
					<h3><?php echo esc_html($title); ?></h3>
				<?php endif; ?>

				<?php if ($content) : ?>
					<p><?php echo esc_html($content); ?></p>
				<?php endif; ?>
				
				<div class="page-builder__text-block-image__buttons">
					<p class="button">
						<a href="<?php echo $button_link ?>"><?php echo $button_text ?><span></span></a>
					</p>
				</div>
				
			</div>

		<?php endwhile; ?>
	
	
	</div>
	
</section>

<?php
endif;
wp_reset_postdata();
?>
