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
     *  Print es utilizado para imprimir cadena o cadenas de varias lineas, caracteres de escape, variables, matrices
     * etc.
     * print es una declaracion, utilizada como alternativa a echo en muchas ocasiones para mostrar la salida.
     * print se puede usar con o sin parentesis.
     * print siempre devuelve un valor entero, que es 1.
     * usando print, no podemos pasar multiples argumentos.
     * print es mas lento que la instruccion echo.
    */

    // imprimiendo una cadena

    print "Hello by PHP print  </br>";
    print("Hello by PHP print() </br>");


    // imprimiendo cadena nultilinea

    print "Hello by PHP print
    this is multi line
    text printed by PHP
    print statement
    ";
    
    // imprimiendo caracteres de escape

    print " </br> Hello escape \"sequence\" characters by PHP print ";

    // printing variable value

    $msg = " Hello print() in PHP";
    print "</br> Message is: $msg";


    $fname = "Gunjan";  
    $lname = "Garg";  
    echo "My name is: ".$fname,$lname;  

    $fname = "Gunjan";  
    $lname = "Garg";  
    print "My name is: ".$fname,$lname;  

    $lang = "PHP";  
    $ret = echo $lang." is a web development language.";  
    echo "</br>";  
    echo "Value return by print statement: ".$ret;   

    $lang = "PHP";  
    $ret = print $lang." is a web development language.";  
    print "</br>";  
    print "Value return by print statement: ".$ret;   


    //  https://www.javatpoint.com/php-variables
    ?>

</body>
</html>