<?php
/**
 * Template Name: Products Page
 */

get_header(); ?>

<main class="products-container">
    <!-- Hero Section -->
    <section class="products-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title"><?php _e('Our Products', 'urbanshieldpestcontrol'); ?></h1>
                    <p class="hero-subtitle">
                        <?php _e('Professional-grade pest control products for home and commercial use', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories -->
    <section class="product-categories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category-filter">
                        <button class="filter-btn active" data-filter="all"><?php _e('All Products', 'urbanshieldpestcontrol'); ?></button>
                        <button class="filter-btn" data-filter="spray"><?php _e('Sprays', 'urbanshieldpestcontrol'); ?></button>
                        <button class="filter-btn" data-filter="gel"><?php _e('Gels', 'urbanshieldpestcontrol'); ?></button>
                        <button class="filter-btn" data-filter="trap"><?php _e('Traps', 'urbanshieldpestcontrol'); ?></button>
                        <button class="filter-btn" data-filter="equipment"><?php _e('Equipment', 'urbanshieldpestcontrol'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="products-grid">
        <div class="container">
            <div class="row" id="products-container">
                
                <!-- Product 1 -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="spray">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/pest-spray-1.jpg" 
                                 alt="<?php esc_attr_e('Professional Cockroach Spray', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                            <div class="product-badge"><?php _e('Professional', 'urbanshieldpestcontrol'); ?></div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php _e('Professional Cockroach Spray', 'urbanshieldpestcontrol'); ?></h3>
                            <p class="product-description">
                                <?php _e('Fast-acting formula that eliminates cockroaches on contact. Safe for indoor use.', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="product-features">
                                <ul>
                                    <li><?php _e('500ml capacity', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Long-lasting effect', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Odorless formula', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span class="current-price">₹450</span>
                                <span class="original-price">₹550</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart" data-product-id="spray-1" data-price="450">
                                    <i class="fas fa-cart-plus"></i>
                                    <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="gel">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/ant-gel.jpg" 
                                 alt="<?php esc_attr_e('Ant Control Gel', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php _e('Ant Control Gel', 'urbanshieldpestcontrol'); ?></h3>
                            <p class="product-description">
                                <?php _e('Targeted gel bait that attracts and eliminates entire ant colonies.', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="product-features">
                                <ul>
                                    <li><?php _e('30g syringe', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Colony elimination', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Child-resistant packaging', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span class="current-price">₹280</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart" data-product-id="gel-1" data-price="280">
                                    <i class="fas fa-cart-plus"></i>
                                    <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="trap">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/rodent-trap.jpg" 
                                 alt="<?php esc_attr_e('Rodent Trap Station', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                            <div class="product-badge sale"><?php _e('Sale', 'urbanshieldpestcontrol'); ?></div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php _e('Rodent Trap Station', 'urbanshieldpestcontrol'); ?></h3>
                            <p class="product-description">
                                <?php _e('Secure bait station designed for safe and effective rodent control.', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="product-features">
                                <ul>
                                    <li><?php _e('Tamper-resistant design', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Weather-resistant', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Reusable station', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span class="current-price">₹650</span>
                                <span class="original-price">₹800</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart" data-product-id="trap-1" data-price="650">
                                    <i class="fas fa-cart-plus"></i>
                                    <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="spray">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/mosquito-spray.jpg" 
                                 alt="<?php esc_attr_e('Mosquito Repellent Spray', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php _e('Mosquito Repellent Spray', 'urbanshieldpestcontrol'); ?></h3>
                            <p class="product-description">
                                <?php _e('Natural mosquito repellent spray safe for families and pets.', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="product-features">
                                <ul>
                                    <li><?php _e('250ml capacity', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Natural ingredients', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Pleasant fragrance', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span class="current-price">₹320</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart" data-product-id="spray-2" data-price="320">
                                    <i class="fas fa-cart-plus"></i>
                                    <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="equipment">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/sprayer.jpg" 
                                 alt="<?php esc_attr_e('Professional Sprayer', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                            <div class="product-badge"><?php _e('New', 'urbanshieldpestcontrol'); ?></div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php _e('Professional Sprayer', 'urbanshieldpestcontrol'); ?></h3>
                            <p class="product-description">
                                <?php _e('Heavy-duty sprayer for professional pest control applications.', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="product-features">
                                <ul>
                                    <li><?php _e('5-liter capacity', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Adjustable nozzle', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Pressure gauge', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span class="current-price">₹1,850</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart" data-product-id="equipment-1" data-price="1850">
                                    <i class="fas fa-cart-plus"></i>
                                    <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="gel">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/termite-gel.jpg" 
                                 alt="<?php esc_attr_e('Termite Control Gel', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php _e('Termite Control Gel', 'urbanshieldpestcontrol'); ?></h3>
                            <p class="product-description">
                                <?php _e('Advanced termite control gel for long-lasting protection.', 'urbanshieldpestcontrol'); ?>
                            </p>
                            <div class="product-features">
                                <ul>
                                    <li><?php _e('100g tube', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Long-term protection', 'urbanshieldpestcontrol'); ?></li>
                                    <li><?php _e('Professional grade', 'urbanshieldpestcontrol'); ?></li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <span class="current-price">₹750</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart" data-product-id="gel-2" data-price="750">
                                    <i class="fas fa-cart-plus"></i>
                                    <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Summary -->
    <div class="cart-summary-float" id="cart-float" style="display: none;">
        <div class="cart-content">
            <div class="cart-info">
                <span class="cart-count">0</span> <?php _e('items', 'urbanshieldpestcontrol'); ?>
                <span class="cart-total">₹0</span>
            </div>
            <a href="<?php echo esc_url(home_url('/cart')); ?>" class="btn btn-sm btn-outline">
                <?php _e('View Cart', 'urbanshieldpestcontrol'); ?>
            </a>
        </div>
    </div>

    <!-- Product Information -->
    <section class="product-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h3><?php _e('Fast Delivery', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Free delivery within 24-48 hours for orders above ₹500', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3><?php _e('Quality Guaranteed', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('All products are tested and certified for effectiveness and safety', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3><?php _e('Expert Support', 'urbanshieldpestcontrol'); ?></h3>
                        <p><?php _e('Get guidance on product selection and usage from our experts', 'urbanshieldpestcontrol'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Products -->
    <section class="why-choose-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title"><?php _e('Why Choose Our Products?', 'urbanshieldpestcontrol'); ?></h2>
                    <p class="section-description">
                        <?php _e('Professional-grade pest control products trusted by experts across India', 'urbanshieldpestcontrol'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4><?php _e('Professional Grade', 'urbanshieldpestcontrol'); ?></h4>
                                <p><?php _e('Same products used by our professional technicians', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4><?php _e('Safety Tested', 'urbanshieldpestcontrol'); ?></h4>
                                <p><?php _e('All products undergo rigorous safety testing', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4><?php _e('Expert Guidance', 'urbanshieldpestcontrol'); ?></h4>
                                <p><?php _e('Detailed usage instructions and expert support', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4><?php _e('Eco-Friendly Options', 'urbanshieldpestcontrol'); ?></h4>
                                <p><?php _e('Environmentally responsible pest control solutions', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4><?php _e('Proven Results', 'urbanshieldpestcontrol'); ?></h4>
                                <p><?php _e('Products with proven track record of effectiveness', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="feature-content">
                                <h4><?php _e('Value for Money', 'urbanshieldpestcontrol'); ?></h4>
                                <p><?php _e('Competitive pricing with bulk purchase discounts', 'urbanshieldpestcontrol'); ?></p>
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
    var cart = JSON.parse(localStorage.getItem('urbanshieldpestcontrol_cart') || '[]');
    
    // Product filtering
    $('.filter-btn').click(function() {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        
        var filter = $(this).data('filter');
        
        if (filter === 'all') {
            $('.product-item').show();
        } else {
            $('.product-item').hide();
            $('.product-item[data-category="' + filter + '"]').show();
        }
    });
    
    // Add to cart functionality
    $('.add-to-cart').click(function() {
        var productId = $(this).data('product-id');
        var price = parseFloat($(this).data('price'));
        var productName = $(this).closest('.product-card').find('.product-title').text();
        
        // Check if product already in cart
        var existingProduct = cart.find(item => item.id === productId);
        
        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            cart.push({
                id: productId,
                name: productName,
                price: price,
                quantity: 1
            });
        }
        
        localStorage.setItem('urbanshieldpestcontrol_cart', JSON.stringify(cart));
        updateCartDisplay();
        
        // Visual feedback
        $(this).html('<i class="fas fa-check"></i> <?php _e("Added", "urbanshieldpestcontrol"); ?>').addClass('added');
        setTimeout(() => {
            $(this).html('<i class="fas fa-cart-plus"></i> <?php _e("Add to Cart", "urbanshieldpestcontrol"); ?>').removeClass('added');
        }, 2000);
        
        // Show cart float
        $('#cart-float').fadeIn();
    });
    
    function updateCartDisplay() {
        var totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        var totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        
        $('.cart-count').text(totalItems);
        $('.cart-total').text('₹' + totalPrice.toLocaleString());
        
        // Update header cart count
        $('.cart_item').text(totalItems);
        
        if (totalItems > 0) {
            $('#cart-float').show();
        } else {
            $('#cart-float').hide();
        }
    }
    
    // Initialize cart display
    updateCartDisplay();
});
</script>

<?php get_footer(); ?>