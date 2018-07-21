<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Template Name: Home
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container-fluid">
            <div class="kz-top-banner-wrap">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">left banner</div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="kz-top-right-banner">top right banner</div>
                        <div class="kz-bottom-right-banner">bottom left banner</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="kz-icon-section-wrap">
                <div class="row">
                    Icons
                </div>
            </div>
            <div class="kz-categories-banner-wrap">
                categories-banner-wrap
            </div>
            <div class="kz-sales-section-wrap">
                Sales products
            </div>
        </div>
        <div class="container-fluid">
            <div class="kz-new-prosucts-secrion">
                kz-new-prosucts-secrion
            </div>
        </div>
        <div class="container">
            <div class="kz-bottom-banners-wrap">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">Left Banner</div>
                    <div class="col-xs-12 col-sm-6 col-md-6">Right Banner</div>
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
