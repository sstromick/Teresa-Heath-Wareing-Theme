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
           <div id="banner-img" style="background-image: url('<?php the_field('feature_image'); ?>');">
                <div id="banner-text">
		   <h1 class="entry-title"><?php the_field('feature_image_title'); ?></h1>
                   <p class="black"><?php the_field('feature_image_text'); ?></p>
                </div>
           </div>
	</header><!-- .entry-header -->

<div id="posts-section" class="post-container">
<div class="row">
   <div class="col-md-9">
	<div class="entry-content">
<?php
  $postNum=0;
  $maxPages=0;
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
  $maxPages = $the_query->max_num_pages;
?>

           <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <?php $postNum++; ?>
              <div class="row display-flex column-reverse">
	         <div class="col-md-8 col-md4 post-meta">
<div>
                    <p class="post-date">Posted: <?php echo get_the_date('jS F Y');?></p>
                    <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p class="post-text"><?php the_excerpt(__('(moreâ¦)')); ?></p>
                    <a role="button" href="<?php the_permalink() ?>" class="btn btn-default">Read More</a>
</div>
                 </div>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<?php if($postNum==1) : ?>
	         <div class="col-md-4 post-img-<?php echo $postNum; ?>" style="background-image: linear-gradient(rgba(237, 4, 122, 0.8),rgba(237, 4, 122, 0.8)), url('<?php echo $backgroundImg[0]; ?>');background-size: cover; background-position: center center; background-repeat: no-repeat;">
<?php endif; ?>

<?php if($postNum==2) : ?>
	         <div class="col-md-4 post-img-<?php echo $postNum; ?>" style="background-image: linear-gradient(rgba(88, 89, 91, 0.8),rgba(88, 89, 91, 0.8)), url('<?php echo $backgroundImg[0]; ?>');background-size: cover; background-position: center center; background-repeat: no-repeat;">
<?php endif; ?>

<?php if($postNum==3) : ?>
	         <div class="col-md-4 post-img-<?php echo $postNum; ?>" style="background-image: linear-gradient(rgba(161, 151, 114, 0.8),rgba(161, 151, 114, 0.8)), url('<?php echo $backgroundImg[0]; ?>');background-size: cover; background-position: center center; background-repeat: no-repeat;">
<?php endif; ?>

<?php if($postNum==4) : ?>
	         <div class="col-md-4 post-img-<?php echo $postNum; ?>" style="background-image: linear-gradient(rgba(66, 66, 68, 0.8),rgba(66, 66, 68, 0.8)), url('<?php echo $backgroundImg[0]; ?>');background-size: cover; background-position: center center; background-repeat: no-repeat;">
<?php endif; ?>

<div >
                       <div class="post-img-blog-title"><?php the_title(); ?></div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-12"><hr class="dotted" /></div>
              </div>
           <?php 
                    endwhile;
           ?>
	</div><!-- .entry-content -->

        <div id="post-navigation-wrapper">
<?php
echo get_next_posts_link( '<i class="fa fa-chevron-left" aria-hidden="true"></i>Older Posts', $the_query->max_num_pages );
echo get_previous_posts_link( 'Newer Posts<i class="fa fa-chevron-right" aria-hidden="true"></i>' );
?>
        </div>
<?php wp_reset_postdata(); ?>
   </div>
   <div class="col-md-3">
      <?php get_sidebar(); ?>
   </div>
</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->