<?php 

// muestra la plantilla
class controlador{

    public function plantilla(){

        include "vistas/plantilla.php";
    }

    public function cambioPaguinas(){
        
       $enlaces = $_GET["accion"];

       if ( $enlaces =="Perfil"||
            $enlaces =="Libros"||
            $enlaces =="Inicio") {

       include "vistas/modulos/".$enlaces.".php";
        }

        elseif ($enlaces =="Login") {

            include "vistas/modulos/Login.php";
           
        }
       else {
        include "vistas/modulos/Inicio.php";
       }

    }

        


    

}


?>