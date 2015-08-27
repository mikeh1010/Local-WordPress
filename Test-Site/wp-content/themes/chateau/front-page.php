<?php 
//Chateau Theme - home page 

get_header(); ?>

<div id="front-page" class="page-content">
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="<?php bloginfo('template_directory');?>/img/hallway-slider.jpg" alt="slide 1" />
		</div>

		<div class="item">
		  <img src="<?php bloginfo('template_directory');?>/img/booth-slider.jpg" alt="slide 1" />
		</div>

		<!--<div class="item">
		  <img src="<?php bloginfo('template_directory');?>/img/slider_man.jpg" alt="slide 1" />
		</div>

		<div class="item">
		  <img src="<?php bloginfo('template_directory');?>/img/slider_man.jpg" alt="slide 1" />
		</div>-->
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	
	<section id="circles-row">
		<div class="container" >
		
		
			<div class="circle-content col-md-4">
				<img src="<?php bloginfo('template_directory');?>/img/suite-owner.jpg" >
				<h2>Be Your Own Boss</h2>
				<p>Isn’t it time you worked for yourself? With Chateau Salon Suites, making it happen is easier than you think!</p>
				<!--<a>Read More</a>-->
			</div>
			<div class="circle-content col-md-4" id="larger-circle">
				<img src="<?php bloginfo('template_directory');?>/img/suite-owner2.jpg" >
				<h2>Increases Your Profits</h2>
				<p>With our single and double occupancy suite options, nail salon suites, aestheticians, massage therapists and others, we have something for every business owner!  You are sure to find a space to fit you and the needs of your clients.</p>
				<!--<a>Read More</a>-->
			</div>
			<div class="circle-content col-md-4">
				<img src="<?php bloginfo('template_directory');?>/img/suite-owner.jpg" >
				<h2>Join Our Network of Independent Salon Professionals</h2>
				<p>The secret is out!! Let us usher you into the future of the salon and spa industry.</p>
				<!--<a>Read More</a>-->
			</div>
		
		
		</div>
	</section>
	
	
	
	<section id="CTA-row">
	
		<div class="container" id="boss-CTA">
			<h2>Want to be your own boss?</h2>
			<p>Our stylists make more money and set their own schedules.
			<br />Start your own business without all the overhead</p>
			<a href="/lease"><button>Get More Information</button></a>
		</div>
		
	</section>


	<section id="map-embed">
		<div class="overlay" onClick="style.pointerEvents='none'"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1752.8020124811542!2d-90.25513138236784!3d30.022123583367556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25a6db2af1a9fd32!2sMy+Salon+Suite!5e0!3m2!1sen!2sus!4v1437439503655" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</section>


</div><!-- #front-page -->

<?php get_footer(); ?>