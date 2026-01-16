<?php
if(get_sub_field('newsletter_section_id')) {
	$newsletter_section_id = get_sub_field('newsletter_section_id');
} else {
	$newsletter_section_id = 'newsletter-section';
}
?>
<section class="newsletter" id="<?php echo $newsletter_section_id; ?>">
	<div class="container">
		<div class="row justify-content-center">
			<?php if(get_field('newsletter_introduction','option')) : ?>
			<div class="col-10 col-md-4">
				<?php the_field('newsletter_introduction','option'); ?>
			</div>
			<?php endif; ?>
			<?php
			if(get_field('newsletter_form_id','option')) :
				$form = get_field('newsletter_form_id','option');
			?>
			<div class="col-10 col-md-4">
				<?php gravity_form($form['id'], false, false, false, '', true); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>