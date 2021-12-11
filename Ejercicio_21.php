<?php

// los arreglos son una forma de guardar informacion

// los valores que estan destro del array es un indice, que comienza desde cero


$frutas = array("fresa","Pera","manzana");

print_r($frutas);


echo $frutas["1"]."<br>";

for($indice = 0; $indice < 3;$indice++ ){
        echo $frutas[$indice]."<br>";
}
?>