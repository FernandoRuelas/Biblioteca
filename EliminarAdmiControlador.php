<?php 

session_start();

include("connections/conn_localhost.php");

foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The field $calzon is required";
}
if (isset($_POST['Eliminar'])) {
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
    
    

}
elseif (isset($_POST['comprarLibro'])) {

    if(isset($_POST['idLibro'])) {

       
        $queryGetLibros = sprintf("SELECT titulo FROM libro WHERE id='%d'",
        mysqli_real_escape_string($connLocalhost, trim($_POST['idLibro']))
         ); 

        $resQueryGetLibros = mysqli_query($connLocalhost, $queryGetLibros)
         or trigger_error("El libro no esta disponible"); 

         $totalLibros = mysqli_num_rows($resQueryGetLibros);

        $LibrosData = mysqli_fetch_assoc($resQueryGetLibros);

       
          
            $usuario= $_SESSION['userNombre'];
            $libro = $LibrosData['titulo'];
          
        

        $queryComprar ="INSERT INTO compras (usuario, libro) VALUES ('$usuario','$libro')";
    
        mysqli_query($connLocalhost, $queryComprar) or trigger_error("La inserción del registro del usuario ha fallado");; 


        $queryDeleteUser = sprintf("DELETE FROM libro WHERE id = %d",
        mysqli_real_escape_string($connLocalhost, trim($_POST['idLibro']))
            );
    
        mysqli_query($connLocalhost, $queryDeleteUser); 
      
      
        header("Location: Index.php");
         
        
    }
    else{
        echo"valio";
    }
    
}
