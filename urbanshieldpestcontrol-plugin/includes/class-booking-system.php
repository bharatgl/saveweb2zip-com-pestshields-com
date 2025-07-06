<?php
/**
 * Booking System Class
 */

class urbanshieldpestcontrol_Booking_System {
    
    public function __construct() {
        add_action('wp_ajax_urbanshieldpestcontrol_create_booking', array($this, 'create_booking'));
        add_action('wp_ajax_nopriv_urbanshieldpestcontrol_create_booking', array($this, 'create_booking'));
        add_action('wp_ajax_urbanshieldpestcontrol_get_available_slots', array($this, 'get_available_slots'));
        add_action('wp_ajax_nopriv_urbanshieldpestcontrol_get_available_slots', array($this, 'get_available_slots'));
    }
    
    /**
     * Create a new booking
     */
    public function create_booking() {
        check_ajax_referer('urbanshieldpestcontrol_nonce', 'nonce');
        
        $customer_id = get_current_user_id();
        $service_id = intval($_POST['service_id']);
        $service_date = sanitize_text_field($_POST['service_date']);
        $service_time = sanitize_text_field($_POST['service_time']);
        $address = sanitize_textarea_field($_POST['address']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $notes = sanitize_textarea_field($_POST['notes']);
        
        // Validate required fields
        if (!$service_id || !$service_date || !$service_time || !$address || !$phone) {
            wp_send_json_error(array('message' => __('All required fields must be filled.', 'urbanshieldpestcontrol-plugin')));
        }
        
        // Get service price
        $price = get_post_meta($service_id, 'service_price', true);
        
        global $wpdb;
        $table_name = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        $result = $wpdb->insert(
            $table_name,
            array(
                'customer_id' => $customer_id,
                'service_id' => $service_id,
                'service_date' => $service_date,
                'service_time' => $service_time,
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'notes' => $notes,
                'price' => $price,
                'status' => 'pending'
            ),
            array(
                '%d', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%f', '%s'
            )
        );
        
        if ($result) {
            $booking_id = $wpdb->insert_id;
            
            // Send confirmation email
            $this->send_booking_confirmation($booking_id);
            
            wp_send_json_success(array(
                'message' => __('Booking created successfully!', 'urbanshieldpestcontrol-plugin'),
                'booking_id' => $booking_id
            ));
        } else {
            wp_send_json_error(array('message' => __('Failed to create booking. Please try again.', 'urbanshieldpestcontrol-plugin')));
        }
    }
    
    /**
     * Get available time slots for a date
     */
    public function get_available_slots() {
        check_ajax_referer('urbanshieldpestcontrol_nonce', 'nonce');
        
        $date = sanitize_text_field($_POST['date']);
        
        // Define available time slots
        $all_slots = array(
            '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'
        );
        
        // Get booked slots for the date
        global $wpdb;
        $table_name = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        $booked_slots = $wpdb->get_col($wpdb->prepare(
            "SELECT service_time FROM $table_name WHERE service_date = %s AND status != 'cancelled'",
            $date
        ));
        
        // Convert booked slots to the same format
        $booked_times = array_map(function($time) {
            return date('H:i', strtotime($time));
        }, $booked_slots);
        
        // Filter available slots
        $available_slots = array_diff($all_slots, $booked_times);
        
        wp_send_json_success(array('slots' => array_values($available_slots)));
    }
    
    /**
     * Send booking confirmation email
     */
    private function send_booking_confirmation($booking_id) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        $booking = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM $table_name WHERE id = %d",
            $booking_id
        ));
        
        if (!$booking) {
            return false;
        }
        
        $service = get_post($booking->service_id);
        $subject = sprintf(__('Booking Confirmation - %s', 'urbanshieldpestcontrol-plugin'), get_bloginfo('name'));
        
        $message = sprintf(
            __('Dear Customer,

Your booking has been confirmed with the following details:

Service: %s
Date: %s
Time: %s
Address: %s
Phone: %s
Price: ₹%s

Booking ID: %s

We will contact you soon to confirm the appointment.

Thank you for choosing %s!', 'urbanshieldpestcontrol-plugin'),
            $service->post_title,
            date('F j, Y', strtotime($booking->service_date)),
            date('g:i A', strtotime($booking->service_time)),
            $booking->address,
            $booking->phone,
            number_format($booking->price, 2),
            $booking->id,
            get_bloginfo('name')
        );
        
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        return wp_mail($booking->email, $subject, nl2br($message), $headers);
    }
    
    /**
     * Get customer bookings
     */
    public static function get_customer_bookings($customer_id) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        return $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM $table_name WHERE customer_id = %d ORDER BY created_at DESC",
            $customer_id
        ));
    }
    
    /**
     * Update booking status
     */
    public static function update_booking_status($booking_id, $status) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'urbanshieldpestcontrol_bookings';
        
        return $wpdb->update(
            $table_name,
            array('status' => $status),
            array('id' => $booking_id),
            array('%s'),
            array('%d')
        );
    }
}