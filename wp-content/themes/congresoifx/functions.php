<?php
function mytheme_setup()
{
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(135, 135, true);
	add_image_size( 'home-thumb', 100, 100 );

	register_nav_menus( array(
		'primary' => 'Menú Principal',
	) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

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

//todo esto es para poder ponerle al slide en donde va
function my_connection_types() {
	// Make sure the Posts 2 Posts plugin is active.
	if ( !function_exists( 'p2p_register_connection_type' ) )
		return;

	p2p_register_connection_type( array(
		'name' => 'slides_to_pages',
		'from' => 'slide',
		'to' => 'page'
	) );
}
add_action( 'wp_loaded', 'my_connection_types' );

add_filter( 'kc_post_settings', 'slider_options' );
function slider_options( $groups ) {
	$my_group = array(
		'slide'	=> array(		// Post type name
			array(
				'id'		=> 'slider_section',
				'title'		=> 'Opciones Rotador',
				'role'		=> array('administrator', 'editor'),
				'fields'	=> array(
					array(
						'id'		=> 'slide_in',
						'title'		=> 'Rotador disponible en',
						'type'		=> 'checkbox',
						'options'	=> array(
							'home'	=> 'Home'
						),
						'default'	=> 'home'
					),
					array(
						'id'		=> 'slide_link',
						'title'		=> 'URL Enlace',
						'type'		=> 'text',
					)
				)
			)
		)
	);

	$groups[] = $my_group;
	return $groups;
}
//


//opciones del tema, para el home page
add_filter( 'kc_plugin_settings', 'mytheme_options' );
function mytheme_options( $settings ) {
	$options = array(
		array(
			'id'     => 'home_options',
			'title'  => 'Opciones Home Page',
			'fields' => array(
				array(
					'id'      => 'beneficios',
					'title'   => 'Beneficios',
					'type'    => 'editor'
				),
				array(
					'id'      => 'agenda',
					'title'   => 'Agenda',
					'type'    => 'editor'
				)
			)
		),
		// You can add more sections here...
	);

	$my_settings = array(
		'prefix'        => 'ifx',    // Use only alphanumerics, dashes and underscores here!
		'menu_location' => 'themes.php',  // options-general.php | index.php | edit.php | upload.php | link-manager.php | edit-comments.php | themes.php | users.php | tools.php
		'menu_title'    => 'Opciones Generales',
		'page_title'    => 'Opciones Generales',
		'display'       => 'metabox',     // plain|metabox. If you chose to use metabox, don't forget to set their settings too
		'metabox'       => array(
			'context'   => 'normal',  // normal | advanced | side
			'priority'  => 'default', // default | high | low
		),
		'options'       => $options
	);

	$settings[] = $my_settings;
	return $settings;
}

//opciones entradas (destacados)
add_filter( 'kc_post_settings', 'post_options' );
function post_options( $groups ) {
	$my_group = array(
		'post'	=> array(		// Post type name
			array(
				'id'		=> 'kc_post_section',
				'title'		=> 'Opciones Destacados',
				'role'		=> array('administrator', 'editor'),
				'fields'	=> array(
					array(
						'id'		=> 'ext_link',
						'title'		=> 'URL Enlace',
						'type'		=> 'text',
					)
				)
			)
		)
	);

	$groups[] = $my_group;
	return $groups;
}

//registrar zonas de widgets
function create_widget_zones()
{
	register_sidebar( array(
		'name' => 'Area Principal Widgets',
		'id' => 'primary-widget-area',
		'description' => 'Para el home page y paginas normales',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'create_widget_zones' );
