<?php get_header(); ?>

<?php if (has_post_thumbnail()) {
	$image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
	if(get_field('title_page_heading_background_image')) {
		$image = get_field('title_page_heading_background_image');
		if ($image) {
			$image_url = $image['sizes']['large'] ?? '';
		}
	} else {
		$image_url = '';
	}
}
$latest_news_link = get_field('top_bar_latest_news_link', 'option');
if (!$latest_news_link) {
    $latest_news_link = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '#';
}
?>

<main class="news-post">
	<?php $section_id = get_field('title_page_heading_section_id') ?: 'page-heading'; ?>
	<section class="page-heading" id="<?= esc_attr($section_id); ?>">
		<div class="page-heading__background-splash page-heading__background-splash--image simple-heading">
			<?php if (!empty($image_url)) : ?>
				<div class="page-heading__splash-item page-heading__splash-item--image bg-img" style="background-image:url(<?= esc_url($image_url); ?>);"></div>
			<?php endif; ?>
			<div class="page-heading__overlay--simple-heading"></div>
		</div>
		
		<div class="page-heading__content page-heading__content--padding-small">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="page-heading__content-container text-start">
							<p class="news-post__header-back"><a href="<?= esc_url($latest_news_link); ?>"><i class="far fa-chevron-left"></i> Go back</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="news-post__post-header pt-5 pb-3">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-12 col-lg-6">
					<div class="news-post__post-date">
						<?php $date = get_the_date('d/m/Y'); ?>
						<?= esc_html($date); ?>
					</div>
					<div class="news-post__post-utilities d-flex justify-content-between align-items-center">
						<div class="news-post__post-share">
							<?php
							$post_url = urlencode(get_permalink());
							$post_title = urlencode(get_the_title());
							$whatsapp_message = urlencode(get_the_title() . ' ' . get_permalink());
							$instagram_profile = 'https://instagram.com/neacolimited';
							
							$email_subject = rawurlencode(get_the_title());
							$email_body = rawurlencode(get_the_title() . "\n" . get_permalink());
							?>
							<ul class="news-post__post-share-list list-inline">
								<li class="news-post__post-share-item list-inline-item">SHARE:</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?= $post_url; ?>" target="_blank" rel="noopener" title="Share on Facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="https://twitter.com/intent/tweet?url=<?= $post_url; ?>&text=<?= $post_title; ?>" target="_blank" rel="noopener" title="Share on Twitter">
										<i class="fab fa-x-twitter"></i>
									</a>
								</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="<?= esc_url($instagram_profile); ?>" target="_blank" rel="noopener" title="View on Instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $post_url; ?>&title=<?= $post_title; ?>" target="_blank" rel="noopener" title="Share on LinkedIn">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="https://api.whatsapp.com/send?text=<?= $whatsapp_message; ?>" target="_blank" rel="noopener" title="Share on WhatsApp">
										<i class="fab fa-whatsapp"></i>
									</a>
								</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="mailto:?subject=<?= $email_subject; ?>&body=<?= $email_body; ?>" title="Share via Email">
										<i class="fas fa-envelope"></i>
									</a>
								</li>
								<li class="news-post__post-share-item list-inline-item">
									<a href="#" class="js-share-trigger" title="Share">
										<i class="fas fa-share-square"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="news-post__post-categories">
							<?php $categories = get_the_category();
							if (!empty($categories)) {
								foreach ($categories as $category) {
									printf(
										'<a class="news-post__post-category" href="%s" alt="%s">%s</a>',
										esc_url(get_term_link($category->term_id)),
										esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
										esc_html($category->name)
									);
								}
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
		$main_article_section_id = get_field('main_article_section_id') ?: 'leading-content';
		$leading_images = get_field('main_article_leading_images');
	    $images = array_filter([
    		'main_article_image_1' => $leading_images['main_article_image_1'] ?? '',
    		'main_article_image_2' => $leading_images['main_article_image_2'] ?? '',
    		'main_article_image_3' => $leading_images['main_article_image_3'] ?? ''
    	]);
    	$image_count = count($images);
	?>
	<section class="news-post__leading-content news-post__leading-content--post-type-post" id="<?= esc_attr($main_article_section_id); ?>">
		<div class="container">
			<div class="row justify-content-center">
				<?php $article_col_class = 'col-11 col-sm-10 col-lg-12';
				if ($image_count > 0) :
					$article_col_class = 'col-11 col-sm-10 col-lg-6'; ?>
				<div class="'col-11 col-sm-10 col-lg-6">
					<div class="news-post__leading-images">
						<div class="row g-2">
							<?php
								$index = 1;
								foreach ($images as $key => $image_url) :
									if ($image_count === 1) {
										$img_col_class = 'col-12';
									} elseif ($image_count === 2) {
										$img_col_class = 'col-6';
									} elseif ($image_count === 3 && $index === 1) {
										$img_col_class = 'col-12';
									} else {
										$img_col_class = 'col-6';
									}
							?>
								<div class="<?= esc_attr($img_col_class); ?>">
									<div class="news-post__leading-image news-post__leading-image--image-<?= $index; ?> bg-img" style="background-image:url(<?= esc_url($image_url); ?>);"></div>
								</div>
							<?php
								$index++;
								endforeach;
							?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<div class="<?= esc_attr($article_col_class); ?>">
					<article class="news-post__leading-article">
						<h1 class="news-post__post-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>
				</div>
			</div>
		</div>
	</section>
	
	<?php if (have_rows('page_builder_content_blocks')) {
		get_template_part('template-parts/page-builder/page-builder');
	} ?>

	<?php
	$categories = get_the_category(get_the_ID());
	if ($categories) :
		$category_ids = wp_list_pluck($categories, 'term_id');

		$args = [
			'category__in' => $category_ids,
			'post__not_in' => [get_the_ID()],
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 2,
			'orderby' => 'rand',
		];

		$relatedPosts = new WP_Query($args);

		if ($relatedPosts->have_posts()) : ?>
		<section class="news-post__related-posts">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="news-post__related-posts__introduction">
							<h3><strong>Related</strong> Posts</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="news-page__posts-list">
						<?php while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
							$post_image_url = has_post_thumbnail() 
								? get_the_post_thumbnail_url($post->ID, 'large') 
								: (get_field('title_page_heading_background_image', $post->ID) ? get_field('title_page_heading_background_image')['sizes']['large'] : '');

							$excerpt = get_the_excerpt( $post->ID ); ?>
							<div class="news-page__post bg-img" style="background-image:url(<?= esc_url($post_image_url); ?>);">
								
								<div class="news-page__post-overlay news-page__post-overlay--overlay-1"></div>
								<div class="news-page__post-overlay news-page__post-overlay--overlay-2"></div>
								
								<div class="news-page__post-content">
									<div class="news-page__post-content-header">
										<div class="news-page__post-meta">
											<div class="news-page__post-categories">
											<?php
												$categories = get_the_category();
												$output = '';
												if ( ! empty( $categories ) ) {
													foreach( $categories as $category ) {
													$output .= '<a class="news-page__post-category" href="' . esc_url( get_term_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
													}
													echo trim( $output );
												}
											?>
											</div>
										</div>
										<h3 class="news-page__post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									</div>
									
									<div class="news-page__post-content-text">
										<div class="news-page__post-desc">
											<?php echo $excerpt; ?>
										</div>
									</div>
									
									<div class="news-page__post-readmore">
										<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if (get_field('display_newsletter_section')) {
		get_template_part('template-parts/global/newsletter-section');
	} ?>
</main>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		const shareBtn = document.querySelector('.js-share-trigger');
		
		if (shareBtn && navigator.share) {
			shareBtn.addEventListener('click', function (e) {
				e.preventDefault();
				navigator.share({
					title: document.title,
					url: window.location.href
				}).catch(console.error);
			});
		} else {
			// Fallback if you like (optional)
			shareBtn?.classList.add('d-none');
		}
	});
</script>
<?php get_footer(); ?>