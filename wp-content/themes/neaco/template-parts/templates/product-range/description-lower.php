<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if(get_field('description_lower',$category)) {
	$description_lower = get_field('description_lower', $category);
}
if (isset($description_lower)) :
?>
<section class="product-range__description-lower">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-8">
				<article>
					<?= $description_lower; ?>
				</article>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>