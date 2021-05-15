<?php 

function enqueue_child_styles() {			
	// CSS
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');	
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/slick/slick.css', array(), "1.8.1", 'all' );
	wp_enqueue_style( 'slicktheme', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css', array(), "1.8.1", 'all' );	
	wp_enqueue_style( 'kibys-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
	
	// JS
	wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), "1.8.1", true );
	wp_enqueue_script('quantity-inputs-js', get_stylesheet_directory_uri() . '/assets/js/quantity-inputs.js', array('jquery'), '1.0', true); // Add + / - input quantity
	wp_enqueue_script( 'kibys-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), "1.0", true );	
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_styles' );


// Code postal
// Load ui.autocomplete javascript and style
 function add_register_script() { 
    if ( is_checkout() ) {
       wp_enqueue_style( 'jquery-ui-base', get_theme_file_uri() . '/assets/css/resource.zip.css', false,'1.0','all');
        wp_enqueue_script( 'jquery-ui-autocomplete' );
        wp_enqueue_script( 'resource.zip', get_theme_file_uri() . '/assets/js/resource.zip.js', array( 'jquery', 'jquery-ui-autocomplete' ),'1.1',true);
    }
}
add_action( 'wp_enqueue_scripts', 'add_register_script' );