<?php

class UnEstudiante{

    public static function unMetodos(){
        echo "Hola soy un método estático";
    }
}

$obj = new UnEstudiante();
$obj->unMetodos();

//  accediendo al metodo statico
UnEstudiante::unMetodos();
?>