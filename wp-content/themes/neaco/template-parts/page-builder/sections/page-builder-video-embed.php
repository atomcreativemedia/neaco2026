<?php
if(get_sub_field('pb_video_embed_section_id')) {
	$pb_video_embed_section_id = get_sub_field('pb_video_embed_section_id');
} else {
	$pb_video_embed_section_id = '';
}

if(get_sub_field('pb_video_embed_section_background_colour')) {
	$pb_video_embed_section_background_colour = get_sub_field('pb_video_embed_section_background_colour');
} else {
	$pb_video_embed_section_background_colour = '#ffffff';
}

if(get_sub_field('pb_video_embed_content_colour')) {
	$pb_video_embed_content_colour = get_sub_field('pb_video_embed_content_colour');
} else {
	$pb_video_embed_content_colour = 'dark';
}

if(get_sub_field('pb_video_embed_section_padding')) {
	$pb_video_embed_section_padding = get_sub_field('pb_video_embed_section_padding');
} else {
	$pb_video_embed_section_padding = 'pad';
}
?>
<section class="page-builder__video-embed <?= $pb_video_embed_section_padding; ?>" id="<?= $pb_video_embed_section_id; ?>" style="background-color:<?= $pb_video_embed_section_background_colour; ?>;">
	<div class="container">
		<div class="row justify-content-center mb-4">
			<div class="col-10 text-center">
				<div class="page-builder__video-embed__intro-text content-colour--<?= $pb_video_embed_content_colour; ?>">
					<?php the_sub_field('pb_video_embed_intro_text'); ?>
				</div>
			</div>
		</div>
		
		<div class="row justify-content-center">
			<div class="col-10 col-lg-8 text-center">
				<div class="page-builder__video-embed__container page-builder__video-embed__container--<?php the_sub_field('pb_video_embed_embed_source'); ?>">
					<?php
					    $iframe_src = 'https://';
					    $iframe_allow = 'autoplay; picture-in-picture; clipboard-write;';
					    $video_id = esc_attr(get_sub_field('pb_video_embed_video_id'));
					    $embed_source = get_sub_field('pb_video_embed_embed_source');
					    
					    if ($embed_source === 'vimeo') {
					        $iframe_src .= 'player.vimeo.com/video/' . $video_id . '?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479';
					    } else {
					        $iframe_src .= 'www.youtube.com/embed/' . $video_id;
					        $iframe_allow .= ' accelerometer; encrypted-media; gyroscope; web-share';
					    }
					    
					    $iframe_src = esc_url($iframe_src);
					    $iframe_allow = esc_attr($iframe_allow);
					?>
					<iframe 
					    src="<?= $iframe_src; ?>" 
					    frameborder="0" 
					    allow="<?= $iframe_allow; ?>" 
					    <?php if ($embed_source === 'youtube') : ?>referrerpolicy="strict-origin-when-cross-origin"<?php endif; ?>>
					</iframe>
				</div>
			</div>
		</div>
	</div>
</section>