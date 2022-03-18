<?php

class persona {

    public $nombre; // propiedades

    private $edad; // se puede utilizar desde la misma clase en que se creo o se definio

    protected $altura; // se accede desde la misma clase y tambien de las clases heredadas

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
/*  con la herencia podemos heredar de una clase
     principal, como lo es la clase persona, en donde puedo
      utlizar y agregar mas propiedades, metodos...
*/
class trabajador extends persona {
    public $puesto; // Propiedad nueva
    public function saludoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objetoTrabajador= new trabajador($saludoTrabajador); // instacion p creacion de un objeto
$objetoTrabajador->asignarNombre("Cesar R."); // llamando un metodo

$objetoTrabajador->puesto = "Developer";
$objetoTrabajador->saludoTrabajador();


?>