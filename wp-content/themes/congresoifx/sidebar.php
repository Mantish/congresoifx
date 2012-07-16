<div class="columna_derecha">

<aside id="destacados">
	<h1>DESTACADOS</h1>

	<div id="tabs-wrap">
		<?php
		$count = 0;
		if ( have_posts() ) while ( have_posts() ) : the_post();
			if($count % 3 == 0){
				$page = $count / 3 + 1;
				echo '<div class="page" id="page_'.$page .'">';
			}
			$count++;
		?>
			<article class="noticia_destacada">
				<h2><?php the_title(); ?></h2>
				<?php
				the_post_thumbnail('home-thumb', array('class' => 'thumb_noticia'));
				$content = get_the_content();
				$link = get_post_meta( get_the_ID(), '_ext_link', true );
				$content .= ' <a href="' .$link. '" target="_blank">(+)</a>';
				echo apply_filters('the_content', $content);
				?>
				<div class="clear"></div>
			</article><!-- termina .noticia_destacada-->
		<?php
			if($count % 3 == 0){
				$page =$count / 3 + 1;
				echo '</div>';
			}
		endwhile;
		//si falto por cerrar la ultima pagina
		if($count % 3 != 0){
			$page =$count / 3 + 1;
			echo '</div>';
		}
		?>
	</div><!-- termina #tabs-wrap-->

	<div id="paginador">
		<ul>
		<?php
		$pages = ceil( $count / 3 );
		$class = ' class="active"';
		for ($i=1; $i <= $pages; $i++) {
			if ($i == 2){
				$class = '';
			}
			echo '<li' .$class. '><a href="#page_' .$i. '">' .$i. '</a></li>';
		}
		?>
		</ul>
	</div><!-- termina #paginador-->
</aside><!-- termina #destacados-->

<aside id="promo">
	<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</aside>
</div><!-- termina .columna_derecha-->
<div class="clear"></div>
