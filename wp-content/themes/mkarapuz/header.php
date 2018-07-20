<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package sgo-2018
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Вверх', 'mKARAPUZ_' ); ?></a>
    <div class="conrainer-fluid kz-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
					<?php wp_nav_menu( array (
						'theme_location' => 'top-menu',
						'menu_class'     => 'kz-top-bar-menu',
					) ); ?>
                </div>
                <div class="hidden-xs col-sm-3 kz-wishlist pull-right"><a href="<?php echo '/%wishlist_url%'; ?>">Избранное <span class="wishlist-count"><?php echo yith_wcwl_count_all_products(); ?></span> </a></div>
            </div>
        </div>
    </div>
    <header id="masthead" class="site-header container-fluid">
        <div class="container kz-primary-bar">
            <div class="row">
                <div class="col-xs-12 col-sm-8 kz-header-holder">
                    <div class="row">
                        <div class="col-sm-7 col-md-6 kz-logo-wrap">
                            <a href="/" title="Интернет-магазин MKarapuz">
                                <div class="kz-logo">
                                    <img src="<?php echo KARAPUZ_THEME_URI . '/assets/images/logo1.png' ?>"
                                         alt="logo-small"
                                         class="kz-logo-img1"/>
                                    <img src="<?php echo KARAPUZ_THEME_URI . '/assets/images/logo2.png' ?>"
                                         alt="logo-big"
                                         class="kz-logo-img2"/>
                                    <strong class="karapuz-logo-title">Украинская фабрика одежды</strong>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-5 col-md-6 kz-header-contacts">
                            <div class="kz-contacts-title-holder">
                                <div class="kz-contacts-title">Call-центр:</div>
                                <div class="kz-contacts-time">C 9:00 до 21:00</div>
                            </div>

                            <div class="kz-contacts-info">
                                <a href="tel:0639626262" class="tel" title="Позвонить 0639626262">(063)
                                    <span>962 62 62</span></a>
                                <a href="tel:0992581121" class="tel" title="Позвонить 0992581121">(099)
                                    <span>258 11 21</span></a>
                                <a href="tel:0967177044" class="tel" title="Позвонить 0967177044">(096)
                                    <span>717 70 44</span></a>
                            </div>
                            <div class="kz-mail-holder">
                                <a href="#" class="send-email">Заказать обратный звонок</a>
                                <a href="mailto:sales@mkarapuz.com.ua" class="send-email">sales@mkarapuz.com.ua</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 kz-right">
                    <div class="kz-right-holder">
                        <div class="kz-cart">
                            <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>"
                               title="<?php _e( 'Просмотреть что в корзине' ); ?>">
                                <span class="kz-cart-icon">
                                    <img src="<?php echo KARAPUZ_IMAGES . '/Cart.png'; ?>" alt="cart">
                                </span>
                                <span class="kz-cart-count">
                                    <?php $cart_count_content = WC()->cart->get_cart_contents_count();

	                                    echo ( $cart_count_content === 0 ) ? "" : $cart_count_content; ?>
                                </span>
                                <span class="kz-cart-title">Корзина</span>
                            </a>
                        </div>
                        <div class="kz-search">
							<?php echo do_shortcode( '[aws_search_form]' ); ?>
                        </div>

                        <div class="kz-mini-cart">
							<?php woocommerce_mini_cart(); ?>
                        </div>
                    </div>
                    <div class="img-wrap">
                        <img src="<?php echo KARAPUZ_IMAGES . '/07.png'; ?>" alt="bird">
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

	<?php

	?>

    <div class="site-content-contain">
        <div id="content" class="site-content">
