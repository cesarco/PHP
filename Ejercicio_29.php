<?php

$server = "localhost"; // 127.0.0.1
$user = "root";
$password = "";

try{

    $connection = new PDO("mysql:host=$server;dbname=album", $user,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";
    $sentencia = $connection->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

   // print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto['nombre']);
    }


    echo "Conexion establecida";

}catch(PDOException $error){
    echo "Conexion  NO establecida".$error;

}

?>