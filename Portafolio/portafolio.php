<?php include("cabecera.php") ?>
<?php include("conexion.php") ?>
<?php 



if($_POST){
//print_r($_POST); 
        $nombre = $_POST['nombre'];
        $archivo = $_FILES['archivo']['name'];
        $descripcion= $_POST['descripcion'];

        $fecha = new DateTime();
        $imagen =$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
        $imagen_temporal = $_FILES['archivo']['tmp_name'];
 
        move_uploaded_file($imagen_temporal,"imagenes/".$archivo);

        $objConexion = new conexion();

        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `Descripcion`) VALUES (NULL, '$nombre', '$archivo', '$descripcion');";
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");
}

if($_GET){
        // DELETE FROM `proyectos` WHERE `proyectos`.`id` = 2
        $id=$_GET['borrar'];
        $objConexion = new conexion();

        $imagen= $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
        unlink("imagenes/".$imagen[0]['imagen']);
        $sql ="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$_GET['borrar'];
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");

        
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");
//print_r($resultado);
?>


<br>
<div class="container">
        <div class="row">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                        Datos del proyectp
                                </div>
                                <div class="card-body">
                                        <form action="portafolio.php" method="post" enctype="multipart/form-data">
                                                <br>
                                                Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                                                <br>
                                                Imagen del proyecto: <input required class="form-control" type="file" name="archivo" accept=".jpg,.gif,.png" id="">
                                                <br>
                                                Descripción: <br>
                                                <textarea required name="descripcion" id="" cols="65 " rows="4"></textarea>
                                                <br>
                                                <input type="submit" value="Enviar">


                                        </form>
                                </div>
                                <div class="card-footer text-muted">

                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                        <table class="table">
                                <thead>
                                        <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Imagen</th>
                                                <th>Descipción</th>
                                                <th>Acciones</th>


                                        </tr>
                                </thead>
                                <tbody>
                                        <?php foreach($proyectos as $proyecto) {?>
                                        <tr>
                                                <td scope="row"><?php echo $proyecto['id']?></td>
                                                <td><?php echo $proyecto['nombre']?></td>
                                                <td>
                                                        <img width="100" src="imagenes/<?php echo $proyecto['imagen']?>" alt="" srcset=""></td>
                                                <td><?php echo $proyecto['Descripcion']?></td>
                                                <td><a class="btn btn-danger" href= "?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>


                                        </tr>
                                        <?php }?>
                                        <tr>
                                                <td scope="row"></td>
                                                <td></td>
                                                <td></td>
                                        </tr>
                                </tbody>
                        </table>
                </div>

        </div>
</div>










<?php include("pie.php") ?>