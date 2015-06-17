<?php 
//Template for home page of site

get_header(); ?>

<div id="front-page" class="page-content">

	<section id="homepage-slider" class="slider">
	
		<!-- Carousel ---------------------------------------- -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		
			<div class="carousel-inner" role="listbox">
			
				<div class="item active">
				  <img src="<?php bloginfo('template_directory');?>/img/slider_map.jpg" alt="Learn More About SESEZ">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>SESEZ is Helping Liberia Rebuild Itself</h1>
					  <p><a class="btn btn-lg btn-primary" id="vidlink" href="#FAQs" role="button">Learn More <span class="caret"></span></a></p>
					</div>
				  </div>
				</div>
				
				<div class="item">
				  <img src="<?php bloginfo('template_directory');?>/img/slider_better.png" alt="Be Involved With SESEZ">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>Want a #BetterLiberia? Add Your Voice</h1>			  
					  <p><a class="btn btn-lg btn-primary yellowbtn" href="#involved" role="button">Sign Our Petition  <span class="caret"></span></a></p>
					</div>
				  </div>
				</div>

				<div class="item">
				  <img src="<?php bloginfo('template_directory');?>/img/slider_man.jpg" alt="We Need Your Feeback">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>We Need Your Feedback!</h1>
					  <!--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
					  <p><a class="btn btn-lg btn-primary" target="_blank" href="https://sesez.typeform.com/to/EgSsyu" role="button">Take Our Survey  <span class="glyphicon glyphicon-chevron-right"></span></a></p>
					</div>
				  </div>
				</div>

			</div> <!-- .carousel-inner -->
			
			<!-- Left and Right slide buttons -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		
		</div><!-- .carousel -->		
		
	</section> <!-- #homepage-slider -->

	
	<!-- Three content buckets -->
	<section id="homepage-circles" >
		
		<div class="col-md-4">
			
		</div>
		
		<div class="col-md-4">
			
		</div>
		
		<div class="col-md-4">
			
		</div>

	</section><!-- #homepage-circles -->

	<!-- Lead Form -->
	<section id="homepage-leadform" >
		


	</section><!-- #homepage-circles -->


</div><!-- #front-page -->

<?php get_footer(); ?>