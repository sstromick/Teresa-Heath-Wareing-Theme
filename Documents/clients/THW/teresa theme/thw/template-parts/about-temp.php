<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package THW
 */

?>

<article id="post-<?php the_ID(); ?>" >

	<header class="entry-header">
           <div id="banner-img" style="background-position: 90% center; background-image: url('<?php the_field('feature_image'); ?>');">
                <div id="banner-text">
		   <h1 class="entry-title"><?php the_field('feature_image_title'); ?></h1>
                   <p class="about-desc"><?php the_field('feature_image_text'); ?></p>
                </div>
           </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div id="about-area">
        <div class="container">
           <div class="row">
              <div class="col-md-8">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thw' ),
				'after'  => '</div>',
			) );
		?>
              </div>
              <div class="col-md-4">
                 <div id="about-video">
                    <h2>Social Media Made Simple</h2>
<div class="video-wrapper">
<iframe src="https://player.vimeo.com/video/254511531" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					 </div>
              </div>
           </div>
           </div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
