<?php   
  // Inicializamos la sesión o la retomamos
  if(!isset($_SESSION['userNombre'])) {
    session_start();
  }

  // Incluimos la conexión a la BD
  include("connections/conn_localhost.php");


  // Evaluamos si el formulario ha sido enviado
  if(isset($_POST['sent'])) {
      
  // Validamos si las cajas     están vacias
  foreach($_POST as $calzon => $caca) {
      if($caca == "") $error[] = "The field $calzon is required";
  }

  if(!isset($error)) {
       // Armamos el query para verificar el email y el password en la BD
        $queryLogin = sprintf("SELECT id, nombre, descripcion, email, rol FROM usuario WHERE id = '%s' AND password = '%s'",
          mysqli_real_escape_string($connLocalhost, trim($_POST['id'])),
          mysqli_real_escape_string($connLocalhost, trim($_POST['password']))
     
      );

      // Ejecutamos el query
      $resQueryLogin = mysqli_query($connLocalhost, $queryLogin);// or trigger_error("The user login query failed");
      // Determinamos si el login es valido (email y password coincidentes)
      // Contamos el recordset (el resultado para un login valido es 1)
      if(mysqli_num_rows($resQueryLogin)) {
      // Hacemos un fetch del recordet
        $userData = mysqli_fetch_assoc($resQueryLogin);

      // Definimos variables de sesion en $_SESSION
          $_SESSION['userId'] = $userData['id'];
          $_SESSION['userRol'] = $userData['rol'];
          $_SESSION['userNombre'] = $userData['nombre'];
          $_SESSION['userDescripcion'] = $userData['descripcion'];
          $_SESSION['userCorreo'] = $userData['email'];
         

      // Redireccionamos al usuario al panel de control
     
      header( 'location:Index.php');
      }
      else {
        $error[] = "Login failed";
       header ('Location: Index.php');
      }
  }
  }




 

?>