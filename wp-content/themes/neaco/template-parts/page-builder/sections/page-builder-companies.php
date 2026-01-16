<?php
if(get_field('companies_section_id')) {
	$companies_section_id = get_field('companies_section_id');
} else {
	$companies_section_id = '';
}
?>
<section class="front-page__companies <?= esc_attr($pb_text_block_section_padding); ?>" id="<?= esc_attr($pb_text_block_section_id); ?>" style="background-color:<?= esc_attr($pb_text_block_section_background_colour); ?>;">
	<?php if (get_field('companies_introduction','option')): ?>
	<div class="container">
		<div class="row justify-content-center justify-content-md-center">
			<div class="col-11 col-md-6">
				<div class="front-page__companies__intro text-center">
					<?php the_field('companies_introduction','option') ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if( have_rows('companies','option') ) :
		$companies = get_field( 'companies','option' );
		if ( is_array( $companies ) ) :
			shuffle( $companies ); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col col-md-12 col-lg-11 col-xxl-10">
				<div class="front-page__companies__items">
					<?php foreach ($companies as $company ) : ?>
					<div class="front-page__companies__item popIn">
						<img src="<?php echo $company['logo_image']['url']; ?>" alt="<?php echo $company['logo_image']['alt']; ?>" title="<?php echo $company['logo_image']['title']; ?>" class="front-page__companies__item-logo img-fluid">
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
		<?php endif;
	endif; ?>
</section>