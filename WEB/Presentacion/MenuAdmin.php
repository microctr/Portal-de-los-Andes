<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">

	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<div>
			<div class="fuente5 col-md-3 col-lg-3 col-xm-3 col-sm-3">
				<h2 class="btn-success " >Reservacion</h2>
				<a  class="btn-success fuente-Contenido" href="NuevoCategoria.php">+ Nuevo</a>
				<a  class="btn-success fuente-Contenido" href="ListarCategoria.php?accion=all">Listar</a>
				<hr>
			</div>
			<div class="fuente5 col-md-3 col-lg-3 col-xm-3 col-sm-3">
				<h2 class="btn-success">Carta</h2>
				<a  class="btn-success fuente-Contenido" href="NuevoCarta.php">+ Nuevo</a>
				<a  class="btn-success fuente-Contenido" href="ListarCarta.php?accion=all">Listar</a>
				<hr>
			</div>
			<div class="fuente5 col-md-3 col-lg-3 col-xm-3 col-sm-3">
				<h2 class="btn-success">Plato</h2>
				<a  class="btn-success fuente-Contenido" href="NuevoPlato.php">+ Nuevo</a>
				<a  class="btn-success fuente-Contenido" href="ListarPlato.php?accion=all">Listar</a>
				<hr>
			</div>
			<div class="fuente5 col-md-3 col-lg-3 col-xm-3 col-sm-3">
				<h2 class="btn-success">Empleado</h2>
				<a  class="btn-success fuente-Contenido" href="NuevoEmpleado.php?mensaje=&accion=all">+ Nuevo</a>
				<a  class="btn-success fuente-Contenido" href="ListarEmpleado.php?accion=all">Listar</a>
				<hr>
			</div>
		</div>
	</content>

	<footer >
		<div class="row fuente5 foot">
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<strong class="fuente-Subtitulo">Portal de los Andes 2015:</strong><br>
				<strong class="fuente-Contenido">Todos los Derechos reservados</strong><br>
				<strong class="fuente-Contenido">¿Tienes alguna queja? escribenos a portal@correo.com</strong><br>
				<a href="LoginUsuario.php">Trabajo Aquí</a>
			</div>
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<strong>Contactanos</strong>
			</div>
		</div>
		
	</footer>
</body>
</html>