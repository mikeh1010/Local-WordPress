<?php 

// This is the header for this theme

?>

<!--HTML5 DOCTYPE -->
<!DOCTYPE html>

<!--Good practice to include the language of the website -->
<html <?php language_attributes(); ?>>


<head>

	<!--------------------
	Technical Meta Tags 
	--------------------->
	<!--To declare character set -->
	<meta charset="<?php bloginfo( 'charset' ); ?>"> 
	<!-- Tell IE to use the latest version of their engine on this page -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Makes website aware of screen size and doesn't allow pinch-to-zoom. -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Insert WP pingback URL -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Favicon      -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.ico" />	
	<!-- SEO Tags - Meta description and other tags will be inserted by Yoast SEO plugin---------------->	
	<!--Title tag needed even if meta title exists - wp_title only works if Front page is static AND Yoast SEO plugin installed -->
	<title><?php wp_title('');?></title>
	
	
	
	
	<!-- ------------------
	CALLING FILES - STYLES AND SCRIPTS
	---------------------->
	<!-- Get style.css file -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<!--The JQuery library must be called before the Bootstrap JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 	

	
	
	
	<!-- Used by Core Files and Plugin Files-->
	<?php wp_head(); ?>
</head>




























<!-- PHP allows custom CSS classes inserted by WP, page or plugin... https://codex.wordpress.org/Function_Reference/body_class#Default_Values -->
<body <?php body_class(); ?> id="theme-body"> 

	<div id="page" class="container" > <!-- class="hfeed site" Identifies the site as a blog - use it on blog header-->
		
		<header class="overflow-fix">
			<img class="col-md-4" src="<?php bloginfo('template_directory');?>/img/pedicabs-header.jpg">
			
			<div class="col-md-8">
			<!-- Begin Bootstrap Menu -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" >Menu</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="main-menu">
				  
				  <ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/Local-Wordpress/Test-site/about">Home</a>
					</li>
					<li class="parent dropdown">
						<a href="/Local-Wordpress/Test-site/operators">About</a>
						<ul class="dropdown-menu sub-menu" role="menu">
							<li class=""><a href="/directory">Advertising</a></li>									
							<li class=""><a href="/directory">FAQs</a></li>									
						</ul>
					</li>
					<li>
						<a href="/Local-Wordpress/Test-site/blog">Blog</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>					
					<!--<li class="dropdown col-md-2">
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
					</li>-->
				  </ul> <!-- .nav navbar-nav -->
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<!-- End of Bootstrap menu-->
			</div> <!-- .col-md-8 -->

			
			
		</header>
		
		
		<div id="body-content">