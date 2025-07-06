<?php
/**
 * Urban Shield Pest Control Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function urbanshieldpestcontrol_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'urbanshieldpestcontrol'),
        'footer' => __('Footer Menu', 'urbanshieldpestcontrol')
    ));
}
add_action('after_setup_theme', 'urbanshieldpestcontrol_setup');

// Enqueue scripts and styles
function urbanshieldpestcontrol_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');
    
    // Enqueue styles
    wp_enqueue_style('urbanshieldpestcontrol-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-owl-carousel', get_template_directory_uri() . '/css/owl-carousel.min.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-owl-theme', get_template_directory_uri() . '/css/owl-theme-default.min.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-intl-tel', get_template_directory_uri() . '/css/intlTelInput.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-datepicker', get_template_directory_uri() . '/css/date-picker.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-timepicker', get_template_directory_uri() . '/css/bootstrap-timepicker.min.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-toast', get_template_directory_uri() . '/css/iziToast.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-main', get_template_directory_uri() . '/css/main.css', array(), $theme_version);
    wp_enqueue_style('urbanshieldpestcontrol-responsive', get_template_directory_uri() . '/css/responsive.css', array(), $theme_version);
    
    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('urbanshieldpestcontrol-bootstrap', get_template_directory_uri() . '/js/bootstrap-js-bundle.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-owl-carousel', get_template_directory_uri() . '/js/owl-carousel.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-intl-tel', get_template_directory_uri() . '/js/intlTelInput.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-steps', get_template_directory_uri() . '/js/jquery.steps.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-timepicker', get_template_directory_uri() . '/js/bootstrap-timepicker.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-toast', get_template_directory_uri() . '/js/iziToast.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('urbanshieldpestcontrol-email-decode', get_template_directory_uri() . '/js/email-decode.min.js', array(), $theme_version, true);
    
    // Google Maps API
    $google_maps_api = get_theme_mod('urbanshieldpestcontrol_google_maps_api', '');
    if (!empty($google_maps_api)) {
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=' . esc_attr($google_maps_api), array(), null, true);
    }
    
    // Localize script for AJAX
    wp_localize_script('urbanshieldpestcontrol-bootstrap', 'urbanshieldpestcontrol_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('urbanshieldpestcontrol_nonce'),
        'site_url' => home_url('/')
    ));
}
add_action('wp_enqueue_scripts', 'urbanshieldpestcontrol_enqueue_assets');

// Register widget areas
function urbanshieldpestcontrol_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'urbanshieldpestcontrol'),
        'id' => 'footer-widgets',
        'description' => __('Appears in the footer area', 'urbanshieldpestcontrol'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'urbanshieldpestcontrol_widgets_init');

// Theme customizer
function urbanshieldpestcontrol_customizer($wp_customize) {
    // Company Information Section
    $wp_customize->add_section('urbanshieldpestcontrol_company_info', array(
        'title' => __('Company Information', 'urbanshieldpestcontrol'),
        'priority' => 30,
    ));
    
    // Phone Number
    $wp_customize->add_setting('urbanshieldpestcontrol_phone', array(
        'default' => '+91 8376090909',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('urbanshieldpestcontrol_phone', array(
        'label' => __('Phone Number', 'urbanshieldpestcontrol'),
        'section' => 'urbanshieldpestcontrol_company_info',
        'type' => 'text'
    ));
    
    // Email Address
    $wp_customize->add_setting('urbanshieldpestcontrol_email', array(
        'default' => 'info@urbanshieldpestcontrol.com',
        'sanitize_callback' => 'sanitize_email'
    ));
    
    $wp_customize->add_control('urbanshieldpestcontrol_email', array(
        'label' => __('Email Address', 'urbanshieldpestcontrol'),
        'section' => 'urbanshieldpestcontrol_company_info',
        'type' => 'email'
    ));
    
    // Company Address
    $wp_customize->add_setting('urbanshieldpestcontrol_address', array(
        'default' => 'Urban Shield Pest Control India Pvt Ltd, S-4, A-84, Sector-4, Noida, UP – 201301',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    
    $wp_customize->add_control('urbanshieldpestcontrol_address', array(
        'label' => __('Company Address', 'urbanshieldpestcontrol'),
        'section' => 'urbanshieldpestcontrol_company_info',
        'type' => 'textarea'
    ));
    
    // Google Maps API Key
    $wp_customize->add_setting('urbanshieldpestcontrol_google_maps_api', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('urbanshieldpestcontrol_google_maps_api', array(
        'label' => __('Google Maps API Key', 'urbanshieldpestcontrol'),
        'section' => 'urbanshieldpestcontrol_company_info',
        'type' => 'text'
    ));
    
    // Social Media Section
    $wp_customize->add_section('urbanshieldpestcontrol_social_media', array(
        'title' => __('Social Media', 'urbanshieldpestcontrol'),
        'priority' => 35,
    ));
    
    $social_platforms = array(
        'facebook' => 'Facebook URL',
        'instagram' => 'Instagram URL',
        'linkedin' => 'LinkedIn URL',
        'twitter' => 'Twitter URL',
        'youtube' => 'YouTube URL'
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('urbanshieldpestcontrol_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ));
        
        $wp_customize->add_control('urbanshieldpestcontrol_' . $platform, array(
            'label' => __($label, 'urbanshieldpestcontrol'),
            'section' => 'urbanshieldpestcontrol_social_media',
            'type' => 'url'
        ));
    }
}
add_action('customize_register', 'urbanshieldpestcontrol_customizer');

// Security enhancements
function urbanshieldpestcontrol_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'urbanshieldpestcontrol_security_headers');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Add custom body classes
function urbanshieldpestcontrol_body_classes($classes) {
    $classes[] = 'urbanshieldpestcontrol-theme';
    if (is_front_page()) {
        $classes[] = 'booking-page';
    }
    return $classes;
}
add_filter('body_class', 'urbanshieldpestcontrol_body_classes');

// Custom logo support
function urbanshieldpestcontrol_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'urbanshieldpestcontrol_custom_logo_setup');

// Include the plugin functions
require_once get_template_directory() . '/inc/pest-control-functions.php';