<?php
ini_set('display_errors','1');

include 'conexion.php'; // INCLUIMOS LA CONEXION A LA BBDD
	
	if(!empty($_POST)){ // ASEGURAMOS QUE NO ESTE VACIO EN FORMULARIO
		
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{ // QUE NO ESTE VACIO LOS INPUTS
			
			//VARIABLES DE INPUTS
			$email = $_POST['email']; 
			$passw = $_POST['password'];		
			
			// CONECTAMOS CON BD
	
			$sql = "SELECT * FROM users WHERE email='$email' AND passw='$passw' ";		
			
			//echo "$sql";
			//EJECUTAMOS LA BUSQUEDA SQL
			$resultado = mysqli_query($con, $sql);			
			$filas=mysqli_num_rows($resultado);

			// SI EL USUARIO EXISTE....
			if($filas>0) 
				{	
					//crear sesion
					session_start();
					$_SESSION['email']=$email;
					setcookie('email',$email,time()+1800,'/listapp','');
					
					header('Location:list.php');
					exit();
				}
			else // SI NO EXISTE...
				{					
					header('Location:loginerror.php');
					
				}
			
				
		} // FIN DEl 2º if !
		 
	} // FIN DEl 1r if !	

?>