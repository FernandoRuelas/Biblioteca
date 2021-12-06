<?php 
if (isset($_POST['Salir'])) {
    session_start();
    unset($_SESSION["userNombre"]); 
    unset($_SESSION["userId"]);
    unset($_SESSION["userCorreo"]);
    unset($_SESSION["userRol"]);
    session_destroy();
    header("Location: Index.php");
    
  
}
	
else {
    echo"no se pudo salir";
} 