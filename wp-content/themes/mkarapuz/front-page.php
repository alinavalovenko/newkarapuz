<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Template Name: Home
 */
$top_banners = get_field( 'kz_home_banner_group' );
if ( $top_banners['left_big_banner_img'] !== false
     && $top_banners['right_top_banner_img'] !== false
     && $top_banners['right_bottom_banner_img'] !== false ) {
	var_dump( $top_banners );
	$kz_left_banner      = $top_banners['left_big_banner_img']['url'];
	$kz_left_banner_alt  = $top_banners['left_big_banner_img']['caption'];
	$kz_right_top_banner = $top_banners['right_top_banner_img']['url'];;
	$kz_right_top_banner_alt = $top_banners['right_top_banner_img']['caption'];
	$kz_right_bottom_banner  = $top_banners['right_bottom_banner_img']['url'];;
	$kz_right_bottom_banner_alt = $top_banners['right_bottom_banner_img']['caption'];
} else {
	$kz_left_banner             = KARAPUZ_IMAGES . '/banners/top-left.jpg';
	$kz_left_banner_alt         = 'Скидка 10% при покупке от 1000 грн.';
	$kz_right_top_banner        = KARAPUZ_IMAGES . '/banners/01_socks.png';
	$kz_right_top_banner_alt    = 'При покупке 3-х пар носков 4-я в подарок!';
	$kz_right_bottom_banner     = KARAPUZ_IMAGES . '/banners/02_krest.png';
	$kz_right_bottom_banner_alt = 'Именная крыжма для крещения за 2 дня';
}
$icons                    = get_field( 'kz_home_icons_repeater' );
$icons_count              = count( $icons );
$categories_banners       = get_field( 'kz_home_categories_bunner_repeater' );
$categories_banners_count = count( $categories_banners );
$sales_products           = get_field( 'kz_home_sale_section_text' );
$new_products             = get_field( 'kz_home_new_products_section_text' );
$popular_products         = get_field( 'kz_home_popular_products_section' );
$bottom_banners           = get_field( 'kz_home_bottom_banners_group' );
$sales_page_url           = get_field( 'kz_home_sale_section_url' );
$newest_page_url          = get_field( 'kz_home_new_products_section_text' );
$popular_page_url         = get_field( 'kz_home_popular_products_section_text' );

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container-fluid ">
            <div class="row kz-top-banner-wrap">
                <div class="col-xs-12 col-sm-8 kz-banner-holder">
                    <div class="kz-left-banner-holder">
                        <img src="<?php echo $kz_left_banner; ?>" alt="<?php echo $kz_left_banner_alt; ?>"/>
                        <div class="kz-banner-slogan">
							<?php echo $kz_left_banner_alt; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 kz-banner-holder">
                    <div class="kz-top-right-banner">
                        <img src="<?php echo $kz_right_top_banner; ?>"
                             alt="<?php echo $kz_right_top_banner_alt; ?>">
                    <div class="kz-banner-slogan">
						<?php echo $kz_right_top_banner_alt; ?>
                    </div>
                    </div>
                    <div class="kz-bottom-right-banner">
                        <img src="<?php echo $kz_right_bottom_banner; ?>"
                             alt="<?php echo $kz_right_bottom_banner_alt; ?>"/>
                        <div class="kz-banner-slogan">
							<?php echo $kz_right_bottom_banner_alt; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="kz-icon-section-wrap">
                <div class="row">
					<?php for ( $i = 0; $i < $icons_count; $i ++ ): ?>
                        <div class="col-xs-12 col-sm-3">
                            <div class="kz-icon-img">
								<?php if ( ! empty( $icons[ $i ]['reason_icon_img'] ) ): ?>
                                    <img src="<?php echo $icons[ $i ]['reason_icon_img'] ?>"
                                         alt="<?php echo $icons[ $i ]['kz_home_icon_title_item_tex']; ?>">
								<?php else: ?>
                                    <img src="<?php echo KARAPUZ_IMAGES . '/02_Delivery.png'; ?>"
                                         alt="Бесплатная доставка по всей Украине">
								<?php endif; ?>
                            </div>
                            <div class="kz-icon-title">
								<?php if ( ! empty( $icons[ $i ]['kz_home_icon_title_item_text'] ) ): ?>
                                    <div><?php echo $icons[ $i ]['kz_home_icon_title_item_text']; ?></div>
								<?php else: ?>
                                    <div>Бесплатная доставка</div>
								<?php endif; ?>
                            </div>
                            <div class="kz-icon-subtitle">
								<?php if ( ! empty( $icons[ $i ]['kz_reason_icon_subtitle_text'] ) ): ?>
                                    <div><?php echo $icons[ $i ]['kz_reason_icon_subtitle_text']; ?></div>
								<?php else: ?>
                                    <div>По всей Украине при покупке от 500 грн.</div>
								<?php endif; ?>
                            </div>
                        </div>
					<?php endfor; ?>

                </div>
            </div>
            <div class="kz-categories-banner-wrap">
                <div class="row">
					<?php for ( $i = 0; $i < $categories_banners_count; $i ++ ): ?>
                        <div class="col-xs-12 col-sm-6">
                            <div class="kz-categories-banner">
                                <a href="<?php echo ( empty( $categories_banners[ $i ]['kz_home_category_link_text'] ) ) ? '#' : $categories_banners[ $i ]['kz_home_category_link_text']; ?>">
                                    <div class="category-banner-holder">
                                        <img src="<?php echo ( empty( $categories_banners[ $i ]['home_category_banner_img']['url'] ) ) ? KARAPUZ_IMAGES . '/banners/cat-banner.png' : $categories_banners[ $i ]['home_category_banner_img']['url']; ?>"
                                             alt="<?php echo $categories_banners[ $i ]['kz_category_name_text']; ?>">
                                        <span><?php echo $categories_banners[ $i ]['kz_category_name_text']; ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
					<?php endfor; ?>
                </div>
            </div>
            <div class="kz-sales-section-wrap">
                <div class="kz-sales-section-title">
                    <h3>Скидки</h3>
                    <a href="<? echo ( empty( $sales_page_url ) ) ? '#' : $sales_page_url; ?>">Посмотреть весь
                        ассортимент</a>
                </div>
				<?php echo do_shortcode( $sales_products ); ?>
            </div>
        </div>
        <div class="container-fluid kz-newest-products-wrap">
            <div class="kz-newest-products-section">
                <div class="container kz-newest-section-title">
                    <h3>Новинки</h3>
                    <a href="<? echo ( empty( $newest_page_url ) ) ? '#' : $newest_page_url; ?>">Посмотреть весь ассортимент</a>
                    <?php echo do_shortcode( $new_products ); ?>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="kz-popular-products-wrap">
                <div class="kz-popular-section-title">
                    <h3>Популярное</h3>
                    <a href="<? echo ( empty( $popular_page_url ) ) ? '#' : $popular_page_url; ?>">Посмотреть весь ассортимент</a>
                </div>
				<?php echo do_shortcode( $popular_products ); ?>
            </div>
            <div class="kz-bottom-banners-wrap">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <img src="<?php echo ( empty( $bottom_banners['kz_home_left_banner_img'] ) ) ? KARAPUZ_IMAGES . '/banners/cat-bottom-banner.jpg' : $bottom_banners['kz_home_left_banner_img']; ?>"
                             alt="bottom left banner">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <img src="<?php echo ( empty( $bottom_banners['kz_home_right_banner_img'] ) ) ? KARAPUZ_IMAGES . '/banners/cat-bottom-banner.jpg' : $bottom_banners['kz_home_left_banner_img']; ?>"
                             alt="bottom right banner">
                    </div>
                </div>
            </div>
        </div>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
