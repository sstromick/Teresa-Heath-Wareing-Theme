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

	<header class="entry-header contact-us">
           <div id="banner-img" class="contact-banner" style="background-image: url('<?php the_field('feature_image'); ?>');">
                <div id="banner-text" class="wide700">
		   <h1 class="entry-title"><?php the_field('feature_image_title'); ?></h1>
                   <p><?php the_field('feature_image_text'); ?></p>
                </div>
           </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div id="contact-area">
           <div class="container">
              <div class="row">
                 <div class="col-sm-6">
<p>I LOVE hearing from my audience! If you’d like to have a chat with me about your social media marketing challenges or needs, drop me a line. You can easily send me a message by filling out the form provided here, and I will get back with you shortly.</p>
<p>If you’d like to discuss bringing me in as a speaker at your next event, please do fill out the form here. In the body of your message, please let me know the date(s) of your event. I will then be in touch with you to discuss further details.</p>
<p>And if you’re just not sure where to start in your social media journey, or if you need help getting out of your current rut, know I’m here to help. And remember this one thing: You’ve got this! (And I’ve got you!)</p>
<p>Cheers,<br>
<img src="https://teresaheathwareing.com/wp-content/uploads/2018/01/teresa-sign-off-e1515795128351.png" alt="Teresa Heath-Wareing" class="signature" /></p>
                 </div>
                 <div class="col-sm-6">
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
        </div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
