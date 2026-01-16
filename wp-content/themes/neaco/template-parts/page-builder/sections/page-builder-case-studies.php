<?php
if(get_sub_field('pb_case_studies__section_id')) {
	$pb_case_studies__section_id = get_sub_field('pb_case_studies__section_id');
} else {
	$pb_case_studies__section_id = '';
}

$section_background_colour = get_sub_field('pb_case_studies__section_background_colour') ?: '#EFF2F5';
$intro_content_colour = get_sub_field('pb_case_studies__intro_content_colour') ?: '';
$introduction_content = get_sub_field('pb_case_studies__introduction_content') ?: '';
$categories = get_sub_field('pb_case_studies__case_study_categories');
$category_ids = [];
if ($categories) {
    foreach ($categories as $category) {
        $category_ids[] = is_object($category) ? $category->term_id : $category;
    }
}
$taxonomy = 'project_category';
$selected_args = [
    'post_type'      => 'projects',
    'posts_per_page' => 8,
    'orderby'        => 'rand',
    'tax_query'      => (!empty($category_ids)) ? [[
        'taxonomy' => $taxonomy,
        'field'    => 'term_id',
        'terms'    => $category_ids,
    ]] : [],
];
$selected_query = new WP_Query($selected_args);
$selected_count = $selected_query->found_posts;

$additional_posts_needed = max(0, 8 - $selected_count);
$additional_query = null;
$additional_posts = [];

if ($additional_posts_needed > 0) {
    $additional_args = [
        'post_type'      => 'projects',
        'posts_per_page' => $additional_posts_needed,
        'orderby'        => 'rand',
        'tax_query'      => (!empty($category_ids)) ? [[
            'taxonomy' => $taxonomy,
            'field'    => 'term_id',
            'terms'    => $category_ids,
            'operator' => 'NOT IN',
        ]] : [],
    ];

    $additional_query = new WP_Query($additional_args);
}
?>
<section class="page-builder__case-studies" id="<?= esc_attr($pb_case_studies__section_id); ?>" style="background-color:<?= esc_attr($section_background_colour); ?>;">
	<div class="container">
		<?php if ($introduction_content): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-12 text-start">
				<div class="page-builder__case-studies__intro page-builder__case-studies__intro--<?= $intro_content_colour; ?>">
					<?= wp_kses_post($introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="row justify-content-center row-cols-md-3">
			<div class="col-11 col-md-12">
				<div class="row g-2 px-1 pb-2 bg-white">
					<?php
                    function render_project_item($query, $taxonomy) {
                        while ($query->have_posts()) : $query->the_post();
                            $post_image = get_field('title_page_heading_background_image', get_the_ID());
                            $post_image_url = $post_image['url'] ?? '';
                            $post_image_size = 'large';
                            $large = $post_image['sizes'][$post_image_size] ?? '';
                            
                            $project_categories = get_the_terms(get_the_ID(), $taxonomy);
                            $category_names = [];
                            if ($project_categories && !is_wp_error($project_categories)) {
                                foreach ($project_categories as $cat) {
                                    $category_names[] = esc_html($cat->name);
                                }
                            }
                            $category_list = implode(' | ', $category_names);
                            ?>
                            
                            <div class="col-12 projects__project-item">
                                <div class="projects__project-item-bg bg-img" style="background-image:url(<?= esc_url($large); ?>);">
                                    <a class="projects__project-item-anchor project-item-anchor" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <span class="projects__project-item-overlay project-item-overlay"></span>
                                        <span class="projects__project-item-title project-item-title">
                                            <h3><?php the_title(); ?></h3>
                                                <p class="projects__project-item-categories"><?= esc_html($category_list); ?></p>
                                            <?php if (get_field('project_location')) : ?>
                                                <p class="projects__project-item-location project-item-location"><?php the_field('project_location'); ?></p>
                                            <?php endif; ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            
                        <?php endwhile;
                    }
                    
                    if ($selected_query->have_posts()) {
                        render_project_item($selected_query, $taxonomy);
                    }
                    
                    if ($additional_query && $additional_query->have_posts()) {
                        render_project_item($additional_query, $taxonomy);
                    }
                    ?>
				</div>
			</div>
		</div>
		<?php wp_reset_query(); ?>
	</div>
</section>