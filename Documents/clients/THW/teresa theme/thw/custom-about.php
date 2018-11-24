<?php
/*
 * Template Name: Custom About
 * Description: Page template without sidebar
 *
 * @package THW
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/about-temp' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


        <div id="qualifications">
           <div class="container">
              <div class="row">
                 <div class="col-sm-12">
                    <h2>WHAT MAKE ME AN EXPERT?</H2>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-6">
                   <ul>
                      <li>BA Hons Marketing</li>
                      <li>Member of the CIM</li>
                      <li>Over 13 years experience</li>
                      <li>Trained by world leading Social Media experts</li>
                   </ul>
                </div>
                 <div class="col-sm-6">
                   <ul>
                      <li>Blog writer, featured on Social Media websites</li>
                      <li>Author of a book entitled 'Social Media Marketing for Small Businesses'</li>
                      <li>Worked for International Brands</li>
                      <li>International Speaker</li>
                   </ul>
                </div>
             </div>
           </div>
        </div>

<?php
get_footer();
