<?php

// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 *
	 * Define SGO initial settings
	 *
	 */

	if ( ! class_exists( 'KARAPUZInit' ) ) {

		class KARAPUZInit {

			public function __construct() {
				add_action( 'init', array ( $this, 'register_menus_area' ) );
				add_action( 'widgets_init', array ( $this, 'register_widgets_area' ) );
				add_action( 'customize_register', array ( $this, 'KARAPUZadd_customizer_sett_section' ) );

			}

			function register_menus_area() {
				register_nav_menus(
					array (
						'primary-menu' => esc_html__( 'Primary Menu', 'mkarapuz' ),
						'mobile-menu'  => esc_html__( 'Mobile Menu', 'mkarapuz' ),
						'footer-menu'  => esc_html__( 'Footer Menu', 'mkarapuz' ),
					)
				);
			}

			function register_widgets_area() {

				register_sidebar( array (
					'name'          => 'Primary Sidebar',
					'id'            => 'sgo-primary-sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Footer Widget Area',
					'id'            => 'sgo-footer-widget-area',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-sgo-footer-widget-area-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Slots Filter',
					'id'            => 'sgo-slots-filter-sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-slot-page-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Casino Review',
					'id'            => 'sgo-casino-review-sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-casino-review-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Slot Review',
					'id'            => 'sgo-slot-review-sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-slot-review-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Header banner',
					'id'            => 'sgo-header-banner',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-header-banner-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Header mobile banner',
					'id'            => 'sgo-header-mobile-banner',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-header-mobile-banner-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Fixed left banner',
					'id'            => 'sgo-fixed-left-banner',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-fixed-left-banner-widget-title">',
					'after_title'   => '</h4>',
				) );

				register_sidebar( array (
					'name'          => 'Fixed right banner',
					'id'            => 'sgo-fixed-right-banner',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-fixed-right-banner-widget-title">',
					'after_title'   => '</h4>',
				) );
			}

			function KARAPUZadd_customizer_sett_section( $wp_customize ) {
				$wp_customize->add_section( 'KARAPUZtheme_settings', array (
					'priority' => 10,
					'title'    => 'SGO Theme Settings',
				) );

				$wp_customize->add_setting( 'KARAPUZtheme_settings[logo]', array (
					'transport'     => 'refresh',
					'height'        => 180,
					'width'         => 160,

				) );

				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'KARAPUZtheme_settings', array (
					'label'    => __( 'SGO Logo', 'mkarapuz' ),
					'description' => __('Uploud custom image','mkarapuz'),
					'section'  => 'KARAPUZtheme_settings',
					'settings' => 'KARAPUZtheme_settings[logo]',
				) ) );
			}
		}

		new KARAPUZInit();
	}
