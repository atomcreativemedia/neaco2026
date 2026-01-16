<?php
if(get_sub_field('pb_color_range_section_id')) {
	$pb_color_range_section_id = get_sub_field('pb_color_range_section_id');
} else {
	$pb_color_range_section_id = '';
}
if(get_sub_field('pb_color_range_section_background_colour')) {
	$pb_color_range_section_background_colour = get_sub_field('pb_color_range_section_background_colour');
} else {
	$pb_color_range_section_background_colour = '#EFF2F5';
}
if(get_sub_field('pb_color_range_introduction_content')) {
	$pb_color_range_introduction_content = get_sub_field('pb_color_range_introduction_content');
}
?>
<section class="page-builder__colour-range" id="<?= esc_attr($pb_color_range_section_id); ?>" style="background-color:<?= esc_attr($pb_color_range_section_background_colour); ?>;">
	<div class="container">
		<?php if ($pb_color_range_introduction_content): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 text-center">
				<div class="page-builder__colour-range__intro page-builder__colour-range__intro--<?php the_sub_field('pb_color_range_content_colour'); ?>">
					<?= wp_kses_post($pb_color_range_introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if (get_sub_field('pb_color_range_set') == 'balustrade') {
			$options = get_field('handrail_balustrade_colour_range','option');
			if(get_field('handrail_balustrade_colour_range_label_placement','option')) {
				$label_placement = get_field('handrail_balustrade_colour_range_label_placement','option');
			} else {
				$label_placement = 'outside';
			}
			
		} elseif (get_sub_field('pb_color_range_set') == 'flooring') {
			$options = get_field('flooring_colour_range','option');
			if(get_field('flooring_colour_range_label_placement','option')) {
				$label_placement = get_field('flooring_colour_range_label_placement','option');
			} else {
				$label_placement = 'outside';
			}
		} elseif (get_sub_field('pb_color_range_set') == 'freedom') {
			$options = get_field('adaptive_bathing_freedom_colour_range','option');
			if(get_field('adaptive_bathing_freedom_colour_range_label_placement','option')) {
				$label_placement = get_field('adaptive_bathing_freedom_colour_range_label_placement','option');
			} else {
				$label_placement = 'outside';
			}
		} elseif (get_sub_field('pb_color_range_set') == 'alutec') {
			$options = get_field('adaptive_bathing_alutec_colour_range','option');
			if(get_field('adaptive_bathing_alutec_colour_range_label_placement','option')) {
				$label_placement = get_field('adaptive_bathing_alutec_colour_range_label_placement','option');
			} else {
				$label_placement = 'outside';
			}
		} elseif (get_sub_field('pb_color_range_set') == 'custom') {
			$options = get_sub_field('pb_color_range_colour_options');
			if(get_sub_field('pb_colour_range_label_placement')) {
				$label_placement = get_sub_field('pb_colour_range_label_placement');
			} else {
				$label_placement = 'outside';
			}
		} ?>
		
		<?php if( $options ) : ?>
		<div class="row">
			<div class="col">
				<div class="page-builder__colour-range__range-container">
					<div class="row justify-content-center">
						<?php foreach( $options as $option ) :
							$use_image_instead = $option['pb_color_range_use_image_instead'];
							$colour = $option['pb_color_option_colour'];
							$image = $option['pb_color_option_image'];
							$colour_name = $option['pb_color_option_colour_name'];
							$ral = $option['pb_color_option_ral'];
							$text_colour = $option['pb_color_option_text_colour'];
						?>
									
						<div class="col-6 col-md-2">
							<div class="page-builder__colour-range__range-option label-placement--<?= esc_attr($label_placement) ?>">
								<div class="page-builder__colour-range__option-swatch page-builder__colour-range__option-swatch--<?= esc_attr($text_colour); ?><?php if ($use_image_instead == 1) : ?> bg-img <?php endif; ?>"
									<?php if ($use_image_instead == 1) : ?>
									style="background-image:url(<?= esc_url($image); ?>);"
									<?php else: ?>
									style="background-color:<?= esc_attr($colour); ?>;"
									<?php endif; ?>>
									<?php if($label_placement == 'inside') : ?>
									<div class="page-builder__colour-range__option-content page-builder__colour-range__option-content--<?= esc_attr($label_placement) ?>">
										<div class="page-builder__colour-range__option-name colour-option-name"><h6><?= esc_html($colour_name); ?></h6></div>
										<?php if($ral != '') : ?><div class="page-builder__colour-range__option-ral colour-option-ral"><h6><?= esc_html($ral); ?></h6></div><?php endif; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
							<?php if($label_placement == 'outside') : ?>
							<div class="page-builder__colour-range__option-content page-builder__colour-range__option-content--<?= esc_attr($label_placement) ?> page-builder__colour-range__option-content--<?php the_sub_field('pb_color_range_content_colour'); ?>">
								<div class="page-builder__colour-range__option-name colour-option-name"><h6><?= esc_html($colour_name); ?></h6></div>
								<?php if($ral != '') : ?><div class="page-builder__colour-range__option-ral colour-option-ral"><h6><?= esc_html($ral); ?></h6></div><?php endif; ?>
							</div>
							<?php endif; ?>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			
		</div>
		<?php endif; ?>
	</div>
</section>