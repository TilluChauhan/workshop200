<?php
	register_nav_menus(
		$arr= array(
		'home menus' =>  __( 'home menus', 'wordpress' ),	
	
		)
	);


function wordpress_scripts() {
	wp_enqueue_style( 'workshop-all.min', get_theme_file_uri('css/all.min.css'), array(),'4.0.0', false);
	wp_enqueue_style( 'workshop-bootstrap.min', get_theme_file_uri('css/bootstrap.min.css'), array(),'4.0.0', false);

	
	wp_enqueue_style( 'event-style', get_stylesheet_uri('style.css'), array(),'4.0.0', false);

	
	wp_enqueue_script( 'workshop-jquery', get_theme_file_uri( 'js/jquery.min.js' ), array(), '4.0.0',false );
	wp_enqueue_script( 'workshop-bootstrap.min', get_theme_file_uri( 'js/bootstrap.min.js' ), array(), '4.0.0',false );
	wp_enqueue_script( 'workshop-popper.min', get_theme_file_uri( 'js/popper.min.js' ), array(), '4.0.0',false );

	
}
	
add_action( 'wp_enqueue_scripts', 'wordpress_scripts');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1400,1000);


?>