<?php

if($_POST){

    $valorA = $_POST['ValorA'];
    $valorB = $_POST['ValorB'];

    if(( $valorA > $valorB) && ($valorA != $valorB)){
        echo "El valor de A es diferente al de B y tambien es mayor". "<br/>". "<br/>";
    }

    if(( $valorA > $valorB) || ($valorA != $valorB)){
        echo "El valor de A es diferente al de B y tambien es mayor";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="Ejercicio_10.php" method="post">
        Valor A
    <input type="text" name="ValorA">
    <br>
        Valor B
    <input type="text" name="ValorB">
    <br>
    <input type="submit" name="Calcular">

    </form>
</body>
</html>