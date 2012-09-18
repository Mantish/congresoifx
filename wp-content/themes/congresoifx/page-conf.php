<?php
/**
 * Template Name: Conferencistas
 */
get_header(); ?>

<?php get_template_part( 'slider', 'pages' ); ?>

<div class="columna_izquierda">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>


	<?php
		$args = array( 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'page', 'post_parent' => get_the_ID() );
		$query_packages = new WP_Query($args);
		while ( $query_packages->have_posts() ) : $query_packages->the_post();
	?>
	<article class="conferencistas">
		<?php
		if ( has_post_thumbnail() ){
				the_post_thumbnail('post-thumbnail', array('class' => 'thumb_noticia'));
			}
		?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
	<?php
		endwhile;
		wp_reset_postdata();
	?>
</div>

<?php query_posts('post_type=post'); ?>
<?php get_sidebar(); ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>
