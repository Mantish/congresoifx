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
	<?php echo do_shortcode('[contact-form-7 title="Formulario de contacto 1"]'); ?>
	<div class="clear"></div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
