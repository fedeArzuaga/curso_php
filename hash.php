<?php

// VIENDO LOS HASH EN PHP

/*

-> Lo que hace hash es crear un nuevo hash de contraseña usando un algoritmo de hash fuerte de único sentido

Ejemplos: 
	
	-> md5 (string)
		Devuelve el hash como un numero hexadecimal de 32 caracteres

	-> sha1 (string)
		Devuelve el hash como un string

	-> hash (algoritmo, string)
		Devuelve un string que contiene el mensaje cifrado como dígitos hexadecimales en minúsculas. Algoritmos: "md5", "sha256", "haval160,4" etc...

=== Hash de constaseñas ===

-> password_hash(contraseña, PASSWORD_DEFAULT)
-> password_verify(contraseñaVerificar, password_hash)

*/

$clave = "Pepito21";

echo md5($clave)."</br>";
echo sha1($clave)."</br>";

echo hash("sha256", $clave)."</br>";

$claveCrypt = password_hash($clave, PASSWORD_DEFAULT);

if( password_verify("Pepito21", $claveCrypt) ){
	echo "Contraseña valida";
}else{
	echo "Contraseña invalida";
}


?>