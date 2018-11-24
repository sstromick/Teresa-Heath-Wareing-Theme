<?php
/*
 * Template Name: Custom Podcasts2
 * Description: Page template without sidebar
 *
 * @package THW
 */

get_header(); ?>

	<div class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/podcast-list2-temp' );

			endwhile; // End of the loop.
?>
<div id="more-episodes-section">
   <div class="container">
         <h2>More Episodes</h2>

  	  <div class="flex-grid-thirds">
		<?php
			echo do_shortcode('[ajax_load_more container_type="div" post_type="podcast" posts_per_page="6" category="podcast" offset="1" scroll="false" transition_container_classes="alm-podcasts" button_label="Older Podcasts" button_loading_label="Loading"]');
			?>
	  </div>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();