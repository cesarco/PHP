<?php

if($_POST){

    $valorA = $_POST['ValorA'];
    $valorB = $_POST['ValorB'];
// suma
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multi = $valorA * $valorB;
    $division = $valorA / $valorB;
  


    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$multi;
    echo "<br>".$division;
    
   

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
    <form action="" method="post">
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