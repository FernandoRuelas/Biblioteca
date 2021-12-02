<?php 
 
include ("controlador/controlador.php");
$P = new controlador();
$P ->plantilla();   

include("LoginControlador.php");


$P1 = new controlador();
$P1 ->cambioPaguinas();   
 



?>