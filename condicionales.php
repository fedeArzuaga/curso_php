<?php

/* 

== ¿Que es una estructura condicional? == 

Las estructuras condicionales evaluan una condicion que le hayamos especificado. Si esa evaluacion da como resultado o respuesta un true (boolean), se ejecutara cierta parte del codigo. Si retorna un false, no se ejecutará o se ejecutará otra cosa también especificada.

-Simples
-Dobles
-Multiples

== Así lo entiende PHP ==

Si ( Esta condicion es verdadera ){
	Se ejcutara esto
}

*/

$compra = 150;

if( $compra > 100 ){
	$descuento = $compra*0.20;
	$total = $compra-$descuento;
	echo "Gracias por tu compra! Ya que tu compra a superado una suma total de 100 dolares, te haremos un 20% de descuento. Por lo tanto, pagarás: ". $total . " dolares. Que lo disfrutes!";
}

?>