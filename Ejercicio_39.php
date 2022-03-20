<?php 

$nombreArchivo = "archivo.txt";

$contenidoArchivo = "Hola, que pasa moustros";

$archivoACrear = fopen($nombreArchivo,"w");

fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear);

?>