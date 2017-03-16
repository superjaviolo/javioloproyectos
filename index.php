<!doctype html>
<html lang ="es">
	<head>        
		<!-- Trabajo Final del curso de Seis Cocos de JavaScript y jQuery 
			Autor: Javier Sanchez Cañaveras
			Fecha: 
		 -->
		<meta charset="utf-8">    
		<title>Trabajo Final - Curso JavaScript y jQuery</title>

		<!-- Referencias a jQuery y jQueryUI -->
		<link rel="stylesheet" href="css/custom-theme/jquery-ui-1.10.4.custom.css">
		<link rel="stylesheet" href="css/myCSS/estilos.css">
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
		
		<!-- Referencias mi archivo JavaScript -->
		<script type="text/javascript" src="motor.js"></script>		
	</head>
	<body>
		<h1>Formulario solicitanto los datos de una persona</h1>
		<form id="formularioPersona" name="formularioPersona" action="envio.php" method="post">
			<div class="divClass">
				<h2>Nombre</h2>
				<input id="nombre" type="text" name="nombre"></input>
			</div>
			<div class="divClass">
				<h2>Apellidos</h2>
				<input id="apellidos" type="text" name="apellidos"></input>
			</div>
			<div class="divClass">
				<h2>Edad</h2>
				<input id="edad" type="text" name="edad" readonly="readonly" value="29"></input>				
				<div id="slider"></div>
				<p>Por favor, deslice la barra para indicar su edad</p>
			</div>
        	<div class="divClass">
				<h2>Fecha de Nacimiento</h2> 
				<input id="fechaNacimiento" type="text" name="fechaNacimiento"></input>	
			</div>
			<div class="divClass">
				<h2>Ciudad de nacimiento</h2>
				<input id="ciudad" type="text" name="ciudad"></input>
			</div>
			<div>
				<input id="botonEnviar" type="button" name="botonEnviar" value="Guardar los cambios"></input>
			</div>
		</form>
	</body>
</html>


