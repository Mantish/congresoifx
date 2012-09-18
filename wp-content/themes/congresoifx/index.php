<?php get_header(); ?>

<div class="contenedor_rotador">
	<div id="slides">
		<div class="slides_container">
		<?php
		$args = array( 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'slide' );
		$query_slider = new WP_Query($args);
		while ( $query_slider->have_posts() ) : $query_slider->the_post();
			$slide_in = get_post_meta( get_the_ID(), '_slide_in', true );
			if ( $slide_in && in_array('home', $slide_in) ){
				$link = get_post_meta( get_the_ID(), '_slide_link', true );
		?>
			<a href="<?php echo $link; ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
