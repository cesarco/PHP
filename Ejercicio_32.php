<?php  
if($_POST){
    print_r($_POST);

    print_r($_FILES['archivo']['name']);

    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
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
    <form action="ejercicio_32.php" enctype="multipart/form-data" method="post">
        Imagen:
        <input type="file" name="archivo" id="">
        <br>

        <input type="submit" name="enviar" value="Enviar información">
    </form>

</body>
</html>