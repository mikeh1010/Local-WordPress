<?php
	//Register Custom Menus
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'header-menu' => __( 'Header Menu' ),
		  'extra-menu' => __( 'Extra Menu' )
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );
	//END register custom menus
	
	
	//add Featured Images to pages and posts
	add_theme_support( 'post-thumbnails' ); 


	
	// Replaces the excerpt "more" text by a link
	function new_excerpt_more($more) {
		   global $post;
		return '... </p><a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	
	
	
	
	
	
?>