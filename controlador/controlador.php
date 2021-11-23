<?php 

// muestra la plantilla
class controlador{

    public function plantilla(){

        include "vistas/plantilla.php";
    }

    public function cambioPaguinas(){
        
       $enlaces = $_GET["accion"];

       if ( $enlaces =="Perfil"||
            $enlaces =="Libros") {

       include "vistas/modulos/".$enlaces.".php";
        }

        elseif ($enlaces =="Inicio") {

            include "vistas/modulos/Inicio.php";
        }
       else {
       include_once "Index.php";
       }

    }

        


    

}


?>