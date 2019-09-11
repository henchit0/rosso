<?php


//var_dump($_GET);

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

//echo 'Su nombre es ',$nombre,' ',$apellido,'<br>';
echo 'Su nombre es ',$_GET['nombre'],' Su apellido es ',$_GET['apellido'];
echo '<br>';
echo '<br>';

//$archivo = fopen('archivo.txt', 'a');


$miObjeto = new stdClass();

$miObjeto -> nombre = $nombre;
$miObjeto -> apellido = $apellido;

var_dump(json_encode($miObjeto));

$archivo = fopen('archivo.txt', 'a');

fwrite($archivo, json_encode($miObjeto));
//fwrite($archivo, $_GET["apellido"]."\n");
//fwrite($archivo, "\n");
fclose($archivo);

fwrite($archivo, json_encode($miObjeto));


?>