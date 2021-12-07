<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}

if (!isset($error)) {
    $queryInsertLibros = sprintf("INSERT INTO libro (titulo, prologo, autor, disponibilidad, stock, UrlImagen, noPaginas) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
    mysqli_real_escape_string($connLocalhost, trim($_POST['nombreLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['prologoLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['autorLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['PaginasLibro'])),

    mysqli_real_escape_string($connLocalhost, trim($_POST['DisponibilidadLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['StockLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['urlImagenLibro']))
    );

    // Ejecutamos el query en la BD
    mysqli_query($connLocalhost, $queryInsertLibros) or trigger_error("La inserción del registro del usuario ha fallado");

    // Reporte de errores detallado
    // mysqli_query($connLocalhost, $queryInsertUser) or trigger_error(mysqli_error($connLocalhost), E_USER_ERROR);

    // Si todo sale bien (se guardó en la BD), redireccionamos al usuario al Panel de Control
    header("Location: Index.php");
}
else {
    echo "Regrese asia atras, es nesesario llenar todo el formulario";
}












?>
