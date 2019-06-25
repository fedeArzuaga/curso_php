<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora PHPniana</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			background: #D0D0D0;
			font-family: Montserrat;
		}
		.container{
			width: 500px;
			display: flex;
			flex-flow: column nowrap;
			text-align: center;
		}
		section{
			background: white;
			padding: 24px;
		}
		form{
			display: flex;
			flex-flow: column wrap;
			margin: 16px 0 0 0;
		}
		input{
			padding: 10px;
			border: none;
			background: #EFEFEF; 
		}
		input + input{
			margin: 16px 0 0 0;
		}
		[type="submit"]{
			background: royalblue;
			color: white;
			transition: all 0.3s;
		}
		[type="submit"]:hover{
			background: #0B4D91;
		}
	</style>
</head>
<body>
	
	<section>
		<h1>Calculadora PHPniana! :)</h1>
		<form action="" method="post">
			<input type="number" name="valor_uno" placeholder="Ingresa el primer valor" />
			<input type="number" name="valor_dos" placeholder="Ingresa el segundo valor" />
			<input type="submit" value="CALCULAR" />
		</form>

		<?php
			include("functions.php");

			if( isset($_POST['valor_uno']) ){
				echo multiplicar($valor_uno, $valor_dos);
			}

		?>

	</section>

</body>
</html>