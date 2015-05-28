<!--TEMPLATE THEME -->

<!--This is the header for Ablaze Custom Theme -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>><!--Good practice to include the language of the website -->


<head>
	
	<!--Technical Meta Tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>"> <!--To pull in blog character set -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Tell IE to use the latest version of their engine on this page -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!-- Makes website aware of screen size and doesn't allow pinch-to-zoom. -->
	
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> <!-- Get style.css file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick.css"/> <!-- get Slick files for homepage install slider -->
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><!--Insert WP pingback URL -->
	
	<!--     Icons for Favicon and iOS devices      -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/favicon.ico" />	
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon.png" />	
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon-ipad.png" />	
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/img/apple-touch-icon-retina.png" />
	
	
	
	<!-- SEO Tags ----------------------------------------------->
	<!--Meta description and other tags will be inserted by Yoast SEO plugin -->
	
	<!--Title tag is needed to be valid HTML, even if meta title also exists -->
	<title><?php wp_title('');?></title> <!-- wp_title only works if Front page is static AND Yoast SEO plugin installed -->
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script><!--The JQuery library must be called before the Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> <!--Calling the Bootstrap JS -->
	
	<!-- Links for featherlight and Slick JQuery plugins -->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.2.3/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />
	
	<!--This gets and loads Typekit fonts --
	<script src="//use.typekit.net/qfj5imy.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>-->
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
<!--
///////////////////////////////////////////////
// CHECK TO MAKE SURE JAVASCRIPT IS ENABLED  //
///////////////////////////////////////////////
-->
<noscript>
<div style="color:red; font-size:1.75em; font-weight:bold;">This page and the Ablaze Referral Portal requires that you have javascript and cookies enabled in your browser settings. For more information please <a href="https://www.google.com/search?q=enabling+javascript+and+cokkies&ie=utf-8&oe=utf-8#q=enabling+javascript+and+cookies&spell=1">Clink Here</a></div>
</noscript>
<script type="text/javascript">
// VERIFY JQUERY IS LOADED    //
if(typeof jQuery == 'undefined'){  
	var script = document.createElement('script');
	script.type = "text/javascript";
	script.src = "http://pm.ablazeenergy.com/GlobalScripts/jQuery/js/jquery-1.11.1.js";
	script.onload = CDRw;
	document.getElementsByTagName('head')[0].appendChild(script);
}else{
	$(function(){ CDRw(); });
}
function CDRw(){
	setTimeout(function(){
		var script = document.createElement('script');
		script.type = "text/javascript";
		script.src = "http://pm.ablazeenergy.com/GlobalScripts/jQuery/js/jquery-ui-1.10.4.custom.min.js";
		document.getElementsByTagName('head')[0].appendChild(script);	
		var script = document.createElement('script');
		script.type = "text/javascript";
		script.src = "http://pm.ablazeenergy.com/Accounts/1/Applications/V-4/Core/Scripts/JS/Number-Format-Masker.js";
		document.getElementsByTagName('head')[0].appendChild(script);
		var script = document.createElement('script');
		script.type = "text/javascript";
		script.src = "http://pm.ablazeenergy.com/Accounts/1/Applications/V-4/Modules/Client-Portal/Scripts/JS/Account-Creation.js";
		document.getElementsByTagName('head')[0].appendChild(script);
		var fileref = document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", "http://pm.ablazeenergy.com/Accounts/1/Applications/V-4/Modules/Client-Portal/Scripts/CSS/Account-Creation.css");
        document.getElementsByTagName('head')[0].appendChild(fileref);
	},500);
	var spencersInt = setInterval(function(){
	console.info('checking for the CDR function');
	if (typeof CDR === 'function') { CDR(); clearInterval(spencersInt); }
	}, 100);
}
</script>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <!-- Allow custom CSS classes inserted by WP, page or plugin... https://codex.wordpress.org/Function_Reference/body_class#Default_Values -->

<div id="page" > <!-- class="hfeed site" Identifies the site as a blog - use it on blog header-->
<div id="content" class="site-content">
