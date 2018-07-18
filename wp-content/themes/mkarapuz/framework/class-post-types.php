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

	if ( ! class_exists( 'KARAPUZPost_Types' ) ) {

		class KARAPUZPost_Types {

			public function __construct() {
				add_action( 'init', array ( $this, 'register_post_types' ) );
				add_action( 'init', array ( $this, 'register_taxonomies' ) );
			}

			function register_post_types() {

				register_post_type(
					'casino', array (
						'label'             => null,
						'labels'            => array (
							'name'               => esc_html__( 'Casinos', 'mkarapuz' ),
							'singular_name'      => esc_html__( 'Casinos', 'mkarapuz' ),
							'add_new'            => esc_html__( 'Add New Casino', 'mkarapuz' ),
							'add_new_item'       => esc_html__( 'Add New Casino', 'mkarapuz' ),
							'edit_item'          => esc_html__( 'Edit Casino', 'mkarapuz' ),
							'new_item'           => esc_html__( 'New Casino', 'mkarapuz' ),
							'view_item'          => esc_html__( 'View Casino', 'mkarapuz' ),
							'search_items'       => esc_html__( 'Search in Casinos', 'mkarapuz' ),
							'not_found'          => esc_html__( 'No casinos have been added yet', 'mkarapuz' ),
							'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'mkarapuz' ),
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
						'name'               => esc_html__( 'Slots', 'mkarapuz' ),
						'singular_name'      => esc_html__( 'Slots', 'mkarapuz' ),
						'add_new'            => esc_html__( 'Add New Slot', 'mkarapuz' ),
						'add_new_item'       => esc_html__( 'Add New Slot', 'mkarapuz' ),
						'edit_item'          => esc_html__( 'Edit Slot', 'mkarapuz' ),
						'new_item'           => esc_html__( 'New Slot', 'mkarapuz' ),
						'view_item'          => esc_html__( 'View Slot', 'mkarapuz' ),
						'search_items'       => esc_html__( 'Search in Slots', 'mkarapuz' ),
						'not_found'          => esc_html__( 'No slots have been added yet', 'mkarapuz' ),
						'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'mkarapuz' ),
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
						'name'               => esc_html__( 'News', 'mkarapuz' ),
						'singular_name'      => esc_html__( 'News', 'mkarapuz' ),
						'add_new'            => esc_html__( 'Add New News', 'mkarapuz' ),
						'add_new_item'       => esc_html__( 'Add New News', 'mkarapuz' ),
						'edit_item'          => esc_html__( 'Edit News', 'mkarapuz' ),
						'new_item'           => esc_html__( 'New News', 'mkarapuz' ),
						'view_item'          => esc_html__( 'View News', 'mkarapuz' ),
						'search_items'       => esc_html__( 'Search in News', 'mkarapuz' ),
						'not_found'          => esc_html__( 'No news have been added yet', 'mkarapuz' ),
						'not_found_in_trash' => esc_html__( 'Nothing found in Trash', 'mkarapuz' ),
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
							'name'          => esc_html__( 'Bonus Types', 'mkarapuz' ),
							'singular_name' => esc_html__( 'Bonus Type', 'mkarapuz' ),
							'search_items'  => esc_html__( 'Search in Bonus Type', 'mkarapuz' ),
							'all_items'     => esc_html__( 'All Bonus Types', 'mkarapuz' ),
							'view_item '    => esc_html__( 'View Bonus Types', 'mkarapuz' ),
							'edit_item'     => esc_html__( 'Edit Bonus Type', 'mkarapuz' ),
							'update_item'   => esc_html__( 'Update Bonus Type', 'mkarapuz' ),
							'add_new_item'  => esc_html__( 'Add Bonus Type', 'mkarapuz' ),
							'new_item_name' => esc_html__( 'New Bonus Type', 'mkarapuz' ),
							'menu_name'     => esc_html__( 'Bonus Types', 'mkarapuz' ),
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
							'name'          => esc_html__( 'Game types', 'mkarapuz' ),
							'singular_name' => esc_html__( 'Game Type', 'mkarapuz' ),
							'search_items'  => esc_html__( 'Search in Game Type', 'mkarapuz' ),
							'all_items'     => esc_html__( 'All Game Types', 'mkarapuz' ),
							'view_item '    => esc_html__( 'View Game Types', 'mkarapuz' ),
							'edit_item'     => esc_html__( 'Edit Game Type', 'mkarapuz' ),
							'update_item'   => esc_html__( 'Update Game Type', 'mkarapuz' ),
							'add_new_item'  => esc_html__( 'Add Game Type', 'mkarapuz' ),
							'new_item_name' => esc_html__( 'New Game Type', 'mkarapuz' ),
							'menu_name'     => esc_html__( 'Game Types', 'mkarapuz' ),
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
							'name'          => esc_html__( 'Slot Categories', 'mkarapuz' ),
							'singular_name' => esc_html__( 'Slot Categories', 'mkarapuz' ),
							'search_items'  => esc_html__( 'Search in Slot Categories', 'mkarapuz' ),
							'all_items'     => esc_html__( 'All Slot Categories', 'mkarapuz' ),
							'view_item '    => esc_html__( 'View Slot Category', 'mkarapuz' ),
							'edit_item'     => esc_html__( 'Edit Slot Category', 'mkarapuz' ),
							'update_item'   => esc_html__( 'Update Slot Category', 'mkarapuz' ),
							'add_new_item'  => esc_html__( 'Add Slot Category', 'mkarapuz' ),
							'new_item_name' => esc_html__( 'New Slot Category', 'mkarapuz' ),
							'menu_name'     => esc_html__( 'Slot Categories', 'mkarapuz' ),
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
							'name'          => esc_html__( 'Game Providers', 'mkarapuz' ),
							'singular_name' => esc_html__( 'Game Providers', 'mkarapuz' ),
							'search_items'  => esc_html__( 'Search in Game Providers', 'mkarapuz' ),
							'all_items'     => esc_html__( 'All Game Providers', 'mkarapuz' ),
							'view_item '    => esc_html__( 'View Game Provider', 'mkarapuz' ),
							'edit_item'     => esc_html__( 'Edit Game Provider', 'mkarapuz' ),
							'update_item'   => esc_html__( 'Update Game Provider', 'mkarapuz' ),
							'add_new_item'  => esc_html__( 'Add Game Provider', 'mkarapuz' ),
							'new_item_name' => esc_html__( 'New Game Provider', 'mkarapuz' ),
							'menu_name'     => esc_html__( 'Game Providers', 'mkarapuz' ),
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
							'name'          => esc_html__( 'Slot Labels', 'mkarapuz' ),
							'singular_name' => esc_html__( 'Game Providers', 'mkarapuz' ),
							'search_items'  => esc_html__( 'Search in Slot Labels', 'mkarapuz' ),
							'all_items'     => esc_html__( 'All Slot Labels', 'mkarapuz' ),
							'view_item '    => esc_html__( 'View Slot Label', 'mkarapuz' ),
							'edit_item'     => esc_html__( 'Edit Slot Label', 'mkarapuz' ),
							'update_item'   => esc_html__( 'Update Slot Label', 'mkarapuz' ),
							'add_new_item'  => esc_html__( 'Add Slot Label', 'mkarapuz' ),
							'new_item_name' => esc_html__( 'New Slot Label', 'mkarapuz' ),
							'menu_name'     => esc_html__( 'Slot Labels', 'mkarapuz' ),
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

		new KARAPUZPost_Types();
	}
