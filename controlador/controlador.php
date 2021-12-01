<?php 

// muestra la plantilla
class controlador{

    public function plantilla(){

        include "vistas/plantilla.php";
    }

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
        include "vistas/modulos/Login.php";       }

    }

        


    

}


?>