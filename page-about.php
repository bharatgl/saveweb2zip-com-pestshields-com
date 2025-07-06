<?php
/**
 * Template Name: About Us Page
 */

get_header(); ?>

<main class="about-container">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-hero-content">
                        <h1 class="page-title"><?php _e('About Urban Shield Pest Control', 'urbanshieldpestcontrol'); ?></h1>
                        <p class="hero-subtitle">
                            <?php _e("India's Leading Pest Control Company", 'urbanshieldpestcontrol'); ?>
                        </p>
                        <p class="hero-description">
                            <?php _e('With over 25 years of experience, Urban Shield Pest Control India Pvt Ltd is dedicated to providing effective, safe, and eco-friendly pest control solutions for homes and businesses across India.', 'urbanshieldpestcontrol'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-hero-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ab-banner.jpg" alt="<?php esc_attr_e('About Urban Shield Pest Control', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="company-story">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title"><?php _e('Our Story', 'urbanshieldpestcontrol'); ?></h2>
                    <p class="section-description">
                        <?php _e('Founded with a vision to create pest-free environments for Indian families and businesses, Urban Shield Pest Control has grown from a small local service provider to a nationally recognized pest control company. Our journey began with a simple belief: everyone deserves to live and work in a clean, safe, and pest-free environment.', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ico01.svg" alt="Mission">
                        </div>
                        <h3><?php _e('Our Mission', 'urbanshieldpestcontrol'); ?></h3>
                        <p>
                            <?php _e('To provide comprehensive, eco-friendly pest control solutions that protect health, property, and peace of mind while maintaining the highest standards of safety and customer satisfaction.', 'urbanshieldpestcontrol'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vision-card">
                        <div class="card-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ico02.svg" alt="Vision">
                        </div>
                        <h3><?php _e('Our Vision', 'urbanshieldpestcontrol'); ?></h3>
                        <p>
                            <?php _e('To be the most trusted pest control company in India, known for innovation, reliability, and environmental responsibility, creating healthier communities across the nation.', 'urbanshieldpestcontrol'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <h2 class="section-title"><?php _e('Why Choose Urban Shield Pest Control?', 'urbanshieldpestcontrol'); ?></h2>
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico04.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4><?php _e('Internationally Certified', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e("India's first internationally certified pest control company", 'urbanshieldpestcontrol'); ?></p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico01.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4><?php _e('Eco-Friendly Solutions', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e('Safe for families, pets, and the environment', 'urbanshieldpestcontrol'); ?></p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico05.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4><?php _e('Rapid Response', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e('Complaints addressed within 2-5 hours', 'urbanshieldpestcontrol'); ?></p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico06.svg" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4><?php _e('Advanced Technology', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e('Latest equipment and scientifically proven methods', 'urbanshieldpestcontrol'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pest%20shield-cer.jpg" alt="<?php esc_attr_e('Urban Shield Pest Control Certification', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="statistics-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-number">25+</div>
                        <div class="stat-label"><?php _e('Years of Experience', 'urbanshieldpestcontrol'); ?></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-number">50,000+</div>
                        <div class="stat-label"><?php _e('Happy Customers', 'urbanshieldpestcontrol'); ?></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-number">100+</div>
                        <div class="stat-label"><?php _e('Cities Covered', 'urbanshieldpestcontrol'); ?></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-number">100%</div>
                        <div class="stat-label"><?php _e('Satisfaction Guarantee', 'urbanshieldpestcontrol'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title"><?php _e('Our Expert Team', 'urbanshieldpestcontrol'); ?></h2>
                    <p class="section-description">
                        <?php _e('Our team of certified pest control professionals brings years of experience and expertise to every job. We are committed to continuous training and staying updated with the latest pest control technologies and methods.', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-member-info">
                            <h4><?php _e('Certified Technicians', 'urbanshieldpestcontrol'); ?></h4>
                            <p><?php _e('All our technicians are certified and undergo regular training to ensure the highest quality service.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-member-info">
                            <h4><?php _e('Expert Entomologists', 'urbanshieldpestcontrol'); ?></h4>
                            <p><?php _e('Our team includes qualified entomologists who develop effective treatment strategies for different pest species.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-member-info">
                            <h4><?php _e('Customer Support', 'urbanshieldpestcontrol'); ?></h4>
                            <p><?php _e('Our dedicated customer support team ensures that all your queries and concerns are addressed promptly.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2><?php _e('Ready to Experience the Urban Shield Pest Control Difference?', 'urbanshieldpestcontrol'); ?></h2>
                    <p><?php _e('Join thousands of satisfied customers who trust Urban Shield Pest Control for their pest control needs.', 'urbanshieldpestcontrol'); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url('/booking')); ?>" class="btn btn-primary">
                            <?php _e('Book Service Now', 'urbanshieldpestcontrol'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">
                            <?php _e('Contact Us', 'urbanshieldpestcontrol'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>