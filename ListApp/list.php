<?php
	session_start(); //INICIAMOS SESION
	include 'conexion.php';
	echo "hello";
	//
	$stmt=$conn->prepare("SELECT  `tasks`.`email`,`tasks`.`desc`, `tasks`.`data`, `tasks`.`completed`
	 FROM `users` LEFT JOIN `tasks` ON `tasks`.`email` = `users`.`email` WHERE `users`.`email`=? ");
	$stmt->bind_param('s',$_SESSION['email']);
	$stmt->execute();
	$stmt->bind_result($email,$desc,$data,$completed);	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sus tareas</title>
</head>
<body>

<div class="container-fluid">
		<div class="jumbotron">
			<h2>Usuario:
				<?php
					if (isset($_SESSION['email'])){
						echo $_SESSION['email'];
					}
				?>
			</h2>
		</div>
		
		<table class="table table-striped">
		<thead>
		      <tr>
		        <th>Tarea</th>
		        <th>Fecha</th>
		        <th>Completada?</th>
		      </tr>
		</thead>
			<?php 
				while($stmt->fetch()){
					$timestamp=strtotime($data);
					echo '<tr>';
					echo '<td>'.($completed==0?'':'<del>').$desc.($completed==0?'':'</del>').'</td>';
					echo '<td>'.date("d-m-Y H:i:s", $timestamp).'</td>';
					echo '<td>'.($completed==0?'No':'Si').'</td>';
					echo '<td><a href="complete.php?task='.$email.'">'.Complete.'</a></td>';
					
					echo '</tr>';
				}
			?>
				
			
		</table>
	</div>

<footer>
	<a href="mas.php">Añadir nueva tarea</a>
	<a href="logout.php">Cerrar sesión</a>
</footer>

</body>
</html>

