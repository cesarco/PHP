<?php 

session_start();
$_SESSION['user'] = "Cesar";
$_SESSION['status'] = "logueado";

echo "Sesión iniciada".":<br>";
echo "User: ".$_SESSION['user']." status: ".$_SESSION['status'];


?>