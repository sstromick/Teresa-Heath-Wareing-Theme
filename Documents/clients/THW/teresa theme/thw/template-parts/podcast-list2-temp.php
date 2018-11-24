<?php
/**
 * Template part for displaying podcast posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package THW
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
           <div id="banner-img" style="background-position: center center; background-image: url('https://teresaheathwareing.com/wp-content/uploads/2018/01/thw-podcast-image.jpg');">
                <div id="banner-text" class="podcast-banner" >
		   <h1 class="entry-title">the podcast</h1>
		   <h2 class="entry-title">Social Media Marketing Made Simple</h2>
                   <p class="podcast-banner-subtitle">Social media expert at your service</p>
                </div>
           </div>
	</header><!-- .entry-header -->

<div id="podcast-post">
<div class="row">
   <div class="col-md-12">
	<div class="category-podcast">
<?php
  $i=0;
  $query_args = array(
    'post_type' => 'podcast'
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<div class="podcast-preview">
		<?php
            if ($the_query -> have_posts()) {
               $the_query -> the_post();
	    		the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'thw' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
            }
        ?>
</div>
	</div><!-- .entry-content -->

</div>

</article><!-- #post-<?php the_ID(); ?> -->

<?php wp_reset_postdata(); ?>

