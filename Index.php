<?php 
    require_once ("controlador/controlador.php");
    $controlador = new controlador();
    if (isset($_SESSION['userNombre'])) {
       $controlador->plantilla();
       $controladorNavegador= new controlador();
       $controladorNavegador->cambioPaguinas();
    }
    else {
        $controlador->Login();
    }
    
?>