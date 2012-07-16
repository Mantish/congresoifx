<?php
/**
 * Template Name: Programa (Ancho completo)
 */
get_header(); ?>

<?php get_template_part( 'slider', 'pages' ); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('full_width program'); ?>>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>
