<?php
	/**
	 * The template for displaying product content within loops
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://docs.woocommerce.com/document/template-structure/
	 * @package WooCommerce/Templates
	 * @version 3.4.0
	 */

	defined( 'ABSPATH' ) || exit;

	global $product;

	// Ensure visibility.
	if ( empty( $product ) || ! $product->is_visible() ) {
		return;
	}
?>
<li <?php wc_product_class(); ?>>
    <div class="row">
        <div class="col-xs-4 col-sm-4">
			<?php woocommerce_template_loop_product_link_open(); ?>
			<?php woocommerce_show_product_loop_sale_flash(); ?>
			<?php woocommerce_template_loop_product_thumbnail(); ?>
			<?php woocommerce_template_loop_product_link_close(); ?>
        </div>
        <div class="col-xs-8 col-sm-8">
            <div class="row">
                <div class="col-xs-8 col-sm-8">
					<?php woocommerce_template_loop_product_link_open(); ?>
					<?php woocommerce_template_loop_product_title(); ?>
					<?php woocommerce_template_loop_product_link_close(); ?>

                </div>
                <div class="col-xs-4 col-sm-4"><?php woocommerce_template_loop_price(); ?></div>
            </div>
            <div class="row">
                <div class="kz-add-to-cart-wrap">
				<?php kz_upsell_add_to_cart(); ?>
                </div>
            </div>
            <div class="row">
				<?php echo $product->get_short_description(); ?>
            </div>
        </div>
    </div>

</li>
