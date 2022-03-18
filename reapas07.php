<?php 

function arreglos(){
    $frutas = array("f"=>"Fresar","m"=>"Manzana","p"=>"Pera");
    print_r($frutas);

    echo $frutas['f']."<br>";

    foreach($frutas as $indice=>&$valor){

        echo $valor." Tiene el indice ".$indice."<br>";
        $frutas[$indice]."<br>";
    }
}

arreglos();
?>