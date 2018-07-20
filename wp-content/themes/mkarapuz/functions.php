<?php
	/** SGO 2018 functions and definitions
	 *
	 * @package sgo-2018
	 * @since 1.0
	 * @version 1.0
	 */

	$KARAPUZ_theme = wp_get_theme();

	if ( ! empty( $KARAPUZ_theme['Template'] ) ) {
		$KARAPUZ_theme = wp_get_theme( $KARAPUZ_theme['Template'] );
	}
	if ( ! defined( 'DS' ) ) {
		define( 'DS', DIRECTORY_SEPARATOR );
	}

	define( 'KARAPUZ_THEME_NAME', $KARAPUZ_theme['Name'] );
	define( 'KARAPUZ_THEME_SLUG', $KARAPUZ_theme['Template'] );
	define( 'KARAPUZ_THEME_VERSION', $KARAPUZ_theme['Version'] );
	define( 'KARAPUZ_THEME_DIR', get_template_directory() );
	define( 'KARAPUZ_THEME_URI', get_template_directory_uri() );
	define( 'KARAPUZ_CHILD_THEME_URI', get_stylesheet_directory_uri() );
	define( 'KARAPUZ_CHILD_THEME_DIR', get_stylesheet_directory() );

	define( 'KARAPUZ_LIBS_URI', KARAPUZ_THEME_URI . '/assets/libs' );

	define( 'KARAPUZ_IMAGES', KARAPUZ_THEME_URI . '/assets/images' );
	define( 'KARAPUZ_ADMIN_IMAGES', KARAPUZ_THEME_URI . '/assets/admin/images' );

	define( 'KARAPUZ_INC_DIR', KARAPUZ_THEME_DIR . DS . 'includes' );
	define( 'KARAPUZ_INC_URI', KARAPUZ_THEME_URI . '/includes' );
	define( 'KARAPUZ_FRAMEWORK_DIR', KARAPUZ_THEME_DIR . DS . 'framework' );
	define( 'KARAPUZ_FRAMEWORK_URI', KARAPUZ_THEME_URI . '/framework' );

	define( 'KARAPUZ_OPTIONS_DIR', KARAPUZ_INC_DIR . DS . 'theme-options' );

	/**
	 * Load SGO Framework.
	 *
	 * @since 1.0
	 */
	require_once( KARAPUZ_FRAMEWORK_DIR . DS . 'class-post-types.php' );
	require_once( KARAPUZ_FRAMEWORK_DIR . DS . 'class-mkarapuz-init.php' );
	require_once( KARAPUZ_FRAMEWORK_DIR . DS . 'acf-fields-init.php' );

	/**
	 * Add bootstrap support to the theme
	 *
	 * version 4.0
	 */

	function kz_theme_add_bootstrap() {
		wp_enqueue_style( 'bootstrap-css', KARAPUZ_THEME_URI . '/assets/css/bootstrap.css' );
		wp_enqueue_style( 'kz-futurisc-font-css', KARAPUZ_THEME_URI . '/assets/fonts/FuturisC/stylesheet.css' );
		wp_enqueue_style( 'mkarapuz-css', KARAPUZ_THEME_URI . '/style.css' );
		wp_enqueue_script( 'bootstrap-js', KARAPUZ_THEME_URI . '/assets/js/bootstrap.js', array (), '4.0.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'kz_theme_add_bootstrap' );

	/**
	 * Add WooCommerce Support
	 */

	function kz_theme_add_woocommerce_support() {
		add_theme_support( 'woocommerce', array(
				'product_grid'          => array(
				'default_rows'    => 20,
				'default_columns' => 4,
			),
		) );
	}
	add_action( 'after_setup_theme', 'kz_theme_add_woocommerce_support' );

	function mode_theme_update_mini_cart() {
		echo wc_get_template( 'cart/mini-cart.php' );
		die();
	}
	add_filter( 'wp_ajax_nopriv_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
	add_filter( 'wp_ajax_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
