<?php
/**
 * Front-end functionality for Urban Shield Pest Control plugin.
 */
if (!defined('ABSPATH')) {
    exit;
}

class urbanshieldpestcontrol_Public {
    public function __construct() {
        // Enqueue assets only when necessary
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));

        // Initialise booking system hooks for AJAX endpoints
        if (class_exists('urbanshieldpestcontrol_Booking_System')) {
            new urbanshieldpestcontrol_Booking_System();
        }
    }

    public function enqueue_assets() {
        // Placeholder for future front-end styles or scripts
    }
}
