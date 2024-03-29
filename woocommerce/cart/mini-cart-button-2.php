<?php   global $woocommerce; ?>
<div class="tbay-topcart">
 <div id="cart" class="dropdown version-1">
        <span class="text-skin cart-icon">
			<i class="icofont icofont-shopping-cart"></i>
		</span>
        <a class="dropdown-toggle mini-cart" data-toggle="dropdown" aria-expanded="true" role="button" aria-haspopup="true" data-delay="0" href="#" title="<?php esc_html_e('View your shopping cart', 'greenmart'); ?>">
            
			<span class="sub-title-2"><?php echo esc_html__('My Cart ', 'greenmart'); ?> (<?php echo sprintf( '%d item', $woocommerce->cart->cart_contents_count );?>) </span>
			<span class="qty"><?php echo WC()->cart->get_cart_subtotal();?><i class="icofont icofont-rounded-down"></i></span>
            
        </a>            
        <div class="dropdown-menu"><div class="widget_shopping_cart_content">
            <?php woocommerce_mini_cart(); ?>
        </div></div>
    </div>
</div>    