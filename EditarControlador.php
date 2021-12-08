<?php 
// Inicializamos la sesión o la retomamos
if(!isset($_SESSION)) {
    session_start();
  }
  // Incluimos la conexión a la BD
  include('connections/conn_localhost.php');

  
  // Lo primero que haremos será validar si el formulario ha sido enviado
  if(isset($_POST['Modificar'])) {
    // Vamos a validar que no existan cajas vacias
    foreach ($_POST as $calzon => $caca) {
      if($caca == "" && $calzon != "phone") $error[] = "The field $calzon is required";
    }
  
    // Procedemos a actualizar los datos del usuario SOLO SI NO HAY ERRORES
    if(!isset($error)) {
      // Preparamos la consulta para actualizar el registro del usuario en la BD
      $queryUpdateUser = sprintf("UPDATE libro SET titulo = '%s', prologo = '%s', autor = '%s', disponibilidad= '%s', stock='%s', UrlImagen=%s, noPaginas='%s'WHERE id = '%d'",
        mysqli_real_escape_string($connLocalhost, trim($_POST['nombreLibro1'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['prologoLibro1'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['autorLibro1'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['DisponibilidadLibro1'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['StockLibro1'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['urlImagenLibro1'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['PaginasLibro1']))
        mysqli_real_escape_string($connLocalhost, trim($_POST['idLibro1']))
      
      );
  
      // Ejecutamos el query
      $resQueryUpdateUser = mysqli_query($connLocalhost, $queryUpdateUser)
        or trigger_error("El query de actualización de datos de usuario falló");
  
      // Evaluamos el resultado de la ejecución del query (puede ser true o false)
      header("Location: Index.php");
    }
    }
    else{
        echo"no se pudo guarda";
    }




?>