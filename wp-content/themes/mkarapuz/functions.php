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
require_once( KARAPUZ_FRAMEWORK_DIR . DS . 'class-sgo-init.php' );
require_once( KARAPUZ_FRAMEWORK_DIR . DS . 'acf-fields-init.php' );

	function theme_styles() {
		wp_enqueue_style( 'mk_bootstrap_css', KARAPUZ_THEME_DIR . '/assets/css/bootstrap.min.css' );
		wp_enqueue_script( 'mk_bootstrap_js', KARAPUZ_THEME_DIR . '/assets/js/bootstrap.min.js', array('mk-'), '1.0.0', true );

	}
	add_action( 'wp_enqueue_scripts', 'theme_styles');


