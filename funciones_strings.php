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

echo "Metodo str_replace(search, replace, string) Recibe 3 parametros: lo que queremos reemplazar, lo que queremos poner en su lugar, y el string que va a ser manipulado => ".str_replace("aprender", "olvidar", $string);

// Convertir a minusculas

echo "Metodo strtolower(): Convierte toda la cadena de texto a minusculas => ".strtolower($string);

// Convertir a mayusculas

echo "Metodo strtoupper(): Convierte toda la cadena de texto a mayusculas => ".strtoupper($string);

// Comparar cadenas

echo "Metodo strcmp(): Compara las cadenas de texto preseleccionadas en cuanto a peso en bytes. Si la primera es mas grande que la ultima, dara un numero positivo y viceversa => ".strcmp("zorro", "j")."</br></br>";

// Substraer cadenas

echo "Metodo substr(): Extrae una porcion del texto que le hayamos indicado. Este metodo recibe tres parametros: el string a manipular, el indice del texto en donde tiene que empezar a extraer, y si le pasamos un tercer parametro tambien numerico, contara la cantidad de caracteres a extraer a partir del indice que nosotros le hayamos especificado => ".substr($string, 12, 19),"</br></br>";

// Remover espacios en blanco

echo "Metodo trim(): Remueve los espacios en blanco que PHP vea innecesarios (muy util para la entrada de datos) => ".trim("          
	Esto          es           un            texto          con            muchos          espacios            ")."</br></br>";

?>