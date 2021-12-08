<?php 

session_start();

// Inicializamos la sesión o la retomamos
if(!isset($_SESSION)) {
    session_start();
    
  }
  
  // Incluimos la conexión a la BD
  include('connections/conn_localhost.php');

  
    if(isset($_POST['idLibro'])) {

      // Preparamos la consulta para actualizar el registro del usuario en la BD
      $queryDeleteUser = sprintf("DELETE FROM Libro WHERE id = %d",
        mysqli_real_escape_string($connLocalhost, trim($_POST['idLibro']))
      );
  
      // Ejecutamos el query
     mysqli_query($connLocalhost, $queryDeleteUser); //or trigger_error("El query de eliminación de usuarios falló");
  
      // Evaluamos el resultado de la ejecución del query (puede ser true o false)

      header("Location: Index.php");
    
    }
    else {  
      echo"Regrese asia atras y introdusca los datos";
    }
  
?>