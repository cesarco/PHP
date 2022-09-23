<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVATPOINT</title>
</head>
<body>
    <?php  
    /**
     * en php, palabras clave o reservadas como (echo, if, else, while), funciones,
     * funciones definidas por el usuario, clases no son sensibles. Es decir, que 
     * si utilizamos mayusculas y/o mayus y minusculas no produciran un error
     */
    echo "<h2> Hello World!</H2></br>";
    ECHO "Hello world using ECHO </br>";
    EcHo "Hello world using EcHo </br>";

    // ------------------------------------------------------------------------------
    /**
     * however, todas las variables son sensibles. es decir que al procesar la informacion
     * el progama no las reconoce y arrojara un error.
     * 
     *-----------------------------------------------------------------------------------
     * para ver eso inicializa xampp y en el navegador pon  http://localhost/PHP_JAVATPOINT/CODIGOPHP.PHP 
     */

    $color = "black";

    echo "My car is ".$ColoR."</br>";
    echo "My car is ".$color."</br>";
    echo "My Phone is ".$COLOR."</br>";

    ?>
</body>
</html>