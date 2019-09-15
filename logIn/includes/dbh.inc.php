<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "logindeprueba";

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "databasename");

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
	die("Fallo la conección.".mysqli_connect_error());
}


?>