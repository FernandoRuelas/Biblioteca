<?php 
session_start();
// muestra la plantilla
class controlador{

    public function plantilla(){

        include "vistas/plantilla.php";
    }
    //Realiza cambio de paguinas
    public function cambioPaguinas(){     

            if (isset($_GET["accion"])) {

                if ( $_GET["accion"]=="Libros"||
                $_GET["accion"] =="Inicio") {

                    include "vistas/modulos/".$_GET["accion"].".php";
                 }

                elseif ($_GET['accion']=="Salir") {
                     include"vistas/modulos/Salir.php";

                }
                elseif ($_GET["accion"]== "Perfil") {
                    if ($_SESSION['userRol']=="admin") {
                        include "vistas/modulos/PerfilAdmi.php";
                    }
                    elseif ($_SESSION['userRol']=="maestro") {
                        include "vistas/modulos/PerfilMaestro.php";
                    }
                    else {
                        include "vistas/modulos/Perfil.php";
                    }
                    
                }

                else {
                include "vistas/modulos/Login.php";
                
                }
            }
            else {
                include "vistas/modulos/Inicio.php";
            }
           
    }

    public function Login(){
        include "vistas/modulos/Login.php";
    }

}

?>
