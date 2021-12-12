<?php

class persona {

    public $nombre; // propiedades
    private $edad; // se puede utilizar desde la misma clase en que se creo o se definio
    protected $altura; // se accede desde la misma clase y tambien de las clases heredadas

    function __construct($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ // acciones o metodos..

            $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo " Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad;
    }
}

$objetoAlumno = new persona("lINA"); // instacion p creacion de un objeto
//$objetoAlumno->asignarNombre("Cesar"); // llamando un metodo

$objetoAlumno->imprimirNombre();
