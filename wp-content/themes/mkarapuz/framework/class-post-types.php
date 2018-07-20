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

			}

			public function register_taxonomies() {

			}

		}

		new KARAPUZ_Post_Types();
	}
