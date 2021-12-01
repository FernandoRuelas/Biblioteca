<?php 

// muestra la plantilla
class controlador{

    public function plantilla(){

        include "vistas/plantilla.php";
    }
    //Realiza cambio de paguinas
    public function cambioPaguinas(){
        
       if (isset($_GET["accion"])) {

         if ( $_GET["accion"]=="Perfil"||
         $_GET["accion"]=="Libros"||
         $_GET["accion"] =="Inicio") {
 
             include "vistas/modulos/".$_GET["accion"].".php";
         }
        elseif ($_GET["accion"] =="Login") {
 
             include "vistas/modulos/Login.php";
         }

        else {
         include "vistas/modulos/Login.php";
        }
       }
      else {
<<<<<<< HEAD
        include "vistas/modulos/Login.php";       }
=======
        include "vistas/modulos/Login.php"; }
>>>>>>> 935f617a6d1c7e35c254ed2c8ea1f6a357707cc1

    }

    
}

?>
