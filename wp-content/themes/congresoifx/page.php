<?php get_header(); ?>

<div class="contenedor_rotador">
	<div id="slides">
		<div class="slides_container">
		<?php
		$args = array( 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'slide', 'connected_type' => 'slides_to_pages', 'connected_items' => get_queried_object() );
		$query_slider = new WP_Query($args);
		while ( $query_slider->have_posts() ) : $query_slider->the_post();
			$link = get_post_meta( get_the_ID(), '_slide_link', true );
		?>
			<a href="<?php echo $link; ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
		</div><!-- termina .slides_container-->
	</div><!-- termina #slides-->

	<aside class="partner"><img src="<?php echo get_bloginfo('template_directory');?>/img/img_partner.jpg" width="407" height="174" alt="partner_seix_capital_humano"></aside>
	<div class="clear"></div>
</div><!-- termina .contenedor_rotador-->

<div class="columna_izquierda">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

	<article class="acordeon">
	<?php
		$args = array( 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'page', 'post_parent' => get_the_ID() );
		$query_packages = new WP_Query($args);
		while ( $query_packages->have_posts() ) : $query_packages->the_post();
	?>
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	<?php
		endwhile;
		wp_reset_postdata();
	?>
	</article><!-- termina .acordeon-->
</div><!-- termina .columna_izquierda-->

<div class="columna_derecha">
	<aside id="beneficios_naranja">
		<?php
		$benefits_orange = get_post_meta( get_the_ID(), '_sidebar_top_text', true );
		echo apply_filters('the_content', $benefits_orange);
		?>
	</aside><!-- termina #lista_beneficios-->

	<aside class="above_widgets">
		<?php
		$side_text = get_post_meta( get_the_ID(), '_sidebar_text', true );
		echo apply_filters('the_content', $side_text);
		?>
	</aside>

	<aside id="promo">
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</aside>
</div><!-- termina .columna_derecha-->
<div class="clear"></div>

<?php get_footer(); ?>
