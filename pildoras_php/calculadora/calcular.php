<?php

		if (isset($_POST['valor_uno'])) {
			
			$valor_uno = $_POST['valor_uno'];
			$valor_dos = $_POST['valor_dos'];
			$operacion = $_POST['operacion'];

			calulcar($operacion, $valor_uno, $valor_dos);

		}

		function calulcar($calculo, $valor_uno, $valor_dos){

			if( $calculo == "sumar" ){

				echo "<p class=\"resultado\">El resultado de tu operacion ($calculo) es: " . ($valor_uno + $valor_dos) . "</p>";

			}else if( $calculo == "restar" ){

				echo "<p class=\"resultado\">El resultado de tu operacion ($calculo) es: " . ($valor_uno - $valor_dos) . "</p>";

			}else if( $calculo == "dividir" ){

				echo "<p class=\"resultado\">El resultado de tu operacion ($calculo) es: " . ($valor_uno / $valor_dos) . "</p>";

			}else if( $calculo == "multiplicar" ){

				echo "<p class=\"resultado\">El resultado de tu operacion ($calculo) es: " . ($valor_uno * $valor_dos) . "</p>";

			}else if( $calculo == "modulo" ){

				echo "<p class=\"resultado\">El resultado de tu operacion ($calculo) es: " . ($valor_uno % $valor_dos) . "</p>";

			}

		}

	?>