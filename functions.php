<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	$theme_uri = get_template_directory_uri();
	wp_enqueue_script('my_custom_scripts', $theme_uri . '/assets/main.min.js', array(), '1.0', false);
	// wp_enqueue_script('my_custom_scripts2', $theme_uri . '/js/creative-design.js', array(), '1.0', false);
	// wp_enqueue_script('my_custom_scripts3', $theme_uri . '/js/bootstrap.affix.js', array(), '1.0', false);
	// wp_enqueue_script('my_custom_scripts4', $theme_uri . '/js/bootstrap.bundle.js', array(), '1.0', false);
}

//add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );