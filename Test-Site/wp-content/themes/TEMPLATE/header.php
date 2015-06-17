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
			
				<!-- Display custom menu that selects this Location -->
				<?php wp_nav_menu( array( 
					'theme_location' => 'header-menu', 
					'container' => 'nav', 
					'container_id' => 'container-id',
					'container_class' => 'container-class',
					'menu_class' => 'menu-class1 menu-class2', //Class applied to UL
					'menu_id' => 'menu-id', //ID applied to UL
					) ); ?>
			
			</section>

		</header>

		<div id="content" class="site-content">