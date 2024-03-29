<?php   global $woocommerce; ?>
<div class="topbar-device-mobile  visible-xxs clearfix">
	<?php
		$mobilelogo = greenmart_tbay_get_config('mobile-logo');
	?>
	<?php if( greenmart_tbay_is_home_page() ) : ?>
		<div class="active-mobile">
			<button data-toggle="offcanvas" class="btn btn-sm btn-danger btn-offcanvas btn-toggle-canvas offcanvas" type="button">
			<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="mobile-logo">
			<?php if( isset($mobilelogo['url']) && !empty($mobilelogo['url']) ): ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( $mobilelogo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			<?php else: ?>
				<div class="logo-theme">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url_raw( get_template_directory_uri().'/images/mobile-logo.png'); ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
			<?php endif; ?>
		</div>
		<div class="search-device">
			<a class="show-search" href="javascript:;"><i class="icon-magnifier icons"></i></a>
			<?php get_template_part( 'page-templates/parts/productsearchform-mobile' ); ?>
		</div>
		<?php if ( !(defined('GREENMART_WOOCOMMERCE_CATALOG_MODE_ACTIVED') && GREENMART_WOOCOMMERCE_CATALOG_MODE_ACTIVED) && defined('GREENMART_WOOCOMMERCE_ACTIVED') && GREENMART_WOOCOMMERCE_ACTIVED ): ?>
			<div class="device-cart">
				<a class="mobil-view-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" >
					<i class="icon-basket icons"></i>
					<span class="mini-cart-items cart-mobile"><?php echo sprintf( '%d', $woocommerce->cart->get_cart_contents_count() );?></span>
				</a>   
			</div>
		<?php endif; ?>

	<?php else: ?>

	<div class="topbar-post">
		<div class="active-mobile">
			<button data-toggle="offcanvas" class="btn btn-sm btn-danger btn-offcanvas btn-toggle-canvas offcanvas" type="button">
			<i class="fa fa-bars"></i>
			</button>
		</div>  
		<div class="mobile-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
				<i class="icon-home icons"></i>
			</a>
		</div>

		<div class="topbar-title">
			<?php $title = apply_filters( 'greenmart_get_filter_title_mobile', 10,2 ); ?>
			<?php echo $title;?> 
		</div>

		<?php if ( !(defined('GREENMART_WOOCOMMERCE_CATALOG_MODE_ACTIVED') && GREENMART_WOOCOMMERCE_CATALOG_MODE_ACTIVED) && defined('GREENMART_WOOCOMMERCE_ACTIVED') && GREENMART_WOOCOMMERCE_ACTIVED ): ?>
			<div class="device-cart">
				<a class="mobil-view-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" >
					<i class="icon-basket icons"></i>
					<span class="mini-cart-items cart-mobile"><?php echo sprintf( '%d', $woocommerce->cart->get_cart_contents_count() );?></span>
				</a>   
			</div>
		<?php endif; ?>

		</div>
	<?php endif; ?>

</div>
