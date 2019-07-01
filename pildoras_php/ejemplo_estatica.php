<?php

/* Variables estáticas */

// Este tipo de variables lo que hace es inicializarze con un valor UNA UNICA VEZ, aún si la estructura de control que la comprende se repita un numero determinado de veces mayor a uno. Por ejemplo, en javascript el siguiente codigo daría siempre 1:

function incrementaVariable(){

	// Pero como en este caso $i es una variable estatica
	static $i = 0;
	$i++;

	// El valor que va a imprimir en pantalla será siempre el que ya conserbava desde la ultima ejecucion de la función en este caso. No se destruye ni se pierde el valor de la variable. ASÍ FUNCIONAN LAS VARIABLES ESTÁTICAS!
	echo $i . "</br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();

?>