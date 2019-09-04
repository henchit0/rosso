<?php


//var_dump($_GET);

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

echo 'Su nombre es ',$nombre,' ',$apellido,'<br>';

echo 'Su nombre es '.$_GET['nombre'];

$archivo = fopen('archivo.txt', 'a');
fwrite($archivo, $_GET["nombre"]."\n");
fwrite($archivo, $_GET["apellido"]."\n");

?>