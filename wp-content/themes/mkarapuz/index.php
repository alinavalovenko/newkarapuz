<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @package sgo-2018
	 * @since 1.0
	 * @version 1.0
	 */

	get_header(); ?>
    <div class="wrap container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

				<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							the_content();

						endwhile;
					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>

            </main><!-- #main -->
        </div><!-- #primary -->
		<?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer(); ?>
