<div class="full_width">
	<article id="patrocinadores">
		<h1>PATROCINADORES 2011</h1>
		<ul>
			<?php wp_list_bookmarks( array(
				'categorize' => 0,
				'title_li' => '',
				'orderby' => 'link_id',
			) ); ?>
		</ul>
	</article><!-- termina #patrocinadores-->
</div><!-- termina .full_width-->

</div><!-- termina #wrapper_main-->
<footer role="contentinfo">
Contactos DATAiFX: contact@dataifx.com (57+1) 7441912 - Ext 218 Contactos Seix: info@seix.org (57+1) 2565657 / 97
</footer>
<div class="hidden">
<div id="contenedor_contacto">
	<h1>CONTACTO</h1>
	<p>Por favor diligencie este formulario. En breve estaremos en contacto con usted. También puede contactarnos en el teléfono 256 5657 en Bogotá.</p>
	<div class="campo_contacto" >
		nombre completo* <input name="" type="text">
	</div>
	<div class="campo_contacto" >
		empresa* <input name="" type="text">
	</div>
	<div class="campo_contacto" >
		correo electrónico* <input name="" type="text">
	</div>
	<div class="campo_contacto" >
		teléfono <input name="" type="text">
	</div>
	<div class="clear"></div>
	<div class="campo_comentarios" >
		comentarios <textarea id="comentarios" name="" cols="" rows=""></textarea>
	</div>
	<div class="contenedor_btn_enviar">
		<a href="#" target="_blank"><div class="btn_azul">ENVIAR</div></a>
	</div>
	<div class="clear"></div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
