<?php
$pb_color_range_section_id = get_sub_field('pb_color_range_section_id') ?? '';
$pb_color_range_section_background_colour = get_sub_field('pb_color_range_section_background_colour') ?? '#EFF2F5';
$pb_color_range_content_colour = get_sub_field('pb_color_range_content_colour') ?? 'dark';
$pb_color_range_introduction_content = get_sub_field('pb_color_range_introduction_content');

$color_range_set = get_sub_field('pb_color_range_set');

$color_range_map = [
    'balustrade' => 'handrail_balustrade_colour_range',
    'flooring' => 'flooring_colour_range',
    'freedom' => 'adaptive_bathing_freedom_colour_range',
    'alutec' => 'adaptive_bathing_alutec_colour_range',
    'custom' => 'pb_color_range_colour_options',
];

$options = $color_range_set && isset($color_range_map[$color_range_set]) 
    ? get_field($color_range_map[$color_range_set], 'option') 
    : ($color_range_set === 'custom' ? get_sub_field('pb_color_range_colour_options') : []);
?>
<section class="page-builder__colour-range" id="<?= esc_attr($pb_color_range_section_id); ?>" style="background-color:<?= esc_attr($pb_color_range_section_background_colour); ?>;">
	<div class="container">
		<?php if ($pb_color_range_introduction_content): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 text-center">
				<div class="page-builder__colour-range__intro page-builder__colour-range__intro--<?= esc_attr($pb_color_range_content_colour); ?>">
					<?= wp_kses_post($pb_color_range_introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if( $options ) : ?>
		<div class="row">
			<div class="col">
				<div class="page-builder__colour-range__range-container">
					<div class="row justify-content-center">
						<?php foreach( $options as $option ) :
							$colour = $option['pb_color_option_colour'] ?? '';
                            $image = $option['pb_color_option_image'] ?? '';
                            $colour_name = $option['pb_color_option_colour_name'] ?? '';
                            $ral = $option['pb_color_option_ral'] ?? '';
                            $text_colour = $option['pb_color_option_text_colour'] ?? '';
                            
                            $option_class = 'page-builder__colour-range__range-option';
                            $background_style = '';
                            
                            if ($image) {
                                $option_class .= ' bg-img';
                                $background_style = ' style="background-image:url(' . esc_url($image) . ');"';
                            }
                            
                            $swatch_class = 'page-builder__colour-range__option-swatch';
                            if (!$image) {
                                $swatch_class .= ' page-builder__colour-range__option-swatch--full';
                            } ?>
						<div class="col-6 col-md-3 col-lg-2">
							<div class="<?= esc_attr($option_class); ?>"<?= $background_style; ?>>
								<?php if ($colour) : ?>
								<div class="<?= esc_attr($swatch_class); ?>" style="background-color:<?= esc_attr($colour); ?>;"></div>
								<?php endif; ?>
							</div>
							
							<div class="page-builder__colour-range__option-content page-builder__colour-range__option-content--<?= esc_attr($text_colour); ?>">
								<div class="page-builder__colour-range__option-name colour-option-name">
									<h6><?= esc_html($colour_name); ?></h6>
								</div>
								<?php if($ral) : ?>
									<div class="page-builder__colour-range__option-ral colour-option-ral">
										<h6><?= esc_html($ral); ?></h6>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>