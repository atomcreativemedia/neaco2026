<?php
function neacobox_gallery_shortcode($atts) {
	$atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
        'modula'
    );

	$args = array(
        'post_type' => 'neacobox',
        'meta_query' => array(
            array(
                'key' => 'neacobox_gallery_id', // ACF field name for the unique ID
                'value' => $atts['id'],
                'compare' => '='
            )
        )
    );

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		ob_start(); // Start output buffering
		while ($query->have_posts()) {
			
			$query->the_post();
			
			$total_images = 0;
			if (have_rows('rp__neacobox_gallery')) :
			    while (have_rows('rp__neacobox_gallery')) : the_row();
			        $total_images++;
			    endwhile;
			    echo '<h1>TOTAL IMAGES: '.$total_images.'</h1>';
			endif;

            //$breakpoint = $_GET['breakpoint'] ?? 'mobile'; // Default to mobile if no breakpoint
            //$rows = calculate_dynamic_rows($total_images, $breakpoint);
			
			// Loop through the repeater field
			if (have_rows('rp__neacobox_gallery')) :
				//echo '<div class="neacobox-gallery" id="image-gallery" data-breakpoint="' . esc_attr($breakpoint) . '">';
				echo '<div class="neacobox-gallery" id="image-gallery">';
				$row_index = 0;
                $image_count = 0;
                
                /*echo '<div class="neacobox-gallery__row ' . esc_attr($rows[$row_index]['classes']) . '">';*/
				
				while (have_rows('rp__neacobox_gallery')) : the_row();
					$image = get_sub_field('rp__neacobox_gallery__item__image');
					$caption = get_sub_field('rp__neacobox_gallery__item__caption');
					$slide_desc = $caption ? '<p>' . esc_html($caption) . '</p>' : '';
					if ($image) {
						echo '<div class="neacobox-gallery__thumb-container">';
						echo '<img src="'.esc_url($image['sizes']['medium']).'"
							alt="Image"
							data-full="'.esc_url($image['sizes']['large']).'"
							data-caption="'.esc_html($slide_desc).'"
							class="neacobox-gallery__thumb">';
						echo '</div>';
					}
					$image_count++;
					// Check if the current row is complete
                    /*if ($image_count >= $rows[$row_index]['images']) {
                        echo '</div>'; // Close the current row
                        $row_index++;
                        $image_count = 0;

                        if ($row_index < count($rows)) {
                            echo '<div class="neacobox-gallery__row ' . esc_attr($rows[$row_index]['classes']) . '">';
                        }
                    }*/
				endwhile;
				
				// Close any open rows
                /*if ($image_count > 0) {
                    echo '</div>';
                }*/
				
				echo '</div>';
			endif;
		}

		wp_reset_postdata();
		
		return ob_get_clean();
	}

	return '<p>No gallery found.</p>';
}
add_shortcode('modula', 'neacobox_gallery_shortcode');


			
/*function calculate_dynamic_rows($total_images, $breakpoint = 'mobile') {
    // Define patterns for different breakpoints
    $patterns = [
        'mobile' => [3, 2],         // Mobile (max-width: 768px)
        'tablet' => [5, 4, 3, 4],   // Tablet (769px - 992px)
        'desktop' => [6, 5, 4],     // Desktop (993px - 1200px)
        'large_desktop' => [7, 6, 5], // Large desktop (1201px+)
    ];

    $pattern = $patterns[$breakpoint] ?? $patterns['mobile']; // Fallback to mobile

    $rows = [];
    $index = 0;

    while ($total_images > 0) {
        $images_in_row = $pattern[$index % count($pattern)];
        if ($total_images < $images_in_row) {
            $images_in_row = $total_images; // Fit remaining images in the last row
        }

        $classes = [
            'imgcol-' . $images_in_row,
            'imgcol-md-' . ($patterns['tablet'][$index % count($patterns['tablet'])] ?? $images_in_row),
            'imgcol-lg-' . ($patterns['desktop'][$index % count($patterns['desktop'])] ?? $images_in_row),
            'imgcol-xl-' . ($patterns['large_desktop'][$index % count($patterns['large_desktop'])] ?? $images_in_row),
        ];
        
        $rows[] = [
            'images' => $images_in_row,
            'classes' => implode(' ', $classes),
        ];
        
        $total_images -= $images_in_row;
        $index++;
    }

    if (count($rows) > 1 && $rows[count($rows) - 1]['images'] === 1) {
        $rows[count($rows) - 2]['images'] += 1;
        array_pop($rows);
    }

    return $rows;
}*/
