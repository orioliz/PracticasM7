
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container fondo newuser"> 
	<div class="row"> 
		<div class="col-md-4 col-md-offset-3 text-center">
			<p>	Usuario Registrado con exito !</p> 
			<p>Ya puede acceder al sistema con su email y su password</p>
			<a href="index.php" class="btn btn-primary">Volver al Inicio</a>
		</div>
	</div>
</div>








	<?php


 // CREAMOS LA CONEXION A LA BD
    include('conexion.php');
    
     // COGEMOS LOS DATOS DE LOS INPUTS
    $email = $_POST["email"];
    $password = $_POST["password"];
    
      
    // ESCRIBIMOS EN LA BD
    mysqli_query($link, "INSERT INTO users(email,password) VALUES('$email','$password')")
    	or die(mysqli_error());	

    	if($_POST) {
			if($_POST['email']&& !empty($_POST['password'])) {
				//GENERAR CONSULTA SQL
				$sql="INSERT INTO users(email,password)  VALUES('$_REQUEST[email]','$_REQUEST[password]')";
				//echo $sql;
				if (!$result=$db->query($sql)) {
					die('Error_INSERT_DB');
				}
			}
		}	

	
	$db->close();
?>




</body>
</html>