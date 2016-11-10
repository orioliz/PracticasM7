<?php
ini_set('display_errors','1');
    
require('conexion.php');

$db_table_name="users";
$db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

$subs_email = ($_POST['email']);
$subs_pass = ($_POST['password']);

$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE email = '".$subs_email."'", $db_connection);

if (mysql_num_rows($resultado)>0){
	header('Location: fail.html');

} else {	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`email` , `password`) VALUES (" ' . $subs_email . '", "' . $subs_pass . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: succes.html');
}

mysql_close($db_connection);
		
?>

