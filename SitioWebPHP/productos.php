<?php include("template/cabecera.php") ?>

<?php include("administrador/config/bd.php");

$senteciaSQL = $conexion->prepare("SELECT * FROM libros"); // ESCRIBIMOS LA SETENCIA
$senteciaSQL->execute(); // EJECUTAMOS ESA SENTECIA
$listaLibros = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>


<?php foreach($listaLibros as $libro){?>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="./img/<?php echo $libro['imagen'] ?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $libro['nombre'] ?></h4>
        <a name="" id="" class="btn btn-primary" href="https://goalkicker.com/" role="button">See more</a>
    </div>
</div>
</div>

<?php } ?>
<?php include("template/pie.php") ?>
