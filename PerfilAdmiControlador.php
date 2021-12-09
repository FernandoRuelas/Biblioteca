<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}

//----------------------------> MODIFICAR LIBROS <----------------------
//Obtenemos datos del usuario
//$queryLibrosDetails = "SELECT titulo, prologo, autor, disponibilidad, stock, UrlImagen, noPaginas FROM libro WHERE id = {$_POST['idLibro']}";

//$resQueryLibrosDetails = mysqli_query($connLocalhost, $queryLibrosDetails)
  //  or trigger_error("El query para obtener lo detalles del libro falló");
//Hacemos un fetch del resultado encontrado
//$LibrosDetails = mysqli_fetch_assoc($resQueryLibrosDetails);

if($_POST['Modificar'] == "Modificar" ) {
    if(!isset($error)) {
        $queryUpdateLibro = sprintf("UPDATE libro SET titulo = '%s', prologo = '%s', autor = '%s', disponibilidad = '%s', stock = '%s', UrlImagen = '%s', noPaginas = '%s' WHERE id = {$_POST['idLibro']}",
        mysqli_real_escape_string($connLocalhost, trim($_POST['nombreLibro'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['prologoLibro'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['autorLibro'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['DisponibilidadLibro'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['StockLibro'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['urlImagenLibro'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['PaginasLibro']))
        );

        mysqli_query($connLocalhost, $queryUpdateLibro)
            or trigger_error("El query de actualización de datos de libro falló");
 
        header("Location: Index.php");
    }
    //----------------------------> AGREGAR LIBROS <----------------------
} else { //($_POST['Agregar'] == "Agregar") 
    if (!isset($error)) {
        $queryInsertLibros = sprintf("INSERT INTO libro (titulo, prologo, autor, disponibilidad, stock, UrlImagen, noPaginas) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
        mysqli_real_escape_string($connLocalhost, trim($_POST['nombreLibro'])),
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
    //----------------------------> ELIMINAR LIBROS <----------------------
} 
?>