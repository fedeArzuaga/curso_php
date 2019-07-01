<?php

	/* Ambito de las variables */

	// Cuando hablamos del ámbito de las variables, nos referimos al espacio de ejecución en donde se encuentra la misma. En PHP, el scope ("ambito" en español) se comporta de la siguiente manera.

	// Esta variable es una variable local. Se podrá ejecutar dentro del propio archivo de php, sin embargo no podrá ser accedida a ella en alguna estructura de control como por ejemplo condicionales, funciones, etc.

	$nombre = "Federico";

	function dameNombre(){
		
		// Esta es una varialbe DIFERENTE para php. ¿Por qué? Como ya dijimos, las variables en PHP solo pueden ejecutarse dentro de su scope, o ámbito. El ámbito de esta variable empieza con la llave de apertura de la función, y termina en la llave de cierre de la función, en este caso. Por lo tanto, la variable $nombre dentro de la función en realidad no tiene NADA QUE VER con la variable $nombre que se encuentra fuera de la función.

		// Para declarar a una variable global dentro de una estructura de control, debemos definir la palabra reservada "global" antes de la misma, de esta forma:

		global $nombre;

		$nombre = "El nombre es ".$nombre;
	}

	dameNombre();

	echo $nombre;

?>