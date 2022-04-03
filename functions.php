<?php
add_action( 'wp_enqueue_scripts', 'mikuszewo2022_enqueue_styles' );
function mikuszewo2022_enqueue_styles() {
	wp_enqueue_style('go-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:wght@400;700;subset=latin&latin-ext&display=swap');
	wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_script('mikuszewo-custom-scripts', get_stylesheet_directory_uri().'/custom-scripts.js');
}
