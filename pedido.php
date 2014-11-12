<?php
		ob_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="icon" href="/seisnueve.ico" type="image/x-icon"/>

	<link rel="stylesheet" type="text/css" href="estilos.css" media="screen"/>
	<link rel="stylesheet" href="css/animated-menu.css"/>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="shortcut icon" href="tittus.ico">

	<script src="js/modernizr.custom.63321.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.dropdown.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51595503-1', 'tittuspizza.ec');
  ga('send', 'pageview');

</script>


	<script type="text/javascript">
		$( function() {
			$( '#cd-dropdown' ).dropdown({
				gutter : 1,
				delay : 10,
				random : true
			});
		});
	</script>

	<script type="text/javascript" src="js/jquery.pikachoose.min.js"></script>
	<script language="javascript">
		$(document).ready(function (){
			$("#pikame").PikaChoose({
				showCaption:false
			});
		});
	</script>

	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/animated-menu.js" type="text/javascript"></script>

	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/ios-orientationchange-fix.js"></script>
	<script src="js/jquery.swipebox.js"></script>
	<script type="text/javascript">
		;( function( $ ) {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#gallery' ).click( function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
					{ href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
				] );
			} );

		} )( jQuery );
	</script>

			<style type="text/css">
				#banner_pida_pizza .frame-0 {background:url(img/tittus_carcelen.png);}
				#banner_pida_pizza .frame-1 {background:url(img/tittus_mitad_mundo.png) top left repeat;}
				#banner_pida_pizza .frame-2 {background:url(img/tittus_horarios.png) top left repeat;}
				#banner_pida_pizza .frame-3 {background:url(img/tittus_linea.png) top left repeat;}

				#banner_pida_pizza .frame-closed .frame-content {display:none;}
				#banner_pida_pizza .frame-open .frame-content {display:block;}

				#IrArriba {
				position: fixed;
				bottom: 30px; /* Distancia desde abajo */
				}
				#dialogo {
				position: fixed;
				bottom: 420px; /* Distancia desde abajo */
				left:0px;
				}

			</style>







<title>Tittus Pizza Pedidos</title>
</head>

<body>





	<div id="layout">

	<div id="lateral_izq">
				<div id="logotipo_tittus">
					<img src="img/logotipo_tittus_pizza_carcelen_quito_ecuador.jpg" />
				</div>

<!--				<div class="expandir">
					<form name="prueba" action="redirect.php">
					<select name="lista "id="cd-dropdown" class="cd-select" >
						<option value="-1" selected onchange="document.prueba.submit();">Inicio</option>
						<option value="1" >Inicio</option>
						<option value="3" >Noticias Tittus</option>
						<option value="4" >Nuestras Pizzas</option>
						<option value="5" >Sonrisas de sabor</option>
						<option value="6" >Pedidos Online</option>
					</select>
					</form>
				</div>
-->
				<div class="tarjetas">
				<a href="online.html"><img src="img/pague_tarjeta_credito_pizza_tittus.jpg" /></a>
				</div>

	</div>




	<div id="lateral_der">


		<header>
			<div class="menu_principal">
				<div class="menu_superior_ul">
					<div class="menu_superior_li yellow">
						<p><a href="index.html">Tittus<br/>Inicio</a></p>
						<p class="subtext"><img src="img/tito_peq.png" /></p>
					</div>
					<div class="menu_superior_li yellow">
						<p><a href="noticias.html">Tittus Empresa</a></p>
						<p class="subtext">Conozca más sobre nosotros</p>
					</div>
					<div class="menu_superior_li yellow">
						<p><a href="eventos.html">Tittus Eventos</a></p>
						<p class="subtext">Para todo compromiso social</p>
					</div>
					<div class="menu_superior_li yellow">
						<p><a href="menu.html">Tittus <br/> Menú</a></p>
						<p class="subtext">Disfrute de nuestras variedades</p>
					</div>
					<div class="menu_superior_li yellow">
						<p><a href="promociones.html">Tittus Promociones</a></p>
						<p class="subtext">Los mejores descuentos clientes</p>
					</div>
					<div class="menu_superior_li yellow">
						<p><a href="online.html">Tittus Pedidos</a></p>
						<p class="subtext">Haga su pedido desde nuestra web</p>
					</div>
				</div>
			</div>
			<a href="https://www.facebook.com/PizzaTittus"><img style="position:absolute; margin-left:700px; z-index:90;" src="img/facebookSiguenos.png" /></a>

		</header>


			<div id="principal_tittus_pizza">
<?php

if(isset($_POST)) {
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "pedidos@tittuspizza.ec,jcachig@gmail.com,hectorcastro76@hotmail.com";
$email_subject = "Pedido desde web TITTUS PIZZA ";

	// Aquí se deberían validar los datos ingresados por el usuario
	if(empty($_POST['nombres']) ||
	empty($_POST['direccion']) ||
	empty($_POST['ruc']) ||
	empty($_POST['telefono']) ||
	empty($_POST['email']) ||
	empty($_POST['pago'])
	){
		  header("refresh: 3; url = online.html"); 
		  echo '<div id="satisfecho" style="font-size=17em; font-weight:bold; text-align:center; color:white;"><img src="img/error_envio.png"></div>'; 

                  echo "<h2>Ocurrió un error en el envio del formulario es posible que le falten datos de rellenar. No ha sido enviado. </h2><br />";

	}else{
		date_default_timezone_set('America/Guayaquil');

		$email_message = "Pedido desde la web:\n\n";
		$email_message .= "Nombres y Apellidos: " . strip_tags($_POST['nombres']) . "\n";
		$email_message .= "Fecha y hora del pedido:  " . date("d-m-Y h:i:s A"). "\n";
		$email_message .= "Dirección entrega: " . strip_tags($_POST['direccion']) . "\n";
		$email_message .= "RUC / CI: " . strip_tags($_POST['ruc']) . "\n";
		$email_message .= "Teléfono: " . strip_tags($_POST['telefono']) . "\n";
		$email_message .= "Email: " . strip_tags($_POST['email']) . "\n";
		$email_message .= "Forma de pago: " . strip_tags($_POST['pago']) . "\n\n";

		$email_message .= "--------------- LISTA DE PEDIDO -------------" . "\n\n";
		if (isset ($_POST['deluxe_pizza']) ){
			switch ($_POST['Deluxe']){
				case 4.90 : $tipo = "Personal"; break;
					
				case 14.70 : $tipo = "Mediana"; break;

				case 17.50 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Deluxe --- cantidad : " . $_POST['deluxe_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['deluxe_subtotal']. "\n";
		}

		if (isset ($_POST['tocino_pizza']) ){
			switch ($_POST['Tocino']){
				case 4.75 : $tipo = "Personal"; break;
					
				case 14.00 : $tipo = "Mediana"; break;

				case 17.30 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Tocino --- cantidad : " . $_POST['tocino_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['tocino_subtotal']. "\n";
		}


		if (isset ($_POST['napolitana_pizza']) ){
			switch ($_POST['Napolitana']){
				case 3.90 : $tipo = "Personal"; break;
					
				case 12.50 : $tipo = "Mediana"; break;

				case 14.50 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Napolitana --- cantidad : " . $_POST['napolitana_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['napolitana_subtotal']. "\n";
		}

		if (isset ($_POST['jamonchampiniones_pizza']) ){
			switch ($_POST['Jamonchampiniones']){
				case 4.50 : $tipo = "Personal"; break;
					
				case 14.00 : $tipo = "Mediana"; break;

				case 15.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Jamón Champiñones --- cantidad : " . $_POST['jamonchampiniones_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['jamonchampiniones_subtotal']. "\n";
		}



		if (isset ($_POST['clasica_pizza']) ){
			switch ($_POST['Clasica']){
				case 4.25 : $tipo = "Personal"; break;
					
				case 13.25 : $tipo = "Mediana"; break;

				case 14.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Clásica --- cantidad : " . $_POST['clasica_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['clasica_subtotal']. "\n";
		}


		if (isset ($_POST['campestre_pizza']) ){
			switch ($_POST['Campestre']){
				case 4.80 : $tipo = "Personal"; break;
					
				case 13.50 : $tipo = "Mediana"; break;

				case 16.50 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Campestre --- cantidad : " . $_POST['campestre_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['campestre_subtotal']. "\n";
		}



		if (isset ($_POST['hawaiana_pizza']) ){
			switch ($_POST['Hawaiana']){
				case 3.90 : $tipo = "Personal"; break;
					
				case 12.50 : $tipo = "Mediana"; break;

				case 14.50 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Hawaiana --- cantidad : " . $_POST['hawaiana_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['hawaiana_subtotal']. "\n";
		}




		if (isset ($_POST['pepperonichampiniones_pizza']) ){
			switch ($_POST['Pepperonichampiniones']){
				case 4.60 : $tipo = "Personal"; break;
					
				case 13.50 : $tipo = "Mediana"; break;

				case 17.30 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Pepperoni Champiñones --- cantidad : " . $_POST['pepperonichampiniones_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['pepperonichampiniones_subtotal']. "\n";
		}




		if (isset ($_POST['pollochampiniones_pizza']) ){
			switch ($_POST['Pollochampiniones']){
				case 3.95 : $tipo = "Personal"; break;
					
				case 13.00 : $tipo = "Mediana"; break;

				case 14.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Pollo Champiñones --- cantidad : " . $_POST['pollochampiniones_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['pollochampiniones_subtotal']. "\n";
		}


		if (isset ($_POST['salami_pizza']) ){
			switch ($_POST['Salami']){
				case 3.90 : $tipo = "Personal"; break;
					
				case 13.00 : $tipo = "Mediana"; break;

				case 14.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Salami --- cantidad : " . $_POST['salami_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['salami_subtotal']. "\n";
		}


		if (isset ($_POST['pepperoni_pizza']) ){
			switch ($_POST['Pepperoni']){
				case 3.90 : $tipo = "Personal"; break;
					
				case 13.00 : $tipo = "Mediana"; break;

				case 14.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Pepperoni --- cantidad : " . $_POST['pepperoni_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['pepperoni_subtotal']. "\n";
		}



		if (isset ($_POST['pollo_pizza']) ){
			switch ($_POST['Pollo']){
				case 3.95 : $tipo = "Personal"; break;
					
				case 13.00 : $tipo = "Mediana"; break;

				case 14.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Pollo --- cantidad : " . $_POST['pollo_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['pollo_subtotal']. "\n";
		}




		if (isset ($_POST['supertittus_pizza']) ){
			switch ($_POST['Supertittus']){
				case 5.30 : $tipo = "Personal"; break;
					
				case 14.90 : $tipo = "Mediana"; break;

				case 18.50 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Super Tittus --- cantidad : " . $_POST['supertittus_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['supertittus_subtotal']. "\n";
		}



		if (isset ($_POST['vegetariana_pizza']) ){
			switch ($_POST['Vegetariana']){
				case 3.90 : $tipo = "Personal"; break;
					
				case 13.00 : $tipo = "Mediana"; break;

				case 15.50 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Vegetariana --- cantidad : " . $_POST['vegetariana_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['vegetariana_subtotal']. "\n";
		}



		if (isset ($_POST['jamon_pizza']) ){
			switch ($_POST['Jamon']){
				case 3.75 : $tipo = "Personal"; break;
					
				case 11.50 : $tipo = "Mediana"; break;

				case 13.99 : $tipo = "Familiar"; break;
			}
			$email_message .= "Tittus Jamón --- cantidad : " . $_POST['jamon_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['jamon_subtotal']. "\n";
		}



		if (isset ($_POST['dosunoonline_pizza']) ){

			if (isset($_POST['sabor_pizza_dosuno']))
				$email_message .= "Tittus 2 x 1 exclusiva web --- cantidad : " . $_POST['dosunoonline_quantity'] . " --- sabores : ". $_POST['sabor_pizza_dosuno'] ." --- subtotal :" .$_POST['dosunoonline_subtotal']. "\n";
			else
				$email_message .= "Tittus 2 x 1 exclusiva web --- cantidad : " . $_POST['dosunoonline_quantity'] . " --- subtotal :" .$_POST['dosunoonline_subtotal']. "\n";

		}




		if (isset ($_POST['marteslocos_pizza']) ){
			switch ($_POST['Marteslocos']){
				case 14.99 : $tipo = "Medianas"; break;
					
				case 18.99 : $tipo = "Familiares"; break;
			}

			if (isset($_POST['sabor_pizza_marteslocos']))
				$email_message .= "Promo Martes Locos --- cantidad : " . $_POST['marteslocos_quantity'] . " --- tipo : ". $tipo ." --- sabores : ". $_POST['sabor_pizza_marteslocos']  ." --- subtotal :" .$_POST['marteslocos_subtotal']. "\n";
			else
				$email_message .= "Promo Martes Locos --- cantidad : " . $_POST['marteslocos_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['marteslocos_subtotal']. "\n";
		}



		if (isset ($_POST['promotittus_pizza']) ){
			switch ($_POST['promotittus_tipo']){
				case 1 : $tipo = "Medianas Tittus Deluxe"; break;
				case 2 : $tipo = "Familiares Tittus Deluxe"; break;
				case 3 : $tipo = "Medianas Tittus Napolitana"; break;
				case 4 : $tipo = "Familiares Tittus Napolitana"; break;
				case 5 : $tipo = "Medianas Tittus Jamón Champiñones"; break;
				case 6 : $tipo = "Familiares Tittus Jamón Champiñones"; break;
				case 7 : $tipo = "Medianas Tittus Clásica"; break;
				case 8 : $tipo = "Familiares Tittus Clásica"; break;
				case 9 : $tipo = "Medianas Tittus Campestre"; break;
				case 10 : $tipo = "Familiares Tittus Campestre"; break;
				case 11 : $tipo = "Medianas Tittus Hawaiana"; break;
				case 12 : $tipo = "Familiares Tittus Hawaiana"; break;
				case 13 : $tipo = "Medianas Tittus Pepperoni Champiñones"; break;
				case 14 : $tipo = "Familiares Tittus Pepperoni Champiñones"; break;
				case 15 : $tipo = "Medianas Tittus Pollo Champiñones"; break;
				case 16 : $tipo = "Familiares Tittus Pollo Champiñones"; break;
				case 17 : $tipo = "Medianas Tittus Salami"; break;
				case 18 : $tipo = "Familiares Tittus Salami"; break;
				case 19 : $tipo = "Medianas Tittus Pepperoni"; break;
				case 20 : $tipo = "Familiares Tittus Pepperoni"; break;
				case 21 : $tipo = "Medianas Tittus Pollo"; break;
				case 22 : $tipo = "Familiares Tittus Pollo"; break;
				case 23 : $tipo = "Medianas Tittus Tocino"; break;
				case 24 : $tipo = "Familiares Tittus Tocino"; break;
				case 25 : $tipo = "Medianas Tittus Super Tittus"; break;
				case 26 : $tipo = "Familiares Tittus Super Tittus"; break;
				case 27 : $tipo = "Medianas Tittus Vegetariana"; break;
				case 28 : $tipo = "Familiares Tittus Vegetariana"; break;
				case 29 : $tipo = "MedianasTittus Jamón"; break;
				case 30 : $tipo = "Familiares Tittus Jamón"; break;
			}
			$email_message .= "Promo Tittus ". $tipo ." --- cantidad : " . $_POST['promotittus_quantity'] ." --- subtotal :" .$_POST['promotittus_subtotal']. "\n";
		}





		if (isset ($_POST['ensalada_pizza']) ){

			$email_message .= "Tittus Ensalada --- cantidad : " . $_POST['ensalada_quantity'] . "--- subtotal :" .$_POST['ensalada_subtotal']. "\n";
		}



		if (isset ($_POST['panajo_pizza']) ){

			$email_message .= "Tittus Pan Ajo --- cantidad : " . $_POST['panajo_quantity'] . "--- subtotal :" .$_POST['panajo_subtotal']. "\n";
		}



		if (isset ($_POST['panajoespecial_pizza']) ){

			$email_message .= "Tittus Pan Ajo Especial --- cantidad : " . $_POST['panajoespecial_quantity'] . "--- subtotal :" .$_POST['panajoespecial_subtotal']. "\n";
		}


		if (isset ($_POST['alitasbbq_pizza']) ){

			$email_message .= "Alitas BBQ --- cantidad : " . $_POST['alitasbbq_quantity'] . "--- subtotal :" .$_POST['alitasbbq_subtotal']. "\n";
		}


		if (isset ($_POST['gaseosa_pizza']) ){
			switch ($_POST['Gaseosa']){
				case 1.75 : $tipo = "1.75 Litros"; break;
					
				case 1.80 : $tipo = "2 Litros"; break;

				case 2.90 : $tipo = "3 Litros"; break;
			}

			if (isset ($_POST['sabor_gaseosa']) )
				
				$email_message .= "Gaseosa --- cantidad : " . $_POST['gaseosa_quantity'] . " --- sabor : ". strip_tags($_POST['sabor_gaseosa']) ." --- tipo : ". $tipo ." --- subtotal :" .$_POST['gaseosa_subtotal']. "\n";
			else
				$email_message .= "Gaseosa --- cantidad : " . $_POST['gaseosa_quantity'] . " --- tipo : ". $tipo ." --- subtotal :" .$_POST['gaseosa_subtotal']. "\n";

		}

		if (isset ($_POST['aclaraciones_pedido']) ){
				
			$email_message .= strip_tags($_POST['aclaraciones_pedido']). "\n";

		}











			$email_message .= "\n TOTAL PEDIDO : ".$_POST['valor_total_pedido']."\n";
		



		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);


		  header("refresh: 5; url = index.html"); 
		  echo '<div id="satisfecho" style="font-size=17em; font-weight:bold; text-align:center; color:white;"><img src="img/envio-satisfactorio.png"></div>'; 

		ob_end_flush(); 
	}
}
?>
			</div>






	</div>

</body>


</html>
