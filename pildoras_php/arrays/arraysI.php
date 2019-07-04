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

	$usuario = array( 
		"nombre" => "Fernando",
		"apellido" => "Lopez",
		"edad" => "35",
		"correo" => "fer@hotmail.com",
		"password" => "123456"
	);

	echo $usuario["nombre"];

?>