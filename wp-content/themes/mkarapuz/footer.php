<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after.
	 *
	 * @package sgo-2018
	 * @since 1.0
	 * @version 1.0
	 */
?>
<div class="container-fluid kz-callback-wrap">
    <div class="container kz-callback-section">

    </div>
</div>
<footer class="container-fluid">
    <div class="container">
        <div class="row kz-footer">
            <div class="col-xs-12 col-sm-3 footer-logo">
                <img src="<?php echo KARAPUZ_IMAGES . '/footer-logo.png'; ?>" alt="logo">
            </div>
            <div class="col-xs-12 col-sm-4 kz-footer-widget">
				<?php if ( is_active_sidebar( 'mkarapuz-footer-sidebar' ) ) { ?>
					<?php dynamic_sidebar( 'mkarapuz-footer-sidebar' ); ?>
				<?php } ?>

            </div>
            <div class="col-xs-12 col-sm-3">
                <h4 class="kz-footer-col-title">Информация</h4>
				<?php wp_nav_menu( array (
					'theme_location' => 'footer-menu',
					'menu_class'     => 'kz-footer-menu',
				) ); ?>
            </div>
            <div class="col-xs-12 col-sm-2 kz-contacts">
                <h4 class="kz-footer-col-title">Контакты</h4>
                <ul class="kz-contact-list">
                    <li><a href="tel:0639626262">(063) 962-62-62</a></li>
                    <li><a href="tel:0992581121">(099) 258-11-21</a></li>
                    <li><a href="tel:0967177044">(096) 717-70-44</a></li>
                    <li><a href="mailto:sales@mkarapuz.com.ua">sales@mkarapuz.com.ua</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
