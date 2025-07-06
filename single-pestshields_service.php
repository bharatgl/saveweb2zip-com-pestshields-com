<?php
/**
 * Single Service Template
 */

get_header(); ?>

<main class="service-single-container">
    <?php while (have_posts()) : the_post(); 
        $service_id = get_the_ID();
        $price = get_post_meta($service_id, 'service_price', true);
        $features = get_post_meta($service_id, 'service_features', true);
        $warranty = get_post_meta($service_id, 'service_warranty', true);
        $color_scheme = get_post_meta($service_id, 'service_color_scheme', true);
    ?>
    
    <!-- Service Hero -->
    <section class="service-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'urbanshieldpestcontrol'); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/#services')); ?>"><?php _e('Services', 'urbanshieldpestcontrol'); ?></a></li>
                            <li class="breadcrumb-item active"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="service-hero-content">
                        <h1 class="service-title"><?php the_title(); ?></h1>
                        <div class="service-price">
                            <span class="price-label"><?php _e('Starting from', 'urbanshieldpestcontrol'); ?></span>
                            <span class="price-value">₹<?php echo esc_html($price ?: '0'); ?></span>
                            <span class="price-note"><?php _e('onwards', 'urbanshieldpestcontrol'); ?></span>
                        </div>
                        <div class="service-excerpt">
                            <?php echo wp_kses_post(get_the_excerpt() ?: get_the_content()); ?>
                        </div>
                        <div class="service-cta">
                            <a href="<?php echo esc_url(home_url('/booking?service=' . $service_id)); ?>" class="btn btn-primary btn-lg">
                                <i class="fas fa-calendar-check"></i>
                                <?php _e('Book Now', 'urbanshieldpestcontrol'); ?>
                            </a>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline btn-lg">
                                <i class="fas fa-phone"></i>
                                <?php _e('Call for Quote', 'urbanshieldpestcontrol'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-hero-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title())); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-placeholder.jpg" 
                                 alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-content">
                        <h2><?php _e('Service Overview', 'urbanshieldpestcontrol'); ?></h2>
                        <div class="service-description">
                            <?php the_content(); ?>
                        </div>
                        
                        <?php if ($features) : ?>
                        <div class="service-features">
                            <h3><?php _e('What\'s Included', 'urbanshieldpestcontrol'); ?></h3>
                            <ul class="features-list">
                                <?php
                                $features_list = explode("\n", $features);
                                foreach ($features_list as $feature) :
                                    if (trim($feature)) :
                                ?>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <?php echo esc_html(trim($feature)); ?>
                                    </li>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Process Steps -->
                        <div class="service-process">
                            <h3><?php _e('Our Process', 'urbanshieldpestcontrol'); ?></h3>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h4><?php _e('Inspection', 'urbanshieldpestcontrol'); ?></h4>
                                        <p><?php _e('Our certified technicians conduct a thorough inspection of your property to identify pest issues and entry points.', 'urbanshieldpestcontrol'); ?></p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h4><?php _e('Treatment Plan', 'urbanshieldpestcontrol'); ?></h4>
                                        <p><?php _e('We develop a customized treatment plan based on the type of pests, severity of infestation, and your specific needs.', 'urbanshieldpestcontrol'); ?></p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h4><?php _e('Treatment', 'urbanshieldpestcontrol'); ?></h4>
                                        <p><?php _e('We apply safe, effective treatments using eco-friendly products and advanced techniques to eliminate pests.', 'urbanshieldpestcontrol'); ?></p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h4><?php _e('Follow-up', 'urbanshieldpestcontrol'); ?></h4>
                                        <p><?php _e('We provide follow-up services and monitoring to ensure long-term pest control and prevention.', 'urbanshieldpestcontrol'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ for this service -->
                        <div class="service-faq">
                            <h3><?php _e('Frequently Asked Questions', 'urbanshieldpestcontrol'); ?></h3>
                            <div class="accordion" id="serviceFAQ">
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            <?php _e('How long does the treatment take?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h4>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#serviceFAQ">
                                        <div class="accordion-body">
                                            <?php _e('Treatment time varies depending on the size of your property and severity of the pest problem. Typically, residential treatments take 1-3 hours, while commercial properties may require longer.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            <?php _e('Is the treatment safe for my family and pets?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h4>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#serviceFAQ">
                                        <div class="accordion-body">
                                            <?php _e('Yes, we use eco-friendly, EPA-approved products that are safe for humans and pets when applied correctly. Our technicians will provide specific safety instructions if needed.', 'urbanshieldpestcontrol'); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                            <?php _e('Do you provide any warranty or guarantee?', 'urbanshieldpestcontrol'); ?>
                                        </button>
                                    </h4>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#serviceFAQ">
                                        <div class="accordion-body">
                                            <?php if ($warranty) : ?>
                                                <?php echo esc_html($warranty); ?>
                                            <?php else : ?>
                                                <?php _e('Yes, we provide service guarantees and will return for additional treatments if needed within the warranty period at no extra cost.', 'urbanshieldpestcontrol'); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <!-- Booking Card -->
                        <div class="booking-card">
                            <h3><?php _e('Book This Service', 'urbanshieldpestcontrol'); ?></h3>
                            <div class="price-display">
                                <span class="price">₹<?php echo esc_html($price ?: '0'); ?></span>
                                <span class="price-note"><?php _e('starting price', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                            <div class="booking-benefits">
                                <ul>
                                    <li><i class="fas fa-check"></i> <?php _e('Free Inspection', 'urbanshieldpestcontrol'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Same Day Service', 'urbanshieldpestcontrol'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('100% Satisfaction Guarantee', 'urbanshieldpestcontrol'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Eco-Friendly Products', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="booking-actions">
                                <a href="<?php echo esc_url(home_url('/booking?service=' . $service_id)); ?>" class="btn btn-primary btn-block">
                                    <?php _e('Book Now', 'urbanshieldpestcontrol'); ?>
                                </a>
                                <a href="tel:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?>" class="btn btn-outline btn-block">
                                    <?php _e('Call Now', 'urbanshieldpestcontrol'); ?>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Contact Info -->
                        <div class="contact-info-card">
                            <h4><?php _e('Need Help?', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <span><?php _e('Call Us', 'urbanshieldpestcontrol'); ?></span>
                                    <a href="tel:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?>">
                                        <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <span><?php _e('Email Us', 'urbanshieldpestcontrol'); ?></span>
                                    <a href="mailto:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?>">
                                        <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <span><?php _e('Response Time', 'urbanshieldpestcontrol'); ?></span>
                                    <span><?php _e('Within 2-5 hours', 'urbanshieldpestcontrol'); ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Trust Indicators -->
                        <div class="trust-indicators">
                            <h4><?php _e('Why Choose Us?', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="trust-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico04.svg" alt="">
                                <span><?php _e('Internationally Certified', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                            <div class="trust-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico01.svg" alt="">
                                <span><?php _e('Eco-Friendly Solutions', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                            <div class="trust-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico05.svg" alt="">
                                <span><?php _e('24/7 Support', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services -->
    <section class="related-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php _e('Other Services You Might Need', 'urbanshieldpestcontrol'); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php
                $related_services = get_posts(array(
                    'post_type' => 'urbanshieldpestcontrol_service',
                    'posts_per_page' => 3,
                    'post__not_in' => array($service_id),
                    'orderby' => 'rand'
                ));
                
                foreach ($related_services as $related_service) :
                    $related_price = get_post_meta($related_service->ID, 'service_price', true);
                    $related_color = get_post_meta($related_service->ID, 'service_color_scheme', true);
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card <?php echo esc_attr($related_color); ?>">
                        <div class="service-header">
                            <h3><?php echo esc_html($related_service->post_title); ?></h3>
                            <div class="service-price">₹<?php echo esc_html($related_price ?: '0'); ?> <?php _e('onwards', 'urbanshieldpestcontrol'); ?></div>
                        </div>
                        <div class="service-excerpt">
                            <?php echo wp_trim_words($related_service->post_content, 15); ?>
                        </div>
                        <div class="service-actions">
                            <a href="<?php echo esc_url(get_permalink($related_service->ID)); ?>" class="btn btn-outline">
                                <?php _e('Learn More', 'urbanshieldpestcontrol'); ?>
                            </a>
                            <a href="<?php echo esc_url(home_url('/booking?service=' . $related_service->ID)); ?>" class="btn btn-primary">
                                <?php _e('Book Now', 'urbanshieldpestcontrol'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>