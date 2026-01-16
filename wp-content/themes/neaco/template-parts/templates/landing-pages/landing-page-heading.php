<?php if(get_field('title_page_heading_section_id')) {
	$title_page_heading_section_id = get_field('title_page_heading_section_id');
} else {
	$title_page_heading_section_id = 'landing-page-heading';
}
if(get_field('title_page_heading_background_image')) {
	$section_class = 'landing-page__heading bg-img';
	$background_image = get_field('title_page_heading_background_image');
} else {
	$section_class = 'landing-page__heading';
}
if(get_field('title_page_heading_foreground_image')) {
	$foreground_image = get_field('title_page_heading_foreground_image');
	// vars
	$foreground_image_url = $foreground_image['url'];
	$foreground_image_alt = $foreground_image['alt'];
	$foreground_image_title = $foreground_image['title'];
	$col_class = 'col-10 col-md-5 offset-md-1 mb-5 mb-md-0';
} else {
	$col_class = 'col-10 col-md-6 offset-md-1';
}

if(get_field('title_page_heading_overlay_colour')) {
	$title_page_heading_overlay_colour = hex2rgba(get_field('title_page_heading_overlay_colour'));
} else {
	$title_page_heading_overlay_colour = '239,242,245';
}

if(get_field('title_page_heading_overlay_strength')) {
	$title_page_heading_overlay_strength = get_field('title_page_heading_overlay_strength');
} else {
	$title_page_heading_overlay_strength = '1';
}

if(get_field('cta_button_label')) {
	$cta_button_label = get_field('cta_button_label');
} else {
	$cta_button_label = 'Start Here';
}
if(get_field('cta_button_colour')) {
	$cta_button_colour = get_field('cta_button_colour');
} else {
	$cta_button_colour = 'green-white';
}

if(get_field('title_page_content')) {
	$content = get_field('title_page_content');
}

if(get_field('title_page_heading_content_colour')) {
	$title_page_heading_content_colour = get_field('title_page_heading_content_colour');
} else {
	$title_page_heading_content_colour = '#3b4752';
}
if(get_field('title_page_heading_highlight_colour')) {
	$title_page_heading_highlight_colour = get_field('title_page_heading_highlight_colour');
} else {
	$title_page_heading_highlight_colour = '#aac642';
}
?>
<style>
	header.landing-page__header.scrolled {
		background-color: rgb(<?= $title_page_heading_overlay_colour; ?>);
	}
	.landing-page__heading__content h1,
	.landing-page__heading__content h2,
	.landing-page__heading__content h3,
	.landing-page__heading__content h5,
	.landing-page__heading__content p,
	.landing-page__heading__content ul li {
		color: <?= $title_page_heading_content_colour; ?>;
	}
	.landing-page__heading__content a,
	.landing-page__heading__content h4,
	.landing-page__heading__content h6,
	.landing-page__heading__content ul li i {
		color: <?= $title_page_heading_highlight_colour; ?>;
	}
</style>
<?php get_template_part('template-parts/templates/landing-pages/landing-page-drawer'); ?>
<header class="landing-page__header sticky-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 col-md-3">
                <div class="landing-page__header-logo-container sticky-header">
					<?php
					if(get_field('title_page_heading_main_logo')) :
						$header_logo = get_field('title_page_heading_main_logo');
						// vars
						$header_logo_url = $header_logo['url'];
						$header_logo_alt = $header_logo['alt'];
						$header_logo_title = $header_logo['title'];
					?>
					<img src="<?php echo $header_logo_url; ?>" alt="<?php echo $header_logo_alt; ?>" title="<?php echo $header_logo_title; ?>" class="img-fluid">
					<?php else : ?>
					<?php the_field('website_name','option'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-6 col-md-9 text-end">
				<p class="form-click button--cta button--cta--reduce <?= $cta_button_colour; ?>"><a><?= $cta_button_label; ?></a></p>
            </div>
		</div>
	</div>
</header>
<section class="<?= $section_class; ?>" id="<?= $title_page_heading_section_id; ?>"<?php if(isset($background_image)) : ?> style="background-image:url(<?= $background_image; ?>);"<?php endif; ?>>
	<div class="landing-page__heading__overlay" style="background-color:rgba(<?= $title_page_heading_overlay_colour; ?>,<?= $title_page_heading_overlay_strength; ?>);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="<?= $col_class; ?>">
					<div class="landing-page__heading__content">
						<?php if(isset($content)) : ?>
						<?= $content; ?>
						<?php endif;
						if( have_rows('title_page_content_bullet_points') ) : ?>
						<ul class="fa-ul">
						<?php while( have_rows('title_page_content_bullet_points') ) : the_row(); ?>
							<li><span class="fa-li"><i class="fa-solid fa-check"></i></span><?php the_sub_field('title_page_content_bullet_points_bullet_point'); ?></li>
						<?php endwhile; ?>
						</ul>
						<?php endif; ?>
						<p class="form-click button--cta <?= $cta_button_colour; ?> mt-5"><a href="#"><?= $cta_button_label; ?></a></p>
					</div>
				</div>
				<?php if(isset($foreground_image)) : ?>
				<div class="col-10 col-md-4 offset-md-1">
					<div class="landing-page__heading__image">
						<img src="<?= $foreground_image_url; ?>" alt="" class="img-fluid">
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>