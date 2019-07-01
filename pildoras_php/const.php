<?php

// Las constantes son aquellos espacios en memoria que, a diferencia de las variables (y como su nombre lo indica), NO PUEDEN VARIAR SU VALOR. 

// Sugerencias a tener en cuenta a la hora de usar constantes

/*
1- Las constantes las vamos a declarar siempre en MAYUSCULAS (convenio)
2- Las constantes pueden definirse de dos formas diferentes
3- Las constantes SOLO PUEDEN contener valores escalables.
*/

// Forma vieja de definir una constante

define("NOMBRE_CONSTANTE", "Juanita la del barrio");

echo NOMBRE_CONSTANTE."<br>";

echo "La linea actual del fichero es: ".__LINE__."<br>";

echo "Estamos trabajando con el fichero: " . __FILE__ ;

?>