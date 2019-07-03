<?php

	/* Funciones con parametros por referencias */

	// Asi como podemos pasarle parametros (o no) a una funcion por su valor, tambien podemos hacer uso de los parametros POR REFERENCIA

	// Diferencia de la sintaxis

	/*

	FUNCION CON PARAMETROS POR VALOR

	function nombreFuncion($parametro){
		$parametro++;
	}


	FUNCION CON PARAMETROS POR REFERENCIA

	function nombreFuncion(&$parametro){
		$parametro++;;
	}

	*/
						// En este momento se le pasa $valor1 como REFERENCIA
	function incrementa(&$valor1){

		//Al estar el parametro REFERENCIADO por un espacio en memoria guardado dentro del programa, lo que hace es que, no solo manipula el valor del parametro, sino el de la variable con la que se referencio. De forma que haciendo esto:

		$valor1++;

		return $valor1;

	}

	// Aunque yo luego declare $numero = 5;

	$numero = 5;
					// Esta es la REFERENCIA... Cuando ejecute la funcion
	echo incrementa($numero) . "</br>";


	// Numero valdra 6, por que estan vinculados.
	echo $numero;

?>