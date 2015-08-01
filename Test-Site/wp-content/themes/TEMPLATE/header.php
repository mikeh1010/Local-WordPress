<?php 

// This is the header for this theme

?>

<!--HTML5 DOCTYPE -->
<!DOCTYPE html>

<!--Good practice to include the language of the website -->
<html <?php language_attributes(); ?>>


<head>

	<!--Technical Meta Tags -->
	
	<!--To declare character set -->
	<meta charset="<?php bloginfo( 'charset' ); ?>"> 
	<!-- Tell IE to use the latest version of their engine on this page -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Makes website aware of screen size and doesn't allow pinch-to-zoom. -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!--Insert WP pingback URL -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!--     Icons for Favicon and iOS devices      -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.ico" />	
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon.png" />	
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon-ipad.png" />	
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon-retina.png" />
	
	<!-- Get style.css file -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> 
	
	<!-- SEO Tags - Meta description and other tags will be inserted by Yoast SEO plugin---------------->	
	<!--Title tag needed even if meta title exists - wp_title only works if Front page is static AND Yoast SEO plugin installed -->
	<title><?php wp_title('');?></title> 	

	<!--The JQuery library must be called before the Bootstrap JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> <!--Calling the Bootstrap JS -->
	
	<!-- Used by Core Files and Plugin Files-->
	<?php wp_head(); ?>
</head>


<!-- PHP allows custom CSS classes inserted by WP, page or plugin... https://codex.wordpress.org/Function_Reference/body_class#Default_Values -->
<body <?php body_class(); ?>> 

	<div id="page" > <!-- class="hfeed site" Identifies the site as a blog - use it on blog header-->
		
		<header>
			<img id="header-img" src="" >

			<!-- Full width container for navigation menu -->
			<section id="navbar-container">
			
				<!-- Display custom menu that selects this Location --
				?php wp_nav_menu( array( 
					'theme_location' => 'header-menu', 
					'container' => 'nav', 
					'container_id' => 'container-id',
					'container_class' => 'container-class',
					'menu_class' => 'menu-class1 menu-class2', //Class applied to UL
					'menu_id' => 'menu-id', //ID applied to UL
					) ); ?>-->
			
			</section>
			
			
			<!--BootStrap full menu from site -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					  </ul>
					</li>
				  </ul>
				  <form class="navbar-form navbar-left" role="search">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				  </form>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					  </ul>
					</li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			

		</header>

		<div id="content" class="site-content">