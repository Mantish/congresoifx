<?php get_header(); ?>

<div class="columna_izquierda">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>
</div><!-- termina .columna_izquierda-->

<div class="columna_derecha">
<aside id="beneficios_naranja">
<h1>BENEFICIOS</h1>
<article id="lista_beneficios">
<ul>
<li>Mejorar las herramientas para tomar las mejores decisiones de trading.</li>
<li>Aprender estrategias específicas de trading de expertos nacionales e internacionales.</li>
<li>Socializar e intercambiar conocimientos y conceptos con otros traders.</li>
<li>Adquirir una perspectiva macro de los mercados aplicada al trading.</li>
<li>Una gran oportunidad para aprender y compartir con expertos reconocidos.</li>
<li>Alto retorno de la inversión.</li>
</ul>
</article><!-- termina #beneficios_naranja-->
</aside><!-- termina #lista_beneficios-->
<article id="dirigido">
<h1>ESTÁ DIRIGIDO A:</h1>
<p>TRADERS, inversionistas, comisionistas de bolsa, jefes de mesas de dinero, directores de banca inversión, directores de carteras colectivas, administradores de inversiones,  tesoreros de compañías, gerentes financieros, directores de riesgos, analistas financieros, operadores del mercado, entre otros.</p>
</article><!-- termina #dirigido-->
<aside id="promo">
  <img src="img/img_promo.jpg" width="365" height="164" alt="promo"> </aside>
</div><!-- termina .columna_derecha-->
<div class="clear"></div>

<?php get_footer(); ?>
