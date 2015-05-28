<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */


 get_header(); ?>



<div id="postpage" class="content-area container blogpage">
  
	<h1 class="title"><?php echo get_the_title( ); ?></h1>
	<p class="posttime"><?php the_time('l, F jS'); ?></p>
	<hr />
  
  <div class="col-md-9 postcontent">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>						
		<div class="thecontent">
		<?php //if ( has_post_thumbnail() ) {  the_post_thumbnail();} ?>
	  	<?php the_content(); ?>
		</div>
		
		<div class="divider"></div>
		<!--?php comments_template(); ?>-->

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="col-md-3">
	<?php get_sidebar('blog'); ?>   
  </div>
</div>
	  
<?php get_footer(); ?>