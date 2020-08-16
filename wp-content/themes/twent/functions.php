<?php 


add_action( 'wp_enqueue_scripts', 'twent_style' );

function twent_style() {
    
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
   
}


