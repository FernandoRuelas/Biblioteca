<?php 
if (isset($_POST['Salir'])) {
    session_destroy();
    header("Location: Index.php");
}
	
else {
    echo"no se pudo salir";
} 