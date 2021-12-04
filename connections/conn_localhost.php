<?php

$servidor = "localhost";
$baseDatos = "biblioteca";
$usuarioBd = "root";
$passwordBd = "";

$connLocalhost = mysqli_connect($servidor, $usuarioBd, $passwordBd) or die('Error al intentar conectar');

mysqli_query($connLocalhost, "SET NAMES 'utf8'");

mysqli_select_db($connLocalhost, $baseDatos);

?>
