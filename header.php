<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="main-nav">
    <div class="top-bar">
        <ul class="top-contact-bar"></ul>
        <div class="top-btns">
            <a href="tel:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?>" class="cn-det">
                <img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.svg" alt="phone">
                <span><?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_phone', '+91 8376090909')); ?></span>
            </a>
            <span class="text-light">|</span>
            <a href="mailto:<?php echo esc_attr(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?>" class="cn-det">
                <img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.svg" alt="email">
                <span><?php echo esc_html(get_theme_mod('urbanshieldpestcontrol_email', 'info@urbanshieldpestcontrol.com')); ?></span>
            </a>
            <span class="text-light">|</span>
            <a href="<?php echo esc_url(home_url('/booking')); ?>" class="button"><?php _e('Residential', 'urbanshieldpestcontrol'); ?></a>
            <span class="text-light mob-pipe">|</span>
            <a href="<?php echo esc_url(home_url('/commercial')); ?>" class="button"><?php _e('Commercial', 'urbanshieldpestcontrol'); ?></a>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="nav-bar">
            <div class="l-part">
                <div class="brand-logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<a href="' . esc_url(home_url('/')) . '">';
                        echo '<img src="' . get_template_directory_uri() . '/images/logo.svg" alt="' . esc_attr(get_bloginfo('name')) . '">';
                        echo '</a>';
                    }
                    ?>
                </div>
                <p class="tag-line"><?php _e('FOR A PEST FREE LIFE', 'urbanshieldpestcontrol'); ?></p>
            </div>
            
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-list',
                'container' => false,
                'fallback_cb' => 'urbanshieldpestcontrol_fallback_menu'
            ));
            ?>
            
            <label for="menu" class="menu">
                <input type="checkbox" id="menu">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="mob-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-list',
            'container' => false,
            'fallback_cb' => 'urbanshieldpestcontrol_fallback_mobile_menu'
        ));
        ?>
    </div>
</nav>

<?php
// Fallback menu function
function urbanshieldpestcontrol_fallback_menu() {
    ?>
    <ul class="nav-list">
        <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php _e('Pest Control', 'urbanshieldpestcontrol'); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                <?php
                $services = urbanshieldpestcontrol_get_services();
                foreach ($services as $service) {
                    echo '<li><a class="dropdown-item" href="' . esc_url(get_permalink($service->ID)) . '">' . esc_html($service->post_title) . '</a></li>';
                }
                ?>
            </ul>
        </li>
        <li><a href="<?php echo esc_url(home_url('/products')); ?>"><?php _e('Products', 'urbanshieldpestcontrol'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('About us', 'urbanshieldpestcontrol'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Contact us', 'urbanshieldpestcontrol'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/career')); ?>"><?php _e('Career', 'urbanshieldpestcontrol'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/faq')); ?>"><?php _e('FAQ', 'urbanshieldpestcontrol'); ?></a></li>
        <li>
            <a href="<?php echo esc_url(home_url('/cart')); ?>" class="cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none" viewBox="0 0 18 19">
                    <path fill="#fff" d="M5.4 15.005c-.99 0-1.791.81-1.791 1.8s.801 1.8 1.791 1.8c.99 0 1.8-.81 1.8-1.8s-.81-1.8-1.8-1.8zM0 .604v1.8h1.8l3.24 6.83-1.215 2.206a1.74 1.74 0 00-.225.864c0 .99.81 1.8 1.8 1.8h10.8v-1.8H5.778a.223.223 0 01-.225-.226l.027-.107.81-1.467h6.705c.675 0 1.269-.37 1.575-.928l3.222-5.84a.903.903 0 00-.792-1.332H3.789l-.846-1.8H0zm14.4 14.4c-.99 0-1.791.81-1.791 1.8s.801 1.8 1.791 1.8c.99 0 1.8-.81 1.8-1.8s-.81-1.8-1.8-1.8z"></path>
                </svg>
                <span class="cart-item cart_item"><?php echo urbanshieldpestcontrol_get_cart_count(); ?></span>
            </a>
        </li>
        <li id="login-btn-nav" class="login-btn-load">
            <button type="button" class="login-btn"><?php _e('Login', 'urbanshieldpestcontrol'); ?></button>
        </li>
    </ul>
    <?php
}

function urbanshieldpestcontrol_fallback_mobile_menu() {
    urbanshieldpestcontrol_fallback_menu();
}
?>