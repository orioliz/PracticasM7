<?php
	require('conexion.php');
	 
	$email = $_POST['email'];
	$pass = $_POST['password'];
	 
	
	//SELECCIONAMOS EL EMAIL INTRODUCIDO
	$result = mysql_query("SELECT * from users where email='" . $email . "'");
	 
	if($row = mysql_fetch_array($result)){
		if($row['password'] == $pass){
			session_start();
			$_SESSION['usuario'] = $email; // creamos la sesion con el user(email)
			header("Location: list.php");
		}else{
			header("Location: index.php");
			exit();
		}
		}else{
			header("Location: index.php");
			exit();
	}
	 
 
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
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 					
					<label>Su Email:</label>
					<input type="email" id="email" name="email" required>
					<label>Su Contraseña:</label>
					<input type="password" id="password" name="password" required> <br/>
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

