<?php

	include "vehiculos.php";

	$mazda = new Coche();

	$mercedez = new Camion();

	echo "El Mazda tiene " . $mazda -> get_ruedas() . " ruedas" . "<br>";
	echo "El Mercedez tiene " . $mercedez -> get_ruedas() . " ruedas" . "<br>";
	echo "El Mazda tiene un motor de " . $mazda -> get_motor() . "cc <br>";

?>