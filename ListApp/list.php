

<?php
ini_set('display_errors','1');
session_start();
if ( isset($_SESSION['email'])) {
	echo "Hola ";
	echo '<b>'.$_SESSION['email'].'</b>.'  ;
	echo '<p> <a href="logout.php">Cerrar Sesion</a>  </p>';
} else{
	echo '<a href="index.php">inicio</a>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sus tareas</title>
</head>
<body>
	
</body>
</html>

