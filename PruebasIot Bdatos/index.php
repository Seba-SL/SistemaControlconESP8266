<!-- Archivo principal de la web  -->
<!DOCTYPE html>
<html>
	<head>
		<!-- En la cabecera , titulo de ventana , caracteristcias de los caracteres y enlace a hoja de estilos CSS -->
		<title>Control de equipos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		 
	</head>

	<body>

		<!-- En el cuerpo formulario y boton de enviar al archivp registrar.php -->
		<!-- El metodo es post , es decir los datos no van en la url como en el GET-->

    	<form method="post">
    		<h1>Base de datos SangriaApp</h1>
    		<input type="text" name="temperatura" placeholder="Temperatura">
    		<input type="text" name="serie" placeholder="Serie">
    		<input type="submit" name="enviar">
    </form>

	<!-- Incluye codigo php , con la etiqueta correspondiente -->
        	<?php 
			
			//incluye el archivo con el cofigo php
			include("registrar.php");
		
    	    ?>
	</body>
</html>