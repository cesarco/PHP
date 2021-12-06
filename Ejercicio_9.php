<?php

if($_POST){

    $valorA = $_POST['ValorA'];
    $valorB = $_POST['ValorB'];

    if($valorA > $valorB){
        echo "El valor A es mayor".$valorA. "<br/>";
    }else{
        echo "El valor B es mayor".$valorB. "<br/>";
    }
    if($valorA != $valorB){
        echo "El valor de A es diferente al de B". "<br/>";
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
    <form action="Ejercicio_9.php" method="post">
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