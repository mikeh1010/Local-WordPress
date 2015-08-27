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
	</section>
	
	<section class="col-sm-4" id="sidebar-content">
		<?php get_sidebar(); ?>

	</section>
</div>
<?php get_footer(); ?>