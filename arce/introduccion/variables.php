<?php

// Varaibles

/*

Las variables son espacios en memoria que almacena el pc para poder guardar informacion, con el objetivo de manipularla cuando y como queramos.

Algunos datos importantes sobre las variables:

- Las variables solo pueden contener caracteres alfanumericos. No pueden contener simbolos o caracteres especiales
- Son case sensitive, lo que significa que se distingue entre minusculas y mayusculas

En este curso, vamos a usar el metodo camelCase para escribir nuestras variables

*/

// STRINGS

$string = "Hola desde \"PHP\"</br>";
$nombre = "James Bond";

$stringHeredoc = <<<EOD
Esto es un string jajaja ni idea tenia no podes...
Osea que yo puedo seguir escribiendo y no pasa nada...
    casefsf si hago tabulador    tampoco padas nada
    $nombre
EOD;

$stringNowdoc = <<<'EOD'
Esto es exto con nowdoc. $nombre
EOD;

print $stringHeredoc;
print $stringNowdoc;

?>