<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package THW
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
              <div id="banner-img" style="background-image: url('https://teresaheathwareing.com/wp-content/uploads/2016/09/blog-1.jpg');">
                <div id="banner-text-long">
				  <h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'thw' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
				 </div>
				</div>
			</header><!-- .page-header -->

<div id="search-results-section" class="post-container">
<div class="row">
   <div class="col-md-12">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
	</div>
			</div>
			
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
