<?php

class persona {

    public $nombre; // propiedades

    public function asignarNombre($nuevoNombre){ // acciones o metodos..

            $this->nombre=$nuevoNombre;
    }
}

$objetoAlumno = new persona(); // instacion p creacion de un objeto
$objetoAlumno->asignarNombre("Cesar"); // llamando un metodo



echo $objetoAlumno->nombre; // imprimir una propiedad
?>