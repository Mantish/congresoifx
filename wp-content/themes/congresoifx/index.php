<?php get_header(); ?>

<div class="contenedor_rotador">
	<div id="slides">
		<div class="slides_container">
		<?php
		$args = array( 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'slide' );
		$query_slider = new WP_Query($args);
		while ( $query_slider->have_posts() ) : $query_slider->the_post();
			$slide_in = get_post_meta( get_the_ID(), '_slide_in', true );
			if ( $slide_in && in_array('home', $slide_in) ){
		?>
			<a href="#" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php
			}
		endwhile;
		wp_reset_postdata();
		?>
		</div><!-- termina .slides_container-->
	</div><!-- termina #slides-->

	<aside class="partner"><img src="<?php echo get_bloginfo('template_directory');?>/img/img_partner.jpg" width="407" height="174" alt="partner_seix_capital_humano"></aside>
	<div class="clear"></div>
</div><!-- termina .contenedor_rotador-->

<div class="columna_izquierda">
	<article id="beneficios">
		<?php
		$benefits = kc_get_option( 'ifx', 'home_options', 'beneficios' );
		echo apply_filters('the_content', $benefits);
		?>
	</article><!-- termina #beneficios-->
	<article id="agenda_academica">
		<?php
		$agenda = kc_get_option( 'ifx', 'home_options', 'agenda' );
		echo apply_filters('the_content', $agenda);
		?>
	</article><!-- termina #agenda_academica-->
</div><!-- termina .columna_izquierda-->

<div class="columna_derecha">

<aside id="destacados">
	<h1>DESTACADOS</h1>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article class="noticia_destacada">
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail('home-thumb', array('class' => 'thumb_noticia')); ?>
		<?php the_content('(+)'); ?>
		<div class="clear"></div>
	</article><!-- termina .noticia_destacada-->
	<?php endwhile; ?>

	<div id="paginador">
		<ul>
			<li><a class="active" href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
		</ul>
	</div><!-- termina #paginador-->
</aside><!-- termina #destacados-->

<aside id="promo">
	<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</aside>
</div><!-- termina .columna_derecha-->
<div class="clear"></div>

<?php get_footer(); ?>
