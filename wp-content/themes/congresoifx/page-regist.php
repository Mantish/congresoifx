<?php
/**
 * Template Name: Registro
 */
get_header(); ?>

<?php get_template_part( 'slider', 'pages' ); ?>

<div class="columna_izquierda">
	<article id="precios_tarifas">
		<h1>PRECIOS Y TARIFAS *los precios incluyen IVA</h1>
		<table width="90%" border="0">
			<tr>
				<td>PRONTO PAGO ANTES DEL 10 DE NOVIEMBRE</td>
				<td><span class="resaltado">$1.192.000</span></td>
			</tr>
			<tr>
				<td>PRONTO PAGO DEL 10 AL 17 DE NOVIEMBRE</td>
				<td><span class="resaltado">$1.341.000</span></td>
			</tr>
			<tr>
				<td>DEL 17 HASTA EL 25 DE NOVIEMBRE</td>
				<td><span class="resaltado">$1.490.000</span></td>
			</tr>
		</table>
		<p class="resaltado_negro">Para conocer descuentos para grupos corporativos y patrocinios, por favor contáctenos: (57+1)2 56 5657 info@seix.org</p>
	</article><!-- termina #precios_tarifas-->

	<div id="caja_pagos">
		<h1>PAGOS EN LÍNEA</h1>
		<p>Por favor diligencie este formulario y oprima el botón 'enviar'.
		Usted será redirigido a una página de confirmación de datos.
		Siga las instrucciones a continuación.</p>
		<div id="contenedor_iframe">
			<iframe src ="http://dataifx.com/widget/index.php/forosdataifx/confirmacion" width="100%" height="220">
			</iframe>
			<p class="resaltado_negro">Para realizar más de 2 incripciones por favor <a href="#">comuníquese con nosotros</a> y conozca los descuentos especiales para grupos corporativos.</p>
		</div><!-- termina #contenedor_iframe-->
	</div><!-- termina #caja_pagos-->

	<div id="pagos_consignacion">
		<h1>PAGOS POR CONSIGNACIÓN</h1>
		<p><span class="resaltado_azul">PASO 1:</span> Realice la consignación del valor correspondiente en cualquiera de las cuentas relacionadas a continuación:</p>
		<div class="tabla_pagos">
			<table width="100%" border="0">
				<tr>
					<td colspan="2" class="fondo_azul"><span class="resaltado_azul">Empresa:</span> DATAiFX S.A.S.</td>
				</tr>
				<tr>
					<td colspan="2"><span class="resaltado_azul">Nit:</span> 900 365 835 -4</td>
				</tr>
				<tr>
					<td colspan="2"><span class="resaltado_azul">Referencia:</span> Número de identificación de quien se inscribe</td>
				</tr>
				<tr>
					<td width="38%" class="fondo_azul"><span class="resaltado_azul">Banco</span></td>
					<td width="62%" class="fondo_azul"><span class="resaltado_azul">N° cuenta corriente</span></td>
				</tr>
				<tr>
					<td>BANCOLOMBIA</td>
					<td>048 601 827 92</td>
				</tr>
			</table>
		</div><!-- termina .tabla_pagos-->

		<div class="tabla_pagos">
			<table width="100%" border="0">
				<tr>
					<td colspan="2" class="fondo_azul"><span class="resaltado_azul">Empresa:</span> SEIX S.A.</td>
				</tr>
				<tr>
					<td colspan="2"><span class="resaltado_azul">Nit:</span> 900 296 052 -8</td>
				</tr>
				<tr>
					<td colspan="2"><span class="resaltado_azul">Referencia:</span> Número de identificación de quien se inscribe</td>
				</tr>
				<tr>
					<td width="38%" class="fondo_azul"><span class="resaltado_azul">Banco</span></td>
					<td width="62%" class="fondo_azul"><span class="resaltado_azul">N° cuenta corriente</span></td>
				</tr>
				<tr>
					<td>COLPATRIA</td>
					<td>453-101016-2</td>
				</tr>
			</table>
		</div><!-- termina .tabla_pagos-->

		<div class="clear"></div>
		<p><span class="resaltado_azul">PASO 2:</span> Dilgencie el <a href="#">Formulario de inscripción</a> y adjunte el recibo de consignación.</p>
		<a href="#" target="_blank"><div class="btn_azul">FORMULARIO DE INSCRIPCIÓN</div></a>
		<div class="clear"></div>
	</div><!-- termina #pagos_consignacion-->
</div><!-- termina .columna_izquierda-->

<?php get_sidebar('page'); ?>

<?php get_footer(); ?>
