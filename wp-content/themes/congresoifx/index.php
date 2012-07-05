<?php get_header(); ?>

<div class="columna_izquierda">
<article id="beneficios">
<h1>BENEFICIOS</h1>
<iframe src="http://player.vimeo.com/video/44658040" width="535" height="301" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
<blockquote>
<p>"El evento ha sido diseñado para ofrecer a los traders una herramienta enriquecedora en los temas concernientes a la actividad del trading"</p>
</blockquote>
</article><!-- termina #beneficios-->
<article id="agenda_academica">
<h1>AGENDA ACADÉMICA</h1>
<ul>
<li>- Money Management</li>
<li>- Análisis Fundamental</li>
<li>- Análisis Técnico</li>
<li>- E-trading</li>
</ul>
<ul>
<li>- Tendencias tecnológicas</li>
<li>- Panel Estratégico de Trading</li>
<li>- Sicología del trading</li>
<li>- Laboratorio de estrategias</li>
</ul>
<div class="clear"></div>
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
