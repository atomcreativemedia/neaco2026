<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
if(get_field('description',$category)) {
	$description = get_field('description', $category);
}
if (isset($description)) :
?>
<section class="product-range__description">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-8">
				<article>
					<?= $description; ?>
				</article>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>