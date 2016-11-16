<?php
// ORIOL IZQUIERDO VIBALDA 



//ESTABLECER CONEXION CON BD
//PEDIR DATOS COMO HOST, USER, PASSWORD, BD

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_password = 'root';
$db_name = 'listapp';

//OBTENER VAR DE LA CONEXION
//$con = new mysqli($db_host,$db_user,$db_password,$db_name);
$con = mysql_connect($db_host,$db_user,$db_password,$db_name);
	if ($con ->connect_errno)
		
		die('Error_connect_DB');
	else {
		//comprovar _post
	//	echo "conectado ok";
		
	} //fin de else
	
	//cerramos la conexion con la bd
	//$db->close();


?>