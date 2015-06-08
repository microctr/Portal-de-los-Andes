<?php 
	/*Recibe como parametros el mensaje,link*/
	$texto=$_GET["mensaje"]."Se ha Guardado Correctamente";
	$direccion=$_GET["link"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portal de los Andes</title>
	<link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/Estilos.css">
	<script  type="text/javascript" src="./Bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="./Bootstrap/js/bootstrap.js"></script>
	
	<meta charset="UTF-8">
</head>
<body class="container fuente1">

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<header >
		<div class="row">
			<img class="logo col-xs-12 sm-xs-4 col-md-6 col-lg-6" src="./Imagenes/Logo.png">
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<h2 class="fuente2 sombra-text-3 nounderline Titulo"><a href="#">Portal de los Ándes</a></h2>
				<h3 class="fuente3 sombra-text-2">No es la comida, es nuestro sabor!</h3>
			</div>
		</div>

		<div class="col-md-12 col-lg-12 adecuar barra">
			<nav class="navbar fuente1 ">
				  <div class="container-fluid">

				    <div class="navbar-header">
				      <button type="button " class="navbar-toggle collapsed fondo-Blanco" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only fondo-Plomo">Navegacion</span>
				        <span class="icon-bar fondo-Plomo"></span>
				        <span class="icon-bar fondo-Plomo"></span>
				        <span class="icon-bar fondo-Plomo"></span>
				      </button>
				      <a class="navbar-brand" href="Index.html">Inicio</a>
				    </div>


				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="sucursales.html">Sucursales <span class="sr-only">(current)</span></a></li>
				        <li><a href="carta.html">Carta</a></li>
				        
				      </ul>
				      
				      <ul class="nav navbar-nav navbar-right">
				      	<li><a href="Nosotros.html">Nosotros</a></li>
				        <li><a href="contactanos.html">Contáctanos  </a></li>
				      </ul>
				    </div>
				  </div>
			</nav>
		</div>
	</header>
	<content class="col-md-12 contenido">
		<div>
			<strong><?= $texto?></strong>
			<a href="<?= $direccion?>">CREAR NUEVO</a>
		</div>
		<br>
	</content>

	<footer >
		<div class="row fuente3 foot">
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<strong>Portal de los Andes 2015:</strong>
				<strong>Todos los Derechos reservados</strong>
				<strong>¿Tienes alguna queja? escribenos a portal@correo.com</strong>
			</div>
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<strong>Contactanos</strong>
			</div>
		</div>
		
	</footer>
</body>
</html>