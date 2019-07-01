<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.resaltar{
			color: #f00;
			font-weight: bold;
		}
	</style>
</head>
<body>
	
	<?php

		// Basicamente explica como escapar un caracter dentro de un string. Nada nuevo.

		$nombre = "Pepe";

		echo "Hola ".$nombre;

		echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

		// Viendo las funciones strcmp y strcasecmp

		$palabra = "Casa";

		$otra = "CASA";

		$resultado = strcmp($palabra, $otra);

		if( !$resultado ){
			echo "Coinciden";
		}else{
			echo "No coinciden";
		}

	?>

</body>
</html>