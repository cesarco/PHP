<?php

$frutas = array( "f"=> "Fresa", "m"=> "manzana", "p"=> "pera");

print_r($frutas);

echo $frutas["f"]."<br>";

foreach($frutas as $indice=>&$valor){

    echo $valor. "Tiene el indice ".$indice."<br>";
    $frutas[$indice]."<br>";
}

?>