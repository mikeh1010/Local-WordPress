<?php

	//add Featured Images to pages and posts
	add_theme_support( 'post-thumbnails' ); 


	
	// Replaces the excerpt "more" text by a link
	function new_excerpt_more($more) {
		   global $post;
		return '... </p><a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
 
 
	//Create widget areas
	function ablaze_widgets_init() {
		register_sidebar( array(
			'name'          => 'Leadform Sidebar',
			'id'            => 'leadform-sidebar',
			'description'	=> 'This sidebar will display when a page is using the "Lead Form Sidebar" template.',
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
	add_action( 'widgets_init', 'ablaze_widgets_init' );//Make sure function name matches above
	//End of Widget fuctions

?>