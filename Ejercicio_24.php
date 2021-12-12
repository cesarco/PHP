<?php

class persona {

    public $nombre; // propiedades

    public function asignarNombre($nuevoNombre){ // acciones o metodos..

            $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo " Hola soy ".$this->nombre;
    }
}

$objetoAlumno = new persona(); // instacion p creacion de un objeto
$objetoAlumno->asignarNombre("Cesar"); // llamando un metodo

$objetoAlumno2 = new persona(); // instacion p creacion de un objeto
$objetoAlumno2->asignarNombre("Maria");
$objetoAlumno2->imprimirNombre(); // llamando un metodo


echo $objetoAlumno->nombre;
echo $objetoAlumno2->nombre; // imprimir una propiedad
 // imprimir una propiedad
?>