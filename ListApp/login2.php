<?php
// conexion bd
session_start();


$useremail=$_POST['email'];
$userpass=$_POST['password'];


$con=mysqli_connect("localhost","root","root","listapp2");

$consulta="SELECT * FROM users WHERE email='$useremail' AND passw='$userpass' ";
$resultado=mysqli_query($con, $consulta);

$rows=mysqli_num_rows($resultado);

if($rows>0){
	//crear sesion
	//session_name('usuariolist');
	//session_start();
	$_SESSION['email']=$email;
	//setcookie('email',$email,time()+1800,'/listapp','');
					
    header('location:list.php');
        
} else{
    header('location:loginerror.php');
}






?>