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
        /** 
         * El $var (signo de dolar unico) es una variable con el nombre var que almacena
         * cualquier valor como cadena, entero, flotante, etc.
         * 
         * la $$var (doble signo de dollar) es una variable  de referencia que alcamena el valor
         * de  $var dentro de ella.
         */

         $x = "abc";
         $$x = 200;

         echo $x. "<br>";
         echo $$x."<br>";
         echo $abc;

        // ejemplo 2

        $x ="U.P";
        $$x = "Lucknow";
        echo "El capital de $x es " .$$x;

    
        // ejemplo 3

        $nombre          = "Gato";
        ${$nombre}       = "Perro";
        ${${$nombre}}    = "Mono";

        echo $nombre."<br>";
        echo ${$nombre}."<br>";
        echo $Gato."<br>";
        echo ${${$nombre}}."<br>";
        echo $Perro."<br>";

    // https://www.javatpoint.com/php-constants

    ?>
</body>
</html>