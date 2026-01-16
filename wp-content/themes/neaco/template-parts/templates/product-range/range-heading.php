<?php
	$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	
	$background_image = get_field('title_page_heading_background_image', $category);
		$background_image_url = $background_image['url'];
		$background_image_size = 'large';
		$large = $background_image['sizes'][ $background_image_size ];
	if(get_field('title_page_range_title', $category)) {
		$range_title = get_field('title_page_range_title', $category);
	} else {
		$range_title = get_the_category( $category );
		$range_title = $category->name;
	}
	if(get_field('title_page_range_subheading', $category)) {
		$title_page_range_subheading = get_field('title_page_range_subheading', $category);
	}
	if(get_field('title_page_content', $category)) {
		$content = get_field('title_page_content', $category);
	}
	
	if(get_field('title_page_nav', $category)) {
		$page_nav_items = get_field('title_page_nav', $category);
	}
?>
<section class="product-range__heading" id="product-range-heading">
	<div class="product-range__heading__background bg-img" style="background-image:url(<?php echo esc_url($background_image_url); ?>);">
		<div class="product-range__heading__overlay">
			<div class="container-fluid">
				<div class="row justify-content-start">
					<div class="col-10 col-lg-8 col-xl-7 offset-md-1">
						<div class="product-range__heading__content product-range__heading__content-- text-start">
							<?php
								if(isset($range_title)) {
									echo '<h1>'.$range_title.'</h1>';
								}
								if(isset($title_page_range_subheading)) {
									echo '<h2>'.$title_page_range_subheading.'</h2>';
								}
								if(isset($content)) {
									echo $content;
								}
							?>
							<?php if( have_rows('title_page_buttons', $category) ) : ?>
							<div class="product-range__heading__buttons">
								<?php while( have_rows('title_page_buttons', $category) ) : the_row(); ?>
								<p class="button"><a href="<?php the_sub_field('title_page_buttons_button_destination'); ?>"><?php the_sub_field('title_page_buttons_button_text'); ?></a></p>
								<?php endwhile; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php if(isset($page_nav_items)) : ?>
	<div class="product-range__heading__nav-container">
		<div class="container-fluid">
			<div class="row justify-content-lg-center">
				<div class="col col-lg-10">
					<div class="product-range__heading__nav">
						<div class="product-range__heading__nav-open"><span>Jump to a Section</span></div>
						<ul class="product-range__heading__nav-items">
	    			    	<?php foreach ($page_nav_items as $page_nav_item) :
								$label = $page_nav_item['title_page_nav_label'];
								$dest_id = $page_nav_item['title_page_nav_dest_id']; ?>
							<li class="product-range__heading__nav-item"><a href="#<?= esc_attr($dest_id); ?>"><?= esc_html($label); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
</section>