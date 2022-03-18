<?php
$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime="";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";


    $chkphp = (isset($_POST['chkphp'])=="si") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml'])=="si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss'])=="si") ? "checked" : "";

    $lsAnime=(isset($_POST[$lsAnime])?$_POST['lsAnime']:"");

    print_r($_POST);
    //print_r($_POST);
    print_r($rdgLenguaje);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if($_POST) {?>
    <strong> Hola </strong><?php echo $txtNombre; ?>
    <br>
    <strong> Tu lenguaje es: </strong><?php echo $rdgLenguaje;?>
    <br>
    <strong> Estas aprendiendo: </strong>
   
    - <?php echo ($chkphp=="checked")?"PHP":""; ?><br>
    - <?php echo ($chkhtml=="checked")?"HTML":""; ?><br>
    - <?php echo ($chkcss=="checked")?"CSS":""; ?><br>
    <br>
    <strong> Tu lenguaje es: </strong>
    <?php echo $lsAnime; ?>
    <br>
    <?php } ?>


    <form action="ejercicio_31.php" method="post">

        Nombre:<br>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br>
        ¿te gusta?:<br>
        <br> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""><br>
        <br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="hml" id=""><br>
        <br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""><br>
        
        Estas aprendiendo...
        <br> php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br> html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkntml" value="si" id="">
        <br> csss: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id=""><br> 

        ¿que anime te gusta?.. <br>
        <select name="lsAnime" id="" >
        <option value="">[Ninguna seria]</option>
        <option value="naruto" <?php echo($lsAnime=="naruto")?"selected":"";?>>Naruto</option>
        <option value="bleach" <?php echo($lsAnime=="bleach")?"selected":"";?>>bleach</option>
        <option value="dragon" <?php echo($lsAnime=="dragon")?"selected":"";?>>Dragon Ball</option>




        </select><br>

        <input type="submit" value="Enviar información">


    </form>
</body>

</html>