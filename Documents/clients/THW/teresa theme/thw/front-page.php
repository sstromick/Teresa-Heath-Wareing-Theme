<?php
/**
 * The template for displaying the home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package THW
 */

get_header(); ?>

    <section id="hero">
    <div id="hero-inner">
       <div id="hero-text">
          <h1>Social Media Made Simple</h1>
          <p class="lead">Social media expert at your service</p>
       </div>

       <div id="main-optin">
          <form action="https://www.getdrip.com/forms/684001406/submissions" method="post" data-drip-embedded-form="684001406">
             <h3 data-drip-attribute="headline">5 WAYS TO INCREASE YOUR FOLLOWERS ON FACEBOOK FOR FREE!</h3>
             <div data-drip-attribute="description"><p>And in less than 30 minutes - with my 5 part email mini course.</p></div>
             <div class="optin_form_bar_fields">
                <input type="email" id="drip-email" name="fields[email]" placeholder="Email address" value="" />
                <input type="text" id="drip-FirstName" name="fields[FirstName]" placeholder="First Name" value="" />
                <input type="submit" name="submit" value="Sign Up" data-drip-attribute="sign-up-button" />
             </div>
          </form>
       </div>
       <div id="hero-social">
          <ul>
       <li><a href="https://twitter.com/theathwareing" target="blank"><i class="fa fa-twitter"></i></a></li>
       <li><a href="https://www.facebook.com/Teresa-Heath-Wareing-201039830437119" target="blank"><i class="fa fa-facebook"></i></a></li>
       <li><a href="https://www.instagram.com/teresa_heathwareing" target="blank"><i class="fa fa-instagram"></i></a></li>
       <li><a href="https://www.linkedin.com/pub/teresa-heath-wareing/30/38a/720"  target="blank""><i class="fa fa-linkedin"></i></a></li>
       <li><a href="https://uk.pinterest.com/THWSocialMedia"  target="blank""><i class="fa fa-pinterest-p"></i></a></li>
          </ul>
       </div>
       </div>
   </section>

   <section id="about-me">
      <div class="container">
         <div class="row vertical-align">
            <div class="col-sm-6"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/04/teresa-heath-wareing.jpg" alt="Teresa Heath-Wareing" class="img-resize" /></div>
            <div class="col-sm-6">
               <h3>hey! i<span class="smudger-single-quote">'</span>m teresa</h3>
               <p>I make social media easy and fun for entrepreneurs and marketers just like you.</p><p>If you’re looking for someone who can help you enhance your social media marketing efforts, you’ve come to the right place. And I’m so glad you’re here. Definitely check out all the free resources I’ve created for you, and be sure to watch the video below!</p>
               <div id="hello-uk"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hello-from-uk.png" alt="Hello From The UK" /></div>
            </div>
         </div>
      </div>
   </section>


   <section id="welcome-video">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h2>A Warm Welcome To The Site</h2>
<iframe src="https://player.vimeo.com/video/254511531" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>
           </div>
  	</div>
   </section>

   <section id="learn-more">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h2>Learn Actionable Social Media Tips</h2>
               <p>Social media marketing can seem overwhelming; it can make you feel an immense amount of uncertainty. You may often find yourself in moments of panic, pulling out your hair while pouring yourself another large gin. Thankfully, it doesn’t have to be this way.</p>
<p class="aligncenter"><b><em>Your business can achieve social media success.</em></b></p>
<p>All you need is the right guidance. That’s where I come in.</p>
<div class="learn-more-bullets">
<ul>
   <li>If you’re just starting out in social media and are overwhelmed, I’ve got you.</li>
   <li>If you’re further on in your marketing efforts and are looking for new strategies to level up, I’ve got you.</li>
   <li>If you’re looking for a smart and simple way to stay on top of new social media marketing developments, I’ve got you.</li>
   <li>If you’re feeling lost somewhere amid all of this, no worries. I’ve got you.</li>
</ul>
</div>
<p class="aligncenter"><b><em>This site is built for your success, no matter where you are in your social media journey. And I’m here to support you all along the way.</em></b></p>
<p>I’ve compiled loads of resources, podcasts, blog posts and trainings here for you, all chock-full of actionable social media marketing tips you can use to achieve success. They’re all here for the taking. So, put on your learning cap and dive in!</p>
            </div>
         </div>
      </div>
   </section>

<?php
get_footer();
