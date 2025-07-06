<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="home-container bg-white">
    <!-- Hero Carousel -->
    <div class="header-carousel owl-carousel owl-theme">
        
        <!-- Slide 1: Residential -->
        <header class="banner-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                        <div class="banner-text">
                            <h2 class="banner-head1">
                                <?php _e('One Package to keep your', 'urbanshieldpestcontrol'); ?> <span><?php _e('home pest-free!', 'urbanshieldpestcontrol'); ?></span>
                            </h2>
                            <p class="para">
                                <?php _e('Stop booking multiple services today! Effective, affordable, and family-friendly solutions, guaranteed!', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="banner-points">
                                <ul class="theme-list style-2">
                                    <li><?php _e('Free evaluation by skilled experts', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Employing eco-friendly gels and sprays', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="banner-btns">
                                <a href="<?php echo esc_url(home_url('/booking')); ?>" class="button main-btn btn-yellow-gr text-center">
                                    <?php _e('Book Now', 'urbanshieldpestcontrol'); ?>
                                </a>
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button main-btn with-ico left-ico btn-yellow-gr">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone-ico.svg" alt="Phone Icon">
                                    <?php _e('Request A Call-Back', 'urbanshieldpestcontrol'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                        <div class="banner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/banner-img003.png" alt="<?php esc_attr_e('Pest control service for homes and businesses', 'urbanshieldpestcontrol'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Slide 2: Commercial -->
        <header class="banner-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                        <div class="banner-text">
                            <h2 class="banner-head1">
                                <?php _e('Shield your office space from', 'urbanshieldpestcontrol'); ?> <span><?php _e('Pests today!', 'urbanshieldpestcontrol'); ?></span>
                            </h2>
                            <p class="para">
                                <?php _e("You have the pests; we have the solution. India's leading Pest Control Agency, Offering Quick and Prompt Services As Per Your Commercial Needs.", 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="banner-points">
                                <ul class="theme-list style-2">
                                    <li><?php _e('100% Pest-Free Working Environment Guaranteed', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Same-Day Solutions To Your Complaints', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="banner-btns">
                                <a href="<?php echo esc_url(home_url('/booking')); ?>" class="button main-btn btn-yellow-gr text-center">
                                    <?php _e('Book Now', 'urbanshieldpestcontrol'); ?>
                                </a>
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button main-btn with-ico left-ico btn-yellow-gr">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone-ico.svg" alt="Phone Icon">
                                    <?php _e('Request A Call-Back', 'urbanshieldpestcontrol'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                        <div class="banner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/banner-img002.png" alt="<?php esc_attr_e('Urban Shield Pest Control pest control services', 'urbanshieldpestcontrol'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Slide 3: Welcome -->
        <header class="banner-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                        <div class="banner-text">
                            <h2 class="banner-head1">
                                <?php _e('Welcome to', 'urbanshieldpestcontrol'); ?> <span><?php _e('urban shield pest control', 'urbanshieldpestcontrol'); ?></span>
                            </h2>
                            <p class="para">
                                <?php _e("Something is Bugging You? We'Ve Got The Solution!", 'urbanshieldpestcontrol'); ?><br>
                                <?php _e('Fast & Relentless Protection You Can Rely On Always!', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="banner-points">
                                <ul class="theme-list style-2">
                                    <li><?php _e('100% Satisfaction Guaranteed', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('We Serve Your Pest Control Needs Pan India', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="banner-btns">
                                <a href="<?php echo esc_url(home_url('/booking')); ?>" class="button main-btn btn-yellow-gr text-center">
                                    <?php _e('Book Now', 'urbanshieldpestcontrol'); ?>
                                </a>
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button main-btn with-ico left-ico btn-yellow-gr">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone-ico.svg" alt="Phone Icon">
                                    <?php _e('Request A Call-Back', 'urbanshieldpestcontrol'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                        <div class="banner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/hero-img.png" alt="<?php esc_attr_e('Urban Shield Pest Control pest control service', 'urbanshieldpestcontrol'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
    </div>
    
    <!-- Service packages area -->
    <section class="serv-pack-container">
        <div class="container">
            <div class="srv-pack-wrapper">
                <div class="sec-head-wrapper center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pest-serv-design.svg" class="design" alt="">
                    <h2 class="sec-head">
                        <?php _e('Pest Control Services Designed for', 'urbanshieldpestcontrol'); ?> <span><?php _e('Indian Households!', 'urbanshieldpestcontrol'); ?></span>
                    </h2>
                </div>
                <div class="owl-carousel owl-theme srv-pack-carousel">
                    <?php
                    $services = urbanshieldpestcontrol_get_services();
                    foreach ($services as $service) :
                        $price = get_post_meta($service->ID, 'service_price', true);
                        $features = get_post_meta($service->ID, 'service_features', true);
                        $color_scheme = get_post_meta($service->ID, 'service_color_scheme', true);
                        $thumbnail = get_the_post_thumbnail_url($service->ID, 'medium');
                    ?>
                    <div class="srv-pack-card <?php echo esc_attr($color_scheme); ?>">
                        <div class="srv-card-header <?php echo $thumbnail ? '' : 'justify-content-center'; ?>">
                            <?php if ($thumbnail) : ?>
                                <img style="max-width: 160px;" src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($service->post_title); ?>">
                            <?php else : ?>
                                <h3><?php echo esc_html($service->post_title); ?></h3>
                            <?php endif; ?>
                        </div>
                        <div class="srv-card-body scrollbar">
                            <?php if ($features) : ?>
                                <ul class="theme-list style-2">
                                    <?php
                                    $features_list = explode("\n", $features);
                                    foreach ($features_list as $feature) :
                                        if (trim($feature)) :
                                    ?>
                                        <li><?php echo esc_html(trim($feature)); ?></li>
                                    <?php 
                                        endif;
                                    endforeach; 
                                    ?>
                                </ul>
                            <?php else : ?>
                                <div><?php echo wp_kses_post($service->post_excerpt ?: $service->post_content); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="srv-card-footer">
                            <p class="price-sub"><?php _e('Price', 'urbanshieldpestcontrol'); ?></p>
                            <p class="main-price">
                                <sup class="rupee">₹</sup><?php echo esc_html($price ?: '0'); ?> <span><?php _e('Onwards', 'urbanshieldpestcontrol'); ?></span>
                            </p>
                        </div>
                        <a href="<?php echo esc_url(get_permalink($service->ID)); ?>" class="button pkg-btn main-btn btn-yellow-gr text-center">
                            <span><?php _e('Book Now', 'urbanshieldpestcontrol'); ?></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Promise section -->
    <section class="promise-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 text-center col-md-4 col-12">
                    <div class="img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blured-color-bg.svg" class="des" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/promise.svg" style="position: relative;" alt="">
                    </div>
                    <div class="sec-head-wrapper center" style="position: relative; z-index: 2;">
                        <h2 class="sec-head"><?php _e('The Urban Shield Pest Control', 'urbanshieldpestcontrol'); ?> <span class=""><?php _e('Promise', 'urbanshieldpestcontrol'); ?></span></h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2 offset-md-2 col-sm-12 col-md-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico01.svg" alt="">
                                <p class="head"><?php _e('Environmentally Friendly Pest Solutions', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico02.svg" alt="">
                                <p class="head"><?php _e('Plans Customized To Your Needs', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico03.svg" alt="">
                                <p class="head"><?php _e('All Year Round Protection', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico04.svg" alt="" style="transform: scaleX(-1);">
                                <p class="head"><?php _e("India's First Internationally Certified Company", 'urbanshieldpestcontrol'); ?></p>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico05.svg" alt="">
                                <p class="head"><?php _e('Complaints Addressed Within 2-5 Hours', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ico06.svg" alt="">
                                <p class="head"><?php _e('Technologically-Advanced Services', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials -->
    <section class="test-sec background-blue">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="sec-head-wrap">
                    <h3 class="sec-head color-light">
                        <?php _e("Don't Listen to Us. Listen to What", 'urbanshieldpestcontrol'); ?> <span class="color-yellow"><?php _e('Our Customers Say', 'urbanshieldpestcontrol'); ?></span>
                    </h3>
                    <div class="c-owl-nav">
                        <button class="prev" id="prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sq-prev.svg" alt="">
                        </button>
                        <button class="next" id="nxt">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sq-next.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 col-sm-12 col-12">
                <div class="owl-carousel owl-theme test-carousel">
                    <div class="test-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" class="quote" alt="">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/75gId6z6uD8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="test-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" class="quote" alt="">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/x4Cvk7vjDJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Clientele section -->
    <?php get_template_part('template-parts/clientele'); ?>
    
    <!-- Certification section -->
    <section class="cer-sec">
        <div class="container">
            <div class="sec-head-wrapper center">
                <h2 class="sec-head">
                    <?php _e('See how the experts,', 'urbanshieldpestcontrol'); ?><br>
                    <span class="color-yellow"><?php _e('keep your home pest free!', 'urbanshieldpestcontrol'); ?></span>
                </h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pest%20shield-cer.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 col-sm-12 col-12">
                    <iframe style="border-radius: 12px;" width="100%" height="260" src="https://www.youtube.com/embed/vbyEVjsBDGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
jQuery(document).ready(function($) {
    // Initialize carousels
    $('.srv-pack-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        responsive: {
            0: { items: 1 },
            750: { items: 1 },
            991: { items: 1.5 },
            1000: { items: 3 }
        }
    });
    
    $('.test-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1.5 },
            1000: { items: 1.6 },
            1600: { items: 1.8 }
        }
    });
    
    $('.header-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplayHoverPause: true,
        autoplay: true,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 },
            1600: { items: 1 }
        }
    });
    
    // Custom navigation for testimonials
    var owl = $('.test-carousel');
    $('#nxt').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('#prev').click(function() {
        owl.trigger('prev.owl.carousel');
    });
});
</script>

<?php get_footer(); ?>