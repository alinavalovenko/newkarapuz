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
		wp_enqueue_style( 'bootstrap_css', KARAPUZ_THEME_URI . '/assets/css/bootstrap.css' );
		wp_enqueue_style( 'kz_futurisc_font_css', KARAPUZ_THEME_URI . '/assets/fonts/FuturisC/stylesheet.css' );
		wp_enqueue_style( 'mkarapuz_css', KARAPUZ_THEME_URI . '/style.css' );
		wp_enqueue_style( 'kz_slick_css', KARAPUZ_THEME_URI . '/assets/slick/slick.css' );
		wp_enqueue_style( 'kz_slick_theme_css', KARAPUZ_THEME_URI . '/assets/slick/slick-theme.css' );
		wp_enqueue_script( 'kz_jquery_js', KARAPUZ_THEME_URI . '/assets/js/jquery-3.3.1.min.js', array (), '3.3.1', true );
		wp_enqueue_script( 'bootstrap_js', KARAPUZ_THEME_URI . '/assets/js/bootstrap.js', array (), '4.0.0', true );
		wp_enqueue_script( 'kz_slick_js', KARAPUZ_THEME_URI . '/assets/slick/slick.min.js', array (), '1.8.1', true );
		wp_enqueue_script( 'kz_scripts_js', KARAPUZ_THEME_URI . '/assets/js/mkarapuz.js', array (), '1.0.0', true );

	}

	add_action( 'wp_enqueue_scripts', 'kz_theme_add_bootstrap' );

	/**
	 * Add WooCommerce Support
	 */

	function kz_theme_add_woocommerce_support() {
		add_theme_support( 'woocommerce', array (
			'product_grid' => array (
				'default_rows'    => 20,
				'default_columns' => 4,
			),
		) );
	}

	add_action( 'after_setup_theme', 'kz_theme_add_woocommerce_support' );

	function kz_theme_update_mini_cart() {
		echo wc_get_template( 'cart/mini-cart.php' );
		die();
	}


	/**
	 * Change number of related products output
	 */

	add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
	function jk_related_products_args( $args ) {
		$args['posts_per_page'] = 7;
		$args['columns']        = 3;

		return $args;
	}

	if ( ! function_exists( 'kz_recent_products' ) ) {

		function kz_recent_products( $atts ) {

			extract( shortcode_atts( array (
				'limit' => '',
			), $atts ) );

			$recent_products = do_shortcode( '[recent_products  limit="' . $atts["limit"] . '" class="kz-recent-products"]' );
			$recent_products = str_replace( 'columns-4 ', '', $recent_products );

			return $recent_products;

		}

		add_shortcode( 'kz_recent_products', 'kz_recent_products' );
	}
	add_action( 'wp_enqueue_scripts', 'kz_ajax_data', 99 );
	function kz_ajax_data() {

		wp_localize_script( 'kz_scripts_js', 'kz_ajax',
			array (
				'url' => admin_url( 'admin-ajax.php' ),
			)
		);

	}

	add_action( 'wp_ajax_kz_callback', 'kz_callback_ajax' );
	add_action( 'wp_ajax_nopriv_kz_callback', 'kz_callback_ajax' );

	function kz_callback_ajax() {
		$user_phone = $_POST['phone'];
		$headers    = 'From: MKARAPUZ Callback <callback@mkarapuz.com.ua>' . "\r\n";
		//$response = wp_mail( 'sales@mkarapuz.com.ua', '[MKARAPUZ] Обратный звонок', 'Заказан обратный звонок: ' . $user_phone, $headers, '' );
		$response = wp_mail( 'alina.valovenko@gmail.com', '[MKARAPUZ] Обратный звонок', 'Заказан обратный звонок: ' . $user_phone, $headers, '' );
		if ( $response ) {
			echo 'Ваш запрос успешно отправлен';
		} else {
			echo 'Во время отправки запроса произшла ошибка, повторите попытку позже';
		}

		wp_die();
	}

	/**
	 * Replace add to cart button in the loop.
	 */
	function kz_change_loop_add_to_cart() {
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

		add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 4 );
		add_action( 'woocommerce_shop_loop_item_title', 'kz_template_loop_add_to_cart', 5 );
		//add_action( 'woocommerce_after_shop_loop_item', 'kz_template_loop_add_to_cart', 10 );
	}

	add_action( 'init', 'kz_change_loop_add_to_cart', 10 );

	/**
	 * Use single add to cart button for variable products.
	 */
	function kz_template_loop_add_to_cart() {
		global $product;

		if ( ! $product->is_type( 'variable' ) ) {
			woocommerce_template_loop_add_to_cart();

			return;
		}

		remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
		add_action( 'woocommerce_single_variation', 'kz_loop_variation_add_to_cart_button', 20 );

		woocommerce_template_single_add_to_cart();
	}

	/**
	 * Customise variable add to cart button for loop.
	 *
	 * Remove qty selector and simplify.
	 */
	function kz_loop_variation_add_to_cart_button() {
		global $product;

		?>
        <div class="woocommerce-variation-add-to-cart variations_button kz-variation-button">
            <button type="submit"
                    class="single_add_to_cart_button button"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
            <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>"/>
            <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>"/>
            <input type="hidden" name="variation_id" class="variation_id" value="0"/>
        </div>
		<?php
	}

	function kz_upsell_variation_add_to_cart_button() {
		global $product;

		?>
        <div class="woocommerce-variation-add-to-cart variations_button kz-upsell-variation-button">
            <button type="submit"
                    class="single_add_to_cart_button button"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
            <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>"/>
            <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>"/>
            <input type="hidden" name="variation_id" class="variation_id" value="0"/>
        </div>
		<?php
	}

	/**
	 * Change the breadcrumb separator
	 */
	add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
	function wcc_change_breadcrumb_delimiter( $defaults ) {
		// Change the breadcrumb delimeter from '/' to '>'
		$defaults['delimiter'] = '<span class="kz-breadcrumbs-delimeter"> &gt; </span>';

		return $defaults;
	}

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


	function bbloomer_woocommerce_output_upsells() {
		woocommerce_upsell_display( 4, 1 );
	}

	add_action( 'woocommerce_share', 'bbloomer_woocommerce_output_upsells', 20 );
	add_action( 'woocommerce_product_thumbnails', 'woocommerce_output_product_data_tabs', 25 );
	add_action( 'woocommerce_product_thumbnails', 'woocommerce_output_related_products', 30 );
	add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
		return array (
			'width'  => 450,
			'height' => 450,
			'crop'   => 0,
		);
	} );
	function kz_upsell_add_to_cart() {

		global $product;

		if ( ! $product->is_in_stock() ) : ?>
            <a href="<?php echo apply_filters( 'out_of_stock_add_to_cart_url', get_permalink( $product->id ) ); ?>"
               class="button"><?php echo apply_filters( 'out_of_stock_add_to_cart_text', __( 'Read More', 'woocommerce' ) ); ?></a>

		<?php else : ?>
			<?php
			$link = array (
				'url'   => '',
				'label' => '',
				'class' => '',
			);
			switch ( $product->product_type ) {
				case "variable" :
					$link['url']   = apply_filters( 'woocommerce_variable_add_to_cart', get_permalink( $product->id ) );
					$link['label'] = apply_filters( 'variable_add_to_cart_text', __( 'Select options', 'woocommerce' ) );
					$link['class'] = 'kz-variaton-add-to-cart';
					break;
				case "grouped" :
					$link['url']   = apply_filters( 'grouped_add_to_cart_url', get_permalink( $product->id ) );
					$link['label'] = apply_filters( 'grouped_add_to_cart_text', __( 'View options', 'woocommerce' ) );
					break;
				case "external" :
					$link['url']   = apply_filters( 'external_add_to_cart_url', get_permalink( $product->id ) );
					$link['label'] = apply_filters( 'external_add_to_cart_text', __( 'Read More', 'woocommerce' ) );
					break;
				default :
					if ( $product->is_purchasable() ) {
						$link['url']   = apply_filters( 'add_to_cart_url', esc_url( $product->add_to_cart_url() ) );
						$link['label'] = apply_filters( 'add_to_cart_text', __( 'Add to cart', 'woocommerce' ) );
						$link['class'] = apply_filters( 'add_to_cart_class', 'add_to_cart_button' );
					} else {
						$link['url']   = apply_filters( 'not_purchasable_url', get_permalink( $product->id ) );
						$link['label'] = apply_filters( 'not_purchasable_text', __( 'Read More', 'woocommerce' ) );
					}
					break;
			}
			// If there is a simple product.
			if ( $product->product_type == 'simple' ) {
				?>
                <form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post"
                      enctype="multipart/form-data">
					<?php
						echo sprintf( '<button type="submit" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="%s button product_type_simple kz-simple-add-to-cart">%s</button>', esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_html( $link['label'] ) );
					?>
                </form>
				<?php
			} else {
				if ( ! empty( $link['url'] ) ) {
					echo apply_filters( 'woocommerce_loop_add_to_cart_link', sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s button product_type_%s">%s</a>', esc_url( $link['url'] ), esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_attr( $product->product_type ), esc_html( $link['label'] ) ), $product, $link );
				}
			}
		endif;
	}

	add_action( 'woocommerce_single_product_summary', 'kz_single_add_to_wishlist', 5 );

	function kz_single_add_to_wishlist() {
		echo '<div class="kz-single-wishlist">' . do_shortcode( '[ti_wishlists_addtowishlist]' ) . '</div>';
	}

	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
	add_action('woocommerce_after_add_to_cart_form', 'woocommerce_template_single_excerpt');

	add_filter( 'woocommerce_currency_symbol', 'kz_add_uah_currency_symbol', 10, 2 );
	function kz_add_uah_currency_symbol( $currency_symbol, $currency ) {
		switch ( $currency ) {
			case 'UAH':
				$currency_symbol = 'грн.';
				break;
		}

		return $currency_symbol;
	}


