<?php 
/*
Default Page Template
*/

get_header(); ?>
<!--Begin subpage file-->
<section id="benefits" class="subpage">
	
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
		
		<div id="how-it-works"" class="sections">
			<div id="how-content">
			<div class="row">
				<div class="col-lg-12">
				<h2 class="style-white text-center">How The Program Works</h2>
				</div>
				<div class="col-lg-12">
				<h5 class="style-white text-center">Once your become a trusted partner, you can take advantage of our high-velicity sales origination and integrated financing with in-house funds and a wide array of options. You will received buildable project direct from us to keep your teams working!</h5>
				</div>

				<div class="col-lg-12" id="circlecaptions">
					<img class="img-responsive" src="http://www.ablazeenergy.com/wp/wp-content/uploads/2014/11/how-icon.png" alt="how-icon" />
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<h5 class="arrow">Leads funnel to Ablaze through various sources</h5>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<h5 class="arrow">Ablaze contracts systems and facilitates financing</h5>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<h5 class="arrow">Site visit, engineering and permit package completed</h5>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<h5 class="arrow">Project assigned to Authorized Integrator for installation</h5>
					</div>
				</div>
			</div>
			</div>
	</div>
	
	</div>
	
	<?//php get_sidebar(); ?><!--no sidebar on default page-->
	
	<!--<div class="divider">	</div>-->
</section><!--subpage-->


<?php get_footer(); ?>
