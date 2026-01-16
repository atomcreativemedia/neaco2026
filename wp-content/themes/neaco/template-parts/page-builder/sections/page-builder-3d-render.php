<?php
if(get_sub_field('pb_3d_render_section_id')) {
	$pb_3d_render_section_id = get_sub_field('pb_3d_render_section_id');
} else {
	$pb_3d_render_section_id = '3d-render';
}

if(get_sub_field('pb_3d_render_section_background_colour')) {
	$pb_3d_render_section_background_colour = get_sub_field('pb_3d_render_section_background_colour');
} else {
	$pb_3d_render_section_background_colour = 'rgb(255,255,255)';
}

if(get_sub_field('pb_3d_render_section_padding')) {
	$pb_3d_render_section_padding = get_sub_field('pb_3d_render_section_padding');
} else {
	$pb_3d_render_section_padding = 'pad';
}

if(get_sub_field('pb_3d_render_content')) {
	$pb_3d_render_content = get_sub_field('pb_3d_render_content');
}

if(get_sub_field('pb_3d_render_buttons')) {
	$pb_3d_render_buttons = get_sub_field('pb_3d_render_buttons');
}

if(get_sub_field('pb_3d_render_iframe_code')) {
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
	$pb_3d_render_iframe_code = get_sub_field('pb_3d_render_iframe_code');
	$sanitized_iframe_code = wp_kses($pb_3d_render_iframe_code, $allowed_html);
	
	$render_container_class = 'page-builder__render__wrapper';
	if($pb_3d_render_content) {
		$render_container_class .= ' border border-dark';
	}
}
?>
<section class="page-builder__render <?= $pb_3d_render_section_padding; ?>" id="<?= $pb_3d_render_section_id; ?>" style="background-color:<?= $pb_3d_render_section_background_colour; ?>;">
	<div class="container">
		<div class="row justify-content-center align-items-xl-center">
			
			<?php if ($pb_3d_render_content) : ?>
			<div class="col-12 col-md-12 col-xl-6 pb-5 pb-xl-0 pe-xl-5">
				<div class="page-builder__render__content">
					<?= wp_kses_post($pb_3d_render_content);
					
					if(isset($pb_3d_render_buttons)) : ?>
				    <div class="page-builder__render__content-buttons">
				    	<?php foreach ($pb_3d_render_buttons as $button) {
			    			$label = $button['pb_3d_render_button_text'];
			    			$destination = $button['pb_3d_render_button_destination'];
			    			echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
				    	} ?>
				    </div>
					<?php endif; ?>
					
					
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ($sanitized_iframe_code) : ?>
			<div class="col-12 col-md-12 col-xl-6">
				<div class="<?= esc_attr($render_container_class); ?>">
					<?= $sanitized_iframe_code; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>