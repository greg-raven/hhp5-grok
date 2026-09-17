<?php
/**
 * The Template for displaying all single posts
 *
 * @package hhp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

				get_template_part( 'content', 'single' );

				hhp_post_nav();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
