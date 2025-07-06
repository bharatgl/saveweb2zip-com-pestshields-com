<?php
/**
 * Pest Control Plugin Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// AJAX handler for phone login
function urbanshieldpestcontrol_ajax_phone_login() {
    check_ajax_referer('urbanshieldpestcontrol_nonce', 'nonce');
    
    $phone = sanitize_text_field($_POST['phone']);
    
    if (empty($phone)) {
        wp_send_json_error(array('msg' => __('Please enter a valid phone number', 'urbanshieldpestcontrol')));
    }
    
    // Here you would integrate with your SMS service
    // For now, we'll simulate sending an OTP
    $otp = rand(1000, 9999);
    
    // Store OTP in transient (expires in 5 minutes)
    set_transient('urbanshieldpestcontrol_otp_' . $phone, $otp, 300);
    
    wp_send_json_success(array(
        'status' => true,
        'phone' => $phone,
        'msg' => __('OTP sent successfully', 'urbanshieldpestcontrol')
    ));
}
add_action('wp_ajax_urbanshieldpestcontrol_phone_login', 'urbanshieldpestcontrol_ajax_phone_login');
add_action('wp_ajax_nopriv_urbanshieldpestcontrol_phone_login', 'urbanshieldpestcontrol_ajax_phone_login');

// AJAX handler for OTP verification
function urbanshieldpestcontrol_ajax_verify_otp() {
    check_ajax_referer('urbanshieldpestcontrol_nonce', 'nonce');
    
    $otp = sanitize_text_field($_POST['otp']);
    $phone = sanitize_text_field($_POST['phone']);
    
    $stored_otp = get_transient('urbanshieldpestcontrol_otp_' . $phone);
    
    if ($stored_otp && $stored_otp == $otp) {
        // OTP is valid, log in the user or create account
        delete_transient('urbanshieldpestcontrol_otp_' . $phone);
        
        // Check if user exists
        $user = get_user_by('meta_key', 'urbanshieldpestcontrol_phone', $phone);
        
        if (!$user) {
            // Create new user
            $user_id = wp_create_user($phone, wp_generate_password(), $phone . '@urbanshieldpestcontrol.com');
            update_user_meta($user_id, 'urbanshieldpestcontrol_phone', $phone);
            $user = get_user_by('ID', $user_id);
        }
        
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        
        wp_send_json_success(array(
            'status' => true,
            'name' => $user->display_name,
            'email' => $user->user_email,
            'phone' => $phone,
            'msg' => __('Login successful', 'urbanshieldpestcontrol')
        ));
    } else {
        wp_send_json_error(array('msg' => __('Invalid OTP', 'urbanshieldpestcontrol')));
    }
}
add_action('wp_ajax_urbanshieldpestcontrol_verify_otp', 'urbanshieldpestcontrol_ajax_verify_otp');
add_action('wp_ajax_nopriv_urbanshieldpestcontrol_verify_otp', 'urbanshieldpestcontrol_ajax_verify_otp');

// AJAX handler for adding to cart
function urbanshieldpestcontrol_ajax_add_to_cart() {
    check_ajax_referer('urbanshieldpestcontrol_nonce', 'nonce');
    
    $service_id = intval($_POST['service_id']);
    $quantity = intval($_POST['quantity']) ?: 1;
    
    if (!$service_id) {
        wp_send_json_error(array('msg' => __('Invalid service', 'urbanshieldpestcontrol')));
    }
    
    // Get current cart from session
    $cart = WP_Session::get('urbanshieldpestcontrol_cart', array());
    
    // Add or update item in cart
    if (isset($cart[$service_id])) {
        $cart[$service_id]['quantity'] += $quantity;
    } else {
        $cart[$service_id] = array(
            'service_id' => $service_id,
            'quantity' => $quantity,
            'price' => get_post_meta($service_id, 'service_price', true)
        );
    }
    
    WP_Session::set('urbanshieldpestcontrol_cart', $cart);
    
    $item_count = array_sum(array_column($cart, 'quantity'));
    $total_amount = array_sum(array_map(function($item) {
        return $item['price'] * $item['quantity'];
    }, $cart));
    
    wp_send_json_success(array(
        'itemcount' => $item_count,
        'totalamount' => number_format($total_amount, 2)
    ));
}
add_action('wp_ajax_urbanshieldpestcontrol_add_to_cart', 'urbanshieldpestcontrol_ajax_add_to_cart');
add_action('wp_ajax_nopriv_urbanshieldpestcontrol_add_to_cart', 'urbanshieldpestcontrol_ajax_add_to_cart');

// Custom post type for services
function urbanshieldpestcontrol_register_services_post_type() {
    $labels = array(
        'name' => __('Services', 'urbanshieldpestcontrol'),
        'singular_name' => __('Service', 'urbanshieldpestcontrol'),
        'menu_name' => __('Pest Control Services', 'urbanshieldpestcontrol'),
        'add_new' => __('Add New Service', 'urbanshieldpestcontrol'),
        'add_new_item' => __('Add New Service', 'urbanshieldpestcontrol'),
        'edit_item' => __('Edit Service', 'urbanshieldpestcontrol'),
        'new_item' => __('New Service', 'urbanshieldpestcontrol'),
        'view_item' => __('View Service', 'urbanshieldpestcontrol'),
        'search_items' => __('Search Services', 'urbanshieldpestcontrol'),
        'not_found' => __('No services found', 'urbanshieldpestcontrol'),
        'not_found_in_trash' => __('No services found in trash', 'urbanshieldpestcontrol')
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true
    );
    
    register_post_type('urbanshieldpestcontrol_service', $args);
}
add_action('init', 'urbanshieldpestcontrol_register_services_post_type');

// Add meta boxes for services
function urbanshieldpestcontrol_add_service_meta_boxes() {
    add_meta_box(
        'urbanshieldpestcontrol_service_details',
        __('Service Details', 'urbanshieldpestcontrol'),
        'urbanshieldpestcontrol_service_details_callback',
        'urbanshieldpestcontrol_service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'urbanshieldpestcontrol_add_service_meta_boxes');

function urbanshieldpestcontrol_service_details_callback($post) {
    wp_nonce_field('urbanshieldpestcontrol_service_meta_box', 'urbanshieldpestcontrol_service_meta_box_nonce');
    
    $price = get_post_meta($post->ID, 'service_price', true);
    $features = get_post_meta($post->ID, 'service_features', true);
    $warranty = get_post_meta($post->ID, 'service_warranty', true);
    $color_scheme = get_post_meta($post->ID, 'service_color_scheme', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="service_price"><?php _e('Price', 'urbanshieldpestcontrol'); ?></label></th>
            <td><input type="number" id="service_price" name="service_price" value="<?php echo esc_attr($price); ?>" step="0.01" /></td>
        </tr>
        <tr>
            <th><label for="service_features"><?php _e('Features', 'urbanshieldpestcontrol'); ?></label></th>
            <td><textarea id="service_features" name="service_features" rows="5" cols="50"><?php echo esc_textarea($features); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="service_warranty"><?php _e('Warranty', 'urbanshieldpestcontrol'); ?></label></th>
            <td><input type="text" id="service_warranty" name="service_warranty" value="<?php echo esc_attr($warranty); ?>" /></td>
        </tr>
        <tr>
            <th><label for="service_color_scheme"><?php _e('Color Scheme', 'urbanshieldpestcontrol'); ?></label></th>
            <td>
                <select id="service_color_scheme" name="service_color_scheme">
                    <option value=""><?php _e('Default', 'urbanshieldpestcontrol'); ?></option>
                    <option value="aqua-blue" <?php selected($color_scheme, 'aqua-blue'); ?>><?php _e('Aqua Blue', 'urbanshieldpestcontrol'); ?></option>
                    <option value="green" <?php selected($color_scheme, 'green'); ?>><?php _e('Green', 'urbanshieldpestcontrol'); ?></option>
                    <option value="orange" <?php selected($color_scheme, 'orange'); ?>><?php _e('Orange', 'urbanshieldpestcontrol'); ?></option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

// Save service meta
function urbanshieldpestcontrol_save_service_meta($post_id) {
    if (!isset($_POST['urbanshieldpestcontrol_service_meta_box_nonce']) || !wp_verify_nonce($_POST['urbanshieldpestcontrol_service_meta_box_nonce'], 'urbanshieldpestcontrol_service_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['service_price'])) {
        update_post_meta($post_id, 'service_price', sanitize_text_field($_POST['service_price']));
    }
    
    if (isset($_POST['service_features'])) {
        update_post_meta($post_id, 'service_features', sanitize_textarea_field($_POST['service_features']));
    }
    
    if (isset($_POST['service_warranty'])) {
        update_post_meta($post_id, 'service_warranty', sanitize_text_field($_POST['service_warranty']));
    }
    
    if (isset($_POST['service_color_scheme'])) {
        update_post_meta($post_id, 'service_color_scheme', sanitize_text_field($_POST['service_color_scheme']));
    }
}
add_action('save_post', 'urbanshieldpestcontrol_save_service_meta');

// Simple session handling
class WP_Session {
    public static function get($key, $default = null) {
        if (!session_id()) {
            session_start();
        }
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }
    
    public static function set($key, $value) {
        if (!session_id()) {
            session_start();
        }
        $_SESSION[$key] = $value;
    }
    
    public static function delete($key) {
        if (!session_id()) {
            session_start();
        }
        unset($_SESSION[$key]);
    }
}

// Start session
function urbanshieldpestcontrol_start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'urbanshieldpestcontrol_start_session');

// Helper function to get services
function urbanshieldpestcontrol_get_services() {
    $services = get_posts(array(
        'post_type' => 'urbanshieldpestcontrol_service',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    
    return $services;
}

// Helper function to get cart count
function urbanshieldpestcontrol_get_cart_count() {
    $cart = WP_Session::get('urbanshieldpestcontrol_cart', array());
    return array_sum(array_column($cart, 'quantity'));
}

// Helper function to get cart total
function urbanshieldpestcontrol_get_cart_total() {
    $cart = WP_Session::get('urbanshieldpestcontrol_cart', array());
    return array_sum(array_map(function($item) {
        return $item['price'] * $item['quantity'];
    }, $cart));
}