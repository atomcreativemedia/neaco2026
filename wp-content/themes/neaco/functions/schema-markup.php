<?php
add_action('wp_head', 'output_dynamic_schema_markup');
function output_dynamic_schema_markup() {
    if (is_singular() || is_tax() || is_home() || is_archive() || is_front_page()) {
        global $post;
        $schema = [];
        if (is_page_template('page-templates/template-news-page.php')) {
            $posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 5
            ]);
            $itemList = [];
            if ($posts->have_posts()) {
                while ($posts->have_posts()) {
                    $posts->the_post();
                    $image_url = '';
                    if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    } else {
                        $image = get_field('title_page_heading_background_image');
                        if ($image) {
                            $image_url = $image['sizes']['large'];
                        }
                    }
                    $itemList[] = [
                        "@type" => "BlogPosting",
                        "headline" => get_the_title(),
                        "url" => get_permalink(),
                        "datePublished" => get_the_date('c'),
                        "dateModified" => get_the_modified_date('c'),
                        "author" => [
                            "@type" => "Person",
                            "name" => get_the_author_meta('display_name'),
                            "url" => get_author_posts_url(get_the_author_meta('ID'))
                        ],
                        "image" => $image_url,
                        "description" => wp_strip_all_tags(get_the_excerpt()),
                        "mainEntityOfPage" => [
                            "@type" => "WebPage",
                            "@id" => get_permalink($post->ID)
                        ]
                    ];
                }
                wp_reset_postdata();
            }
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "Blog",
                "headline" => get_the_title($post->ID),
                "url" => get_permalink($post->ID),
                "description" => wp_strip_all_tags(get_the_excerpt($post->ID)),
                "mainEntity" => $itemList
            ];
        } elseif (is_page_template('page-templates/template-projects-page.php')) {
            $posts = new WP_Query([
                'post_type' => 'projects',
                'posts_per_page' => -1
            ]);
            $itemList = [];
            if ($posts->have_posts()) {
                while ($posts->have_posts()) {
                    $posts->the_post();
                    $image_url = '';
                    if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    }
                    $itemList[] = [
                        "@type" => "Project",
                        "name" => get_the_title(),
                        "url" => get_permalink(),
                        "image" => $image_url,
                        "description" => wp_strip_all_tags(get_the_excerpt())
                    ];
                }
                wp_reset_postdata();
            }
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "ItemList",
                "name" => get_the_title($post->ID),
                "url" => get_permalink($post->ID),
                "description" => wp_strip_all_tags(get_the_excerpt($post->ID)),
                "itemListElement" => $itemList
            ];
        } elseif (is_tax('product_category')) {
            $term = get_queried_object();
            $child_terms = get_terms([
                'taxonomy' => 'product_category',
                'parent' => $term->term_id,
                'hide_empty' => true,
            ]);
            if (!empty($child_terms)) {
                $itemList = [];
                foreach ($child_terms as $child_term) {
                    $itemList[] = [
                        "@type" => "ItemList",
                        "name" => $child_term->name,
                        "url" => get_term_link($child_term),
                        "description" => term_description($child_term->term_id, 'product_category')
                    ];
                }
            } else {
                $products = new WP_Query([
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'product_category',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ],
                    ],
                ]);
                $itemList = [];
                if ($products->have_posts()) {
                    while ($products->have_posts()) {
                        $products->the_post();
                        $image_url = '';
                        if (has_post_thumbnail()) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        }
                        $itemList[] = [
                            "@type" => "Product",
                            "name" => get_the_title(),
                            "url" => get_permalink(),
                            "image" => $image_url,
                            "description" => wp_strip_all_tags(get_the_excerpt())
                        ];
                    }
                    wp_reset_postdata();
                }
            }
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "ItemList",
                "name" => single_term_title('', false),
                "description" => term_description($term->term_id, 'product_category'),
                "url" => get_term_link($term->term_id),
                "itemListElement" => $itemList
            ];
            
            $manual_schema = get_field('prodcat_json_ld_schema_markup', $term);
            if ($manual_schema) {
                $schema = array_merge_recursive($schema, json_decode($manual_schema, true));
            }
        } elseif (is_tax('project_category')) {
            $term = get_queried_object();
            $projects = new WP_Query([
                'post_type' => 'projects',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'project_category',
                        'field' => 'slug',
                        'terms' => $term->slug,
                    ],
                ],
            ]);
            $itemList = [];
            if ($projects->have_posts()) {
                while ($projects->have_posts()) {
                    $projects->the_post();
                    $image_url = '';
                    if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    }
                    $itemList[] = [
                        "@type" => "Project",
                        "name" => get_the_title(),
                        "url" => get_permalink(),
                        "image" => $image_url,
                        "description" => wp_strip_all_tags(get_the_excerpt())
                    ];
                }
                wp_reset_postdata();
            }
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "ItemList",
                "name" => single_term_title('', false),
                "description" => term_description($term->term_id, 'project_category'),
                "url" => get_term_link($term->term_id),
                "itemListElement" => $itemList
            ];
            
            $manual_schema = get_field('projcat_json_ld_schema_markup', $term);
            if ($manual_schema) {
                $schema = array_merge_recursive($schema, json_decode($manual_schema, true));
            }
        } elseif (is_singular('products')) {
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "Product",
                "name" => get_the_title($post->ID),
                "description" => get_the_excerpt($post->ID),
                "url" => get_permalink($post->ID)
            ];
        } elseif (is_singular('projects')) {
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "Project",
                "name" => get_the_title($post->ID),
                "description" => get_the_excerpt($post->ID),
                "url" => get_permalink($post->ID)
            ];
        } elseif (is_page()) {
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "WebPage",
                "headline" => get_the_title($post->ID),
                "description" => get_the_excerpt($post->ID),
                "url" => get_permalink($post->ID)
            ];
        } elseif (is_singular('post')) {
            $description = wp_strip_all_tags(get_the_excerpt($post->ID));
            $articleBody = wp_strip_all_tags(apply_filters('the_content', get_post_field('post_content', $post->ID)));
            $image_url = '';
            if (has_post_thumbnail()) {
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            } else {
                $image = get_field('title_page_heading_background_image');
                if ($image) {
                    $image_url = $image['sizes']['large'];
                }
            }
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "BlogPosting",
                "headline" => get_the_title($post->ID),
                "description" => $description,
                "author" => [
                    "@type" => "Person",
                    "name" => get_the_author_meta('display_name', $post->post_author),
                    "url" => get_author_posts_url($post->post_author)
                ],
                "datePublished" => get_the_date('c', $post->ID),
                "dateModified" => get_the_modified_date('c', $post->ID),
                "image" => $image_url,
                "articleBody" => $articleBody
            ];
        } elseif (is_category()) {
            $term = get_queried_object();
            $posts = get_posts(['category' => $term->term_id]);
            
            $item_list = [];
            foreach ($posts as $post) {
                $image_url = '';
                if (has_post_thumbnail()) {
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                } else {
                    $image = get_field('title_page_heading_background_image');
                    if ($image) {
                        $image_url = $image['sizes']['large'];
                    }
                }
                $item_list[] = [
                    "@type" => "BlogPosting",
                    "headline" => get_the_title(),
                    "url" => get_permalink(),
                    "datePublished" => get_the_date('c'),
                    "dateModified" => get_the_modified_date('c'),
                    "author" => [
                        "@type" => "Person",
                        "name" => get_the_author_meta('display_name', $post->post_author),
                        "url" => get_author_posts_url(get_the_author_meta('ID'))
                    ],
                    "image" => $image_url,
                    "description" => wp_strip_all_tags(get_the_excerpt())
                ];
            }
            
            $schema = [
                "@context" => "https://schema.org",
                "@type" => "ItemList",
                "name" => single_cat_title('', false),
                "description" => category_description($term->term_id),
                "url" => get_category_link($term->term_id),
                "itemListElement" => $item_list
            ];
        }
        
        $manual_schema = get_field('json_ld_schema_markup', $post->ID);
        if (is_singular()) {
            $manual_schema = get_field('json_ld_schema_markup', $post->ID);
            if ($manual_schema) {
                $schema = array_merge_recursive($schema, json_decode($manual_schema, true));
            }
        }
        
        if (!empty($schema)) {
            echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
        }
    }
}