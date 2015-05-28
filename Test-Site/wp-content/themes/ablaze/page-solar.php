<?php 
/*
Default Page Template
*/

get_header(); ?>
<!--Begin subpage file-->
<section id="subpage" class="subpage">
	
	<!--Only display this div if there's a Featured Image to fill it -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div id="subpage-heroimg" class="sub-hero" style="background-image: url('<?php $post_thumbnail_id = get_post_thumbnail_id();
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			echo $post_thumbnail_url; ?>')" > 
			
				<h1>					
						<?php //meta properties must be in The Loop to display
						if ( have_posts() ) : while( have_posts() ) : the_post();
						echo get_post_meta($post->ID, 'hero_label', true);
						endwhile; endif; ?>
				</h1>

		</div>
	<?php } //Close the if statement from above ?>

	<div id="subpage-content" class="container">
		
		<h2 class="title"><?php echo get_the_title( ); ?></h2>
		<hr />		
		<?php if ( have_posts() ) : while( have_posts() ) : the_post();
			the_content();
			endwhile; endif; ?> 

		<?php get_sidebar('steps'); ?>
	</div>
	
	<?//php get_sidebar(); ?><!--no sidebar on default page-->
	
	<!--<div class="divider">	</div>-->
</section><!--subpage-->


<?php get_footer(); ?>
