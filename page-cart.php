<?php
/**
 * Template Name: Shopping Cart Page
 */

get_header(); ?>

<main class="cart-container">
    <!-- Cart Header -->
    <section class="cart-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page-title"><?php _e('Shopping Cart', 'urbanshieldpestcontrol'); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'urbanshieldpestcontrol'); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/products')); ?>"><?php _e('Products', 'urbanshieldpestcontrol'); ?></a></li>
                            <li class="breadcrumb-item active"><?php _e('Cart', 'urbanshieldpestcontrol'); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Content -->
    <section class="cart-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-items" id="cart-items">
                        <!-- Cart items will be populated by JavaScript -->
                    </div>
                    
                    <div class="cart-actions">
                        <a href="<?php echo esc_url(home_url('/products')); ?>" class="btn btn-outline">
                            <i class="fas fa-arrow-left"></i>
                            <?php _e('Continue Shopping', 'urbanshieldpestcontrol'); ?>
                        </a>
                        <button class="btn btn-secondary" id="clear-cart">
                            <i class="fas fa-trash"></i>
                            <?php _e('Clear Cart', 'urbanshieldpestcontrol'); ?>
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3><?php _e('Order Summary', 'urbanshieldpestcontrol'); ?></h3>
                        
                        <div class="summary-row">
                            <span><?php _e('Subtotal:', 'urbanshieldpestcontrol'); ?></span>
                            <span id="cart-subtotal">₹0</span>
                        </div>
                        
                        <div class="summary-row">
                            <span><?php _e('Delivery:', 'urbanshieldpestcontrol'); ?></span>
                            <span id="delivery-cost">₹0</span>
                        </div>
                        
                        <div class="summary-row discount-row" id="discount-row" style="display: none;">
                            <span><?php _e('Discount:', 'urbanshieldpestcontrol'); ?></span>
                            <span id="discount-amount">-₹0</span>
                        </div>
                        
                        <hr>
                        
                        <div class="summary-row total-row">
                            <span><strong><?php _e('Total:', 'urbanshieldpestcontrol'); ?></strong></span>
                            <span id="cart-total"><strong>₹0</strong></span>
                        </div>
                        
                        <!-- Coupon Code -->
                        <div class="coupon-section">
                            <h4><?php _e('Coupon Code', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="coupon-form">
                                <input type="text" id="coupon-code" class="form-control" 
                                    placeholder="<?php esc_attr_e('Enter coupon code', 'urbanshieldpestcontrol'); ?>">
                                <button class="btn btn-outline" id="apply-coupon">
                                    <?php _e('Apply', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                            <div id="coupon-message" class="coupon-message"></div>
                        </div>
                        
                        <!-- Delivery Information -->
                        <div class="delivery-info">
                            <h4><?php _e('Delivery Information', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="delivery-form">
                                <input type="text" id="delivery-pincode" class="form-control" 
                                    placeholder="<?php esc_attr_e('Enter your pincode', 'urbanshieldpestcontrol'); ?>">
                                <button class="btn btn-outline" id="check-delivery">
                                    <?php _e('Check', 'urbanshieldpestcontrol'); ?>
                                </button>
                            </div>
                            <div id="delivery-message" class="delivery-message">
                                <p><i class="fas fa-truck"></i> <?php _e('Free delivery on orders above ₹500', 'urbanshieldpestcontrol'); ?></p>
                            </div>
                        </div>
                        
                        <div class="checkout-actions">
                            <button class="btn btn-primary btn-lg btn-block" id="proceed-checkout">
                                <i class="fas fa-lock"></i>
                                <?php _e('Proceed to Checkout', 'urbanshieldpestcontrol'); ?>
                            </button>
                        </div>
                        
                        <!-- Trust Badges -->
                        <div class="trust-badges">
                            <div class="trust-item">
                                <i class="fas fa-shield-alt"></i>
                                <span><?php _e('Secure Payment', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                            <div class="trust-item">
                                <i class="fas fa-undo"></i>
                                <span><?php _e('Easy Returns', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                            <div class="trust-item">
                                <i class="fas fa-headset"></i>
                                <span><?php _e('24/7 Support', 'urbanshieldpestcontrol'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommended Products -->
    <section class="recommended-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php _e('You Might Also Like', 'urbanshieldpestcontrol'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card mini">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/pest-spray-1.jpg" 
                                 alt="<?php esc_attr_e('Professional Cockroach Spray', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h4><?php _e('Professional Cockroach Spray', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="product-price">₹450</div>
                            <button class="btn btn-sm btn-outline add-to-cart" data-product-id="spray-1" data-price="450">
                                <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card mini">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/ant-gel.jpg" 
                                 alt="<?php esc_attr_e('Ant Control Gel', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h4><?php _e('Ant Control Gel', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="product-price">₹280</div>
                            <button class="btn btn-sm btn-outline add-to-cart" data-product-id="gel-1" data-price="280">
                                <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card mini">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/mosquito-spray.jpg" 
                                 alt="<?php esc_attr_e('Mosquito Repellent Spray', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h4><?php _e('Mosquito Repellent Spray', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="product-price">₹320</div>
                            <button class="btn btn-sm btn-outline add-to-cart" data-product-id="spray-2" data-price="320">
                                <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card mini">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/products/termite-gel.jpg" 
                                 alt="<?php esc_attr_e('Termite Control Gel', 'urbanshieldpestcontrol'); ?>" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h4><?php _e('Termite Control Gel', 'urbanshieldpestcontrol'); ?></h4>
                            <div class="product-price">₹750</div>
                            <button class="btn btn-sm btn-outline add-to-cart" data-product-id="gel-2" data-price="750">
                                <?php _e('Add to Cart', 'urbanshieldpestcontrol'); ?>
                            </button>
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
    var appliedCoupon = null;
    var deliveryCost = 0;
    
    // Render cart items
    function renderCart() {
        var cartItemsContainer = $('#cart-items');
        
        if (cart.length === 0) {
            cartItemsContainer.html(`
                <div class="empty-cart text-center">
                    <i class="fas fa-shopping-cart empty-cart-icon"></i>
                    <h3><?php _e("Your cart is empty", "urbanshieldpestcontrol"); ?></h3>
                    <p><?php _e("Add some products to your cart to get started.", "urbanshieldpestcontrol"); ?></p>
                    <a href="<?php echo esc_url(home_url('/products')); ?>" class="btn btn-primary">
                        <?php _e("Shop Now", "urbanshieldpestcontrol"); ?>
                    </a>
                </div>
            `);
            updateCartSummary();
            return;
        }
        
        var cartHTML = '<div class="cart-items-list">';
        
        cart.forEach((item, index) => {
            cartHTML += `
                <div class="cart-item" data-index="${index}">
                    <div class="item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/products/placeholder.jpg" 
                             alt="${item.name}" class="img-fluid">
                    </div>
                    <div class="item-details">
                        <h4 class="item-name">${item.name}</h4>
                        <p class="item-price">₹${item.price}</p>
                    </div>
                    <div class="item-quantity">
                        <button class="qty-btn minus" data-index="${index}">-</button>
                        <input type="number" class="qty-input" value="${item.quantity}" min="1" data-index="${index}">
                        <button class="qty-btn plus" data-index="${index}">+</button>
                    </div>
                    <div class="item-total">
                        <span class="total-price">₹${(item.price * item.quantity).toLocaleString()}</span>
                    </div>
                    <div class="item-remove">
                        <button class="remove-btn" data-index="${index}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `;
        });
        
        cartHTML += '</div>';
        cartItemsContainer.html(cartHTML);
        updateCartSummary();
    }
    
    // Update cart summary
    function updateCartSummary() {
        var subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        var discount = appliedCoupon ? appliedCoupon.discount : 0;
        
        // Calculate delivery cost
        deliveryCost = subtotal >= 500 ? 0 : 50;
        
        var total = subtotal - discount + deliveryCost;
        
        $('#cart-subtotal').text('₹' + subtotal.toLocaleString());
        $('#delivery-cost').text(deliveryCost === 0 ? '<?php _e("Free", "urbanshieldpestcontrol"); ?>' : '₹' + deliveryCost);
        $('#cart-total').text('₹' + total.toLocaleString());
        
        if (discount > 0) {
            $('#discount-amount').text('-₹' + discount.toLocaleString());
            $('#discount-row').show();
        } else {
            $('#discount-row').hide();
        }
        
        // Update header cart count
        var totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        $('.cart_item').text(totalItems);
        
        // Enable/disable checkout button
        $('#proceed-checkout').prop('disabled', cart.length === 0);
    }
    
    // Quantity change handlers
    $(document).on('click', '.qty-btn', function() {
        var index = $(this).data('index');
        var isPlus = $(this).hasClass('plus');
        
        if (isPlus) {
            cart[index].quantity += 1;
        } else {
            if (cart[index].quantity > 1) {
                cart[index].quantity -= 1;
            }
        }
        
        localStorage.setItem('urbanshieldpestcontrol_cart', JSON.stringify(cart));
        renderCart();
    });
    
    // Quantity input change
    $(document).on('change', '.qty-input', function() {
        var index = $(this).data('index');
        var newQty = parseInt($(this).val()) || 1;
        
        if (newQty >= 1) {
            cart[index].quantity = newQty;
            localStorage.setItem('urbanshieldpestcontrol_cart', JSON.stringify(cart));
            renderCart();
        }
    });
    
    // Remove item
    $(document).on('click', '.remove-btn', function() {
        var index = $(this).data('index');
        cart.splice(index, 1);
        localStorage.setItem('urbanshieldpestcontrol_cart', JSON.stringify(cart));
        renderCart();
    });
    
    // Clear cart
    $('#clear-cart').click(function() {
        if (confirm('<?php _e("Are you sure you want to clear your cart?", "urbanshieldpestcontrol"); ?>')) {
            cart = [];
            appliedCoupon = null;
            localStorage.setItem('urbanshieldpestcontrol_cart', JSON.stringify(cart));
            renderCart();
        }
    });
    
    // Apply coupon
    $('#apply-coupon').click(function() {
        var couponCode = $('#coupon-code').val().trim().toUpperCase();
        
        if (!couponCode) {
            $('#coupon-message').html('<p class="text-danger"><?php _e("Please enter a coupon code", "urbanshieldpestcontrol"); ?></p>');
            return;
        }
        
        // Simulate coupon validation
        var validCoupons = {
            'WELCOME10': { discount: 50, message: '<?php _e("Welcome discount applied", "urbanshieldpestcontrol"); ?>' },
            'SAVE100': { discount: 100, message: '<?php _e("₹100 discount applied", "urbanshieldpestcontrol"); ?>' },
            'FIRSTTIME': { discount: 75, message: '<?php _e("First time customer discount", "urbanshieldpestcontrol"); ?>' }
        };
        
        if (validCoupons[couponCode]) {
            appliedCoupon = validCoupons[couponCode];
            $('#coupon-message').html('<p class="text-success"><i class="fas fa-check"></i> ' + appliedCoupon.message + '</p>');
            $('#coupon-code').prop('disabled', true);
            $(this).text('<?php _e("Applied", "urbanshieldpestcontrol"); ?>').prop('disabled', true);
            updateCartSummary();
        } else {
            $('#coupon-message').html('<p class="text-danger"><?php _e("Invalid coupon code", "urbanshieldpestcontrol"); ?></p>');
        }
    });
    
    // Check delivery
    $('#check-delivery').click(function() {
        var pincode = $('#delivery-pincode').val().trim();
        
        if (!pincode) {
            $('#delivery-message').html('<p class="text-danger"><?php _e("Please enter a pincode", "urbanshieldpestcontrol"); ?></p>');
            return;
        }
        
        // Simulate pincode check
        $('#delivery-message').html('<p class="text-success"><i class="fas fa-check"></i> <?php _e("Delivery available to this location", "urbanshieldpestcontrol"); ?></p>');
    });
    
    // Add to cart from recommendations
    $('.add-to-cart').click(function() {
        var productId = $(this).data('product-id');
        var price = parseFloat($(this).data('price'));
        var productName = $(this).closest('.product-card').find('h4').text();
        
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
        renderCart();
        
        $(this).html('<i class="fas fa-check"></i> <?php _e("Added", "urbanshieldpestcontrol"); ?>').addClass('added');
        setTimeout(() => {
            $(this).html('<?php _e("Add to Cart", "urbanshieldpestcontrol"); ?>').removeClass('added');
        }, 2000);
    });
    
    // Proceed to checkout
    $('#proceed-checkout').click(function() {
        if (cart.length === 0) {
            alert('<?php _e("Your cart is empty", "urbanshieldpestcontrol"); ?>');
            return;
        }
        
        // Store cart data and redirect to checkout
        localStorage.setItem('urbanshieldpestcontrol_checkout_data', JSON.stringify({
            cart: cart,
            coupon: appliedCoupon,
            deliveryCost: deliveryCost
        }));
        
        window.location.href = '<?php echo esc_url(home_url('/checkout')); ?>';
    });
    
    // Initialize cart
    renderCart();
});
</script>

<?php get_footer(); ?>