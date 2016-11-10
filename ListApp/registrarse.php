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
	<div class="container-fluid fondo">
		<div class="jumbotron">
			<h1>ListApp 2.0</h1>
			<p>Web para controlar tus tareas de forma Online</p>
		</div>

		<div class="row text-center">
			<div class="col-sm-6">
				<a href="index.php" class="btn btn-info">Volver a atrás</a>	
			</div>		
			<div class="col-sm-6">
				<p>Ingrese los datos con los que entrara en ListApp 2.0</p>
			</div>
		</div>

		<div class="row text-center"> 			
				<form action="newuser.php" method="post"> 					
					<label>Su Email:</label>
					<input type="email" name="email" required>
					<label>Su Contraseña:</label>
					<input type="password" name="password" required> <br/>
					<input type="submit" value="Registrarse" class="btn btn-success">
				</form>			
		</div>		



		<footer class="text-center">
			Creado por oriol Izquierdo &copy 2016
		</footer>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">primera columna</div>
			<div class="col-md-6">segunda columna</div>
		</div>
	</div>

	
</body>
</html>

