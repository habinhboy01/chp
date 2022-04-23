<!DOCTYPE html>
<html>
<head>
	<title>
        <?php if (is_front_page()) : ?>
            <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	 <!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">
	<?php wp_head() ?>
</head>
<body>
    <div class="container">
        <div class="flag">
<!--             <?php global $woocommerce; ?>	
                <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
                    <span class="quantity-item"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
                    <i class="fas fa-shopping-cart"></i>	
                </a> -->

            <img src="<?php bloginfo('template_directory') ?>/img/img_15.png" alt="lỗi">

            <img src="<?php bloginfo('template_directory') ?>/img/img_14.png" alt="lỗi">
        </div>

        <!-- menu pc -->
        <div class="hearder-menu">
            <a class="home-url" href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
                </a>

            <?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
        </div>

        <!-- menu mobile -->
        <div class="hearder-menu-mobile">
            <div class="tab-mobile">
                <a class="home-url" href="<?php echo home_url(); ?>">
                        <img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
                </a>

                <?php global $woocommerce; ?>	
                <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ hàng ' ); ?>">
                    <span class="quantity-item"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
                    <i class="fas fa-shopping-cart"></i>	
                </a>

                <i class="bar-button fas fa-bars"></i>
            </div>

            <?php wp_nav_menu (
                array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
        </div>
    </div>

