<?php

// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 *
	 * Custom Post Type
	 *
	 */

	if ( ! class_exists( 'KARAPUZ_Post_Types' ) ) {

		class KARAPUZ_Post_Types {

			public function __construct() {
				add_action( 'init', array ( $this, 'register_post_types' ) );
				add_action( 'init', array ( $this, 'register_taxonomies' ) );
			}

			function register_post_types() {

				register_post_type(
					'casino', array (
						'label'             => null,
						'labels'            => array (
							'name'               => esc_html__( 'Casinos', 'mKARAPUZ_' ),
							'singular_name'      => esc_html__( 'Casinos', 'mKARAPUZ_' ),
							'add_new'            => esc_html__( 'Add New Casino', 'mKARAPUZ_' ),
							'add_new_item'       => esc_html__( 'Add New Casino', 'mKARAPUZ_' ),
							'edit_item'          => esc_html__( 'Edit Casino', 'mKARAPUZ_' ),
							'new_item'           => esc_html__( 'New Casino', 'mKARAPUZ_' ),
							'view_item'          => esc_html__( 'View Casino', 'mKARAPUZ_' ),
							'search_items'       => esc_html__( 'Search in Casinos', 'mKARAPUZ_' ),
							'not_found'          => esc_html__( 'No casinos have been added yet', 'mKARAPUZ_' ),
							'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'mKARAPUZ_' ),
							'parent_item_colon'  => '',
							'menu_name'          => 'Casinos',
						),
						'public'            => false,
						'has_archive'       => false,
						'show_ui'           => true,
						'show_in_menu'      => true,
						'show_in_nav_menus' => false,
						'menu_icon'         => 'dashicons-awards',
						'rewrite'           => false,
						'supports'          => array (
							'title',
							'editor',
							'custom-fields',
							'thumbnail',
						),
					)
				);

				register_post_type(
					'slot', array (
					'label'             => null,
					'labels'            => array (
						'name'               => esc_html__( 'Slots', 'mKARAPUZ_' ),
						'singular_name'      => esc_html__( 'Slots', 'mKARAPUZ_' ),
						'add_new'            => esc_html__( 'Add New Slot', 'mKARAPUZ_' ),
						'add_new_item'       => esc_html__( 'Add New Slot', 'mKARAPUZ_' ),
						'edit_item'          => esc_html__( 'Edit Slot', 'mKARAPUZ_' ),
						'new_item'           => esc_html__( 'New Slot', 'mKARAPUZ_' ),
						'view_item'          => esc_html__( 'View Slot', 'mKARAPUZ_' ),
						'search_items'       => esc_html__( 'Search in Slots', 'mKARAPUZ_' ),
						'not_found'          => esc_html__( 'No slots have been added yet', 'mKARAPUZ_' ),
						'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'mKARAPUZ_' ),
						'parent_item_colon'  => '',
						'menu_name'          => 'Slots', // название меню
					),
					'public'            => false,
					'has_archive'       => false,
					'show_ui'           => true,
					'show_in_menu'      => true,
					'show_in_nav_menus' => false,
					'menu_icon'         => 'dashicons-tickets-alt',
					'rewrite'           => false,
					'supports'          => array (
						'title',
						'editor',
						'custom-fields',
						'thumbnail',
					),
				) );

				register_post_type(
					'news', array (
					'label'             => null,
					'labels'            => array (
						'name'               => esc_html__( 'News', 'mKARAPUZ_' ),
						'singular_name'      => esc_html__( 'News', 'mKARAPUZ_' ),
						'add_new'            => esc_html__( 'Add New News', 'mKARAPUZ_' ),
						'add_new_item'       => esc_html__( 'Add New News', 'mKARAPUZ_' ),
						'edit_item'          => esc_html__( 'Edit News', 'mKARAPUZ_' ),
						'new_item'           => esc_html__( 'New News', 'mKARAPUZ_' ),
						'view_item'          => esc_html__( 'View News', 'mKARAPUZ_' ),
						'search_items'       => esc_html__( 'Search in News', 'mKARAPUZ_' ),
						'not_found'          => esc_html__( 'No news have been added yet', 'mKARAPUZ_' ),
						'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'mKARAPUZ_' ),
						'parent_item_colon'  => '',
						'menu_name'          => 'News',
					),
					'public'            => false,
					'has_archive'       => false,
					'show_ui'           => true,
					'show_in_menu'      => true,
					'show_in_nav_menus' => false,
					'menu_icon'         => 'dashicons-admin-post',
					'rewrite'           => false,
					'supports'          => array (
						'title',
						'editor',
						'custom-fields',
						'excerpt',
						'revisions',
					),
				) );

			}

			public function register_taxonomies() {
				register_taxonomy( 'casino-bonus-type',
					'casino',
					array (
						'labels'            => array (
							'name'          => esc_html__( 'Bonus Types', 'mKARAPUZ_' ),
							'singular_name' => esc_html__( 'Bonus Type', 'mKARAPUZ_' ),
							'search_items'  => esc_html__( 'Search in Bonus Type', 'mKARAPUZ_' ),
							'all_items'     => esc_html__( 'All Bonus Types', 'mKARAPUZ_' ),
							'view_item '    => esc_html__( 'View Bonus Types', 'mKARAPUZ_' ),
							'edit_item'     => esc_html__( 'Edit Bonus Type', 'mKARAPUZ_' ),
							'update_item'   => esc_html__( 'Update Bonus Type', 'mKARAPUZ_' ),
							'add_new_item'  => esc_html__( 'Add Bonus Type', 'mKARAPUZ_' ),
							'new_item_name' => esc_html__( 'New Bonus Type', 'mKARAPUZ_' ),
							'menu_name'     => esc_html__( 'Bonus Types', 'mKARAPUZ_' ),
						),
						'hierarchical'      => true,
						'public'            => false,
						'show_ui'           => true,
						'show_admin_column' => true,
						'show_in_nav_menus' => false,
						'rewrite'           => false,
						'query_var'         => true,
					) );
				register_taxonomy( 'casino-game-type',
					'casino',
					array (
						'labels'            => array (
							'name'          => esc_html__( 'Game types', 'mKARAPUZ_' ),
							'singular_name' => esc_html__( 'Game Type', 'mKARAPUZ_' ),
							'search_items'  => esc_html__( 'Search in Game Type', 'mKARAPUZ_' ),
							'all_items'     => esc_html__( 'All Game Types', 'mKARAPUZ_' ),
							'view_item '    => esc_html__( 'View Game Types', 'mKARAPUZ_' ),
							'edit_item'     => esc_html__( 'Edit Game Type', 'mKARAPUZ_' ),
							'update_item'   => esc_html__( 'Update Game Type', 'mKARAPUZ_' ),
							'add_new_item'  => esc_html__( 'Add Game Type', 'mKARAPUZ_' ),
							'new_item_name' => esc_html__( 'New Game Type', 'mKARAPUZ_' ),
							'menu_name'     => esc_html__( 'Game Types', 'mKARAPUZ_' ),
						),
						'hierarchical'      => true,
						'public'            => false,
						'show_ui'           => true,
						'show_admin_column' => true,
						'show_in_nav_menus' => false,
						'rewrite'           => false,
						'query_var'         => true,
					) );

				register_taxonomy( 'slot-category',
					'slot',
					array (
						'labels'            => array (
							'name'          => esc_html__( 'Slot Categories', 'mKARAPUZ_' ),
							'singular_name' => esc_html__( 'Slot Categories', 'mKARAPUZ_' ),
							'search_items'  => esc_html__( 'Search in Slot Categories', 'mKARAPUZ_' ),
							'all_items'     => esc_html__( 'All Slot Categories', 'mKARAPUZ_' ),
							'view_item '    => esc_html__( 'View Slot Category', 'mKARAPUZ_' ),
							'edit_item'     => esc_html__( 'Edit Slot Category', 'mKARAPUZ_' ),
							'update_item'   => esc_html__( 'Update Slot Category', 'mKARAPUZ_' ),
							'add_new_item'  => esc_html__( 'Add Slot Category', 'mKARAPUZ_' ),
							'new_item_name' => esc_html__( 'New Slot Category', 'mKARAPUZ_' ),
							'menu_name'     => esc_html__( 'Slot Categories', 'mKARAPUZ_' ),
						),
						'hierarchical'      => true,
						'public'            => false,
						'show_ui'           => true,
						'show_admin_column' => true,
						'show_in_nav_menus' => false,
						'rewrite'           => false,
						'query_var'         => true,
					) );

				register_taxonomy( 'game-provider',
					'slot',
					array (
						'labels'            => array (
							'name'          => esc_html__( 'Game Providers', 'mKARAPUZ_' ),
							'singular_name' => esc_html__( 'Game Providers', 'mKARAPUZ_' ),
							'search_items'  => esc_html__( 'Search in Game Providers', 'mKARAPUZ_' ),
							'all_items'     => esc_html__( 'All Game Providers', 'mKARAPUZ_' ),
							'view_item '    => esc_html__( 'View Game Provider', 'mKARAPUZ_' ),
							'edit_item'     => esc_html__( 'Edit Game Provider', 'mKARAPUZ_' ),
							'update_item'   => esc_html__( 'Update Game Provider', 'mKARAPUZ_' ),
							'add_new_item'  => esc_html__( 'Add Game Provider', 'mKARAPUZ_' ),
							'new_item_name' => esc_html__( 'New Game Provider', 'mKARAPUZ_' ),
							'menu_name'     => esc_html__( 'Game Providers', 'mKARAPUZ_' ),
						),
						'hierarchical'      => true,
						'public'            => false,
						'show_ui'           => true,
						'show_admin_column' => true,
						'show_in_nav_menus' => false,
						'rewrite'           => false,
						'query_var'         => true,
					) );

				register_taxonomy( 'slot-label',
					'slot',
					array (
						'labels'            => array (
							'name'          => esc_html__( 'Slot Labels', 'mKARAPUZ_' ),
							'singular_name' => esc_html__( 'Game Providers', 'mKARAPUZ_' ),
							'search_items'  => esc_html__( 'Search in Slot Labels', 'mKARAPUZ_' ),
							'all_items'     => esc_html__( 'All Slot Labels', 'mKARAPUZ_' ),
							'view_item '    => esc_html__( 'View Slot Label', 'mKARAPUZ_' ),
							'edit_item'     => esc_html__( 'Edit Slot Label', 'mKARAPUZ_' ),
							'update_item'   => esc_html__( 'Update Slot Label', 'mKARAPUZ_' ),
							'add_new_item'  => esc_html__( 'Add Slot Label', 'mKARAPUZ_' ),
							'new_item_name' => esc_html__( 'New Slot Label', 'mKARAPUZ_' ),
							'menu_name'     => esc_html__( 'Slot Labels', 'mKARAPUZ_' ),
						),
						'hierarchical'      => true,
						'public'            => false,
						'show_ui'           => true,
						'show_admin_column' => true,
						'show_in_nav_menus' => false,
						'rewrite'           => false,
						'query_var'         => true,
					) );
			}

		}

		new KARAPUZ_Post_Types();
	}
