<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>require() y include()</title>
</head>
<style>
	body{
		display: flex;
		align-items: center;
		justify-content: center;
		height: 100vh;
	}
	.container{
		width: 500px;
		display: flex;
		flex-flow: column nowrap;
		text-align: center;
	}
	header, section, footer{
		padding: 16px;
	}
	header{
		background: #ccc;
	}
	section{
		background: white;
	}
	footer{
		background: #414241;
		color: white;
	}
</style>
<body>
	
	<div class="container">
		<?php include("header.php") ?>
		<section>Contenido</section>
		<?php include("footer.php") ?>
	</div>

</body>
</html>