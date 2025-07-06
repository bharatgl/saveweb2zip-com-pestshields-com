<!-- Login inner modal view -->
<div class="modal c-modal theme-modal login-inner-modal fade" id="login" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-box-wrap">
                    <div class="color-stripes"></div>
                    <button data-bs-dismiss="modal" class="m-close"></button>
                    <div class="login-box-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <?php
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/images/logo-v2.svg" alt="' . esc_attr(get_bloginfo('name')) . '" width="200px">';
                                }
                                ?>
                            </div>
                        </div>
                        <form id="phone-login-form">
                            <div class="row">
                                <div class="form-group">
                                    <label for="customer_phone"><?php _e('Phone Number', 'urbanshieldpestcontrol'); ?></label>
                                    <div class="inp-group">
                                        <input type="tel" id="customer_phone" class="phone" placeholder="<?php esc_attr_e('Enter your phone number', 'urbanshieldpestcontrol'); ?>" name="phone">
                                    </div>
                                </div>
                                <p class="phone-msg text-center text-danger"></p>
                            </div>
                            <button type="button" id="phone-login" class="main-btn button btn-block">
                                <?php _e('Send OTP', 'urbanshieldpestcontrol'); ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login OTP view -->
<div class="modal c-modal theme-modal login-inner-modal fade" id="otp" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-box-wrap">
                    <div class="color-stripes"></div>
                    <button data-bs-dismiss="modal" class="m-close"></button>
                    <div class="login-box-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <?php
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/images/logo-v2.svg" alt="' . esc_attr(get_bloginfo('name')) . '" width="200px">';
                                }
                                ?>
                            </div>
                        </div>
                        <form class="digit-group otp" id="otp-form" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                            <div class="row">
                                <label for="digit-1"><?php _e('Enter OTP', 'urbanshieldpestcontrol'); ?></label>
                                <div class="form-group mt-10 mb-0 otp-form">
                                    <input type="text" id="digit-1" name="digit1" data-next="digit-2" maxlength="1">
                                    <input type="text" id="digit-2" name="digit2" data-next="digit-3" data-previous="digit-1" maxlength="1">
                                    <span class="splitter"></span>
                                    <input type="text" id="digit-3" name="digit3" data-next="digit-4" data-previous="digit-2" maxlength="1">
                                    <input type="text" id="digit-4" name="digit4" data-previous="digit-3" maxlength="1">
                                </div>
                                <div class="clear-inp-wrap d-flex justify-content-end">
                                    <span id="clearBtn"><?php _e('Clear All', 'urbanshieldpestcontrol'); ?></span>
                                </div>
                                <p class="sub-text mt-20">
                                    <?php _e('OTP sent on', 'urbanshieldpestcontrol'); ?> <span class="bk-phone"></span>, 
                                    <?php _e("didn't receive the OTP ?", 'urbanshieldpestcontrol'); ?> 
                                    <a href="javascript:void(0)" class="re-send-otp disable" disabled style="pointer-events:none;">
                                        <?php _e('send again', 'urbanshieldpestcontrol'); ?>
                                    </a> 
                                    <?php _e('in', 'urbanshieldpestcontrol'); ?> <span id="countdowntimer-sms">60</span>
                                </p>
                                <div class="row mt-10">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checktc" value="" id="tt">
                                            <label class="form-check-label" style="font-size: 12px;" for="tt">
                                                <?php 
                                                printf(
                                                    __('By logging in, I understand & agree to Urban Shield Pest Control India Pvt Ltd %s and %s', 'urbanshieldpestcontrol'),
                                                    '<a href="' . esc_url(home_url('/terms')) . '">' . __('Terms and conditions', 'urbanshieldpestcontrol') . '</a>',
                                                    '<a href="' . esc_url(home_url('/privacy-policy')) . '">' . __('privacy policy', 'urbanshieldpestcontrol') . '</a>'
                                                );
                                                ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <span class="otp-msg text-center text-danger"></span>
                            </div>
                            <button type="submit" class="main-btn button btn-block">
                                <?php _e('Login', 'urbanshieldpestcontrol'); ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-overlay"></div>

<footer class="main-footer">
    <div class="container">
        <section class="cta-sec">
            <div class="cta-wrap bg-blue">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                        <div class="sec-head-wrap">
                            <h2 class="sec-head color-white">
                                <?php _e("Something is Bugging You? We'Ve Got The Solution!", 'urbanshieldpestcontrol'); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 text-center col-12">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button main-btn btn-yellow-gr">
                            <?php _e('Contact Us', 'urbanshieldpestcontrol'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="ft-logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/logo-v2.svg" alt="' . esc_attr(get_bloginfo('name')) . '" width="200px">';
                    }
                    ?>
                </div>
                <p class="para mt-20">
                    <?php _e('Urban Shield Pest Control India Pvt Ltd is India\'s foremost customer-centric residential and commercial pest control company, devoted to making Indian homes and businesses Pest Free!', 'urbanshieldpestcontrol'); ?>
                </p>
                <ul class="soc-list">
                    <?php
                    $social_platforms = array(
                        'facebook' => 'fab fa-facebook',
                        'instagram' => 'fab fa-instagram',
                        'linkedin' => 'fab fa-linkedin',
                        'twitter' => 'fab fa-twitter',
                        'youtube' => 'fab fa-youtube'
                    );
                    
                    foreach ($social_platforms as $platform => $icon_class) {
                        $url = get_theme_mod('urbanshieldpestcontrol_' . $platform);
                        if ($url) {
                            echo '<li><a href="' . esc_url($url) . '" target="_blank" rel="noopener"><i class="' . esc_attr($icon_class) . '"></i></a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-6">
                <h3 class="ft-head"><?php _e('Our Services', 'urbanshieldpestcontrol'); ?></h3>
                <div class="row">
                    <div class="col-12">
                        <ul class="ft-list">
                            <?php
                            $services = urbanshieldpestcontrol_get_services();
                            foreach ($services as $service) {
                                echo '<li><a href="' . esc_url(get_permalink($service->ID)) . '">' . esc_html($service->post_title) . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-2 col-sm-12 col-6">
                <h3 class="ft-head"><?php _e('Quick Links', 'urbanshieldpestcontrol'); ?></h3>
                <ul class="ft-list">
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('About', 'urbanshieldpestcontrol'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/refer-earn')); ?>"><?php _e('Refer & Earn', 'urbanshieldpestcontrol'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Contact Us', 'urbanshieldpestcontrol'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/career')); ?>"><?php _e('Careers', 'urbanshieldpestcontrol'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/products')); ?>"><?php _e('Products', 'urbanshieldpestcontrol'); ?></a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <h3 class="ft-head"><?php _e('Contact Us', 'urbanshieldpestcontrol'); ?></h3>
                <ul class="ft-list">
                    <li style="margin-bottom: 5px;">
                        <b><?php _e('Phone :', 'urbanshieldpestcontrol'); ?> </b>
                        <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_phone', '8376090909')); ?>
                    </li>
                    <li style="margin-bottom: 5px;">
                        <b><?php _e('Email :', 'urbanshieldpestcontrol'); ?> </b>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?>">
                            <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?>
                        </a>
                    </li>
                    <li>
                        <b><?php _e('Address :', 'urbanshieldpestcontrol'); ?> </b>
                        <?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_address', 'Urban Shield Pest Control India Pvt Ltd, S-4, A-84, Sector-4, Noida, UP – 201301')); ?>
                    </li>
                </ul>
            </div>
            
            <div class="col-12 text-center" style="margin-top: 55px">
                <div class="bt-wrap">
                    <p class="para" style="margin-bottom: 0px">
                        <?php printf(__('© %s Urban Shield Pest Control India Pvt Ltd. All right reserved.', 'urbanshieldpestcontrol'), date('Y')); ?>
                    </p>
                    <ul class="bt-list">
                        <li><a href="<?php echo esc_url(home_url('/terms')); ?>"><?php _e('Terms & Conditions', 'urbanshieldpestcontrol'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"><?php _e('Privacy Policies', 'urbanshieldpestcontrol'); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
// WordPress-friendly JavaScript
jQuery(document).ready(function($) {
    // Login functionality
    $('#phone-login').click(function() {
        var phone = $('.phone').val();
        
        $.ajax({
            url: urbanshieldpestcontrol_ajax.ajax_url,
            method: 'POST',
            data: {
                action: 'urbanshieldpestcontrol_phone_login',
                phone: phone,
                nonce: urbanshieldpestcontrol_ajax.nonce
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('.bk-phone').html(response.data.phone);
                    $('#login').modal('hide');
                    $('#otp').modal('show');
                    $('#digit-1').focus();
                    startCountdown();
                } else {
                    $('.phone-msg').html(response.data.msg);
                }
            }
        });
    });
    
    // OTP verification
    $('#otp-form').submit(function(e) {
        e.preventDefault();
        
        var digit1 = $('#digit-1').val();
        var digit2 = $('#digit-2').val();
        var digit3 = $('#digit-3').val();
        var digit4 = $('#digit-4').val();
        var otp = digit1 + digit2 + digit3 + digit4;
        var phone = $('.bk-phone').text();
        
        $.ajax({
            url: urbanshieldpestcontrol_ajax.ajax_url,
            method: 'POST',
            data: {
                action: 'urbanshieldpestcontrol_verify_otp',
                otp: otp,
                phone: phone,
                nonce: urbanshieldpestcontrol_ajax.nonce
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#otp').modal('hide');
                    location.reload();
                } else {
                    $('.otp-msg').html(response.data.msg);
                }
            }
        });
    });
    
    // OTP input handling
    $('.digit-group').find('input').each(function() {
        $(this).attr('maxlength', 1);
        $(this).on('keyup', function(e) {
            var parent = $($(this).parent());
            
            if (e.keyCode === 8 || e.keyCode === 37) {
                var prev = parent.find('input#' + $(this).data('previous'));
                if (prev.length) {
                    $(prev).select();
                }
            } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                var next = parent.find('input#' + $(this).data('next'));
                if (next.length) {
                    $(next).select();
                }
            }
        });
    });
    
    // Clear OTP
    $('#clearBtn').click(function() {
        $('#digit-1, #digit-2, #digit-3, #digit-4').val('');
        $('#digit-1').focus();
    });
    
    // Show login modal
    $('.login-btn').click(function() {
        $('#login').modal('show');
    });
    
    // Mobile menu toggle
    var toggle = document.querySelector('.menu > input');
    $(document).click(function() {
        if (toggle && toggle.checked) {
            $('.mob-menu').addClass('active');
        } else {
            $('.mob-menu').removeClass('active');
        }
    });
    
    // Sticky navigation
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $('.main-nav').addClass('sticky');
        } else {
            $('.main-nav').removeClass('sticky');
        }
    });
    
    function startCountdown() {
        var timeleft = 60;
        var downloadTimer = setInterval(function() {
            timeleft--;
            document.getElementById('countdowntimer-sms').textContent = timeleft;
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
                $('.re-send-otp').removeClass('disable');
                $('.re-send-otp').css('pointer-events', 'unset');
                $('.re-send-otp').attr('disabled', false);
            }
        }, 1000);
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>