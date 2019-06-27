<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1" />
	<title>Fechas y horas en PHP</title>
	<style>
		body{
			background: #5276af;
			height: 100vh;
		}
		.container{
			width: 300px;
			background: white;
			margin: 100px auto;
			padding: 64px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php

		/* Trabajando con fechas */

		// d - día del mes (1-31)
		// m - mes del año (1-12)
		// Y - año (4 dígitos)
		// l - día de la semana

		// h - hora en formato 1-12
		// i - minutos 0-59
		// s - segundos 0-59
		// a - am, pm

		$dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

		echo "Fecha: ". $dias[date("N")] . " " . date("d") . "/" . date("m") . "/" . date("Y") . "<br>";
		echo "Hora: ". date("G:i", time());

		?>
	</div>
</body>
</html>

<?php



?>