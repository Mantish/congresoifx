<?php get_header(); ?>

<?php get_template_part( 'slider', 'pages' ); ?>

<div class="columna_izquierda">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

	<article class="acordeon">
	<?php
		$args = array( 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'page', 'post_parent' => get_the_ID() );
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

<?php get_sidebar('page'); ?>

<?php get_footer(); ?>
