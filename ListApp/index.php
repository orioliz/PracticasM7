<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ListApp 2.0</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header> 
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>ListApp 2.0</h1>
			<p>Web para controlar tus tareas de forma Online</p>
		</div>
</header>
		<div class="row text-center">
			<form action="registrarse.php" method="post">				
				<input type="submit" value="Registrarse" class="btn btn-primary">	
			</form>
		</div>


		<div class="row text-center"> 
			<div class="col-xs-12">
				<form action="login.php" method="post"> 					
					Su Email: <br />
					<input type="email"  name="email" required>
					<br/>Su Contraseña:<br />
					<input type="password"  name="password" required> <br/>
					<input type="submit" value="Entrar" class="btn btn-success">
				</form>	
			</div>
			
		
		</div>		



		<footer class="text-center">
			Creado por Oriol Izquierdo &copy 2016
		</footer>
	</div>


	
</body>
</html>

