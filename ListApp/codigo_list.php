if ( !isset($_SESSION['email'])) {
	echo "Hola ";
	echo '<b>' .$_SESSION['email']. '</b>' ;
	echo '<p> <a href="logout.php">Cerrar Sesion</a>  </p>';
} else{
	echo '<a href="index.php">inicio</a>';
}


// ESTO ESTA EN LIST.PHP !