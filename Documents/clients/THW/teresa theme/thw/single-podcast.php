<?php
/*
 * Template Name: Podcast
 * Template Post Type: post
 */
  
 get_header();  ?>


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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
                $ids[] = get_the_ID();
				get_template_part( 'template-parts/podcast-temp' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
   </div>
</div>
</div>

<?php
  wp_reset_postdata();
  $i=0;
  $query_args = array(
    'post_type' => 'podcast',
    'post__not_in' => $ids
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>


<?php
     if ($the_query -> have_posts()) {
?>

<div id="more-episodes-section">
   <div class="container">
      <div class="row">
         <div class="col-sm-12"><h2>More Episodes</h2></div>
      </div>


<?php while ($the_query -> have_posts()) : {$the_query -> the_post(); $i++; 
if ($i == 1 || $i == 4) echo "<div class='row is-table-row bottom-pad'>";}
?>

         <div class="col-sm-4">
            <div class="podcast-<?php echo $i; ?>">
               <div class="row is-table-row">
                  <div class="col-sm-12">
                     <div class="podcast-title">
                        <a href="<?php the_permalink() ?>"><h3><?php get_split_podcast_title(get_the_title()); ?></h3></a>
                     </div>
                  </div>
               </div>
               <div class="row is-table-row bottom">
                  <div class="col-sm-12">
                     <div class="podcast-footer">
                        <div class="podcast-date"><?php echo get_the_date('M j, Y');?></div>
                        <div class="podcast-play"><img src="https://teresaheathwareing.com/wp-content/uploads/2018/01/play-podcast.png" alt="Play"
 /></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php   if ($i == 3){echo "</div>";}
        if ($i == 6){echo "</div>";$i=0;}
?>

           <?php 
                    endwhile;
           ?>
</div> <!-- end 1 -->
</div> <!-- end 2 -->
</div> <!-- end 3 -->

<?php wp_reset_postdata(); ?>

<?php
}
?>



<?php
get_footer();
