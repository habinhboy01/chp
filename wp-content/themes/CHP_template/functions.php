<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function my_custom_wc_theme_support()
{

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');
    // add_theme_support('wc-product-gallery-zoom');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');


function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Primary'),
			'menu-2' => __('Right Menu'),
			'menu-3' => __('sidebar Menu'),
		)
	);
}
add_action('init', 'm_register_menu');


//  logo

function m_logo_web($wp_customize)
{
	$wp_customize->add_section(
		'logo',
		array(
			'title' => 'Logo',
			'description' => 'logo',
			'priority' => 25
		)
	);

	$wp_customize->add_setting('Logo', array('default' => ''));
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'Logo', array(
			'label' => 'Logo',
			'section' => 'logo',
			'settings' => 'Logo'
		))
	);
}
add_action('customize_register', 'm_logo_web');

// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


// custom footer
function footer($wp_customize)
{
	$wp_customize->add_section(
		'footer',
		array(
			'title' => 'footer',
			'description' => 'footer',
		)
	);

	$wp_customize->add_setting('footer_setting', array('default' => ''));
	$wp_customize->add_control(
		'footer_control',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting'
		)
	);
}
add_action('customize_register', 'footer');

function footer_2($wp_customize)
{
	$wp_customize->add_section(
		'footer_2',
		array(
			'title' => 'footer_2',
			'description' => 'footer_2',
		)
	);

	$wp_customize->add_setting('footer_setting_2', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_2',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_2'
		)
	);
}
add_action('customize_register', 'footer_2');

function footer_3($wp_customize)
{
	$wp_customize->add_section(
		'footer_3',
		array(
			'title' => 'footer_3',
			'description' => 'footer_3',
		)
	);

	$wp_customize->add_setting('footer_setting_3', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_3',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_3'
		)
	);
}
add_action('customize_register', 'footer_3');

function footer_4($wp_customize)
{
	$wp_customize->add_section(
		'footer_4',
		array(
			'title' => 'footer_4',
			'description' => 'footer_4',
		)
	);

	$wp_customize->add_setting('footer_setting_4', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_4',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_4'
		)
	);
}
add_action('customize_register', 'footer_4');

function footer_5($wp_customize)
{
	$wp_customize->add_section(
		'footer_5',
		array(
			'title' => 'footer_5',
			'description' => 'footer_5',
		)
	);

	$wp_customize->add_setting('footer_setting_5', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_5',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_5'
		)
	);
}
add_action('customize_register', 'footer_5');

function footer_6($wp_customize)
{
	$wp_customize->add_section(
		'footer_6',
		array(
			'title' => 'footer_6',
			'description' => 'footer_6',
		)
	);

	$wp_customize->add_setting('footer_setting_6', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_6',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_6'
		)
	);
}
add_action('customize_register', 'footer_6');

function footer_7($wp_customize)
{
	$wp_customize->add_section(
		'footer_7',
		array(
			'title' => 'footer_7',
			'description' => 'footer_7',
		)
	);

	$wp_customize->add_setting('footer_setting_7', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_7',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_7'
		)
	);
}
add_action('customize_register', 'footer_7');

function footer_8($wp_customize)
{
	$wp_customize->add_section(
		'footer_8',
		array(
			'title' => 'footer_8',
			'description' => 'footer_8',
		)
	);

	$wp_customize->add_setting('footer_setting_8', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_8',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_8'
		)
	);
}
add_action('customize_register', 'footer_8');

function footer_9($wp_customize)
{
	$wp_customize->add_section(
		'footer_9',
		array(
			'title' => 'footer_9',
			'description' => 'footer_9',
		)
	);

	$wp_customize->add_setting('footer_setting_9', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_9',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_9'
		)
	);
}
add_action('customize_register', 'footer_9');

function footer_10($wp_customize)
{
	$wp_customize->add_section(
		'footer_10',
		array(
			'title' => 'footer_10',
			'description' => 'footer_10',
		)
	);

	$wp_customize->add_setting('footer_setting_10', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_10',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_10'
		)
	);
}
add_action('customize_register', 'footer_10');

function footer_11($wp_customize)
{
	$wp_customize->add_section(
		'footer_11',
		array(
			'title' => 'footer_11',
			'description' => 'footer_11',
		)
	);

	$wp_customize->add_setting('footer_setting_11', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_11',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_11'
		)
	);
}
add_action('customize_register', 'footer_11');

function footer_16($wp_customize)
{
	$wp_customize->add_section(
		'footer_16',
		array(
			'title' => 'footer_16',
			'description' => 'footer_16',
		)
	);

	$wp_customize->add_setting('footer_setting_16', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_16',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_16'
		)
	);
}
add_action('customize_register', 'footer_16');

function footer_12($wp_customize)
{
	$wp_customize->add_section(
		'footer_12',
		array(
			'title' => 'footer_12',
			'description' => 'footer_12',
		)
	);

	$wp_customize->add_setting('footer_setting_12', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_12',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_12'
		)
	);
}
add_action('customize_register', 'footer_12');

function footer_13($wp_customize)
{
	$wp_customize->add_section(
		'footer_13',
		array(
			'title' => 'footer_13',
			'description' => 'footer_13',
		)
	);

	$wp_customize->add_setting('footer_setting_13', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_13',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_13'
		)
	);
}
add_action('customize_register', 'footer_13');

function footer_14($wp_customize)
{
	$wp_customize->add_section(
		'footer_14',
		array(
			'title' => 'footer_14',
			'description' => 'footer_14',
		)
	);

	$wp_customize->add_setting('footer_setting_14', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_14',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_14'
		)
	);
}
add_action('customize_register', 'footer_14');

function footer_15($wp_customize)
{
	$wp_customize->add_section(
		'footer_15',
		array(
			'title' => 'footer_15',
			'description' => 'footer_15',
		)
	);

	$wp_customize->add_setting('footer_setting_15', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_15',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_15'
		)
	);
}
add_action('customize_register', 'footer_15');

/**
 Change a currency symbol đ to VND
 */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2); 
function change_existing_currency_symbol( $currency_symbol, $currency ) {
switch( $currency ) {
case 'VND': $currency_symbol = 'VND'; break;
}
return $currency_symbol;
}

// thanh tìm kiếm ở sidebar
function search_form( $form ) {
	$form = '<form class="action-form" role="search" method="get" action="' . home_url( '/' ) . '" > <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm Kiếm" /><button class="sbutton" type="submit" href="javascript:void(0);"><i class="fa fa-search"></i></button></form>';
	return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );


// xóa input trong checkout

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_postcode']);
	 unset($fields['billing']['billing_address_2']);
     return $fields;
}



