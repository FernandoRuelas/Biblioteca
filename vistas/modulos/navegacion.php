

	<!--*****************************************
**                Botonera                  **
********************************************-->

    <!-- Barra de navegacion  -->

    

<nav>

    <nav>

    <ul>

 <?php if (isset($_GET["accion"])): ?>

     <?php if ($_GET["accion"]=="Inicio"): ?>
        <li class= "colorBtnNav"><a class="active" href="plantillaControlador.php?accion=Inicio" style= "color:white" >Inicio</a></li>
     <?php else:  ?>
        <li ><a href="plantillaControlador.php?accion=Inicio" style= "color:white">Inicio</a></li>
     <?php endif ?> 
     
     <?php if ($_GET["accion"]=="Libros"): ?>
        <li class= "colorBtnNav"><a  class="active" href="plantillaControlador.php?accion=Libros" style= "color:white" >Libros</a></li>
     <?php else:  ?>
        <li ><a href="plantillaControlador.php?accion=Libros" style= "color:white">Libros</a></li>
     <?php endif ?>  

     <?php if ($_GET["accion"]=="Perfil"): ?>
        <li class= "colorBtnNav"><a  class="active" href="Index.php?accion=Perfil" style= "color:white" >Perfil</a></li>
     <?php else:  ?>
        <li ><a href="plantillaControlador.php?accion=Perfil" style= "color:white">Perfil</a></li>
     <?php endif ?>  

     <?php if ($_GET["accion"]=="Salir"): ?>
        <li class= "colorBtnNav"><a  class="active" href="Index.php?accion=Salir" style= "color:white" >Salir</a></li>
     <?php else:  ?>
        <li ><a href="plantillaControlador.php?accion=Salir" style= "color:white">Salir</a></li>
     <?php endif ?>  
     

 <?php else:?>
    <li class= "colorBtnNav"><a class="active" href="plantillaControlador.php?accion=Inicio" style= "color:white">Inicio</a></li>
    <li><a href="plantillaControlador.php?accion=Libros"style= "color:white">Libros</a></li>
    <li><a href="plantillaControlador.php?accion=Perfil"style= "color:white"> Perfil</a></li>
    <li><a href="plantillaControlador.php?accion=Salir"style= "color:white"> Salir</a></li>
<?php endif ?>

    </ul>
</nav>

