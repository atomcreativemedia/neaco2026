<?php
if(get_sub_field('pb_nbs_frame_section_id')) {
	$pb_nbs_frame_section_id = get_sub_field('pb_nbs_frame_section_id');
} else {
	$pb_nbs_frame_section_id = '';
}

if(get_sub_field('pb_nbs_frame_section_background_colour')) {
	$pb_nbs_frame_section_background_colour = get_sub_field('pb_nbs_frame_section_background_colour');
} else {
	$pb_nbs_frame_section_background_colour = 'rgb(255,255,255)';
}

if(get_sub_field('pb_nbs_frame_section_padding')) {
	$pb_nbs_frame_section_padding = get_sub_field('pb_nbs_frame_section_padding');
} else {
	$pb_nbs_frame_section_padding = 'pad';
}

if(get_sub_field('pb_nbs_frame_iframe_code')) {
	$allowed_html = array(
	    'iframe' => array(
	        'src'             => array(),
	        'width'           => array(),
	        'height'          => array(),
	        'frameborder'     => array(),
	        'allow'           => array(),
	        'allowfullscreen' => array(),
	    ),
	);
	$pb_nbs_frame_iframe_code = get_sub_field('pb_nbs_frame_iframe_code');
	$sanitized_iframe_code = wp_kses($pb_nbs_frame_iframe_code, $allowed_html);
}
?>
<section class="page-builder__nbs-frame <?= esc_attr($pb_nbs_frame_section_padding); ?>" id="<?= esc_attr($pb_nbs_frame_section_id); ?>" style="background-color:<?= esc_attr($pb_nbs_frame_section_background_colour); ?>;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-12">
				<div class="page-builder__nbs-frame__content">
					<div class="page-builder__nbs-frame__wrapper">
						<?= $sanitized_iframe_code; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>