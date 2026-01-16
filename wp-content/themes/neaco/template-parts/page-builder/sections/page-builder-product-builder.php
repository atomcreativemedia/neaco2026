<?php
if(get_sub_field('pb_product_builder_section_id')) {
	$pb_product_builder_section_id = get_sub_field('pb_product_builder_section_id');
} else {
	$pb_product_builder_section_id = '';
}

if(get_sub_field('pb_product_builder_content_colour')) {
	$pb_product_builder_content_colour = get_sub_field('pb_product_builder_content_colour');
} else {
	$pb_product_builder_content_colour = 'dark';
}

$product_code = get_sub_field('pb_product_builder_product_code');

if(get_sub_field('pb_product_builder_main_image')) {
	$main_image = get_sub_field('pb_product_builder_main_image');
	// vars
	$main_image_url = $main_image['url'];
	$main_image_alt = $main_image['alt'];
	$main_image_title = $main_image['title'];
}

$spec_item_id = generateRandomString(6);
$image_height_class = generateRandomString(6);
?>
<script type="text/javascript">
    var builderInstanceId = '<?= esc_html($product_code); ?>';
</script>
<section class="page-builder__product-builder" id="<?= esc_attr($pb_product_builder_section_id); ?>" style="background-color:<?php the_sub_field('pb_product_builder_section_background_colour'); ?>;">
	<div class="container">
		<?php if (get_sub_field('pb_product_builder_introduction_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 text-center">
				<div class="page-builder__product-builder__intro page-builder__product-builder__intro--<?= esc_attr($pb_product_builder_content_colour); ?>">
					<?php the_sub_field('pb_product_builder_introduction_content') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if( have_rows('pb_product_builder_components') ) :
			while( have_rows('pb_product_builder_components') ) : the_row();
				$component_code = get_sub_field('pb_product_builder_component_code');
				$components_order .= $component_code . '_';
			endwhile;
			$components_order = rtrim($components_order, '_'); ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-12">
				<div class="page-builder__product-builder__main-content" data-components-order="<?= esc_attr($components_order); ?>">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="page-builder__product-builder__slider-pager">
								
							</div>
						</div>
						<div class="col-12 col-md-4 col-xl-3">
							<div class="page-builder__product-builder__slider">
								<?php $i = 1; while( have_rows('pb_product_builder_components') ) : the_row(); $component_code = get_sub_field('pb_product_builder_component_code'); ?>
								<div class="page-builder__product-builder__component-slide component-slide">
									<h2 class="page-builder__product-builder__component-title"><?php the_sub_field('pb_product_builder_component_title'); ?></h2>
									<?php if( have_rows('pb_product_builder_component_options') ) : ?>
									<div class="page-builder__product-builder__component-thumbs">
										<div class="row gx-1 gx-md-4">
											<?php
												$j = 1; while( have_rows('pb_product_builder_component_options') ) : the_row();
												$option_code = get_sub_field('pb_product_builder_component_options_option_code');
												
                                                $compatible_options = array();
                                                if( have_rows('pb_product_builder_component_options_option_compatible_options') ):
                                                    while( have_rows('pb_product_builder_component_options_option_compatible_options') ) : the_row();
                                                        $compatible_option_code = get_sub_field('compatible_option_code');
                                                        $compatible_options[] = $compatible_option_code;
                                                    endwhile;
                                                endif;
                                                $compatible_options_string = implode(',', $compatible_options);
											?>
											<div class="col-4 col-md-6">
												<!-- <p><?= esc_attr($option_code); ?> Compatible options: <?= esc_attr($compatible_options_string); ?></p> -->
												<div class="page-builder__product-builder__spec-category-thumb spec-category-thumb" 
												    id="<?= esc_attr($spec_item_id); ?>_<?= $i; ?>_<?= $j; ?>"
												    data-product-code="<?= esc_attr($product_code); ?>"
												    data-component-code="<?= esc_attr($component_code); ?>"
												    data-option-code="<?= esc_attr($option_code); ?>"
												    data-spec-code="<?= esc_attr($product_code); ?><?= esc_attr($component_code); ?><?= esc_attr($option_code); ?>"
												    data-compatible="<?= esc_attr($compatible_options_string); ?>">
												    <span class="page-builder__product-builder__spec-add spec-add"
												        showdata="<?= esc_attr($spec_item_id); ?>_<?= $i; ?>_<?= $j; ?>"
												        data-component-code="<?= esc_attr($component_code); ?>"
												        data-spec-code="<?= esc_attr($product_code); ?><?= esc_attr($component_code); ?><?= esc_attr($option_code); ?>"></span>
												    <?php
												        $option_thumb = get_sub_field('pb_product_builder_component_options_option_image');
												        $size_thumb = 'thumbnail';
												        $thumb = $option_thumb['sizes'][ $size_thumb ];
												        $title = get_sub_field('pb_product_builder_component_options_option_title');
												    ?>
												    <img src="<?= esc_url($thumb); ?>" alt="" class="page-builder__product-builder__spec-category-img img-fluid">
												    <div class="page-builder__product-builder__spec-image-title">
												        <?= esc_html($title); ?><!-- , <?= esc_html($option_code); ?> -->
												    </div>
												</div>
												
											</div>
											<?php $j++; endwhile; ?>
										</div>
									</div>
									<?php endif; ?>
								</div>
								<?php $i++; endwhile; ?>
							</div>
						</div>
						<div class="col-12 col-md-8 col-xl-9 mb-3 mb-md-0 pt-4">
							<div class="page-builder__product-builder__main-image bg-img" <?= isset($main_image_url) ? 'background-image:url(' . $main_image_url . ');' : '' ?>>
								<?php $i = 1; while( have_rows('pb_product_builder_components') ): the_row(); $component_code = get_sub_field('pb_product_builder_component_code'); ?>
									<?php if( have_rows('pb_product_builder_component_options') ) : ?>
										<?php $j = 1; while( have_rows('pb_product_builder_component_options') ) : the_row(); $option_code = get_sub_field('pb_product_builder_component_options_option_code'); ?>
										<?php
											if(get_sub_field('pb_product_builder_component_options_option_image')) {
												$option_image = get_sub_field('pb_product_builder_component_options_option_image');
												$size_large = 'large';
												$large = $option_image['sizes'][ $size_large ];
											}
											$component_map = [
												'A1' => 'stanchion',
												'B1' => 'stanchion',
												'A2' => 'connector',
												'B2' => 'connector',
												'A3' => 'fixing',
												'B3' => 'fixing',
												'A4' => 'infill',
												'B4' => 'infill',
											];
											$component_class = $component_map[$component_code] ?? null;
										?>
											<div class="page-builder__product-builder__desc-image page-builder__product-builder__desc-image--<?= esc_attr($component_class); ?> spec-display bg-img<?php if(!isset($option_image)) : ?> img-null<?php endif; ?>"
												<?php if(isset($option_image)) : ?> style="background-image:url(<?= esc_url($large); ?>);"<?php endif; ?>
												data-component-code="<?= esc_attr($component_code); ?>"
												data-spec-code="<?= esc_attr($product_code); ?><?= esc_attr($component_code); ?><?= esc_attr($option_code); ?>"
												showdata="<?= esc_attr($spec_item_id); ?>_<?= $i; ?>_<?= $j; ?>">
												
											</div>
										<?php $j++; endwhile; ?>
									<?php endif; ?>
								<?php $i++; endwhile; ?>
							</div>
							<div class="page-builder__product-builder__download-pack text-center text-md-end">
								<?php if (is_user_logged_in()) : ?>
									<p id="downloadProductPack" class="button" data-main-product-code="<?= esc_attr($product_code); ?>"><a href="#">Download Your Product Pack</a></p>
									<p id="unavailableNotification" style="display: none;"></p>
									<!-- <p>Product pack file string: <strong>product_pack_<span id="packString"></span>.zip</strong></p> -->
								<?php else : ?>
									<p class="login-click button green-grey"><a href="">Please Log In to Download</a></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>