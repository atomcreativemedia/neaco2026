<?php
if(get_sub_field('pb_faqs_section_id')) {
	$pb_faqs_section_id = get_sub_field('pb_faqs_section_id');
} else {
	$pb_faqs_section_id = '';
}

if(get_sub_field('pb_faqs_content_colour')) {
	$pb_faqs_content_colour = get_sub_field('pb_faqs_content_colour');
} else {
	$pb_faqs_content_colour = 'dark';
}
?>
<section class="page-builder__faqs" id="<?= $pb_faqs_section_id; ?>" style="background-color:<?php the_sub_field('pb_faqs_section_background_colour'); ?>;">
	<div class="container">
		<?php if (get_sub_field('pb_faqs_introduction_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-lg-12">
				<div class="page-builder__faqs__intro page-builder__faqs__intro--<?= $pb_faqs_content_colour; ?>">
					<?php the_sub_field('pb_faqs_introduction_content') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if( have_rows('pb_faqs_faqs') ) : ?>
		<div class="row justify-content-center">
			<div class="col-11 col-lg-12">
				<div class="page-builder__faqs__faqs page-builder__faqs__faqs--<?= $pb_faqs_content_colour; ?>">
					<?php while( have_rows('pb_faqs_faqs') ): the_row(); ?>
					<div class="page-builder__faqs__faq faq">
						<div class="page-builder__faqs__faq-q faq-q">
							<span><?php the_sub_field('pb_faqs_faq_question'); ?></span>
							<div class="plus-minus-toggle"></div>
						</div>
						<div class="page-builder__faqs__faq-a faq-a active">
							<?php the_sub_field('pb_faqs_faq_answer'); ?>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>