<?php
/**
 * Admin Class
 */

class urbanshieldpestcontrol_Admin {
    
    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_post', array($this, 'save_service_meta'));
    }
    
    /**
     * Add admin menu pages
     */
    public function add_admin_menu() {
        add_menu_page(
            __('Urban Shield Pest Control', 'urbanshieldpestcontrol-plugin'),
            __('Urban Shield Pest Control', 'urbanshieldpestcontrol-plugin'),
            'manage_options',
            'urbanshieldpestcontrol-dashboard',
            array($this, 'dashboard_page'),
            'dashicons-admin-tools',
            26
        );
        
        add_submenu_page(
            'urbanshieldpestcontrol-dashboard',
            __('Bookings', 'urbanshieldpestcontrol-plugin'),
            __('Bookings', 'urbanshieldpestcontrol-plugin'),
            'manage_options',
            'urbanshieldpestcontrol-bookings',
            array($this, 'bookings_page')
        );
        
        add_submenu_page(
            'urbanshieldpestcontrol-dashboard',
            __('Customers', 'urbanshieldpestcontrol-plugin'),
            __('Customers', 'urbanshieldpestcontrol-plugin'),
            'manage_options',
            'urbanshieldpestcontrol-customers',
            array($this, 'customers_page')
        );
        
        add_submenu_page(
            'urbanshieldpestcontrol-dashboard',
            __('Services', 'urbanshieldpestcontrol-plugin'),
            __('Services', 'urbanshieldpestcontrol-plugin'),
            'manage_options',
            'edit.php?post_type=urbanshieldpestcontrol_service'
        );
        
        add_submenu_page(
            'urbanshieldpestcontrol-dashboard',
            __('Settings', 'urbanshieldpestcontrol-plugin'),
            __('Settings', 'urbanshieldpestcontrol-plugin'),
            'manage_options',
            'urbanshieldpestcontrol-settings',
            array($this, 'settings_page')
        );
    }
    
    /**
     * Enqueue admin scripts and styles
     */
    public function enqueue_admin_scripts($hook) {
        if (strpos($hook, 'urbanshieldpestcontrol') !== false) {
            wp_enqueue_style('urbanshieldpestcontrol-admin-css', urbanshieldpestcontrol_PLUGIN_URL . 'admin/css/admin.css', array(), urbanshieldpestcontrol_PLUGIN_VERSION);
            wp_enqueue_script('urbanshieldpestcontrol-admin-js', urbanshieldpestcontrol_PLUGIN_URL . 'admin/js/admin.js', array('jquery'), urbanshieldpestcontrol_PLUGIN_VERSION, true);
            
            wp_localize_script('urbanshieldpestcontrol-admin-js', 'urbanshieldpestcontrol_admin_ajax', array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('urbanshieldpestcontrol_admin_nonce')
            ));
        }
    }
    
    /**
     * Dashboard page
     */
    public function dashboard_page() {
        global $wpdb;
        
        // Get statistics
        $bookings_table = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        $total_bookings = $wpdb->get_var("SELECT COUNT(*) FROM $bookings_table");
        $pending_bookings = $wpdb->get_var("SELECT COUNT(*) FROM $bookings_table WHERE status = 'pending'");
        $completed_bookings = $wpdb->get_var("SELECT COUNT(*) FROM $bookings_table WHERE status = 'completed'");
        $total_revenue = $wpdb->get_var("SELECT SUM(price) FROM $bookings_table WHERE status = 'completed'");
        
        // Get recent bookings
        $recent_bookings = $wpdb->get_results("SELECT * FROM $bookings_table ORDER BY created_at DESC LIMIT 10");
        
        include urbanshieldpestcontrol_PLUGIN_PATH . 'admin/partials/dashboard.php';
    }
    
    /**
     * Bookings page
     */
    public function bookings_page() {
        global $wpdb;
        $bookings_table = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        // Handle status updates
        if (isset($_POST['update_status']) && isset($_POST['booking_id']) && isset($_POST['new_status'])) {
            $booking_id = intval($_POST['booking_id']);
            $new_status = sanitize_text_field($_POST['new_status']);
            
            $wpdb->update(
                $bookings_table,
                array('status' => $new_status),
                array('id' => $booking_id),
                array('%s'),
                array('%d')
            );
            
            echo '<div class="notice notice-success"><p>' . __('Status updated successfully.', 'urbanshieldpestcontrol-plugin') . '</p></div>';
        }
        
        // Get all bookings
        $bookings = $wpdb->get_results("
            SELECT b.*, p.post_title as service_name 
            FROM $bookings_table b 
            LEFT JOIN {$wpdb->posts} p ON b.service_id = p.ID 
            ORDER BY b.created_at DESC
        ");
        
        include urbanshieldpestcontrol_PLUGIN_PATH . 'admin/partials/bookings.php';
    }
    
    /**
     * Customers page
     */
    public function customers_page() {
        // Get users with Urban Shield Pest Control bookings
        global $wpdb;
        $bookings_table = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        $customers = $wpdb->get_results("
            SELECT u.*, COUNT(b.id) as total_bookings, SUM(b.price) as total_spent
            FROM {$wpdb->users} u
            LEFT JOIN $bookings_table b ON u.ID = b.customer_id
            WHERE b.customer_id IS NOT NULL
            GROUP BY u.ID
            ORDER BY total_bookings DESC
        ");
        
        include urbanshieldpestcontrol_PLUGIN_PATH . 'admin/partials/customers.php';
    }
    
    /**
     * Settings page
     */
    public function settings_page() {
        if (isset($_POST['submit'])) {
            // Save settings
            update_option('urbanshieldpestcontrol_sms_api_key', sanitize_text_field($_POST['sms_api_key']));
            update_option('urbanshieldpestcontrol_sms_sender_id', sanitize_text_field($_POST['sms_sender_id']));
            update_option('urbanshieldpestcontrol_email_notifications', isset($_POST['email_notifications']) ? 1 : 0);
            update_option('urbanshieldpestcontrol_sms_notifications', isset($_POST['sms_notifications']) ? 1 : 0);
            
            echo '<div class="notice notice-success"><p>' . __('Settings saved successfully.', 'urbanshieldpestcontrol-plugin') . '</p></div>';
        }
        
        $sms_api_key = get_option('urbanshieldpestcontrol_sms_api_key', '');
        $sms_sender_id = get_option('urbanshieldpestcontrol_sms_sender_id', '');
        $email_notifications = get_option('urbanshieldpestcontrol_email_notifications', 1);
        $sms_notifications = get_option('urbanshieldpestcontrol_sms_notifications', 0);
        
        include urbanshieldpestcontrol_PLUGIN_PATH . 'admin/partials/settings.php';
    }
    
    /**
     * Add meta boxes for services
     */
    public function add_meta_boxes() {
        add_meta_box(
            'urbanshieldpestcontrol_service_details',
            __('Service Details', 'urbanshieldpestcontrol-plugin'),
            array($this, 'service_details_meta_box'),
            'urbanshieldpestcontrol_service',
            'normal',
            'high'
        );
    }
    
    /**
     * Service details meta box
     */
    public function service_details_meta_box($post) {
        wp_nonce_field('urbanshieldpestcontrol_service_meta_box', 'urbanshieldpestcontrol_service_meta_box_nonce');
        
        $price = get_post_meta($post->ID, 'service_price', true);
        $features = get_post_meta($post->ID, 'service_features', true);
        $warranty = get_post_meta($post->ID, 'service_warranty', true);
        $color_scheme = get_post_meta($post->ID, 'service_color_scheme', true);
        
        include urbanshieldpestcontrol_PLUGIN_PATH . 'admin/partials/service-meta-box.php';
    }
    
    /**
     * Save service meta
     */
    public function save_service_meta($post_id) {
        if (!isset($_POST['urbanshieldpestcontrol_service_meta_box_nonce']) || 
            !wp_verify_nonce($_POST['urbanshieldpestcontrol_service_meta_box_nonce'], 'urbanshieldpestcontrol_service_meta_box')) {
            return;
        }
        
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        
        if (get_post_type($post_id) !== 'urbanshieldpestcontrol_service') {
            return;
        }
        
        if (isset($_POST['service_price'])) {
            update_post_meta($post_id, 'service_price', floatval($_POST['service_price']));
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
}