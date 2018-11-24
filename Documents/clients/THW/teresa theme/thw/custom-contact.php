<?php
/*
 * Template Name: Custom Contact
 * Description: Page template without sidebar
 *
 * @package THW
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/contact-temp' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();