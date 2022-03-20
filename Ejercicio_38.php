<?php
// abriendo un archivo para leer el contenido
$archivo = "contenido.txt";

$archivoAbierto = fopen($archivo,"r"); // abre el archivo

$contenido = fread($archivoAbierto,filesize($archivo)); // lee el archivo

echo $contenido;

?>