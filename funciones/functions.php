<?php

	$valor_uno = 0;
	$valor_dos = 0;

	if( isset($_POST['valor_uno']) ){
		$valor_uno = $_POST['valor_uno'];
		$valor_dos = $_POST['valor_dos'];
	}

	function multiplicar($valor_uno, $valor_dos){
		return $valor_uno*$valor_dos;
	}

?>