<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1" />
	<title>Calculadora</title>
	<style>
		.resultado{
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<input type="number" name="valor_uno" placeholder="Ingresa el primer valor" />
		<input type="number" name="valor_dos" placeholder="Ingresa el segundo valor" />
		<select name="operacion" id="">
			<option value="sumar">Sumar</option>
			<option value="restar">Restar</option>
			<option value="dividir">Dividir</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="modulo">Modulo</option>
		</select>
		<input type="submit" value="CALCULAR" />
	</form>

	<?php

		if (isset($_POST['valor_uno'])) {
			
			$valor_uno = $_POST['valor_uno'];
			$valor_dos = $_POST['valor_dos'];
			$operacion = $_POST['operacion'];

			if( $operacion == "sumar" ){
				echo "<p class=\"resultado\">El resultado de tu operacion ($operacion) es: ".($valor_uno + $valor_dos)."</p>";
			}else if( $operacion == "restar" ){
				echo "<p class=\"resultado\">El resultado de tu operacion ($operacion) es: ".($valor_uno - $valor_dos)."</p>";
			}else if( $operacion == "dividir" ){
				echo "<p class=\"resultado\">El resultado de tu operacion ($operacion) es: ".($valor_uno / $valor_dos)."</p>";
			}else if( $operacion == "multiplicar" ){
				echo "<p class=\"resultado\">El resultado de tu operacion ($operacion) es: ".($valor_uno * $valor_dos)."</p>";
			}else if( $operacion == "modulo" ){
				echo "<p class=\"resultado\">El resultado de tu operacion ($operacion) es: ".($valor_uno % $valor_dos)."</p>";
			}

		}

	?>

</body>
</html>