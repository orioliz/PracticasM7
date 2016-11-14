<?php
ini_set('display_errors','1');
    
include 'conexion.php';

$db_table_name="users";



$subs_email = $_POST['email'];
$subs_pass = $_POST['password'];

//INSERTAMOS LOS VALORES
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`email` , `passw`) VALUES (" ' . $subs_email . '", "' . $subs_pass . '")';

//SELECCIONAMOS LA BASE DE DATOS Y SU TABLA
$sql = mysql_query($insert_value, $con);

//SI EL EMAIL EXISTE..
if (!$sql) {
   die(header('Location: failuserexist.php'));
}
	
header('Location: succes.php');


mysql_close($con);
		
?>

