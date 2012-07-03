<?php
//jquery desde google cdn
function my_jquery() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, '1.7.2', true);
	wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'my_jquery');
