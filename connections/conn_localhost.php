<?php

$servidor = "localhost";
$baseDatos = "biblioteca";
$usuarioBd = "root";
$passwordBd = "";

$connLocalhost = mysqli_connect($servidor, $usuarioBd, $passwordBd)
	or trigger_error(mysqli_error(), E_USER_ERROR);

mysqli_query($connLocalhost, "SET NAMES 'utf8'");

mysqli_select_db($connLocalhost, $baseDatos);

?>
