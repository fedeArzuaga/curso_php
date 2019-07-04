<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Viendo las variables y metodos estaticos</title>
</head>
<body>
	
	<?php 

		include "static.php";

		CompraVehiculo::descuento();

		$compra_Antonio = new CompraVehiculo("compacto");

		$compra_Antonio -> climatizador();

		$compra_Antonio -> tapiceria("blanco");

		echo $compra_Antonio -> get_precio_final() . "<br>";

		$compra_Ana = new CompraVehiculo("compacto");

		$compra_Ana -> climatizador();
		$compra_Ana -> tapiceria("rojo");

		echo $compra_Ana -> get_precio_final() . "<br>";
	?>

</body>
</html>