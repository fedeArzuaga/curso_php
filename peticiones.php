<?php

$user_name = "";
$password = "";
$paises = "";
$countries = "";

?>
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
		input, select{
			padding: 10px;
			border: none;
		}
		input + input{
			margin: 16px 0 0 0;
		}
		select{
			margin: 16px 0;
		}
		[type="submit"]{
			background: royalblue;
			transition: all 0.3s;
			color: white;
		}
		[type="submit"]:hover{
			background: #0D4796;
		}
		.error{
			background: #F0ADAD;
			padding: 8px 24px;
			margin: 0 0 16px 0;
		}
		.succes{
			background: #63C07B;
			padding: 8px 24px;
			margin: 0 0 16px 0;
		}
	</style>
</head>
<body>

	<div class="container">
		<?php

			if( isset($_POST['user_name']) ){

				$user_name = $_POST['user_name'];
				$password = $_POST['password'];
				$countries = $_POST['paises'];

				echo $user_name;
				echo $password;
				echo $countries;

				if( $user_name == "" ){
					echo "<div class=\"error\"><ol><li>Por favor, introduce un nombre valido</li></ol></div>";
				}

				if( strlen($password) < 8 ){
					echo "<div class=\"error\"><ol><li>Por favor, introduce una contraseña de un volumen mayor a 8 caracteres</li></ol></div>";
				}

				if( $countries == "" ){
					echo "<div class=\"error\"><ol><li>Por favor, selecciona un pais en la lista de paises</li></ol></div>";
				}

			}

		?>
		
		<h4>Hola! Por favor, inicia sesion para continuar</h4>
		<form action="peticiones.php" id="form_session" method="post">
			<input type="text" name="user_name" placeholder="Ingresa tu nombre de usuario" />
			<input type="password" name="password" placeholder="Ingresa tu contraseña">
			<select name="paises">
				<option value="">Selecciona un país</option>
				<option value="uy">Uruguay</option>
				<option value="ar">Argentina</option>
				<option value="mx">Mexico</option>
				<option value="es">España</option>
				<option value="ch">Chile</option>
				<option value="usa">Estados Unidos</option>
			</select>
			<input type="submit" value="ENVIAR">
		</form>
	</div>
</body>
</html>