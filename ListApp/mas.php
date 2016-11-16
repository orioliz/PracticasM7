<?php
	session_start();
	include 'conexion.php';
	mysqli_report(MYSQLI_REPORT_STRICT);
	//preparing statement
	if(!empty($_POST)){
		if(!(empty($_POST['desc'])) && !(empty($_POST['fecha']))){
			$desc = $_POST['desc'];
			$fecha= $_POST['fecha'];
			//$data=date("Y-m-d h:m:s", strtotime($dates));
			//completar entrada
			$sql="INSERT INTO `tasks`( `email`, `desc`, `data`, `completed`) VALUES (?,?,0,?)";
			
			try{
				$stmt=$conn->prepare($sql);
				
				$stmt->bind_param("sss",$desc,$fecha,$_SESSION['email']);
		
				if ($stmt->execute()){
					$stmt->close();
					header('Location:list.php');
					exit;
				}else{
					header('Location:mas.php');
					exit;
				}
			}catch(Exception $e){
				echo $e->message;
			}
			
			
	}
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>TODO</title>
</head>
<body class="container-fluid">
	<header>
		<div class="jumbotron text-center" >
  			<h1>ListApp 2.0</h1>
  			<p>Nueva Tarea <?= $_SESSION['email']; ?></p>
  		</div>
  		<nav class="navbar navbar-default">
  		<ul class="nav navbar-nav"><li class="active"><a href="index.php">Home</a></li></ul></nav>
	</header>
	<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			Descripción:<input class="form-control" type="text" name="desc">
			Fecha:<input class="form-control" type="datetime-local" name="fecha">
		</div>
		<input type="submit" value="Add">
	</form>
</body>
</html>