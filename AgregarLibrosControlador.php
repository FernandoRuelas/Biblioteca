<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}

if (!isset($error)) {
    $queryInsertLibros = sprintf("INSERT INTO libro (titulo, prologo, autor, disponibilidad, stock, UrlImagen, noPaginas) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
    mysqli_real_escape_string($connLocalhost, trim($_POST['tituloLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['prologoLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['autorLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['DisponibilidadLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['StockLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['urlImagenLibro'])),
    mysqli_real_escape_string($connLocalhost, trim($_POST['PaginasLibro']))
    );

    mysqli_query($connLocalhost, $queryInsertLibros) or trigger_error("La inserción del registro del usuario ha fallado");

    header("Location: Index.php");
}
else {
    echo "Es nesesario llenar por completo el formulario. Favor de regresar.";
}

?>
