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
         * PHP tiene tres tipos de variables
         * 
         * Variable local
         * 
         * variable global
         * 
         * variable estática
         */

        /**
          * Las variables locales son aquellas que son declaradas dentro de una funcion
          * y son utilizadas dentro de la misma, ya si intentamos acceder a ella fuera de la funcion
          * nos arrojara error o si la declaramos afuera de la funcion, ambas variables se consideran distintas.
         */

         function local_var() {

            $numero = 45; // variable local
            echo "La variable local declarada dentro de la función es: ".$numero;
         }

         local_var();

         function mytest() {
             $lang = "PHP";
             ECHO "</br> Lenguaje de desarrollo web: ". $lang;
         }
         mytest();
         //usar $lang (variable local) fuera de la función generará un error  
         echo $lang;
        

        /**
         * La variable globa es inicilializada fuera de una funcion y se puede utilizar en cualquier parte de una programa
         * pero antes de uilizarla se debe utilizar global antes de nombrar la variable para poderla utilizar dentro
         *  de una funcion. aunque tambien se da el caso de que la variable se puede utilizar sin ninguna palabra clave
         */

         $nombre = "Cesar Rodriguez";

         function global_var(){
            global $nombre;
            echo "Variable dentro de la funcion ". $nombre;
            echo "</br>";
         }

         global_var();
         echo "Variable fuera de la función: ". $nombre;

         // razon por la cual se utiliza global

         $nombre = "Paula Bello";
         function variable_global() {
            echo "Variable dentro de la funcion: ".$nombre;
            echo "<br>";
         }
         variable_global();

         // otra manera de usar global

        $num1 = 5;
        $num2 = 13;

        function vart(){

            $suma = $GLOBALS['num1'] + $GLOBALS[num2];
            echo "La suma de las variables globales es: ". $suma;
        }
        vart();


        // si dos variables, local y global, que tienen el mismo nombre, entonces la variable local tiene mayor
        // prioridad que la variable global dentro de la funcion.

        /**
         * Variable estatica
         * este tipo de variables son fijas, es decir, 1 que cuando itentemos almacenar otro valor en la variable,
         * no va a poder. siempre sera constante de inicio a fin de un programa.
         */

         function static_var(){
            static $num1 = 3; // variable estatica
            $num2 = 6;
            
            $num1 ++;

            $num2 ++;
            echo "Estatico: ". $num1. "</br>";
            echo "No Estatico: ". $num2. "</br>";
         }

         static_var();
         static_var();

         //https://www.javatpoint.com/php-dollar-doubledollar
    ?>
</body>
</html>