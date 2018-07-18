<?php
/** SGO 2018 functions and definitions
 *
 * @package sgo-2018
 * @since 1.0
 * @version 1.0
 */

$KARAPUZtheme = wp_get_theme();

if ( ! empty( $KARAPUZtheme['Template'] ) ) {
    $KARAPUZtheme = wp_get_theme( $KARAPUZtheme['Template'] );
}
if ( ! defined( 'DS' ) ) {
    define( 'DS', DIRECTORY_SEPARATOR );
}

define( 'KARAPUZTHEME_NAME', $KARAPUZtheme['Name'] );
define( 'KARAPUZTHEME_SLUG', $KARAPUZtheme['Template'] );
define( 'KARAPUZTHEME_VERSION', $KARAPUZtheme['Version'] );
define( 'KARAPUZTHEME_DIR', get_template_directory() );
define( 'KARAPUZTHEME_URI', get_template_directory_uri() );
define( 'KARAPUZCHILD_THEME_URI', get_stylesheet_directory_uri() );
define( 'KARAPUZCHILD_THEME_DIR', get_stylesheet_directory() );

define( 'KARAPUZLIBS_URI', KARAPUZTHEME_URI . '/assets/libs' );

define( 'KARAPUZIMAGES', KARAPUZTHEME_URI . '/assets/images' );
define( 'KARAPUZADMIN_IMAGES', KARAPUZTHEME_URI . '/assets/admin/images' );

define( 'KARAPUZINC_DIR', KARAPUZTHEME_DIR . DS . 'includes' );
define( 'KARAPUZINC_URI', KARAPUZTHEME_URI . '/includes' );
define( 'KARAPUZFRAMEWORK_DIR', KARAPUZTHEME_DIR . DS . 'framework' );
define( 'KARAPUZFRAMEWORK_URI', KARAPUZTHEME_URI . '/framework' );

define( 'KARAPUZOPTIONS_DIR', KARAPUZINC_DIR . DS . 'theme-options' );

/**
 * Load SGO Framework.
 *
 * @since 1.0
 */
require_once( KARAPUZFRAMEWORK_DIR . DS . 'class-post-types.php' );
require_once( KARAPUZFRAMEWORK_DIR . DS . 'class-sgo-init.php' );
require_once( KARAPUZFRAMEWORK_DIR . DS . 'acf-fields-init.php' );

