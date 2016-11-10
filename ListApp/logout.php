<?php
session_start(); // iniciamos sesion
session_destroy(); // cerramos sesion


header('location: index.php'); // le enviamos a index

?>