<?php 
function nombrepost($txtNombre, $txtApellido, $txtEdad=""){
    if($_POST){
        $txtNombre = $_POST['txtNombre'];
        $txtApellido = $_POST['txtApellido'];
        $txtEdad = $_POST['txtEdad'];

        echo "Hola soy ".$txtNombre." ".$txtApellido." y tengo ".$txtEdad." años";
    }
}
nombrepost($_POST['txtNombre'],$_POST['txtApellido'], $_POST['txtEdad']);

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
<form action="repaso.php" method="POST">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido
        <input type="text" name="txtApellido" id="">
        <br>
        Edad
        <input type="text" name="txtEdad" id="">
        <br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>

