<?php
/*
Template Name: Default Category or Archive Page
*/

 get_header(); ?>
 
<section id="postcollection" class="content container blogpage">
		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div><!-- .page-header -->
			
		<div class="col-md-9 blog">

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>
				<div class="postinlist">
					<div class = "postheading">
					<h2 class="postlisttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="posttime"><?php the_time('l, F jS'); ?></p>
					<!--?php
					$category = get_the_category(); 
					echo '<p class="postlisttag '.$category[0]->cat_name.'">'.$category[0]->cat_name.'</p>';
					?>-->
					</div>
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="postlistimg col-md-4">
						<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail(); ?></a>
					</div>
					<?php } //closing the if statement from above ?>
					<div class="postlistexcerpt">
						<?php the_excerpt(); ?>
					</div>
				
				</div>
				<hr>

		<?php endwhile; ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		
		<?php else: ?>
		  <p>
			<?php _e('Sorry, front-page.php says no posts.'); ?>
		  </p>
		<?php endif; ?>
			
		</div>
		 
		<div class="col-md-3" >

			<?php get_sidebar('blog'); ?>   

		</div>

</section>
	
 <?php get_footer(); ?> 