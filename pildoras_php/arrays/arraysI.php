<?php

	/* 

	ARRAYS

	Los arrays son espacios en memoria en donde podemos almacenar infinidades de valores y datos que necesitamos.

	Tenemos dos tipos de arrays

	- ARRAYS INDEXADOS: Arrays en los que accedemos a los datos mediante indices
	- ARRAYS ASOCIATIVOS: Arrays en los que accedemos a los datos mediante nombres preestablecidos

	*/

	/*
	
	ARRAY INDEXADO

	$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miercoles";
	*/

	$semana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

	/* ARRAY ASOCIATIVO */

	// Los arrays asociativos llevan en vez de numeros como indices, nombres.

	$usuario = array( 
		"nombre" => "Fernando",
		"apellido" => "Lopez",
		"edad" => "35",
		"correo" => "fer@hotmail.com",
		"password" => "123456"
	);

	echo $usuario["correo"] . "<br>";

	/* ARRAYS - Clase 2 
	
	Puntos en los que vamos a trabajar en esta clase

	- Verificar si es o no es un array
	- Recorrer un array
	- Añadir elementos a un array
	- Ordenar un array

	*/

	if( is_array($usuario) ){
		echo "Sep, es un array" . "<br>";
	}else{
		echo "No, no es un array" . "<br>";
	}

	/* COMO RECORRER UN ARRAY */

	foreach ($usuario as $clave => $valor) {
		echo "Los elementos del array son: " . $clave . " -> " . $valor . "<br>";
	}

	echo "<br><br>";

	echo "Los días de la semana son: ";

	for( $i = 0; $i < count($semana); $i++ ){

		if( $semana[$i] == "Domingo" ){

			echo " y " . $semana[$i];

		}else{

			echo $semana[$i] . ", ";

		}
		
	}


?>