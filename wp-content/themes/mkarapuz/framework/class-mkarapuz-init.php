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

	if ( ! class_exists( 'KARAPUZ_Init' ) ) {

		class KARAPUZ_Init {

			public function __construct() {
				add_action( 'init', array ( $this, 'register_menus_area' ) );
				add_action( 'widgets_init', array ( $this, 'register_widgets_area' ) );
				add_action( 'customize_register', array ( $this, 'KARAPUZ_add_customizer_sett_section' ) );

			}

			function register_menus_area() {
				register_nav_menus(
					array (
						'top-menu' => esc_html__( 'Top Bar Menu', 'mkarapuz' ),
						'primary-menu' => esc_html__( 'Primary Menu', 'mkarapuz' ),
						'mobile-menu'  => esc_html__( 'Mobile Menu', 'mkarapuz' ),
						'footer-menu'  => esc_html__( 'Footer Menu', 'mkarapuz' ),
					)
				);
			}

			function register_widgets_area() {

				register_sidebar( array (
					'name'          => 'Primary Sidebar',
					'id'            => 'mkarapuz-primary-sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-widget-title">',
					'after_title'   => '</h4>',
				) );

			}

			function KARAPUZ_add_customizer_sett_section( $wp_customize ) {
				$wp_customize->add_section( 'mkarapuz_theme_settings', array (
					'priority' => 10,
					'title'    => 'Mkarapuz Theme Settings',
				) );

				$wp_customize->add_setting( 'mkarapuz_theme_settings[logo]', array (
					'transport'     => 'refresh',
					'height'        => 180,
					'width'         => 160,

				) );

				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mkarapuz_theme_settings', array (
					'label'    => __( 'SGO Logo', 'mkarapuz' ),
					'description' => __('Uploud custom image','mkarapuz'),
					'section'  => 'mkarapuz_theme_settings',
					'settings' => 'mkarapuz_theme_settings[logo]',
				) ) );
			}
		}

		new KARAPUZ_Init();
	}
