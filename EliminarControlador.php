<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}

if (!isset($error)) {
   

    $queryDeleteUser = sprintf("DELETE FROM usuarios WHERE id = %d",
    mysqli_real_escape_string($connLocalhost, $_POST['idLibro'])
  );

  // Ejecutamos el query
  $resQueryDeleteUser = mysqli_query($connLocalhost, $queryDeleteUser)
    or trigger_error("El query de eliminación de usuarios falló");


    // Ejecutamos el query en la BD
    mysqli_query($connLocalhost, $resQueryDeleteUser) or trigger_error("La inserción del registro del usuario ha fallado");

    // Reporte de errores detallado
    // mysqli_query($connLocalhost, $queryInsertUser) or trigger_error(mysqli_error($connLocalhost), E_USER_ERROR);

    // Si todo sale bien (se guardó en la BD), redireccionamos al usuario al Panel de Control
    header("Location: Index.php");
}
else {
    echo "Regrese asia atras, es nesesario llenar todo el formulario";
}



?>