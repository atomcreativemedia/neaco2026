<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if( have_rows('prodcat_faqs',$category) ) :
?>
	<section class="product-range__faqs">
		
		<?php $faqs = get_field( 'prodcat_faqs',$category );
			if ( is_array( $faqs ) ) : ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-11 col-lg-8">
					<div class="product-range__faqs__faqs">
						<div class="row justify-content-center">
							<?php foreach ($faqs as $faq ) : ?>
							<div class="product-range__faqs__faq faq">
								<div class="product-range__faqs__faq-q faq-q">
									<span><?= $faq['prodcat_faqs__faq_q']; ?></span>
									<div class="plus-minus-toggle"></div>
								</div>
								<div class="product-range__faqs__faq-a faq-a active">
									<?= $faq['prodcat_faqs__faq_a']; ?>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<?php endif; ?>
	</section>
<?php endif; ?>