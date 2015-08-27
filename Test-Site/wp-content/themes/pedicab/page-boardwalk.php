<?php get_header(); ?>

<div class="subpage-content container" id="subpage-template">
	<section class="col-sm-8" id="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			} ?>	
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
		
		<!--<div id="specs" class="col-sm-3">

			<p class="col-xs-6 key">msrp</p>
			<p class="col-xs-6 value">$3500 USD base model</p>
			
			<p class="col-xs-6 key">size</p>
			<p class="col-xs-6 value">110" by 50"</p>
			
			<p class="col-xs-6 key">weight</p>
			<p class="col-xs-6 value">175 lbs.</p>
			
			<p class="col-xs-6 key">frame</p>
			<p class="col-xs-6 value">TIG Welded Steel Alloy</p>
			
			<p class="col-xs-6 key">fork</p>
			<p class="col-xs-6 value">Polished Triple-Clamp</p>
			
			<p class="col-xs-6 key">shifters</p>
			<p class="col-xs-6 value">21-Speed Grip-Shifting</p>
			
			<p class="col-xs-6 key">front derailleur</p>
			<p class="col-xs-6 value">Shimano</p>
			
			<p class="col-xs-6 key">rear derailleur</p>
			<p class="col-xs-6 value">Shimano</p>
			
			<p class="col-xs-6 key">front brakes</p>
			<p class="col-xs-6 value">V-Brake</p>
			
			<p class="col-xs-6 key">rear brakes</p>
			<p class="col-xs-6 value">Hydraulic Brakes</p>
			
			<p class="col-xs-6 key">chain</p>
			<p class="col-xs-6 value">Shimano</p>
			
			<p class="col-xs-6 key">cranks</p>
			<p class="col-xs-6 value">RPM 44x33x22 175mm</p>
			
			<p class="col-xs-6 key">rims</p>
			<p class="col-xs-6 value">Aluminum Alloy Downhill</p>
			
			<p class="col-xs-6 key">hubs</p>
			<p class="col-xs-6 value">48-Spoke Hubs</p>
			
			<p class="col-xs-6 key">spokes</p>
			<p class="col-xs-6 value">Stainless Steel 13G</p>
			
			<p class="col-xs-6 key">tires</p>
			<p class="col-xs-6 value">26" by 2.125" 65psi</p>
			
			<p class="col-xs-6 key">saddle</p>
			<p class="col-xs-6 value">Cruiser Saddle</p>
						
			<p class="col-xs-6 key">seat belt</p>
			<p class="col-xs-6 value">Optional</p>
			
			<p class="col-xs-6 key">lighting</p>
			<p class="col-xs-6 value">Optional</p>
			
			<p class="col-xs-6 key">manual</p>
			<p class="col-xs-6 value">LINK</p>
			
			
		</div>
		<div class="col-sm-9">
			<img src="<?php bloginfo('template_directory');?>/img/boardwalk-pedicab-features.jpg">
		</div>-->
		
	</section>
	
	
	<section class="col-sm-4" id="sidebar-content">
		<?php get_sidebar(); ?>

	</section>
</div>
<?php get_footer(); ?>