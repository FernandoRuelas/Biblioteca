<?php

session_start();

if(isset($_POST['reservar'])) {
     
  foreach($_POST as $calzon => $caca) {
    if($caca == "" && $calzon != "usuario") $error[] = "The field $calzon is required";
  }

  if(!isset($error)) {
    $queryInsertLibro = sprintf("INSERT INTO reserva (fechaEntrega, fechaReserva, usuario, libro) VALUES ('%s', '%s', '%s', '%s')",
        
    mysqli_real_escape_string($connLocalhost, trim($_POST['fechaEntrega'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['fechaReserva'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['usuario'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['libro']))
    );

    mysqli_query($connLocalhost, $queryInsertLibro) or trigger_error("The user login query failed");
  }
}