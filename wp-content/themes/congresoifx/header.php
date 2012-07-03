<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="El II Congreso Internacional de Traders Profesionales Data IFX ha sido diseñado para ofrecerles herramientas enriquecedoras en temas concernientes al manejo eficáz de inversiones.">
	<meta name="author" content="http://www.dataifx.com">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
<?php
	wp_enqueue_script('plugins', get_bloginfo('template_directory').'/js/plugins.js', array('jquery'), '', true);
	wp_enqueue_script('script', get_bloginfo('template_directory').'/js/script.js', array('jquery'), '', true);
	wp_head();
?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]><p class=chromeframe>¡Su navegador es <em>muy antiguo!</em> <a href="http://browsehappy.com/">Mejore su experiencia en la web actualizando su navegador</a> ó <a href="http://www.google.com/chromeframe/?redirect=true">instale Google Chrome Frame</a> para navegar este sitio.</p><![endif]-->
<div id="wrapper_main">
<header id="header_main">
</header><!-- termina #header_main-->
<nav id="nav_main">
<ul>
<li id="primero"><a class="active" href="index.html">INICIO</a></li>
<li><a href="programa_academico.html">PROGRAMA ACADÉMICO</a></li>
<li><a href="conferencistas.html">CONFERENCISTAS</a></li>
<li><a href="generalidades.html">GENERALIDADES</a></li>
<li><a href="patrocinadores.html">PATROCINADORES</a></li>
<li><a href="registro.html">REGISTRO</a></li>
<li id="ultimo"><a href="contacto.html">CONTACTO</a></li>
</ul>
</nav><!-- termina #nav_main-->
