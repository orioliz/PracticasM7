<?php
// ORIOL IZQUIERDO VIBALDA 



//ESTABLECER CONEXION CON BD
//PEDIR DATOS COMO HOST, USER, PASSWORD, BD

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = 'root';
$db_name = 'listapp';

//OBTENER VAR DE LA CONEXION
$db = new mysqli($db_host,$db_user,$db_pass,$db_name);
	if($db ->connect_errno) 
		//echo "Error_connect_DB";
		die('Error_connect_DB');
	else {
		//comprovar _post
		echo "conectado ok";
		
	} //fin de else
	$db->close();


?>