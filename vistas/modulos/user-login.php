<?php
if(!isset($_SESSION)) {
    session_start();
}

include('connections/conn_localhost.php');

if(isset($_POST['sent'])) {
                
    foreach($_POST as $calzon => $caca) {
        if($caca == "") $error[] = "The field $calzon is required";
    }

        if(!isset($error)) {

            $queryLogin = sprintf("SELECT id, nombre, descripcion, email, rol FROM usuario WHERE id = '%s' AND password = '%s'",
            mysqli_real_escape_string($connLocalhost, trim($_POST['id'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['password'])));

            $resQueryLogin = mysqli_query($connLocalhost, $queryLogin) or trigger_error("The user login query failed");

            if(mysqli_num_rows($resQueryLogin)) {

                $userData = mysqli_fetch_assoc($resQueryLogin);

                $_SESSION['userId'] = $userData['id'];
                $_SESSION['userNombre'] = $userData['nombre'];
                $_SESSION['userDescripcion'] = $userData['descripcion'];
                $_SESSION['userEmail'] = $userData['email'];
                $_SESSION['userRol'] = $userData['rol'];
                echo $_SESSION['userNombre'];
                header('Inicio.php');
            }
            else {
                $error[] = "Login failed";
            }
        }
    }      

?>