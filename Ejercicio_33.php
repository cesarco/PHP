<?php
$resultado = "";
$persona = "";
$jsonContenido ='[     
    {"nombre":"Cesar", "apellido":"Rodriguez"},
    {"nombre":"Samanta", "apellido":"Perez"}
    ]';

 $resultado = json_decode($jsonContenido);
 //print_r($resultado);

 foreach($resultado as $persona){
     echo ($persona->nombre)." ".($persona->apellido)."<br>";
 }
?>