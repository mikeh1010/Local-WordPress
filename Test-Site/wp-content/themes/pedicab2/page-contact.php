<?php get_header(); ?>

<div class="page-content container" id="contact-page">
	
	<h1><?php the_title(); ?></h1>
	<hr id="title-hr">
		
	<section id="our-info" class="col-md-6">
		<h2>Email: <span>info@ChateauSalonSuites.com</span></h2>
		<h2>Phone: 1-800-555-5555</h2>
	</section><!-- #our-info -->
	
	
	
	<section class="col-md-6" id="contact-page-form">
		
		<?php echo do_shortcode( '[contact-form-7 id="19" title="Contact Page Form"]' ); ?>
		
	</section>
	

</div>

<?php get_footer(); ?>