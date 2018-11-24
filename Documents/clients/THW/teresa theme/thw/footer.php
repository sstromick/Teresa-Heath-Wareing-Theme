<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package THW
 */

?>

<?php wp_footer(); ?>

   <section id="optin1">
      <div class="container">
         <div class="row vertical-align">
           <div class="col-sm-6 col-md-4 display-cell"><h3>Newsletter</h3><p>Sign Up For News & Updates</p></div>
           <div class="col-sm-6 col-md-4 display-cell" align="center">
<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> 
			   <a href="" class="btn-cta" data-leadbox-popup="RniMmSvwmiAFxEc3qp8fwG" data-leadbox-domain="thwmarketing.lpages.co">SUBSCRIBE NOW</a> 
			 </div>
           <div  id="optin-social-icons" class="col-sm-6 col-md-4 display-cell" align="center">
     <ul>
       <li><a href="https://twitter.com/theathwareing" target="blank"><i class="fa fa-twitter"></i></a></li>
       <li><a href="https://www.facebook.com/Teresa-Heath-Wareing-201039830437119" target="blank"><i class="fa fa-facebook"></i></a></li>
       <li><a href="https://www.instagram.com/teresa_heathwareing" target="blank"><i class="fa fa-instagram"></i></a></li>
       <li><a href="https://www.linkedin.com/pub/teresa-heath-wareing/30/38a/720"  target="blank""><i class="fa fa-linkedin"></i></a></li>
       <li><a href="https://uk.pinterest.com/THWSocialMedia"  target="blank""><i class="fa fa-pinterest-p"></i></a></li>
     </ul>
  </div>
  </div>
</div>
   </section>

   <section id="socialcircle">
         <div class="row">
            <div class="col-md-6 socialcircle-image">
               <div class="social-text"><a href="https://thwmarketing.lpages.co/social-circle-waiting-list/" target="blank"><span class="teresa">teresa<span class="smudger-single-quote">'</span>s</span><br><span class="social">SOCIAL </span><span class="gold">CIRCLE</span></a></div>
            </div>
            <div class="col-md-6 socialschool-image">
               <div class="social-text"><a href="https://thwmarketing.lpages.co/teresa-social-school-waiting-list/" target="blank"><span class="teresa">teresa<span class="smudger-single-quote">'</span>s</span><br><span class="social">SOCIAL </span><span class="pink">SCHOOL</span></a></div>
            </div>
         </div>
   </section>


<section id="featured-in">
    <div class="container">
           <div class="row">
              <div class="col-sm-12"><h2>Featured in...</h2></div>
           </div>
        <div class="col-md-12">
            <div class="well">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row vertical-align">
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/10/tedx-logo-1.png" alt="TedX" class="img-resize"></div>

                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/themes/thw/assets/img/social-media-examiner.png" alt="Social Media Examiner" class="img-resize"></div>

                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/10/SMM-of-the-year_-Teresa-Heath-Wareing-e1539267212996.png"  alt="Social Marketer of Year Nomination" class="img-resize"></div>

                            </div>
                            <!--/row-->
                        </div>
                        <!--/item-->
                        <div class="item">
                            <div class="row vertical-align">
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/themes/thw/assets/img/converted.png"  alt="Converted 2017" class="img-resize"></div>
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/10/social-media-experts.png"  alt="Social Media Experts" class="img-resize"></div>
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/01/kickstart.png"  alt="Kickstart Social" class="img-resize"></div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="item">
                            <div class="row vertical-align">
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/10/social-media-day.png"  alt="Social Media Day" class="img-resize"></div>
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/01/atomic-logo.png"  alt="Atomic" class="img-resize"></div>
                                <div class="col-sm-4"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/10/SOCIAL-MEDIA-CAMPAIGN-OF-THE-YEAR-B2B-TERESA-HEATH-WAREING-e1539267253793.png"  alt="Social Media Campaign of The Year Finalist" class="img-resize"></div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--/item-->
                    </div>
                    <!--/carousel-inner--> 
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
                <!--/myCarousel-->
            </div>
            <!--/well-->
        </div>
    </div>
</section>

   <section id="contact">
        <div class="container">
          <a href="https://teresaheathwareing.com/contact/"><h2>let<span class="smudger-single-quote">'</span>s connect!</h2></a>
        </div>
   </section>

<!-- FOOTER
================================================== -->
<footer>
<div class="row">
<?php
if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
    <div class="col-md-4" widget-area">
    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div>
<?php endif; ?>

<?php
if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
    <div class="col-md-4" widget-area">
    <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div>
<?php endif; ?>

<?php
if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
    <div class="col-md-4" widget-area">
    <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div>
<?php endif; ?>

</div>
</footer>

<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
