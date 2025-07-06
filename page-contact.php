<?php
/**
 * Template Name: Contact Us Page
 */

get_header(); ?>

<main class="contact-container">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title"><?php _e('Contact Us', 'urbanshieldpestcontrol'); ?></h1>
                    <p class="hero-subtitle">
                        <?php _e('Get in touch with our pest control experts. We\'re here to help you with all your pest control needs.', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3><?php _e('Call Us', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?></p>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?>" class="contact-link">
                            <?php _e('Call Now', 'urbanshieldpestcontrol'); ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3><?php _e('Email Us', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?></p>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?>" class="contact-link">
                            <?php _e('Send Email', 'urbanshieldpestcontrol'); ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3><?php _e('Visit Us', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_address', 'Urban Shield Pest Control India Pvt Ltd, S-4, A-84, Sector-4, Noida, UP – 201301')); ?></p>
                        <a href="#map" class="contact-link">
                            <?php _e('View Map', 'urbanshieldpestcontrol'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <h2><?php _e('Send Us a Message', 'urbanshieldpestcontrol'); ?></h2>
                        <p><?php _e('Fill out the form below and we\'ll get back to you as soon as possible.', 'urbanshieldpestcontrol'); ?></p>
                        
                        <form id="contact-form" class="contact-form">
                            <?php wp_nonce_field('urbanshieldpestcontrol_contact', 'contact_nonce'); ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_name"><?php _e('Full Name *', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="text" id="contact_name" name="contact_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_phone"><?php _e('Phone Number *', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="tel" id="contact_phone" name="contact_phone" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_email"><?php _e('Email Address *', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="email" id="contact_email" name="contact_email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_service"><?php _e('Service Interest', 'urbanshieldpestcontrol'); ?></label>
                                        <select id="contact_service" name="contact_service" class="form-control">
                                            <option value=""><?php _e('Select a service', 'urbanshieldpestcontrol'); ?></option>
                                            <?php
                                            $services = urbanshieldpestcontrol_get_services();
                                            foreach ($services as $service) :
                                            ?>
                                                <option value="<?php echo esc_attr($service->post_title); ?>">
                                                    <?php echo esc_html($service->post_title); ?>
                                                </option>
                                            <?php endforeach; ?>
                                            <option value="other"><?php _e('Other', 'urbanshieldpestcontrol'); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="contact_city"><?php _e('City', 'urbanshieldpestcontrol'); ?></label>
                                <input type="text" id="contact_city" name="contact_city" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="contact_message"><?php _e('Message *', 'urbanshieldpestcontrol'); ?></label>
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="5" 
                                    placeholder="<?php esc_attr_e('Tell us about your pest problem or ask any questions...', 'urbanshieldpestcontrol'); ?>" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" id="contact_callback" name="contact_callback" class="form-check-input">
                                    <label for="contact_callback" class="form-check-label">
                                        <?php _e('Request a callback', 'urbanshieldpestcontrol'); ?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane"></i>
                                    <?php _e('Send Message', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </form>
                        
                        <div id="contact-response" class="contact-response" style="display: none;"></div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="contact-sidebar">
                        <div class="quick-contact">
                            <h3><?php _e('Quick Contact', 'urbanshieldpestcontrol'); ?></h3>
                            <div class="quick-contact-item">
                                <strong><?php _e('Emergency Service:', 'urbanshieldpestcontrol'); ?></strong>
                                <p><?php _e('24/7 emergency pest control available', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                            <div class="quick-contact-item">
                                <strong><?php _e('Response Time:', 'urbanshieldpestcontrol'); ?></strong>
                                <p><?php _e('We respond to all inquiries within 2-5 hours', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                            <div class="quick-contact-item">
                                <strong><?php _e('Free Inspection:', 'urbanshieldpestcontrol'); ?></strong>
                                <p><?php _e('Schedule a free property inspection', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        
                        <div class="business-hours">
                            <h3><?php _e('Business Hours', 'urbanshieldpestcontrol'); ?></h3>
                            <div class="hours-list">
                                <div class="hours-item">
                                    <span><?php _e('Monday - Saturday:', 'urbanshieldpestcontrol'); ?></span>
                                    <span><?php _e('9:00 AM - 6:00 PM', 'urbanshieldpestcontrol'); ?></span>
                                </div>
                                <div class="hours-item">
                                    <span><?php _e('Sunday:', 'urbanshieldpestcontrol'); ?></span>
                                    <span><?php _e('10:00 AM - 4:00 PM', 'urbanshieldpestcontrol'); ?></span>
                                </div>
                                <div class="hours-item emergency">
                                    <span><?php _e('Emergency:', 'urbanshieldpestcontrol'); ?></span>
                                    <span><?php _e('24/7 Available', 'urbanshieldpestcontrol'); ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <h3><?php _e('Follow Us', 'urbanshieldpestcontrol'); ?></h3>
                            <div class="social-icons">
                                <?php
                                $social_platforms = array(
                                    'facebook' => array('fab fa-facebook-f', 'Facebook'),
                                    'instagram' => array('fab fa-instagram', 'Instagram'),
                                    'linkedin' => array('fab fa-linkedin-in', 'LinkedIn'),
                                    'twitter' => array('fab fa-twitter', 'Twitter'),
                                    'youtube' => array('fab fa-youtube', 'YouTube')
                                );
                                
                                foreach ($social_platforms as $platform => $data) {
                                    $url = get_theme_mod('urbanshieldpestcontrol_' . $platform);
                                    if ($url) {
                                        echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener" title="' . esc_attr($data[1]) . '">';
                                        echo '<i class="' . esc_attr($data[0]) . '"></i>';
                                        echo '</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" id="map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="map-wrapper">
                        <div id="google-map" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="contact-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center"><?php _e('Frequently Asked Questions', 'urbanshieldpestcontrol'); ?></h2>
                    <div class="accordion" id="contactFAQ">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    <?php _e('How quickly can you respond to service requests?', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <?php _e('We respond to all service requests within 2-5 hours during business hours. For emergency situations, we offer 24/7 service availability.', 'urbanshieldpestcontrol'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    <?php _e('Do you provide free inspections?', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <?php _e('Yes, we provide free property inspections to assess your pest control needs and recommend the most effective treatment plan.', 'urbanshieldpestcontrol'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    <?php _e('What areas do you serve?', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <?php _e('We provide pest control services across 100+ cities in India. Contact us to check if we serve your area.', 'urbanshieldpestcontrol'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
jQuery(document).ready(function($) {
    // Contact form submission
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        formData += '&action=urbanshieldpestcontrol_contact_form';
        
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.html();
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> <?php _e("Sending...", "urbanshieldpestcontrol"); ?>').prop('disabled', true);
        
        $.ajax({
            url: urbanshieldpestcontrol_ajax.ajax_url,
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#contact-response')
                        .removeClass('alert-danger')
                        .addClass('alert alert-success')
                        .html('<i class="fas fa-check-circle"></i> ' + response.data.message)
                        .show();
                    $('#contact-form')[0].reset();
                } else {
                    $('#contact-response')
                        .removeClass('alert-success')
                        .addClass('alert alert-danger')
                        .html('<i class="fas fa-exclamation-circle"></i> ' + response.data.message)
                        .show();
                }
            },
            error: function() {
                $('#contact-response')
                    .removeClass('alert-success')
                    .addClass('alert alert-danger')
                    .html('<i class="fas fa-exclamation-circle"></i> <?php _e("An error occurred. Please try again.", "urbanshieldpestcontrol"); ?>')
                    .show();
            },
            complete: function() {
                submitBtn.html(originalText).prop('disabled', false);
                $('html, body').animate({
                    scrollTop: $('#contact-response').offset().top - 100
                }, 500);
            }
        });
    });
    
    // Initialize Google Map
    <?php $google_maps_api = get_theme_mod('urbanshieldpestcontrol_google_maps_api'); ?>
    <?php if ($google_maps_api) : ?>
    function initMap() {
        var location = {lat: 28.5355, lng: 77.3910}; // Noida coordinates
        var map = new google.maps.Map(document.getElementById('google-map'), {
            zoom: 15,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: 'Urban Shield Pest Control India Pvt Ltd'
        });
    }
    
    if (typeof google !== 'undefined' && google.maps) {
        initMap();
    }
    <?php endif; ?>
});
</script>

<?php get_footer(); ?>