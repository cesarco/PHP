<?php

if($_POST){

    $valorA = $_POST['ValorA'];
    $valorB = $_POST['ValorB'];
// suma
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multi = $valorA * $valorB;
    $division = $valorA / $valorB. "<br/>";

    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$multi;
    echo "<br>".$division;
   if($valorA==$valorB){

    echo "El valor de A es igual a el valor de B". "<br/>";

    if($valorA == 4){
        echo "El valor es 4". "<br/>";
    }
    if($valorA == 5){
        echo "El valor es 5". "<br/>";
    }

   }
   if(($valorA == $valorB) && ($valorA == 4)){
    echo "El valor de A es igual a B y es el numero 4";
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
    <form action="Ejercicio_11.php" method="post">
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