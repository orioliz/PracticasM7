<?php
ini_set('display_errors','1');

require('conexion.php');
	
	session_start(); // inicimaos sesion del usuario
	
	if(isset($_SESSION["email"])){
		header("Location: list.php");
	}
	
	if(!empty($_POST)) // ha rellenao el formulario
	{
		$email = $_POST['email']);
		$password = $_POST['password']);
		$error = '';
		
		
		
		$sql = mysql_query("SELECT * FROM users WHERE email = '$email' ");
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			
			header("location: list.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
		}
	}
?>
