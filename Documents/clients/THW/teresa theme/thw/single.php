<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package THW
 */

get_header(); ?>

	<header class="entry-header">
           <div id="banner-img" style="background-image: url('https://teresaheathwareing.com/wp-content/uploads/2016/09/blog.jpg');">
                <div id="banner-text">
		   <h1 class="entry-title">the blog</h1>
                   <p class="black">Keep up to date with the latest news and tips</p>
                </div>
           </div>
	</header><!-- .entry-header -->

<div class="container">
<div class="row">
   <div class="col-md-9">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );

 echo my_get_the_post_navigation();
			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
   </div>
   <div class="col-md-3">
      <?php get_sidebar(); ?>
   </div>
</div>
</div>
<?php
get_footer();
