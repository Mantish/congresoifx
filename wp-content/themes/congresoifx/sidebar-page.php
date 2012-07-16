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
