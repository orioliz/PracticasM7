<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registro - ListApp 2.0</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container fondo">
		<div class="jumbotron">
			<h1>ListApp 2.0</h1>
			<p>Web para controlar tus tareas de forma Online</p>
		</div>
		<div class="row text-center">			
			<p>Ingrese los datos con los que entrara en ListApp 2.0</p>
		</div>
		<div class="row text-center"> 			
				<form action="lib/newuser.php" method="post"> 					
					<label>Su Email:</label>
					<input type="email" id="email" name="email">
					<label>Su Contraseña:</label>
					<input type="password" id="password" name="password"> <br/>
					<input type="submit" value="Registrarse" class="btn btn-success">
				</form>			
		</div>		



		<footer class="text-center">
			Creado por oriol Izquierdo &copy 2016
		</footer>
	</div>

	
</body>
</html>

