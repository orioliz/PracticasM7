<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ListApp 2.0</title>	
	<link rel="stylesheet" href="css/bootstrap.css">	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	
		<div class="row text-center flex-parent">
			<div class="col-md-5 col-xs-12 flex-child"> 
				<h4>¿Eres nuevo? Registrate y disfruta de ListApp 2.0</h4>
				<form action="registrarse.php" method="post">				
					<input type="submit" value="Registrarse" class="btnre btn btn-primary">	
				</form>
			</div>		

						
				<div class="col-md-7 col-xs-12 registrarse">
					<h3>Iniciar sesión</h3> <br/><br/>

					<form action="login.php" method="POST"> 					
						Dirección de  Email: <br />
						<input type="email"  name="email" required>
						<br/><br/> Contraseña:  <br />
						<input type="password"  name="password" required> <br/>
						<a href="#" class="olvidado">Olvidé mi contraseña</a> <br><br>
						<input type="submit" value="Entrar" name="enter" class="btnn btn btn-success">
					</form>	
				</div>
		</div>
		
		

		<footer class="text-center">
			Creado por Oriol Izquierdo &copy 2016
		</footer>
	
	</div>

	
</body>
</html>

