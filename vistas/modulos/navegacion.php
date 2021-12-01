<<<<<<< HEAD
<!-- *****************************************
=======
	<!-- *****************************************
>>>>>>> 935f617a6d1c7e35c254ed2c8ea1f6a357707cc1
**                Botonera                  **
********************************************-->

    <!-- Barra de navegacion  -->

    
<<<<<<< HEAD
<nav>
=======
    <nav>
>>>>>>> 935f617a6d1c7e35c254ed2c8ea1f6a357707cc1
    <ul>

 <?php if (isset($_GET["accion"])): ?>

     <?php if ($_GET["accion"]=="Inicio"): ?>
        <li class= "colorBtnNav"><a class="active" href="Index.php?accion=Inicio" style= "color:white" >Inicio</a></li>
     <?php else:  ?>
        <li ><a href="Index.php?accion=Inicio" style= "color:white">Inicio</a></li>
     <?php endif ?> 
     
     <?php if ($_GET["accion"]=="Libros"): ?>
        <li class= "colorBtnNav"><a  class="active" href="Index.php?accion=Libros" style= "color:white" >Libros</a></li>
     <?php else:  ?>
        <li ><a href="Index.php?accion=Libros" style= "color:white">Libros</a></li>
     <?php endif ?>  

     <?php if ($_GET["accion"]=="Perfil"): ?>
        <li class= "colorBtnNav"><a  class="active" href="Index.php?accion=Perfil" style= "color:white" >Perfil</a></li>
     <?php else:  ?>
        <li ><a href="Index.php?accion=Perfil" style= "color:white">Perfil</a></li>
     <?php endif ?>  
     
     <?php if ($_GET["accion"]=="Login"): ?>
        <li class= "colorBtnNav"><a  class="active" href="Index.php?accion=Login" style= "color:white" >Login</a></li>
     <?php else:  ?>
        <li ><a href="Index.php?accion=Login" >Login</a></li>
     <?php endif ?>  

 <?php else:?>
    <li><a href="Index.php?accion=Inicio" style= "color:white">Inicio</a></li>
    <li><a href="Index.php?accion=Libros"style= "color:white">Libros</a></li>
    <li><a href="Index.php?accion=Perfil"style= "color:white"> Perfil</a></li>
    <li class= "colorBtnNav"><a class="active" href="Index.php?accion=Login" style= "color:white"> Login</a></li>

<<<<<<< HEAD

=======
>>>>>>> 935f617a6d1c7e35c254ed2c8ea1f6a357707cc1
<?php endif ?>

    </ul>
</nav>

