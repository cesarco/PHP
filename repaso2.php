<?php 
function infoPersonal($nombre, $apellido, $edad, $altura, $programador){
    echo "Hola soy ".$nombre." ".$apellido.
    " y tengo ".$edad." años". " Tengo una estatura ".$altura.
    " Metros y soy un programador ".$programador;
}

infoPersonal("Cesar Luis","Rodriguez Solera", 20, 1.75, "Junior");

?>