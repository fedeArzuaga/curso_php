<?php

/* Metodos para trabajar con los strings */

// Cadena a manipular

$string = "Hoy vamos a aprender un monton che, vieja :)"."</br></br>";

// longitud

echo "Metodo strlen(): devuelve la cantidad de caracteres => ".strlen($string)."</br></br>";

// Numero de palabras

echo "Metodo str_word_count(): devuelve la cantidad de palabras => ".str_word_count($string)."</br></br>";

// Invertir string

echo "Metodo strrev(): Invierte el orden del string => ".strrev($string)."</br></br>";

// Encontrar texto

echo "Metodo strpos(): Este metodo se utiliza para encontrar texto. Recibe dos parametros (string, palabra) y devuelve un numero => ".strpos($string, "aprender")."</br></br>";

// Reemplazar texto

echo "Metodo str_replace(search, replace, string) Recibe 3 parametros: lo que queremos reemplazar, lo que queremos poner en su lugar, y el string que va a ser manipulado => ".str_replace("aprender", "olvidar", $string)."</br></br>";

?>