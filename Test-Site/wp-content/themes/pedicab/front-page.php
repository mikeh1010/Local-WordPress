<?php 
//Chateau Theme - home page 

get_header(); ?>

<div id="front-page" class="page-content">
	
	<section class="" id="slider">
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
			  <img src="<?php bloginfo('template_directory');?>/img/electrical_slide.png" alt="slide 1" />
			</div>

			<div class="item">
			  <img src="<?php bloginfo('template_directory');?>/img/drivetrain_slide.png" alt="slide 1" />
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
	</section>
	<!--
	<section id="products" class="">
		<h3>Featured Products</h3>
	
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://cdn3.bigcommerce.com/s-1232i/products/138/images/290/transfer_hub__79485.1405531950.190.250.jpg?c=2">
		
				<p class="title">Drive Hub Complete</p>
				<p class="price">$125.00</p>
				<button>View Product</button>
			</a>
		</div>
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://cdn3.bigcommerce.com/s-1232i/products/138/images/290/transfer_hub__79485.1405531950.190.250.jpg?c=2">
				<p class="title">Drive Hub Complete</p>
				<p class="price">$125.00</p>
				<button>View Product</button>
			</a>
		</div>
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://cdn3.bigcommerce.com/s-1232i/products/138/images/290/transfer_hub__79485.1405531950.190.250.jpg?c=2">
				<p class="title">Drive Hub Complete</p>
				<p class="price">$125.00</p>
				<button>View Product</button>
			</a>
		</div>
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://cdn3.bigcommerce.com/s-1232i/products/138/images/290/transfer_hub__79485.1405531950.190.250.jpg?c=2">
				<p class="title">Drive Hub Complete</p>
				<p class="price">$125.00</p>
				<button>View Product</button>
			</a>
		</div>
	
	</section>-->

	<section id="about-home">
		
		<img class="col-sm-6" src="<?php bloginfo('template_directory');?>/img/welcome-image.jpg" alt="Contact Main Street Pedicabs">	
		
		<div>
			<h3>We are Main Street Pedicabs</h3>
			<p>We have been perfecting the design of human-powered vehicles since 1992. Our products are high-quality, manufactured at our headquarters in Colorado, USA. We are a proud supporter of all green initiatives that contribute to reducing our carbon footprint.</p>
			<a href="/Local-Wordpress/Test-site/about">
				<button>Our Story</button>
			</a>
		</div>
	</section>
	
	
	
	<section id="pedicab-models" class="">
		<h3>Our Pedicab Models</h3>

		<div class="col-sm-6">	
			<a href="/Local-Wordpress/Test-site/pedicabs/boardwalk">	
				<img src="<?php bloginfo('template_directory');?>/img/model-boardwalk.jpg">
				<p>The Boardwalk Pedicab™ is a new family favorite! Perfect for a trip to the store or a weekend ride.</p>
				<button>Boardwalk Pedicab</button>
			</a>	
		</div>
		<div class="col-sm-6">	
			<a href="/Local-Wordpress/Test-site/pedicabs/broadway">	
				<img src="<?php bloginfo('template_directory');?>/img/model-broadway.jpg">
				<p>The Broadway Pedicab provides extra seating room for a more luxurious three passenger ride.</p>
				<button>Broadway Pedicab</button>
			</a>
		</div>
		<div class="col-sm-6">	
			<a href="/Local-Wordpress/Test-site/pedicabs/classic">	
				<img src="<?php bloginfo('template_directory');?>/img/model-classic.jpg">
				<p>The Classic Pedicab boasts both utility and value, and is our most popular model worldwide!</p>
				<button>Classic Pedicab</button>
			</a>
		</div>
		<div class="col-sm-6">	
			<a href="/Local-Wordpress/Test-site/pedicabs/pedal-pickup">	
				<img src="<?php bloginfo('template_directory');?>/img/model-pickup.jpg">
				<p>The Pedal Pickup™ is an innovative way for any organization or business to provide cargo transport.</p>
				<button>Pedal Pickup</button>
			</a>
		</div>
		
	</section>
	
	
	<section id="resources">
		<div class="col-sm-6">
			<h3>Replacement Parts by Category</h3>
			<ul class="col-sm-6">
				<li>Accessories/Apparel</li>
				<li>Brakes and Brake Parts</li>
				<li>Canopies and Interiors</li>
				<li>Carriage and Frame</li>
				<li>Differential Parts</li>
			</ul>
			<ul class="col-sm-6">
				<li>Drivetrain Parts</li>
				<li>Lighting System</li>
				<li>Seating/Steering</li>
				<li>Tools/Shop Supplies</li>
				<li>Wheels and Tires</li>
			</ul>
		</div>
		
		<div class="col-sm-6">
			<h3>Resources For Operators/Owners:</h3>
			<ul>
				<li>Main Street Pedicab Owner Manual</li>
				<li>New Driver Instructions</li>
				<li>Pedicab FAQs</li>
				<li>Main Street Blog</li>
				<li>Image Gallery</li>
			</ul>
		</div>
	
	</section>
	
	<section id="recent-posts">
		<h3>Recent Blog Posts</h3>
	
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://www.pedicab.com/wordpress/wp-content/uploads/2014/02/ucdavis_in_action-300x224.jpg">
			</a>
			<p class="title">Pedicabs on College Campuses</p>
			
			<button>Read More</button>
		</div>
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://www.pedicab.com/images/go-green-pedicab.jpg">
			</a>
			<p class="title">Pedicab vs Taxicab NYC</p>
			
			<button>Read More</button>
		</div>
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://www.pedicab.com/images/broadway-review.jpg">
			</a>
			<p class="title">Broadway Pedicab Review</p>
			
			<button>Read More</button>
		</div>
		<div class="col-sm-3 col-xs-6">
			<a href="/">
				<img src="http://www.pedicab.com/images/austin_pedicab.jpg">
			</a>
			<p class="title">Pedicabs at Texas Festival</p>
			
			<button>Read More</button>
		</div>
	
	</section>


</div><!-- #front-page -->

<?php get_footer(); ?>