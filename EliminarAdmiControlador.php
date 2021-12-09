<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}

if(isset($_POST['idLibroEliminar'])) {

    $queryDeleteUser = sprintf("DELETE FROM libro WHERE id = %d",
        mysqli_real_escape_string($connLocalhost, trim($_POST['idLibroEliminar']))
    );

    mysqli_query($connLocalhost, $queryDeleteUser); 
  
    header("Location: Index.php");
      
}
else {  
    echo"Regrese e introduzca los datos";
}

?>