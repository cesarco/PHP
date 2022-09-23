<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javaTpoint</title>
</head>
<body>
    <?php 
    
    /** como PHP es un lenguage de tipado flexible, no necesitamos declarar los tipos de datos  de las variables,
     * analiza automaticamente los varoles y realiza conversiones a su tipo de datos concreto.
     * 
     * Despues de declarar una variable, se puede reutlizar en todo el codigo.
     * 
     * el operador de asignacion (=) se utiliza para asignar el valor a una variable.
    */

    $nombreVariable = "valor";

    /** 
     * una variable debe comenzar con un signo de dólar ($), seguido del nombre de la variable.
     * 
     * solo puede contener caracteres alfanumericos y guiones bajos(Az, 0-9, _).
     * 
     * un nombre de una varible debe empezar con una letra o un caracter de subrayado(_).
     * 
     * un nombre de varible no debe contener espacios.
     * 
     * una cosa a tener en cuenta es que el nombre de la variable no puede comenzar con un numero o simbolos especiales.
     * 
     * Las variables de  PHP  son sensibles entre mayusculas y munisculas, por lo que $nombre y $NOMBRE, se tratan 
     * como variables diferentes.
     */

     // declaracion de cadena, entero y flotante

     $str = "cadena de saludos";
     $x = 200;
     $y = 44.6;

     echo "la cadena es: $str </br>";
     echo "el entero es: $x </br>";
     echo "flotante es: $y </br>";
    

     // suma de dos variables

     $x = 5;
     $y = 6;
     $z = $x + $y;

     echo $z;

     // sensible a mayusculas y minusculas

     $color = "rojo";

     echo "Mi coche es ". $color."</br>";
     echo "Mi casa es ". $COLOR."</br>";
     echo "Mi barco es ". $color."</br>";


     // reglas

     $a= "hola"; // letra (valida)
     $_b = "hola"; // guion bajo(valido)

     echo "$a </br> $_b"

     // https://www.javatpoint.com/php-variable-scope
    
    ?>
</body>
</html>