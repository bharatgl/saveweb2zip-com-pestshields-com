<?php
/**
 * Template part for displaying clientele section
 */
?>

<section class="clientle-sec">
    <div class="sec-head-wrapper center">
        <h2 class="sec-head">
            <span class="color-yellow"><?php _e('25+ Years', 'urbanshieldpestcontrol'); ?></span><br>
            <?php _e('Of Esteemed Clientele', 'urbanshieldpestcontrol'); ?>
        </h2>
    </div>
    
    <div class="slider">
        <div class="slide-track">
            <?php
            // Define client logos
            $clients = array(
                'cl01.jpg' => 'Lifestyle Logo',
                'cl02.jpg' => 'MacDonalds Logo',
                'cl03.jpg' => 'Max Logo',
                'cl04.jpg' => 'OM sweets and snacks logo',
                'cl05.jpg' => 'Pizza Hut Logo',
                'cl06.jpg' => 'PVR Cinemas Logo',
                'cl08.jpg' => '24 SEVEN Logo',
                'cl09.jpg' => 'Amazon Logo',
                'cl10.jpg' => 'BARISTA Logo',
                'cl11.jpg' => 'Biryani Blues Logo',
                'cl12.jpg' => 'Blue Tokoi Logo',
                'cl19.jpg' => 'KFC Logo',
                'cl18.jpg' => 'Haldiram\'s Logo'
            );
            
            // Repeat the logos 3 times for smooth infinite scroll
            for ($i = 0; $i < 3; $i++) :
                foreach ($clients as $filename => $alt_text) :
            ?>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo esc_attr($filename); ?>" 
                     height="100" width="250" alt="<?php echo esc_attr($alt_text); ?>">
            </div>
            <?php 
                endforeach;
            endfor; 
            ?>
        </div>
    </div>
    
    <div class="slider slider-2">
        <div class="slide-track">
            <?php
            // Second slider with same clients (reverse direction)
            for ($i = 0; $i < 3; $i++) :
                foreach ($clients as $filename => $alt_text) :
            ?>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo esc_attr($filename); ?>" 
                     height="100" width="250" alt="<?php echo esc_attr($alt_text); ?>">
            </div>
            <?php 
                endforeach;
            endfor; 
            ?>
        </div>
    </div>
</section>