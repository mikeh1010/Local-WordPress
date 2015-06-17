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
	
	
	//Create widget areas
	function TEMPLATE_widgets_init() {
		register_sidebar( array(
			'name'          => 'Page Sidebar',
			'id'            => 'page-sidebar',
			'description'	=> 'This sidebar will display on subpages.',
			'class' 		=> 'widget-class',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );
		
		register_sidebar( array(
		'name'          => 'Blog Page Sidebar',
		'id'            => 'blog-default',
		'description'	=> 'This sidebar will display on any blog pages by default.',
		'class' 		=> 'widget-class',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'TEMPLATE_widgets_init' );//Make sure function name matches above
	//End of Widget fuctions
	
	
	
	
	
?>