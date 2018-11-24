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
           <div id="banner-img" style="background-position: center center; background-image: url('https://teresaheathwareing.com/wp-content/uploads/2017/07/teresa-speaking.jpg');">
<div id="banner-text">
		   <h1 class="entry-title">events</h1>
                   <p>Throughout the year you can often find me at different speaking and training events. I have listed below all my events and also the events I attend, to ensure that my knowledge is constantly kept up to date!</p>
                </div>
           </div>
	</header><!-- .entry-header -->

<div id="events-section">
<div class="container">
<div class="row">
   <div class="col-md-12">
	<div >
<?php
  $query_args = array(
    'post_type' => 'event'
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

		<?php
            if ($the_query->have_posts() ): while ($the_query->have_posts() ) :$the_query->the_post(); ?>
<div class="row vertical-align">
<div class="col-sm-3 hide-on-mobile">
   <div class="featured-image">
      <?php the_post_thumbnail(); ?>
   </div>
</div>

<div class="col-sm-7 event-desc">
   <h2><a href="<?php the_field('Event Link'); ?>" target="new" ><?php the_title(); ?></a></h2>
   <div class="event-dates"><b><?php the_field('Event Dates'); ?></b></div>
   <div class="event-descr"><?php the_excerpt(); ?></div>
</div>

<div class="col-sm-2"><a href="<?php the_field('Event Link'); ?>" target="new" class="btn btn-default" role="button">Visit Website</a></div>
</div>

<hr class="dotted" />


		<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- .entry-content -->

</div>
</div>

</article><!-- #post-<?php the_ID(); ?> -->


