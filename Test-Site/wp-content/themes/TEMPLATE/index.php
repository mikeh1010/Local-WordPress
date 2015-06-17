<?php get_header(); ?>

<section class="pagecontent container">
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

<?php get_footer(); ?>