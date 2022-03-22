<?php include("../template/cabecera.php"); ?>
<?php

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include("../config/bd.php");


switch ($accion) {

    case "Add":
        //INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'libro MySQL', 'imagen111.jpg');
        $senteciaSQL = $conexion->prepare("INSERT INTO libros (nombre, imagen) VALUES (:nombre , :imagen);");
        $senteciaSQL->bindParam(":nombre", $txtNombre);

        $fecha = new DateTime();
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES['txtImagen']['name'] : "imagen.jpg";
        $tmpImage = $_FILES['txtImagen']['tmp_name']; // se almacena el nombre de la imagen con la fecha
        if ($tmpImage != "") {
            move_uploaded_file($tmpImage, "../../img/" . $nombreArchivo);
        }

        $senteciaSQL->bindParam(":imagen", $nombreArchivo);
        $senteciaSQL->execute();

        header("Location:productos.php");

        break;

    case "Modify":
        // UPDATE `libros` SET `nombre` = 'NOdE css' WHERE `libros`.`id` = 14;
        $senteciaSQL = $conexion->prepare("UPDATE `libros` SET `nombre`=:nombre WHERE `libros`.`id` =:id; "); // ESCRIBIMOS LA SETENCIA
        $senteciaSQL->bindParam(':id', $txtID);
        $senteciaSQL->bindParam(':nombre', $txtNombre);
        $senteciaSQL->execute();

        if ($txtImagen != "") {

            $fecha = new DateTime();
            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES['txtImagen']['name'] : "imagen.jpg";
            $tmpImage = $_FILES['txtImagen']['tmp_name'];

            move_uploaded_file($tmpImage, "../../img/" . $nombreArchivo);
            // borramos la imagen
            $senteciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE `libros`.`id` =:id "); // ESCRIBIMOS LA SETENCIA
            $senteciaSQL->bindParam(':id', $txtID);
            $senteciaSQL->execute(); // EJECUTAMOS ESA SENTECIA
            $libro = $senteciaSQL->fetch(PDO::FETCH_LAZY);
            if (isset($libro['imagen']) && ($libro['imagen'] != "imagen.jpg")) {
                if (file_exists("../../img/" . $libro['imagen'])) {

                    unlink("../../img/" . $libro['imagen']);
                }
            }

            // actualizamos la imagen
            $senteciaSQL = $conexion->prepare("UPDATE `libros` SET `imagen`=:imagen WHERE `libros`.`id` =:id; "); // ESCRIBIMOS LA SETENCIA
            $senteciaSQL->bindParam(':id', $txtID);
            $senteciaSQL->bindParam(':imagen', $nombreArchivo);
            $senteciaSQL->execute();
        header("Location:productos.php");

        }
        // EJECUTAMOS ESA SENTECIA
        break;
    case "Cancel":
        header("Location:productos.php");
        break;
}

$senteciaSQL = $conexion->prepare("SELECT * FROM libros"); // ESCRIBIMOS LA SETENCIA
$senteciaSQL->execute(); // EJECUTAMOS ESA SENTECIA
$listaLibros = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC); // ME MUESTRA TODO LOS CAMPOS PARA PODER MOSTRAR EN LA WEB

switch ($accion) {

    case "Add":
        //INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'libro MySQL', 'imagen111.jpg');
        $senteciaSQL = $conexion->prepare("INSERT INTO libros (nombre, imagen) VALUES (:nombre , :imagen);");
        $senteciaSQL->bindParam(":nombre", $txtNombre);
        $senteciaSQL->bindParam(":imagen", $txtImagen);
        $senteciaSQL->execute();
        break;

    case "Delete":

        $senteciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE `libros`.`id` =:id "); // ESCRIBIMOS LA SETENCIA
        $senteciaSQL->bindParam(':id', $txtID);
        $senteciaSQL->execute(); // EJECUTAMOS ESA SENTECIA
        $libro = $senteciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($libro['imagen']) && ($libro['imagen'] != "imagen.jpg")) {
            if (file_exists("../../img/" . $libro['imagen'])) {

                unlink("../../img/" . $libro['imagen']);
            }
        }


        $senteciaSQL = $conexion->prepare("DELETE FROM `libros` WHERE `libros`.`id` =:id"); // ESCRIBIMOS LA SETENCIA
        $senteciaSQL->bindParam(':id', $txtID);
        $senteciaSQL->execute(); // EJECUTAMOS ESA SENTECIA

        header("Location:productos.php");

        break;

    case "Select":
        $senteciaSQL = $conexion->prepare("SELECT * FROM libros WHERE `libros`.`id` =:id "); // ESCRIBIMOS LA SETENCIA
        $senteciaSQL->bindParam(':id', $txtID);
        $senteciaSQL->execute(); // EJECUTAMOS ESA SENTECIA
        $libro = $senteciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $libro['nombre'];
        $txtImagen = $libro['imagen'];
        //echo "presionado el boton seleccionar";
        break;
}


?>


<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Data Book
        </div>

        <div class="card-body">

            <form action="productos.php" method="POST" enctype="multipart/form-data">

                <div>
                    <label for="txtID">ID:</label>
                    <input type="txt" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div>
                    <label for="txtNombre">Nombre:</label>
                    <input type="txt" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="nombre libro">
                </div>

                <div>
                    <label for="txtImagen">Imagen</label>
                    <br>
                    <?php if ($txtImagen != "") {
                    ?>
                        <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" width="50" alt="" srcset="">

                    <?php } ?>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen">
                </div>

                <div>
                    <button type="submit" name="accion" <?php echo ($accion == "Select") ? "disabled" : ""; ?> value="Add" class="btn btn-success">Add</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Select") ? "disabled" : ""; ?> value="Modify" class="btn btn-warning">Modify</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Select") ? "disabled" : ""; ?> value="Cancel" class="btn btn-info">Cancel</button>
                </div>

            </form>

        </div>

    </div>

</div>

<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaLibros as $libro) {
            ?>
                <tr>
                    <td scope="row"><?php echo $libro['id']; ?></td>
                    <td><?php echo $libro['nombre']; ?></td>
                    <td>
                        <img src="../../img/<?php echo $libro['imagen']; ?>" width="80" alt="" srcset="">

                    </td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id']; ?>">
                            <input type="submit" name="accion" value="Delete" class="btn btn-primary">
                            <input type="submit" name="accion" value="Select" class="btn btn-danger">


                        </form>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>


<?php include("../template/pie.php") ?>