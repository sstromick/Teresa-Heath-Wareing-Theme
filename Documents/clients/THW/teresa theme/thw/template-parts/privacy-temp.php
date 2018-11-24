<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package THW
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
           <div id="banner-img" style="background-position: center center; background-image: url('<?php the_field('feature_image'); ?>');">
                <div id="banner-text">
		   <h1 class="entry-title"><?php the_field('feature_image_title'); ?></h1>
                   <p><?php the_field('feature_image_text'); ?></p>
                </div>
           </div>
	</header><!-- .entry-header -->

	<div class="entry-content nomargin">
<div id="privacy-text">
<div class="container">
<div class="row">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thw' ),
				'after'  => '</div>',
			) );
		?>
</div>
</div>
</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
