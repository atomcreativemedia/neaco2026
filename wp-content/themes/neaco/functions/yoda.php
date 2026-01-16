<?php
/*********
Hide the admin bar when logged in
*********/
add_filter('show_admin_bar', '__return_false');


/*********
Prevent the automatic installation of default "twentysomething" themes when performing updates
*********/
add_filter('wp_installing_default_theme', '__return_false');


/*********
Get the page number
*********/
function get_page_number() {
	if ( get_query_var('paged') ) {
		print ' | ' . __( 'Page ' , 'neaco') . get_query_var('paged');
	}
} // end get_page_number


/*********
Add featured images to pages & posts.
*********/
add_theme_support( 'post-thumbnails' );


/*********
Create function to get a post's slug
*********/
function the_slug($echo=true){
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
	do_action('after_slug', $slug);
	return $slug;
}


/*********
Changing excerpt length on queried posts
*********/
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


/*********
Changing the excerpt's 'more tag'
*********/
function new_excerpt_more($more) {
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">[...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*********
Post Pagination
*********/
function post_pagination() {
    global $my_query;
    $pager = 999999999; // need an unlikely integer

    $args = array(
        'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $my_query->max_num_pages,
    );
    if ( isset($_GET['category']) ) {
        $args['add_args'] = array(
            'category' => sanitize_text_field( $_GET['category'] ),
        );
    }
    echo paginate_links( $args );
}



/*********
Removing the required legend on GF
*********/
add_filter( 'gform_required_legend', '__return_empty_string' );


/*********
Filtering gform submit inputs to buttons, and adding spans to them
*********/
add_filter( 'gform_submit_button', 'input_to_button', 10, 2 );
function input_to_button( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    
    // add custom class to the button
    $classes = $input->getAttribute( 'class' );
    $classes .= " white-grey";
    $input->setAttribute( 'class', $classes );
    
    $child_span = $dom->createElement( 'span' );
    $child_span->setAttribute( 'class', 'button-span' );
    $child_span->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    
    $child_child_span = $dom->createElement( 'span' );

    $new_button = $dom->createElement( 'button' );
    $new_button->appendChild( $child_span );
    $child_span->appendChild( $child_child_span );
    $input->removeAttribute( 'value' );
    
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
    
    $input->parentNode->replaceChild( $new_button, $input );
    
    return $dom->saveHtml( $new_button );
}


/*********
Filtering gform next/previous submit inputs to buttons, and adding spans to them
*********/
add_filter( 'gform_next_button', 'input_next_prev_buttons', 10, 2 );
add_filter( 'gform_previous_button', 'input_next_prev_buttons', 10, 2 );
function input_next_prev_buttons( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    
    // add custom class to the button
    $classes = $input->getAttribute( 'class' );
    $classes .= " white-green";
    $input->setAttribute( 'class', $classes );
    
    $child_span = $dom->createElement( 'span' );
    $child_span->setAttribute( 'class', 'button-span' );
    $child_span->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    
    $child_child_span = $dom->createElement( 'span' );

    $new_button = $dom->createElement( 'button' );
    $new_button->appendChild( $child_span );
    $child_span->appendChild( $child_child_span );
    $input->removeAttribute( 'value' );
    
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
    
    $input->parentNode->replaceChild( $new_button, $input );
    
    return $dom->saveHtml( $new_button );
}


/*********
Generating a random string for random block classes
*********/
function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


/*********
Convert hexdec color string to rgb(a) string
*********/
function hex2rgba($color, $opacity = false) {
    $default = 'rgb(0,0,0)';
    //Return default if no color provided
    if(empty($color))
          return $default;
    
    //Sanitize $color if "#" is provided
    if ($color[0] == '#' ) {
        $color = substr( $color, 1 );
    }
    
    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
        return $default;
    }
    
    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);
    
    //Check if opacity is set(rgba or rgb)
    if($opacity){
        if(abs($opacity) > 1) 
        $opacity = 1.0;
        $output = implode(",",$rgb).','.$opacity;
    }
    else {
        $output = implode(",",$rgb);
    }
    
    //Return rgb(a) color string
    return $output;
}


/*********
Removes buttons from the first row of the tiny mce editor
*********/
add_filter( 'mce_buttons', 'remove_tiny_mce_buttons_from_editor');
function remove_tiny_mce_buttons_from_editor( $buttons ) {

    $remove_buttons = array(
        //'bold',
        //'italic',
        //'strikethrough',
        //'bullist',
        //'numlist',
        //'blockquote',
        //'hr', // horizontal line
        'alignleft',
        'aligncenter',
        'alignright',
        //'link',
        //'unlink',
        //'wp_more', // read more link
        //'spellchecker',
        //'dfw', // distraction free writing mode
        //'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}





function enqueue_zip_file_list() {
    $dir = ABSPATH . '/product-packs/';  // Check this path carefully
    if (!file_exists($dir)) {
        echo "<script>console.error('Directory not found: ".$dir."');</script>";
    }

    $files = glob($dir . '*.zip');
    if (empty($files)) {
        echo "<script>console.error('No zip files found in ".$dir."');</script>";
    }

    $file_names = array_map('basename', $files);

    echo "<script type='text/javascript'>\n";
    echo "var availablePacks = " . json_encode($file_names) . ";\n";
    echo "</script>\n";
}
add_action('wp_footer', 'enqueue_zip_file_list');



// Add a custom field to the custom taxonomy edit screen
function add_custom_taxonomy_order_field($term) {
    $order = get_term_meta($term->term_id, 'custom_order', true);
    ?>
    <tr class="form-field">
        <th scope="row">
            <label for="custom-order">Custom Order</label>
        </th>
        <td>
            <input type="number" name="custom_order" id="custom-order" value="<?php echo esc_attr($order); ?>" />
            <p class="description">Set a custom order number for this taxonomy term.</p>
        </td>
    </tr>
    <?php
}
add_action('product_category_edit_form_fields', 'add_custom_taxonomy_order_field'); // Replace 'product_category' with your taxonomy slug

// Save the custom field value
function save_custom_taxonomy_order_field($term_id) {
    if (isset($_POST['custom_order'])) {
        update_term_meta($term_id, 'custom_order', sanitize_text_field($_POST['custom_order']));
    }
}
add_action('edited_product_category', 'save_custom_taxonomy_order_field'); // Replace 'product_category' with your taxonomy slug


// Add a custom column for the order
function add_custom_order_column($columns) {
    $columns['custom_order'] = 'Order';
    return $columns;
}
add_filter('manage_edit-product_category_columns', 'add_custom_order_column'); // Replace 'product_category' with your taxonomy slug

// Populate the custom order column
function display_custom_order_column($content, $column_name, $term_id) {
    if ($column_name === 'custom_order') {
        $order = get_term_meta($term_id, 'custom_order', true);
        $content = '
        <form method="post" action="">
            <input type="hidden" name="term_id" value="' . esc_attr($term_id) . '" />
            <input type="number" name="custom_order" value="' . esc_attr($order) . '" style="width: 60px; text-align: center;" />
            <button type="submit" class="button">Save</button>
        </form>';
    }
    return $content;
}
add_filter('manage_product_category_custom_column', 'display_custom_order_column', 10, 3); // Replace 'product_category' with your taxonomy slug


function handle_custom_order_submission() {
    // Ensure term_id is provided
    if (isset($_POST['term_id'])) {
        // Verify the user has permission to edit terms
        if (!current_user_can('manage_categories')) {
            return;
        }

        $term_id = intval($_POST['term_id']);
        
        // Use `isset` instead of `!empty` to allow '0' as a valid value
        if (isset($_POST['custom_order'])) {
            $custom_order = sanitize_text_field($_POST['custom_order']);

            // Update the custom field value
            update_term_meta($term_id, 'custom_order', $custom_order);

            // Redirect back to the taxonomy list to avoid re-submission
            wp_safe_redirect(add_query_arg('updated', 'true', wp_get_referer()));
            exit;
        }
    }
}
add_action('admin_init', 'handle_custom_order_submission');


function show_custom_order_success_message() {
    if (!empty($_GET['updated'])) {
        echo '<div class="notice notice-success is-dismissible">
            <p>Order updated successfully!</p>
        </div>';
    }
}
add_action('admin_notices', 'show_custom_order_success_message');


add_action('wp_head', 'my_custom_open_graph_tags', 5);
function my_custom_open_graph_tags() {
    if (!is_single()) return;

    global $post;

    $title = get_the_title($post);
    $desc  = get_the_excerpt($post);
    $url   = get_permalink($post);

    // Try featured image first
    if (has_post_thumbnail($post)) {
        $image = get_the_post_thumbnail_url($post, 'large');
    } else {
        // Fallback to ACF heading background image
        $acf_image = get_field('title_page_heading_background_image', $post->ID);
        $image = $acf_image['sizes']['large'] ?? $acf_image['url'] ?? '';
    }

    echo '
    <meta property="og:title" content="' . esc_attr($title) . '" />
    <meta property="og:description" content="' . esc_attr($desc) . '" />
    <meta property="og:url" content="' . esc_url($url) . '" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />
    ';

    if (!empty($image)) {
        echo '<meta property="og:image" content="' . esc_url($image) . '" />';
    }
}