<?php
// Get and set ACF fields with fallbacks
$pb_text_block_section_id = get_sub_field('pb_text_block_section_id') ?: '';
$pb_text_block_section_background_colour = get_sub_field('pb_text_block_section_background_colour') ?: 'rgb(255,255,255)';
$pb_text_block_content_colour = get_sub_field('pb_text_block_content_colour') ?: 'dark';
$pb_text_block_section_padding = get_sub_field('pb_text_block_section_padding') ?: 'pad';

// Determine container width based on post type
$container_col_class = (is_single() && get_post_type() === 'post') ? 'col-11 col-lg-12' : 'col-11 col-md-10';

// Column layout and second column logic
if (get_sub_field('pb_text_block_display_2nd_column')) {
	$solo_col_class = 'col-md-6';
	$show_art_2 = true;
} else {
	$solo_col_class = 'col-md-10';
}

// Heading enhancement classes
if (get_sub_field('pb_text_block_content_heading_fancy_heading') || get_sub_field('pb_text_block_content_heading_heading_underline')) {
	$enhance_content_heading = true;
	$fancy = get_sub_field('pb_text_block_content_heading_fancy_heading');
	$underline = get_sub_field('pb_text_block_content_heading_heading_underline');

	if ($fancy && $underline) {
		$content_heading_class = 'fancy-heading heading-underline';
	} elseif ($fancy) {
		$content_heading_class = 'fancy-heading';
	} else {
		$content_heading_class = 'heading-underline';
	}
}

// Alignment defaults
$pb_text_block_column_1_content_alignment_mobile = get_sub_field('pb_text_block_column_1_content_alignment_mobile') ?: 'text-center';
$pb_text_block_column_1_content_alignment_desktop = get_sub_field('pb_text_block_column_1_content_alignment_desktop') ?: 'text-start';
$pb_text_block_column_2_content_alignment_mobile = get_sub_field('pb_text_block_column_2_content_alignment_mobile') ?: 'text-center';
$pb_text_block_column_2_content_alignment_desktop = get_sub_field('pb_text_block_column_2_content_alignment_desktop') ?: 'text-start';
?>
<section class="page-builder__text-block <?= esc_attr($pb_text_block_section_padding); ?>" id="<?= esc_attr($pb_text_block_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_section_background_colour); ?>;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="<?= esc_attr($container_col_class); ?>">
				<div class="page-builder__text-block__content content-colour--<?= esc_attr($pb_text_block_content_colour); ?>">
					<?php if (!empty($show_art_2)) : ?>
						<?php if (get_sub_field('pb_text_block_content_heading')) : ?>
							<div class="row justify-content-center">
								<div class="col-md-12 text-<?= esc_attr($pb_text_block_column_1_content_alignment_mobile); ?> text-md-<?= esc_attr($pb_text_block_column_1_content_alignment_desktop); ?>">
									<h2>
										<?php if (!empty($enhance_content_heading)) : ?>
											<span class="<?= esc_attr($content_heading_class); ?>">
										<?php endif; ?>
										<?php the_sub_field('pb_text_block_content_heading'); ?>
										<?php if (!empty($enhance_content_heading)) : ?>
											</span>
										<?php endif; ?>
									</h2>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					
					<div class="row justify-content-center">
						<div class="<?= esc_attr($solo_col_class); ?> text-<?= esc_attr($pb_text_block_column_1_content_alignment_mobile); ?> text-md-<?= esc_attr($pb_text_block_column_1_content_alignment_desktop); ?>">
							<?php the_sub_field('pb_text_block_column_1_content'); ?>
						</div>

						<?php if (!empty($show_art_2)) : ?>
							<div class="<?= esc_attr($solo_col_class); ?> text-<?= esc_attr($pb_text_block_column_2_content_alignment_mobile); ?> text-md-<?= esc_attr($pb_text_block_column_2_content_alignment_desktop); ?>">
								<?php the_sub_field('pb_text_block_column_2_content'); ?>
							</div>
						<?php endif; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
