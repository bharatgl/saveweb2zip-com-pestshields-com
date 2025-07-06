<?php
/**
 * Template Name: FAQ Page
 */

get_header(); ?>

<main class="faq-container">
    <!-- Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title"><?php _e('Frequently Asked Questions', 'urbanshieldpestcontrol'); ?></h1>
                    <p class="hero-subtitle">
                        <?php _e('Find answers to common questions about our pest control services, processes, and policies.', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Bar -->
    <section class="faq-search">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="search-wrapper">
                        <input type="text" id="faq-search" class="form-control" 
                            placeholder="<?php esc_attr_e('Search for answers...', 'urbanshieldpestcontrol'); ?>">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="faq-categories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category-tabs">
                        <ul class="nav nav-tabs" id="faqTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="general-tab" data-bs-toggle="tab" 
                                    data-bs-target="#general" type="button" role="tab">
                                    <?php _e('General', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="services-tab" data-bs-toggle="tab" 
                                    data-bs-target="#services" type="button" role="tab">
                                    <?php _e('Services', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="booking-tab" data-bs-toggle="tab" 
                                    data-bs-target="#booking" type="button" role="tab">
                                    <?php _e('Booking', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pricing-tab" data-bs-toggle="tab" 
                                    data-bs-target="#pricing" type="button" role="tab">
                                    <?php _e('Pricing', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="safety-tab" data-bs-toggle="tab" 
                                    data-bs-target="#safety" type="button" role="tab">
                                    <?php _e('Safety', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="faq-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="tab-content" id="faqTabsContent">
                        
                        <!-- General FAQs -->
                        <div class="tab-pane fade show active" id="general" role="tabpanel">
                            <div class="accordion" id="generalAccordion">
                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#general1">
                                            <?php _e('What is Urban Shield Pest Control and what services do you offer?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="general1" class="accordion-collapse collapse show" data-bs-parent="#generalAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Urban Shield Pest Control India Pvt Ltd is a leading pest control company with over 25 years of experience. We offer comprehensive pest control services including home care packages, termite control, bed bug treatment, mosquito control, bird proofing, and commercial pest management across 100+ cities in India.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general2">
                                            <?php _e('How long has Urban Shield Pest Control been in business?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="general2" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Urban Shield Pest Control has been serving customers for over 25 years, making us one of the most experienced and trusted pest control companies in India.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general3">
                                            <?php _e('Which cities do you serve?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="general3" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                        <div class="accordion-body">
                                            <?php _e('We provide pest control services across 100+ cities in India. Contact us to check if we serve your specific location.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general4">
                                            <?php _e('Are you licensed and certified?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="general4" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Yes, Urban Shield Pest Control is India\'s first internationally certified pest control company. We hold all necessary licenses and certifications required for pest control operations.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Services FAQs -->
                        <div class="tab-pane fade" id="services" role="tabpanel">
                            <div class="accordion" id="servicesAccordion">
                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#services1">
                                            <?php _e('What is included in the Home Care Package?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="services1" class="accordion-collapse collapse show" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Our Home Care Package includes free inspection by trained staff, eco-friendly spray and gel application in every corner of the house, complete elimination of ants, rodents, and cockroaches, and coverage of accessible cracks, nooks, and kitchen areas.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services2">
                                            <?php _e('How effective is your termite control service?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="services2" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Our termite control service comes with a 2-year warranty and includes free inspection, customizable packages, and mandatory check after 1 year. We use proven methods that effectively eliminate termites and prevent future infestations.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services3">
                                            <?php _e('Do you offer emergency pest control services?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="services3" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Yes, we offer 24/7 emergency pest control services for urgent situations. We address complaints within 2-5 hours during business hours and have emergency response available round the clock.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services4">
                                            <?php _e('What types of pests do you control?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="services4" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body">
                                            <?php _e('We control a wide range of pests including cockroaches, ants, termites, rodents, bed bugs, mosquitoes, lizards, flies, and birds. We also provide specialized services for bee hive removal and COVID-19 sanitization.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Booking FAQs -->
                        <div class="tab-pane fade" id="booking" role="tabpanel">
                            <div class="accordion" id="bookingAccordion">
                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#booking1">
                                            <?php _e('How can I book a pest control service?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="booking1" class="accordion-collapse collapse show" data-bs-parent="#bookingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('You can book our services online through our website, call us directly, or request a callback. Our online booking system allows you to select services, choose date and time, and provide your details conveniently.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#booking2">
                                            <?php _e('How far in advance should I book?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="booking2" class="accordion-collapse collapse" data-bs-parent="#bookingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('We recommend booking at least 24-48 hours in advance for regular services. However, we can often accommodate same-day bookings based on availability. For emergency services, we respond within 2-5 hours.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#booking3">
                                            <?php _e('Can I reschedule or cancel my appointment?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="booking3" class="accordion-collapse collapse" data-bs-parent="#bookingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Yes, you can reschedule or cancel your appointment by contacting our customer service team at least 4 hours before the scheduled time. We understand that plans can change and try to accommodate rescheduling requests.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#booking4">
                                            <?php _e('Do I need to be present during the service?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="booking4" class="accordion-collapse collapse" data-bs-parent="#bookingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('It\'s preferred that someone is present during the service for access and to discuss any specific concerns. However, if you cannot be present, please ensure someone responsible is available and provide clear instructions about access to your property.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing FAQs -->
                        <div class="tab-pane fade" id="pricing" role="tabpanel">
                            <div class="accordion" id="pricingAccordion">
                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pricing1">
                                            <?php _e('How is the pricing determined?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="pricing1" class="accordion-collapse collapse show" data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Our pricing is based on factors such as the type of service, property size, severity of infestation, and location. We provide transparent pricing with no hidden costs. Contact us for a customized quote based on your specific needs.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricing2">
                                            <?php _e('Do you offer any discounts or packages?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="pricing2" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Yes, we offer various discount packages for multiple services, annual maintenance contracts, and first-time customers. We also have seasonal promotions and referral bonuses. Contact us to learn about current offers.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricing3">
                                            <?php _e('What payment methods do you accept?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="pricing3" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('We accept cash, credit/debit cards, UPI payments, net banking, and digital wallets. Payment can be made after service completion, and we provide proper invoices for all transactions.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricing4">
                                            <?php _e('Is the inspection really free?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="pricing4" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Yes, we provide completely free property inspections with no obligations. Our experts will assess your pest control needs and provide recommendations without any charges.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Safety FAQs -->
                        <div class="tab-pane fade" id="safety" role="tabpanel">
                            <div class="accordion" id="safetyAccordion">
                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#safety1">
                                            <?php _e('Are your treatments safe for children and pets?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="safety1" class="accordion-collapse collapse show" data-bs-parent="#safetyAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Yes, we use eco-friendly, EPA-approved chemicals that are safe for families and pets when applied correctly. Our technicians are trained to apply treatments safely, and we provide specific instructions for any precautions needed.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safety2">
                                            <?php _e('What precautions should I take during treatment?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="safety2" class="accordion-collapse collapse" data-bs-parent="#safetyAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Our technician will provide specific instructions based on the treatment type. Generally, we recommend keeping children and pets away from treated areas for 2-4 hours, ensuring proper ventilation, and not cleaning treated surfaces immediately.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safety3">
                                            <?php _e('Do I need to prepare my home before treatment?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="safety3" class="accordion-collapse collapse" data-bs-parent="#safetyAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Minimal preparation is usually required. We may ask you to clear access to treatment areas, cover food items, and remove pets temporarily. Our team will provide a detailed preparation checklist when booking.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item faq-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safety4">
                                            <?php _e('What if I have allergies or health concerns?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h3>
                                    <div id="safety4" class="accordion-collapse collapse" data-bs-parent="#safetyAccordion">
                                        <div class="accordion-body">
                                            <?php _e('Please inform us about any allergies or health concerns when booking. We can adjust our treatment methods and chemicals accordingly. We have alternative eco-friendly solutions for sensitive individuals.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions -->
    <section class="still-questions">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2><?php _e('Still Have Questions?', 'urbanshieldpestcontrol'); ?></h2>
                    <p><?php _e('Can\'t find what you\'re looking for? Our customer support team is here to help.', 'urbanshieldpestcontrol'); ?></p>
                    <div class="contact-options">
                        <a href="tel:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?>" class="btn btn-primary">
                            <i class="fas fa-phone"></i>
                            <?php _e('Call Us', 'urbanshieldpestcontrol'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">
                            <i class="fas fa-envelope"></i>
                            <?php _e('Contact Us', 'urbanshieldpestcontrol'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
jQuery(document).ready(function($) {
    // FAQ Search functionality
    $('#faq-search').on('keyup', function() {
        var searchTerm = $(this).val().toLowerCase();
        
        $('.faq-item').each(function() {
            var questionText = $(this).find('.accordion-button').text().toLowerCase();
            var answerText = $(this).find('.accordion-body').text().toLowerCase();
            
            if (questionText.includes(searchTerm) || answerText.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        
        // Show "no results" message if no items are visible
        $('.tab-pane.active').each(function() {
            var visibleItems = $(this).find('.faq-item:visible').length;
            if (visibleItems === 0 && searchTerm !== '') {
                if ($(this).find('.no-results').length === 0) {
                    $(this).append('<div class="no-results text-center py-4"><p><?php _e("No results found for your search.", "urbanshieldpestcontrol"); ?></p></div>');
                }
            } else {
                $(this).find('.no-results').remove();
            }
        });
    });
    
    // Clear search when switching tabs
    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function() {
        $('#faq-search').val('');
        $('.faq-item').show();
        $('.no-results').remove();
    });
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 500);
        }
    });
});
</script>

<?php get_footer(); ?>