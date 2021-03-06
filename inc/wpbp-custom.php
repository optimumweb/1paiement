<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
	    // libs
	    wpbp_enqueue_lib(array('modernizr', 'jquery', 'wpbp', 'owlCarousel'));
		// scripts
		wp_enqueue_script('fontawesome', "https://use.fontawesome.com/d85a291cec.js");
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('jquery'));
		// styles
		wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i|Merriweather:300,300i|Roboto:300,300i,400,400i,700,700i");
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');
