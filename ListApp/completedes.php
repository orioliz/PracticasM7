<?php
session_start();
include 'conexion.php';


$stmt=$con->prepare("UPDATE tasks SET completed=1 where user =? AND id =?");
$stmt->bind_param("ii",$_SESSION['email'],$_SESSION['task_id']);
$stmt->execute();
$stmt->close();
header('Location: list.php');
exit();

?>