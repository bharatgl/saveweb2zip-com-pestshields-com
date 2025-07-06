<?php
/**
 * Template Name: Career Page
 */

get_header(); ?>

<main class="career-container">
    <!-- Hero Section -->
    <section class="career-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/career-bg.jpg');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title text-white"><?php _e('Join Our Team', 'urbanshieldpestcontrol'); ?></h1>
                    <p class="hero-subtitle text-white">
                        <?php _e('Build a rewarding career in pest control with India\'s leading pest control company', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="why-work-with-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title"><?php _e('Why Work With Urban Shield Pest Control?', 'urbanshieldpestcontrol'); ?></h2>
                    <p class="section-description">
                        <?php _e('Join a company that values growth, innovation, and making a positive impact on communities across India.', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3><?php _e('Career Growth', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Clear career progression paths with opportunities for advancement and skill development.', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3><?php _e('Training & Development', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Comprehensive training programs and continuous learning opportunities to enhance your skills.', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3><?php _e('Health & Benefits', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Competitive salary packages with health insurance and other employee benefits.', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3><?php _e('Team Environment', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Work with a supportive team of professionals who are passionate about their work.', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3><?php _e('Recognition', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Performance-based recognition and rewards program to acknowledge your contributions.', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3><?php _e('Work-Life Balance', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Flexible working arrangements and emphasis on maintaining a healthy work-life balance.', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings -->
    <section class="current-openings">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title"><?php _e('Current Job Openings', 'urbanshieldpestcontrol'); ?></h2>
                    <p class="section-description">
                        <?php _e('Explore our current job opportunities and find the perfect role for you.', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3><?php _e('Pest Control Technician', 'urbanshieldpestcontrol'); ?></h3>
                            <span class="job-type"><?php _e('Full-time', 'urbanshieldpestcontrol'); ?></span>
                        </div>
                        <div class="job-details">
                            <p><strong><?php _e('Location:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('Multiple Cities', 'urbanshieldpestcontrol'); ?></p>
                            <p><strong><?php _e('Experience:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('1-3 years', 'urbanshieldpestcontrol'); ?></p>
                            <p><?php _e('Join our field team as a pest control technician. Provide expert pest control services to residential and commercial clients.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-outline" onclick="scrollToApplication()"><?php _e('Apply Now', 'urbanshieldpestcontrol'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3><?php _e('Sales Executive', 'urbanshieldpestcontrol'); ?></h3>
                            <span class="job-type"><?php _e('Full-time', 'urbanshieldpestcontrol'); ?></span>
                        </div>
                        <div class="job-details">
                            <p><strong><?php _e('Location:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('Delhi NCR', 'urbanshieldpestcontrol'); ?></p>
                            <p><strong><?php _e('Experience:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('2-5 years', 'urbanshieldpestcontrol'); ?></p>
                            <p><?php _e('Drive business growth by developing new client relationships and maintaining existing accounts in the pest control industry.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-outline" onclick="scrollToApplication()"><?php _e('Apply Now', 'urbanshieldpestcontrol'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3><?php _e('Customer Service Representative', 'urbanshieldpestcontrol'); ?></h3>
                            <span class="job-type"><?php _e('Full-time', 'urbanshieldpestcontrol'); ?></span>
                        </div>
                        <div class="job-details">
                            <p><strong><?php _e('Location:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('Noida', 'urbanshieldpestcontrol'); ?></p>
                            <p><strong><?php _e('Experience:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('1-2 years', 'urbanshieldpestcontrol'); ?></p>
                            <p><?php _e('Provide excellent customer support, handle inquiries, and coordinate service appointments for our clients.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-outline" onclick="scrollToApplication()"><?php _e('Apply Now', 'urbanshieldpestcontrol'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="job-card">
                        <div class="job-header">
                            <h3><?php _e('Area Manager', 'urbanshieldpestcontrol'); ?></h3>
                            <span class="job-type"><?php _e('Full-time', 'urbanshieldpestcontrol'); ?></span>
                        </div>
                        <div class="job-details">
                            <p><strong><?php _e('Location:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('Mumbai', 'urbanshieldpestcontrol'); ?></p>
                            <p><strong><?php _e('Experience:', 'urbanshieldpestcontrol'); ?></strong> <?php _e('5+ years', 'urbanshieldpestcontrol'); ?></p>
                            <p><?php _e('Lead and manage regional operations, oversee team performance, and drive business expansion in the assigned territory.', 'urbanshieldpestcontrol'); ?></p>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-outline" onclick="scrollToApplication()"><?php _e('Apply Now', 'urbanshieldpestcontrol'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Application Form -->
    <section class="career-application" id="application-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="application-form-wrapper">
                        <h2 class="text-center"><?php _e('Apply for a Position', 'urbanshieldpestcontrol'); ?></h2>
                        <p class="text-center"><?php _e('Fill out the form below to submit your application. We\'ll get back to you soon.', 'urbanshieldpestcontrol'); ?></p>
                        
                        <form id="career-form" class="career-form">
                            <?php wp_nonce_field('urbanshieldpestcontrol_career', 'career_nonce'); ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="applicant_name"><?php _e('Full Name *', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="text" id="applicant_name" name="applicant_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="applicant_email"><?php _e('Email Address *', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="email" id="applicant_email" name="applicant_email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="applicant_phone"><?php _e('Phone Number *', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="tel" id="applicant_phone" name="applicant_phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="position_applied"><?php _e('Position Applied For *', 'urbanshieldpestcontrol'); ?></label>
                                        <select id="position_applied" name="position_applied" class="form-control" required>
                                            <option value=""><?php _e('Select Position', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="pest-control-technician"><?php _e('Pest Control Technician', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="sales-executive"><?php _e('Sales Executive', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="customer-service"><?php _e('Customer Service Representative', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="area-manager"><?php _e('Area Manager', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="other"><?php _e('Other', 'urbanshieldpestcontrol'); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experience_years"><?php _e('Years of Experience', 'urbanshieldpestcontrol'); ?></label>
                                        <select id="experience_years" name="experience_years" class="form-control">
                                            <option value=""><?php _e('Select Experience', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="0-1"><?php _e('0-1 years', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="1-3"><?php _e('1-3 years', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="3-5"><?php _e('3-5 years', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="5-10"><?php _e('5-10 years', 'urbanshieldpestcontrol'); ?></option>
                                            <option value="10+"><?php _e('10+ years', 'urbanshieldpestcontrol'); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="current_location"><?php _e('Current Location', 'urbanshieldpestcontrol'); ?></label>
                                        <input type="text" id="current_location" name="current_location" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="education"><?php _e('Educational Qualification', 'urbanshieldpestcontrol'); ?></label>
                                <input type="text" id="education" name="education" class="form-control" 
                                    placeholder="<?php esc_attr_e('e.g., Bachelor\'s in Science, Diploma in Engineering', 'urbanshieldpestcontrol'); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="previous_experience"><?php _e('Previous Work Experience', 'urbanshieldpestcontrol'); ?></label>
                                <textarea id="previous_experience" name="previous_experience" class="form-control" rows="4"
                                    placeholder="<?php esc_attr_e('Briefly describe your previous work experience...', 'urbanshieldpestcontrol'); ?>"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="why_join"><?php _e('Why do you want to join Urban Shield Pest Control?', 'urbanshieldpestcontrol'); ?></label>
                                <textarea id="why_join" name="why_join" class="form-control" rows="3"
                                    placeholder="<?php esc_attr_e('Tell us why you\'re interested in working with us...', 'urbanshieldpestcontrol'); ?>"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="resume_upload"><?php _e('Upload Resume (PDF, DOC, DOCX - Max 5MB)', 'urbanshieldpestcontrol'); ?></label>
                                <input type="file" id="resume_upload" name="resume_upload" class="form-control" 
                                    accept=".pdf,.doc,.docx" data-max-size="5242880">
                                <small class="form-text text-muted"><?php _e('Please upload your resume in PDF, DOC, or DOCX format (max 5MB)', 'urbanshieldpestcontrol'); ?></small>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" id="career_agreement" name="career_agreement" class="form-check-input" required>
                                    <label for="career_agreement" class="form-check-label">
                                        <?php _e('I agree that the information provided is accurate and I consent to the processing of my personal data for recruitment purposes.', 'urbanshieldpestcontrol'); ?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane"></i>
                                    <?php _e('Submit Application', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </form>
                        
                        <div id="career-response" class="career-response" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Culture -->
    <section class="company-culture">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title"><?php _e('Our Company Culture', 'urbanshieldpestcontrol'); ?></h2>
                    <p class="section-description">
                        <?php _e('At Urban Shield Pest Control, we believe in creating an inclusive, innovative, and supportive work environment where every team member can thrive and contribute to our mission of creating pest-free environments.', 'urbanshieldpestcontrol'); ?>
                    </p>
                    
                    <div class="culture-values">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="value-item">
                                    <h4><?php _e('Innovation', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e('We encourage creative thinking and innovative solutions to pest control challenges.', 'urbanshieldpestcontrol'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="value-item">
                                    <h4><?php _e('Integrity', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e('We maintain the highest standards of honesty and transparency in all our dealings.', 'urbanshieldpestcontrol'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="value-item">
                                    <h4><?php _e('Excellence', 'urbanshieldpestcontrol'); ?></h4>
                                    <p><?php _e('We strive for excellence in everything we do, from service delivery to customer satisfaction.', 'urbanshieldpestcontrol'); ?></p>
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
    // Career form submission
    $('#career-form').submit(function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);
        formData.append('action', 'urbanshieldpestcontrol_career_application');
        
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.html();
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> <?php _e("Submitting...", "urbanshieldpestcontrol"); ?>').prop('disabled', true);
        
        $.ajax({
            url: urbanshieldpestcontrol_ajax.ajax_url,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    $('#career-response')
                        .removeClass('alert-danger')
                        .addClass('alert alert-success')
                        .html('<i class="fas fa-check-circle"></i> ' + response.data.message)
                        .show();
                    $('#career-form')[0].reset();
                } else {
                    $('#career-response')
                        .removeClass('alert-success')
                        .addClass('alert alert-danger')
                        .html('<i class="fas fa-exclamation-circle"></i> ' + response.data.message)
                        .show();
                }
            },
            error: function() {
                $('#career-response')
                    .removeClass('alert-success')
                    .addClass('alert alert-danger')
                    .html('<i class="fas fa-exclamation-circle"></i> <?php _e("An error occurred. Please try again.", "urbanshieldpestcontrol"); ?>')
                    .show();
            },
            complete: function() {
                submitBtn.html(originalText).prop('disabled', false);
                $('html, body').animate({
                    scrollTop: $('#career-response').offset().top - 100
                }, 500);
            }
        });
    });
    
    // File upload validation
    $('#resume_upload').change(function() {
        var file = this.files[0];
        var maxSize = $(this).data('max-size');
        
        if (file && file.size > maxSize) {
            alert('<?php _e("File size must be less than 5MB", "urbanshieldpestcontrol"); ?>');
            $(this).val('');
        }
    });
});

function scrollToApplication() {
    $('html, body').animate({
        scrollTop: $('#application-form').offset().top - 100
    }, 500);
}
</script>

<?php get_footer(); ?>