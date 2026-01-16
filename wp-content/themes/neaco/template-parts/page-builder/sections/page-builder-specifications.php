<?php
if(get_sub_field('pb_specifications_section_id')) {
	$pb_specifications_section_id = get_sub_field('pb_specifications_section_id');
} else {
	$pb_specifications_section_id = '';
}

if(get_sub_field('pb_specifications_content_colour')) {
	$pb_specifications_content_colour = get_sub_field('pb_specifications_content_colour');
} else {
	$pb_specifications_content_colour = 'dark';
}

$main_image = get_sub_field('pb_specifications_main_image');
// vars
$main_image_url = $main_image['url'];
$main_image_alt = $main_image['alt'];
$main_image_title = $main_image['title'];

$spec_item_id = generateRandomString(6);
$image_height_class = generateRandomString(6);
?>
<section class="page-builder__specifications" id="<?= $pb_specifications_section_id; ?>" style="background-color:<?php the_sub_field('pb_specifications_section_background_colour'); ?>;">
	<div class="container">
		<?php if (get_sub_field('pb_specifications_introduction_content')): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 text-center">
				<div class="page-builder__specifications__intro page-builder__specifications__intro--<?= $pb_specifications_content_colour; ?>">
					<?php the_sub_field('pb_specifications_introduction_content') ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if( have_rows('pb_specifications_specifications') ) : ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-12">
				<div class="page-builder__specifications__main-content">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="page-builder__specifications__slider-pager">
								
							</div>
						</div>
						<div class="col-12 col-md-4 col-xl-3">
							<div class="page-builder__specifications__specs">
								<div class="page-builder__specifications__slider">
									<?php $i = 1; while( have_rows('pb_specifications_specifications') ) : the_row(); ?>
									<div class="page-builder__specifications__spec-category-slide spec-category-slide">
										<h2 class="page-builder__specifications__spec-category-slide-title"><?php the_sub_field('pb_specifications_specification_title'); ?></h2>
										<?php if( have_rows('pb_specifications_specification_images') ) : ?>
										<div class="page-builder__specifications__spec-category-thumbs">
											<div class="row gx-1 gx-md-4">
												<?php $j = 1; while( have_rows('pb_specifications_specification_images') ) : the_row(); ?>
												<div class="col-3 col-md-6">
													<div class="page-builder__specifications__spec-category-thumb spec-category-thumb" id="<?= $spec_item_id; ?>_<?= $i; ?>_<?= $j; ?>">
														<?php
														$spec_image =  get_sub_field('pb_specifications_specification_images_image_thumb');
														$size_thumb = 'thumbnail';
														$thumb = $spec_image['sizes'][ $size_thumb ];
														$title = get_sub_field('pb_specifications_specification_images_image_title');
														?>
														<img src="<?php echo esc_url($thumb); ?>" alt="" class="page-builder__specifications__spec-category-img img-fluid">
														<div class="page-builder__specifications__spec-image-title">
															<?= $title; ?>
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
						</div>
						<div class="col-12 col-md-8 col-xl-9 mb-3 mb-md-0">
							<div class="page-builder__specifications__main-image bg-img" style="background-image:url(<?= $main_image_url; ?>);">
								<?php $i = 1; while( have_rows('pb_specifications_specifications') ): the_row(); ?>
									<?php if( have_rows('pb_specifications_specification_images') ) : ?>
										<?php $j = 1; while( have_rows('pb_specifications_specification_images') ) : the_row(); ?>
										<?php
											if(get_sub_field('pb_specifications_specification_images_image_image')) {
												$spec_image =  get_sub_field('pb_specifications_specification_images_image_image');
												$size_large = 'large';
												$large = $spec_image['sizes'][ $size_large ];
											}
										?>
											<div class="page-builder__specifications__desc-image spec-display bg-img<?php if(!isset($spec_image)) : ?> img-null<?php endif; ?>"<?php if(isset($spec_image)) : ?> style="background-image:url(<?php echo esc_url($large); ?>);"<?php endif; ?> showdata="<?= $spec_item_id; ?>_<?= $i; ?>_<?= $j; ?>">
											</div>
										<?php $j++; endwhile; ?>
									<?php endif; ?>
								<?php $i++; endwhile; ?>
							</div>
							<div class="page-builder__specifications__descriptions" id="specifications-descriptions">
								<?php $i = 1; while( have_rows('pb_specifications_specifications') ): the_row(); ?>
									<?php if( have_rows('pb_specifications_specification_images') ) : ?>
										<?php $j = 1; while( have_rows('pb_specifications_specification_images') ) : the_row(); ?>
										<?php
											if(get_sub_field('pb_specifications_specification_images_image_description')) {
												$desc = get_sub_field('pb_specifications_specification_images_image_description');
											}
										?>
										<?php if(isset($desc)) : ?>
											<p class="page-builder__specifications__spec-desc spec-display" showdata="<?= $spec_item_id; ?>_<?= $i; ?>_<?= $j; ?>"><?= $desc; ?></p>
										<?php else : ?>
											<p class="page-builder__specifications__spec-desc page-builder__specifications__spec-desc--empty spec-display" showdata="<?= $spec_item_id; ?>_<?= $i; ?>_<?= $j; ?>"></p>
										<?php endif; $desc = null; ?>
										<?php $j++; endwhile; ?>
									<?php endif; ?>
								<?php $i++; endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>


<script>
	$(".spec-category-thumb").click(function(){
        var specItemID = $(this).attr("id");
        var specDisplayItem = $(".spec-display[showdata="+specItemID+"]");
        var descriptionsContainer = $("#specifications-descriptions");
        var specItemDesc = $(".page-builder__specifications__spec-desc[showdata="+specItemID+"]");
        $(specDisplayItem).siblings(".spec-display").removeClass("show");
        $(specDisplayItem).toggleClass("show");
        
        var specItemDescHeight = $(specItemDesc).outerHeight();
        $(descriptionsContainer).css("height", specItemDescHeight);
        
        $(".spec-category-thumb").not(this).removeClass("active");
        if ($(this).hasClass("active")) {
        	$(this).removeClass("active");
        } else {
        	$(this).addClass("active");
        }
    });
</script>