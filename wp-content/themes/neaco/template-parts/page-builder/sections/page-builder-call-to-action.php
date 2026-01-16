<?php if(is_singular( 'landing-pages' )) : ?>
<?php /*if ( is_singular( array( 'landing-pages', 'post' ) ) ) :*/ ?>

<?php
if(get_sub_field('pb_call_to_action_section_id')) {
	$pb_call_to_action_section_id = get_sub_field('pb_call_to_action_section_id');
} else {
	$pb_call_to_action_section_id = '';
}

if(get_sub_field('pb_call_to_action_section_background_colour')) {
	$pb_call_to_action_section_background_colour = get_sub_field('pb_call_to_action_section_background_colour');
} else {
	$pb_call_to_action_section_background_colour = 'rgb(255,255,255)';
}

if(get_sub_field('pb_call_to_action_content_colour')) {
	$pb_call_to_action_content_colour = get_sub_field('pb_call_to_action_content_colour');
} else {
	$pb_call_to_action_content_colour = 'dark';
}

if(get_sub_field('pb_call_to_action_section_padding')) {
	$pb_call_to_action_section_padding = get_sub_field('pb_call_to_action_section_padding');
} else {
	$pb_call_to_action_section_padding = 'pad';
}

if(get_sub_field('pb_call_to_action_button_text_setting') == 'default') {
	$pb_call_to_action_button_text = get_field('cta_button_label');
} elseif(get_sub_field('pb_call_to_action_button_text_setting') == 'custom') {
	if(get_sub_field('pb_call_to_action_button_text_custom')) {
		$pb_call_to_action_button_text = get_sub_field('pb_call_to_action_button_text_custom');
	} else {
		$pb_call_to_action_button_text = 'Start Here!';
	}
} else {
	$pb_call_to_action_button_text = 'Start Here!';
}

if(get_sub_field('pb_call_to_action_button_colour')) {
	$pb_call_to_action_button_colour = get_sub_field('pb_call_to_action_button_colour');
} else {
	$pb_call_to_action_button_colour = 'grey-white';
}

if(get_sub_field('pb_call_to_action_button_function') == 'form') {
	$pb_call_to_action_button_class = get_sub_field('pb_call_to_action_button_function').'-click';
} elseif((get_sub_field('pb_call_to_action_button_function') == 'pagelink') || (get_sub_field('pb_call_to_action_button_function') == 'customlink')) {
	if(get_sub_field('pb_call_to_action_button_function') == 'pagelink') {
		$link = get_sub_field('pb_call_to_action_button_link_page');
	} elseif(get_sub_field('pb_call_to_action_button_function') == 'customlink') {
		$link = get_sub_field('pb_call_to_action_button_link_custom');
	}
} else {
	$pb_call_to_action_button_class = 'form-click';
}
?>
<section class="page-builder__call-to-action <?= $pb_call_to_action_section_padding; ?>" id="<?= $pb_call_to_action_section_id; ?>" style="background-color:<?= $pb_call_to_action_section_background_colour; ?>;">
	<div class="container">
		<div class="page-builder__call-to-action__content content-colour--<?= $pb_call_to_action_content_colour; ?>">
			<div class="row justify-content-center align-items-center">
				<div class="col-10 col-md-5 mb-5 mb-md-0 text-center text-md-start">
					<?php if (get_sub_field('pb_call_to_action_content')) { the_sub_field('pb_call_to_action_content'); } ?>
					
					<?php if (get_sub_field('pb_call_to_action_add_button')): ?>
					<p class="button <?= $pb_call_to_action_button_colour; if(isset($pb_call_to_action_button_class)) : ?> <?= $pb_call_to_action_button_class; endif;?>"><a<?php if(!isset($pb_call_to_action_button_class)) : ?> href="<?= $link; ?>"<?php endif; ?>><?= $pb_call_to_action_button_text; ?></a></p>
					<?php endif; ?>
					
				</div>
				<div class="col-10 col-md-4 offset-md-1">
					<?php $pb_call_to_action_image = get_sub_field('pb_call_to_action_image');
					// vars
					$pb_call_to_action_image_url = $pb_call_to_action_image['url'];
					$pb_call_to_action_image_alt = $pb_call_to_action_image['alt'];
					$pb_call_to_action_image_title = $pb_call_to_action_image['title']; ?>
					<img src="<?= $pb_call_to_action_image_url; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>