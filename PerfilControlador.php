<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}

if(!isset($error)) {
    $queryUpdateDesc = sprintf("UPDATE usuario SET descripcion = '%s' WHERE id = {$_SESSION["userId"]}",
    mysqli_real_escape_string($connLocalhost, trim($_POST['Desc']))
    );

    mysqli_query($connLocalhost, $queryUpdateDesc)
        or trigger_error("El query de actualización de datos de libro falló");
 
    header("Location: Index.php");
}