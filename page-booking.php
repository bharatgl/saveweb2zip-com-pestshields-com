<?php
/**
 * Template Name: Booking Page
 */

get_header(); ?>

<main class="booking-container">
    <section class="booking-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title"><?php _e('Book Your Pest Control Service', 'urbanshieldpestcontrol'); ?></h1>
                    <p class="page-subtitle"><?php _e('Select a service and schedule your appointment', 'urbanshieldpestcontrol'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="booking-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="booking-form-wrapper">
                        <form id="booking-form" class="booking-form">
                            <?php wp_nonce_field('urbanshieldpestcontrol_booking', 'booking_nonce'); ?>
                            
                            <!-- Step 1: Service Selection -->
                            <div class="form-step active" id="step-1">
                                <h3><?php _e('Step 1: Choose Your Service', 'urbanshieldpestcontrol'); ?></h3>
                                <div class="services-grid">
                                    <?php
                                    $services = urbanshieldpestcontrol_get_services();
                                    foreach ($services as $service) :
                                        $price = get_post_meta($service->ID, 'service_price', true);
                                        $features = get_post_meta($service->ID, 'service_features', true);
                                        $color_scheme = get_post_meta($service->ID, 'service_color_scheme', true);
                                    ?>
                                    <div class="service-card <?php echo esc_attr($color_scheme); ?>">
                                        <div class="service-header">
                                            <h4><?php echo esc_html($service->post_title); ?></h4>
                                            <p class="service-price">₹<?php echo esc_html($price); ?> <?php _e('onwards', 'urbanshieldpestcontrol'); ?></p>
                                        </div>
                                        <div class="service-features">
                                            <?php if ($features) : ?>
                                                <ul>
                                                    <?php
                                                    $features_list = explode("\n", $features);
                                                    foreach (array_slice($features_list, 0, 3) as $feature) :
                                                        if (trim($feature)) :
                                                    ?>
                                                        <li><?php echo esc_html(trim($feature)); ?></li>
                                                    <?php 
                                                        endif;
                                                    endforeach; 
                                                    ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <div class="service-actions">
                                            <input type="radio" name="selected_service" value="<?php echo esc_attr($service->ID); ?>" id="service-<?php echo esc_attr($service->ID); ?>">
                                            <label for="service-<?php echo esc_attr($service->ID); ?>" class="btn btn-select-service">
                                                <?php _e('Select Service', 'urbanshieldpestcontrol'); ?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="form-navigation">
                                    <button type="button" class="btn btn-next" data-next="step-2"><?php _e('Next', 'urbanshieldpestcontrol'); ?></button>
                                </div>
                            </div>

                            <!-- Step 2: Date & Time -->
                            <div class="form-step" id="step-2">
                                <h3><?php _e('Step 2: Select Date & Time', 'urbanshieldpestcontrol'); ?></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="service_date"><?php _e('Preferred Date', 'urbanshieldpestcontrol'); ?></label>
                                            <input type="date" id="service_date" name="service_date" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="service_time"><?php _e('Preferred Time', 'urbanshieldpestcontrol'); ?></label>
                                            <select id="service_time" name="service_time" class="form-control" required>
                                                <option value=""><?php _e('Select time slot', 'urbanshieldpestcontrol'); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-navigation">
                                    <button type="button" class="btn btn-prev" data-prev="step-1"><?php _e('Previous', 'urbanshieldpestcontrol'); ?></button>
                                    <button type="button" class="btn btn-next" data-next="step-3"><?php _e('Next', 'urbanshieldpestcontrol'); ?></button>
                                </div>
                            </div>

                            <!-- Step 3: Contact Information -->
                            <div class="form-step" id="step-3">
                                <h3><?php _e('Step 3: Contact Information', 'urbanshieldpestcontrol'); ?></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customer_name"><?php _e('Full Name', 'urbanshieldpestcontrol'); ?></label>
                                            <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customer_phone"><?php _e('Phone Number', 'urbanshieldpestcontrol'); ?></label>
                                            <input type="tel" id="customer_phone" name="customer_phone" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customer_email"><?php _e('Email Address', 'urbanshieldpestcontrol'); ?></label>
                                    <input type="email" id="customer_email" name="customer_email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="service_address"><?php _e('Service Address', 'urbanshieldpestcontrol'); ?></label>
                                    <textarea id="service_address" name="service_address" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="special_notes"><?php _e('Special Instructions (Optional)', 'urbanshieldpestcontrol'); ?></label>
                                    <textarea id="special_notes" name="special_notes" class="form-control" rows="2"></textarea>
                                </div>
                                <div class="form-navigation">
                                    <button type="button" class="btn btn-prev" data-prev="step-2"><?php _e('Previous', 'urbanshieldpestcontrol'); ?></button>
                                    <button type="button" class="btn btn-next" data-next="step-4"><?php _e('Next', 'urbanshieldpestcontrol'); ?></button>
                                </div>
                            </div>

                            <!-- Step 4: Confirmation -->
                            <div class="form-step" id="step-4">
                                <h3><?php _e('Step 4: Confirm Your Booking', 'urbanshieldpestcontrol'); ?></h3>
                                <div class="booking-summary">
                                    <div class="summary-item">
                                        <strong><?php _e('Service:', 'urbanshieldpestcontrol'); ?></strong>
                                        <span id="summary-service"></span>
                                    </div>
                                    <div class="summary-item">
                                        <strong><?php _e('Date & Time:', 'urbanshieldpestcontrol'); ?></strong>
                                        <span id="summary-datetime"></span>
                                    </div>
                                    <div class="summary-item">
                                        <strong><?php _e('Contact:', 'urbanshieldpestcontrol'); ?></strong>
                                        <span id="summary-contact"></span>
                                    </div>
                                    <div class="summary-item">
                                        <strong><?php _e('Address:', 'urbanshieldpestcontrol'); ?></strong>
                                        <span id="summary-address"></span>
                                    </div>
                                    <div class="summary-item price-summary">
                                        <strong><?php _e('Estimated Price:', 'urbanshieldpestcontrol'); ?></strong>
                                        <span id="summary-price"></span>
                                    </div>
                                </div>
                                <div class="terms-checkbox">
                                    <input type="checkbox" id="agree_terms" name="agree_terms" required>
                                    <label for="agree_terms">
                                        <?php 
                                        printf(
                                            __('I agree to the %s and %s', 'urbanshieldpestcontrol'),
                                            '<a href="' . esc_url(home_url('/terms')) . '" target="_blank">' . __('Terms & Conditions', 'urbanshieldpestcontrol') . '</a>',
                                            '<a href="' . esc_url(home_url('/privacy-policy')) . '" target="_blank">' . __('Privacy Policy', 'urbanshieldpestcontrol') . '</a>'
                                        );
                                        ?>
                                    </label>
                                </div>
                                <div class="form-navigation">
                                    <button type="button" class="btn btn-prev" data-prev="step-3"><?php _e('Previous', 'urbanshieldpestcontrol'); ?></button>
                                    <button type="submit" class="btn btn-confirm"><?php _e('Confirm Booking', 'urbanshieldpestcontrol'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-sidebar">
                        <div class="help-card">
                            <h4><?php _e('Need Help?', 'urbanshieldpestcontrol'); ?></h4>
                            <p><?php _e('Our customer service team is here to help you with your booking.', 'urbanshieldpestcontrol'); ?></p>
                            <div class="contact-info">
                                <p><i class="fas fa-phone"></i> <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?></p>
                                <p><i class="fas fa-envelope"></i> <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?></p>
                            </div>
                        </div>
                        
                        <div class="why-choose-us">
                            <h4><?php _e('Why Choose Us?', 'urbanshieldpestcontrol'); ?></h4>
                            <ul class="benefits-list">
                                <li><i class="fas fa-check"></i> <?php _e('100% Satisfaction Guaranteed', 'urbanshieldpestcontrol'); ?></li>
                                <li><i class="fas fa-check"></i> <?php _e('Eco-friendly Solutions', 'urbanshieldpestcontrol'); ?></li>
                                <li><i class="fas fa-check"></i> <?php _e('Licensed & Insured', 'urbanshieldpestcontrol'); ?></li>
                                <li><i class="fas fa-check"></i> <?php _e('Free Inspection', 'urbanshieldpestcontrol'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
jQuery(document).ready(function($) {
    // Multi-step form functionality
    $('.btn-next').click(function() {
        var currentStep = $(this).closest('.form-step');
        var nextStepId = $(this).data('next');
        var nextStep = $('#' + nextStepId);
        
        if (validateStep(currentStep)) {
            currentStep.removeClass('active');
            nextStep.addClass('active');
            updateSummary();
        }
    });
    
    $('.btn-prev').click(function() {
        var currentStep = $(this).closest('.form-step');
        var prevStepId = $(this).data('prev');
        var prevStep = $('#' + prevStepId);
        
        currentStep.removeClass('active');
        prevStep.addClass('active');
    });
    
    // Load available time slots when date changes
    $('#service_date').change(function() {
        var selectedDate = $(this).val();
        if (selectedDate) {
            $.ajax({
                url: urbanshieldpestcontrol_ajax.ajax_url,
                method: 'POST',
                data: {
                    action: 'urbanshieldpestcontrol_get_available_slots',
                    date: selectedDate,
                    nonce: urbanshieldpestcontrol_ajax.nonce
                },
                success: function(response) {
                    if (response.success) {
                        var timeSelect = $('#service_time');
                        timeSelect.empty().append('<option value=""><?php _e("Select time slot", "urbanshieldpestcontrol"); ?></option>');
                        
                        response.data.slots.forEach(function(slot) {
                            timeSelect.append('<option value="' + slot + '">' + slot + '</option>');
                        });
                    }
                }
            });
        }
    });
    
    // Form submission
    $('#booking-form').submit(function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        formData += '&action=urbanshieldpestcontrol_create_booking';
        
        $.ajax({
            url: urbanshieldpestcontrol_ajax.ajax_url,
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    alert('<?php _e("Booking confirmed! You will receive a confirmation email shortly.", "urbanshieldpestcontrol"); ?>');
                    window.location.href = '<?php echo esc_url(home_url('/booking-confirmation')); ?>';
                } else {
                    alert(response.data.message);
                }
            }
        });
    });
    
    function validateStep(step) {
        var isValid = true;
        step.find('input[required], select[required], textarea[required]').each(function() {
            if (!$(this).val()) {
                $(this).addClass('error');
                isValid = false;
            } else {
                $(this).removeClass('error');
            }
        });
        return isValid;
    }
    
    function updateSummary() {
        // Update booking summary
        var selectedService = $('input[name="selected_service"]:checked');
        if (selectedService.length) {
            var serviceName = selectedService.closest('.service-card').find('h4').text();
            var servicePrice = selectedService.closest('.service-card').find('.service-price').text();
            $('#summary-service').text(serviceName);
            $('#summary-price').text(servicePrice);
        }
        
        var date = $('#service_date').val();
        var time = $('#service_time').val();
        if (date && time) {
            $('#summary-datetime').text(date + ' at ' + time);
        }
        
        var name = $('#customer_name').val();
        var phone = $('#customer_phone').val();
        if (name && phone) {
            $('#summary-contact').text(name + ' - ' + phone);
        }
        
        var address = $('#service_address').val();
        if (address) {
            $('#summary-address').text(address);
        }
    }
});
</script>

<?php get_footer(); ?>