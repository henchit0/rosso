<?php

$serverName = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "usuarios";

//define("DB_HOST", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_DATABASE", "databasename");

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
	die("Fallo la conección.".mysqli_connect_error());
}


?>