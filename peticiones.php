<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Probando las condicionales</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			width: 100%;
			height: 100vh;
			font-family: poppins;
			display: flex;
			align-items: center;
			background: #DBD9D9;
		}
		h1{
			font-size: 48px;
			color: darkgray;
			font-weight: 300;
		}
		.container{
			width: 500px;
			margin: 0 auto;
			text-align: left;
			padding: 32px;
			box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
			background: white;
		}
		form{
			display: flex;
			flex-flow: column nowrap;
			padding: 16px;
		}
		h4{
			margin: 0 0 16px 0;
			font-family: 32px;
			font-weight: 300;
			text-align: center;
		}
		input{
			padding: 10px;
			border: none;
		}
		input + input{
			margin: 16px 0 0 0;
		}
		[type="submit"]{
			background: royalblue;
			transition: all 0.3s;
			color: white;
		}
		[type="submit"]:hover{
			background: #0D4796;
		}
	</style>
</head>
<body>

	<div class="container">
		<h4>Hola! Por favor, inicia sesion para continuar</h4>
		<form action="peticiones.php" id="form_session" method="post">
			<input type="text" name="user_name" placeholder="Ingresa tu nombre de usuario" />
			<input type="password" name="password" placeholder="Ingresa tu contraseña">
			<input type="submit" value="INGRESAR">
		</form>
	</div>
	
	<?php

	if( isset($_POST['user_name']) && isset($_POST['password']) ){

		$user = $_POST['user_name'];
		$password = $_POST['password'];

		echo "El usuario se llama ".$user." y su contraseña es ".$password;

	}

	?>

</body>
</html>