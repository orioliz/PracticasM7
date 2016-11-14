<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registro - ListApp 2.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

		<div class="row">
			<div class="col-sm-12">			
				<a href="index.php" class="btnre btn btn-info"> 
					<span class="glyphicon glyphicon-arrow-left"></span>
					 Volver a atrás
				</a>	
			</div>		
			<div class="col-sm-12 text-center">
				<h3>Ingrese los datos con los que entrara en ListApp 2.0</h3><br />
			</div>
		</div>

		<div class="row text-center"> 			
				<form action="newuser.php" method="post"> 					
					Su Email: <br />
					<input type="email" name="email" required><br /><br />
					Su Contraseña:<br />  
					<input type="password" name="password" required> <br/><br />
					<input type="submit" value="Registrarse" class="btn btn-success">
				</form>			
		</div>		


		<div class="row"> 
			<div class="col-sm-12">  
				<footer class="text-center">
					Creado por Oriol Izquierdo &copy 2016
				</footer>
			</div>
		</div>
	
	</div> <!-- FIN DE CONTINAER-FLUID-->

</body>
</html>

