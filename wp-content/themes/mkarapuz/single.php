<?php
/**
 * The template for displaying all single posts
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
