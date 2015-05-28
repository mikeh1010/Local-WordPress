<!--TEMPLATE THEME -->

<!--This is the header for Ablaze Custom Theme -->

<?php 
/*Comments in PHP to hide from Browser -----------------

Required setup items:
1. Add a "Home" and "Blog" page in WP backend
2. Go into Settings > Reading and select "Static Page" for Front page and Posts page
3. Install plugin: "Wordpress SEO by Yoast"
4. Change permalinks - post name
5. Install plugin: Contact Form 7
6. Show "Custom Fields" on page editor
7. Create functions.php file and add page thumbnails, custom menus, featured images
 

Things to add:
1. "No-JS" CSS class to style for users with Javascript disabled (menus, for example)
2. Set thumbnail sizes - large is way too large, size for subpages 
*/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>><!--Good practice to include the language of the website -->


<head>
	
	<!--Technical Meta Tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>"> <!--To pull in blog character set -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Tell IE to use the latest version of their engine on this page -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!-- Makes website aware of screen size and doesn't allow pinch-to-zoom. -->
	
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> <!-- Get style.css file -->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><!--Insert WP pingback URL -->
	
	<!--     Icons for Favicon and iOS devices      -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/favicon.ico" />	
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon.png" />	
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon-ipad.png" />	
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon-retina.png" />
	
	
	<!-- SEO Tags ---------------------------------------------------->
	<!--Meta description and other tags will be inserted by Yoast SEO plugin -->
	<!--Title tag is needed to be valid HTML, even if meta title also exists -->
	<title><?php wp_title('');?></title> <!-- wp_title only works if Front page is static AND Yoast SEO plugin installed -->
	

	<!--The JQuery library must be called before the Bootstrap JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> <!--Calling the Bootstrap JS -->
	
	<!-- Conditional per page -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick.css"/> <!-- get Slick files for homepage install slider -->
		<!-- Links for featherlight and Slick JQuery plugins -->
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.2.3/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />
	
	<!--This gets and loads Typekit fonts -->
	<script src="//use.typekit.net/qfj5imy.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400' rel='stylesheet' type='text/css'>

	<!--This allows smooth scrolling for anchor links within page -->
	<script>
		jQuery(function() {
		  jQuery('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = jQuery(this.hash);
			  target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				jQuery('html,body').animate({
				  scrollTop: target.offset().top -150
				}, 1000);
				return false;
			  }
			}
		  });
		});
	</script>
	
	
	<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>> <!-- Allow custom CSS classes inserted by WP, page or plugin... https://codex.wordpress.org/Function_Reference/body_class#Default_Values -->

<div id="page" > <!-- class="hfeed site" Identifies the site as a blog - use it on blog header-->
	
	<header>
		<section id="logos-top" class="">
			<div class="col-md-6">
				<a href="/"><img src="<?php bloginfo('template_directory');?>/img/logo@2x.png" id="ablaze-logo" alt="Ablaze Energy" ></a>
			</div>
			
			<div class="col-md-6" id="headericons">
				
					<div class="col-lg-3 col-xs-7 iconlinks" id="phone">
						<a href="tel:844-462-2529"><img src="<?php bloginfo('template_directory');?>/img/icon-phone@2x.png" />844-GO-ABLAZE</a>
					</div>
					<div class="col-lg-3 iconlinks" id="login">
						<a href="http://pm.ablazeenergy.com/Accounts/1/Applications/V-4/Modules/Client-Portal/"><img src="<?php bloginfo('template_directory');?>/img/icon-login@2x.png" />Login</a>
					</div>
					<div class="col-lg-3 iconlinks" id="livechat">
						<a href="#" onclick="LC_API.show_full_view();return false;"><img src="<?php bloginfo('template_directory');?>/img/icon-chat@2x.png" /> Live Chat</a>
					</div>					
				
					<div class="col-lg-3 col-xs-5 iconlinks" id="social">
						<a href="https://twitter.com/ablazeenergy" target="_blank"><img class="" src="<?php bloginfo('template_directory');?>/img/icon-twitter-yellow@2x.png"></a>
						<a href="https://www.facebook.com/ablazeenergy" target="_blank"><img class="" src="<?php bloginfo('template_directory');?>/img/icon-facebook-yellow@2x.png"></a>
					</div>
				</div>
			
			
		</section>
		
		
		<!--NAVIGATION BAR ----------------------------------------->
		<section id="bluenavbar">
			<nav class="container navbar navbar-default">
				<div class="container-fluid">
					
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#">Menu</a>
					</div>
					<!-- End Brand and menu toggle icon -->
					
					<?php wp_nav_menu( array( 
						'theme_location' => 'header-menu' ,
						'container_class' => 'navbar-collapse collapse',
						'container_id' => 'bs-example-navbar-collapse-1',
						'menu_class' => 'container nav navbar-nav menulist',
						'menu_id' => 'parentmenu',
						) 
						); 
					?>
				</div>
			</nav>
		</section>
	</header>

<div id="content" class="site-content">