<?php

/* 
Con esta condicional nos evita que 
nos salga un warning al momento de imprimir en la linea 9;
En este caso si, se recibe algo por el metodo post ejecutara 
las lineas 11 y 12;
La condicional se ejucatara si en el metodo post tiene informacion
*/
// Recibir informacipon del formulario HTML (Método POST)
if($_POST){ 
# Recibir informacion del formulario HTML (Método POST)
$nombre = $_POST['txtNombre'];
echo "Hola ".$nombre;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    #El formulario liena 30  esa informacion que esta dentro se envia a si mismo 
    #y recepciona en el codigo de PHP, por medio del metodo post
    <form action="ejercicio_2.php" method="POST">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="submit" value="Enviar">



    </form>
</body>

</html>