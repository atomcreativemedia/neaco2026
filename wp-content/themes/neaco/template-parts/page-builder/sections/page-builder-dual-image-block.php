<?php
$section_id = get_sub_field('pb_dual_image_block_section_id') ?: '';
$section_background_colour = get_sub_field('pb_dual_image_block_section_background_colour') ?: 'rgb(255,255,255)';
$section_padding = get_sub_field('pb_dual_image_block_section_padding') ?: 'pad';

$image_1 = get_sub_field('pb_dual_image_block_image_1');
$image_2 = get_sub_field('pb_dual_image_block_image_2');
if ($image_1 && $image_2) :
?>
<section class="page-builder__dual-image-block <?= esc_attr($section_padding); ?>" id="<?= esc_attr($section_id); ?>" style="background-color:<?= esc_attr($section_background_colour); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="page-builder__dual-image-block__image page-builder__dual-image-block__image--image-1 bg-img" style="background-image:url(<?= esc_url($image_1); ?>);"></div>
			</div>
			<div class="col-6">
				<div class="page-builder__dual-image-block__image page-builder__dual-image-block__image--image-2 bg-img" style="background-image:url(<?= esc_url($image_2); ?>);"></div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>