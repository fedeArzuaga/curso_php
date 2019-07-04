<?php

	/*

	ARRAYS MULTIDIMENSIONALES

	*/

	$alimentos = [
		"frutas" => [
			"tropical" => "kiwi",
			"citrico" => "mandarina",
			"otros" => "manzana"
		],
		"leche" => [
			"animal" => "vaca",
			"vegetal" => "coco"
		],
		"carne" => [
			"vacuno" => "lomo",
			"porcino" => "pata"
		],
	];

	echo "<pre>";
	print_r($alimentos);
	echo "</pre>";

	/*foreach ($alimentos as $clave_alim => $alim) {
		
		echo "$clave_alim:<br>";

		while( list($clave, $valor) = each($alim) ){

			echo "$clave = $valor<br>";

		}

		echo "<br>";

	}*/

	echo "<pre>";
	echo var_dump($alimentos);
	echo "</pre>";

?>