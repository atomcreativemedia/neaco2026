<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if( have_rows('prodcat_companies_repeater',$category) ) :
?>
	<section class="product-range__companies">
		<?php if (get_field('prodcat_companies_introduction',$category)): ?>
		<div class="container">
			<div class="row justify-content-center justify-content-md-center">
				<div class="col-11 col-md-6">
					<div class="product-range__companies__intro text-center">
						<?php the_field('prodcat_companies_introduction',$category) ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php $companies = get_field( 'prodcat_companies_repeater',$category );
			if ( is_array( $companies ) ) :
				shuffle( $companies ); ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col col-md-12 col-lg-11 col-xxl-10">
					<div class="product-range__companies__items">
						<?php foreach ($companies as $company ) : ?>
						<div class="product-range__companies__item popIn">
							<img src="<?php echo $company['prodcat_companies_repeater_logo_image']['url']; ?>" alt="<?php echo $company['prodcat_companies_repeater_logo_image']['alt']; ?>" title="<?php echo $company['prodcat_companies_repeater_logo_image']['title']; ?>" class="product-range__companies__item-logo img-fluid">
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</section>
<?php endif; ?>