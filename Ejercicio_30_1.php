<?php

session_start();

if(isset($_SESSION['user'])){
echo "User: ".$_SESSION['user']." status: ".$_SESSION['status'];
}else{
echo "No hay datos";
}

?>