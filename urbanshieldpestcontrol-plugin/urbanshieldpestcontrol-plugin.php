<?php
/**
 * Plugin Name: Urban Shield Pest Control Plugin
 * Description: A comprehensive pest control management plugin for WordPress
 * Version: 1.0.0
 * Author: Urban Shield Pest Control
 * Text Domain: urbanshieldpestcontrol-plugin
 * Domain Path: /languages
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('urbanshieldpestcontrol_PLUGIN_URL', plugin_dir_url(__FILE__));
define('urbanshieldpestcontrol_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('urbanshieldpestcontrol_PLUGIN_VERSION', '1.0.0');

class urbanshieldpestcontrolPlugin {
    
    public function __construct() {
        add_action('init', array($this, 'init'));
        add_action('plugins_loaded', array($this, 'load_textdomain'));
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
    }
    
    public function init() {
        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }
    
    public function load_textdomain() {
        load_plugin_textdomain('urbanshieldpestcontrol-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }
    
    private function load_dependencies() {
        require_once urbanshieldpestcontrol_PLUGIN_PATH . 'includes/class-pest-services.php';
        require_once urbanshieldpestcontrol_PLUGIN_PATH . 'includes/class-booking-system.php';
        require_once urbanshieldpestcontrol_PLUGIN_PATH . 'includes/class-customer-management.php';
        require_once urbanshieldpestcontrol_PLUGIN_PATH . 'admin/class-admin.php';
        require_once urbanshieldpestcontrol_PLUGIN_PATH . 'public/class-public.php';
    }
    
    private function define_admin_hooks() {
        $admin = new urbanshieldpestcontrol_Admin();
    }
    
    private function define_public_hooks() {
        $public = new urbanshieldpestcontrol_Public();
    }
    
    public function activate() {
        // Create necessary database tables
        $this->create_tables();
        
        // Create default services
        $this->create_default_services();
        
        // Flush rewrite rules
        flush_rewrite_rules();
    }
    
    public function deactivate() {
        // Flush rewrite rules
        flush_rewrite_rules();
    }
    
    private function create_tables() {
        global $wpdb;
        
        $charset_collate = $wpdb->get_charset_collate();
        
        // Bookings table
        $table_bookings = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        $sql_bookings = "CREATE TABLE $table_bookings (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            customer_id bigint(20) NOT NULL,
            service_id bigint(20) NOT NULL,
            booking_date datetime DEFAULT CURRENT_TIMESTAMP,
            service_date date NOT NULL,
            service_time time NOT NULL,
            address text NOT NULL,
            phone varchar(20) NOT NULL,
            email varchar(100) NOT NULL,
            status varchar(20) DEFAULT 'pending',
            notes text,
            price decimal(10,2) NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP,
            updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        // Customer addresses table
        $table_addresses = $wpdb->prefix . 'urbanshieldpestcontrol_customer_addresses';
        $sql_addresses = "CREATE TABLE $table_addresses (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            customer_id bigint(20) NOT NULL,
            location text NOT NULL,
            address text NOT NULL,
            city varchar(100) NOT NULL,
            state varchar(100) NOT NULL,
            pincode varchar(10) NOT NULL,
            is_default tinyint(1) DEFAULT 0,
            created_at datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        // Cart table for temporary storage
        $table_cart = $wpdb->prefix . 'urbanshieldpestcontrol_cart';
        $sql_cart = "CREATE TABLE $table_cart (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            session_id varchar(255) NOT NULL,
            service_id bigint(20) NOT NULL,
            quantity int(11) DEFAULT 1,
            price decimal(10,2) NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql_bookings);
        dbDelta($sql_addresses);
        dbDelta($sql_cart);
    }
    
    private function create_default_services() {
        $default_services = array(
            array(
                'title' => 'Home Care Package',
                'content' => 'Comprehensive pest control solution for your home',
                'price' => 1120,
                'features' => "Free inspection by our trained staff.\nEco-friendly spray and gel are applied in every corner of the house.\nComplete elimination of ants, rodents, and cockroach control guaranteed.\nCovers accessible cracks, nooks and crannies of rooms, and kitchen's unreachable areas.",
                'color_scheme' => 'aqua-blue'
            ),
            array(
                'title' => 'COVID-19 Sanitization Service',
                'content' => 'Professional sanitization service for COVID-19 protection',
                'price' => 880,
                'features' => "Professional Covid-19 sanitization service of all and every corner of the house with industry-grade disinfectant chemicals.\nHospital-grade chemicals are used for best results. Kills virus-causing germs.\nUrban Shield Pest Control experts maintain social distancing, wear PPE kits, and strictly follow WHO guidelines.\nOur customers' safety is our highest priority. That's why Urban Shield Pest Control experts disinfect the rooms and premises when people are not present."
            ),
            array(
                'title' => 'Termite Control',
                'content' => 'Professional termite control with warranty',
                'price' => 3920,
                'features' => "Free inspection by our Urban Shield Pest Control Experts.\nCustomizable package.\n2 years warranty.\nOne mandatory check after 1 year of service by our auditor."
            ),
            array(
                'title' => 'Bed Bug Treatment',
                'content' => 'Effective bed bug elimination service',
                'price' => 2400,
                'features' => "Customizable package\nFree inspection by our trained staff\nEco-friendly spray applied on all infested areas\nGuaranteed 45 days satisfaction with bed bug treatment"
            )
        );
        
        foreach ($default_services as $service_data) {
            $post_id = wp_insert_post(array(
                'post_title' => $service_data['title'],
                'post_content' => $service_data['content'],
                'post_status' => 'publish',
                'post_type' => 'urbanshieldpestcontrol_service'
            ));
            
            if ($post_id) {
                update_post_meta($post_id, 'service_price', $service_data['price']);
                update_post_meta($post_id, 'service_features', $service_data['features']);
                if (isset($service_data['color_scheme'])) {
                    update_post_meta($post_id, 'service_color_scheme', $service_data['color_scheme']);
                }
            }
        }
    }
}

// Initialize the plugin
new urbanshieldpestcontrolPlugin();