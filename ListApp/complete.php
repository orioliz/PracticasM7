<?php
	session_start();
	include 'conexion.php';
	//
	$stmt=$conn->prepare("UPDATE `tasks` SET completed=1 WHERE `user`=? AND `id`=?");
	$stmt->bind_param("ii",$_SESSION['email'],$_GET['task']);
	$stmt->execute();
	$stmt->close();
	header('Location:list.php');
	exit;


?>