<?session_start();
if(!isset($_SESSION['user'])){
    header("Location:../index.php");
}else{
    if($_SESSION['user']=="ok"){
$nombreUsuario = $_SESSION["nombreUsuario"];
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitiowebphp"; ?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">

            <a class="nav-item nav-link active" href="#">Web Administrator</a>
            <a class="nav-item nav-link" href="<?php  $url."/administrador"; ?>">Home</a>
            <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/productos.php"; ?>">Books</a>
            <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/cerrrar.php"; ?>">Sing out</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>"> Watch WEB</a>


        </div>
    </nav>



    <div class="container">
        <br>
        <div class="row">