<?php

   include 'conexion.php'; // INCLUIMOS LA CONEXION A LA BBDD
	
	if(!empty($_POST)){ // ASEGURAMOS QUE NO ESTE VACIO EN FORMULARIO
		//echo "hol";
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{ // QUE NO ESTE VACIO LOS INPUTS
			
			$email = $_POST['email']; //GUARDAMOS LO INTRODUCIDO EN EL FORMULARIO DE LOGIN
			$passw = $_POST['password'];


			
			// CONECTAMOS CON BD		
	
			$sql = " SELECT * FROM users WHERE email='$email' AND password='$passw' "; 



			//EJECUTAMOS LA BUSQUEDA SQL
			//  $query = $con->query($sql);
			//$query = mysql_query($sql,$con);


			$resultado = $con->query($sql);
			$row = $resultado->fetch_assoc();
			
			// SI EL USUARIO EXISTE....
			if($row>0) //SI HAY RESULTADOS....
				{	
					//crear sesion
					session_start();
					$_SESSION['email']=$email;
					setcookie('email',$email,time()+1800,'/listapp','');
					header('Location:list.php');
					exit();
				}else{					
					header('Location:error.php');
					exit();
				}
				
		} // FIN DEl 2º if !
		 
	} // FIN DEl 1r if !	

?>