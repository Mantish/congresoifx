<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(135, 135, true);
add_image_size( 'home-thumb', 100, 100 );

//jquery desde google cdn
function my_jquery()
{
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, '1.7.2', true);
	wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'my_jquery');

// Registrar post types
function create_post_types()
{
	register_post_type( 'slide', array(
		'labels' => array(
			'name' => 'Rotadores',
			'singular_name' => 'Rotador',
			'add_new' => 'Añadir Nuevo',
			'add_new_item' => 'Añadir Nuevo Rotador',
			'edit_item' => 'Editar Rotador',
			'new_item' => 'Nuevo Rotador',
			'view_item' => 'Ver Rotador',
			'search_items' => 'Buscar Rotadores',
			'not_found' => 'Rotadores no encontrados',
			'not_found_in_trash' => 'Rotadores no encontrados en papelera'
		),
		'public' => true,
		'supports' => array(
			'title',
			'thumbnail',
			'page-attributes',
		),
		'menu_position' => 21,
	));
}
add_action('init', 'create_post_types');
