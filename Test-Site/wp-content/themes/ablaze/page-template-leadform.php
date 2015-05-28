<?php
/*
Template Name: Lead Form Sidebar
*/

 get_header(); ?>
<!--Begin subpage file-->
<section id="leadform" class="subpage">

	<div id="subpage-heroimg" class="sub-hero" style="background-image: url('<?php $post_thumbnail_id = get_post_thumbnail_id();
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		echo $post_thumbnail_url; ?>')" > 
		
			<h1>
					<!--meta properties only display within the loop -->
					<?php if ( have_posts() ) : while( have_posts() ) : the_post();
					echo get_post_meta($post->ID, 'hero_label', true);
					endwhile; endif; ?>			
			</h1>

	</div>

	<div id="subpage-content" class="container">
		
		<div class="col-md-9">
			<h2 class="title"><?php echo get_the_title( ); ?></h2>
			<hr>
			
			<?php if ( have_posts() ) : while( have_posts() ) : the_post();
				the_content();
				endwhile; endif; ?> 
		</div>
				
		<div id="leadgenform" class="col-md-3">
			<?php get_sidebar('leadform'); ?>
		</div>
	
	</div>
	
	<hr />
</section><!--subpage-->

<?php get_footer(); ?>
