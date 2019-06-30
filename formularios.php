<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Introducción a formularios</title>
</head>
<body>
	<form action="datos.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Tu nombre" />
		<input type="password" name="password" placeholder="Tu contraseña">
		<input type="submit" value="ENVIAR">
	</form>
</body>
</html>