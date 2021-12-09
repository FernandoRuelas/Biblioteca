<style>
#listado{
height: 65%;
width: 50%;
background: white;
border: 1px solid black;

position: fixed;
top: 40%;
left: 35%;
margin-top: -100px;
margin-left: -200px;

border-radius: 25px;
padding: 20px;
}

</style>

<?php
if(!isset($_SESSION)) {
    session_start();
}

include("connections/conn_localhost.php");

$queryGetLibros = "SELECT titulo, prologo, autor, disponibilidad, noPaginas FROM libro";

$resQueryGetLibros = mysqli_query($connLocalhost, $queryGetLibros)
  or trigger_error("El query de obtención de todos los usuarios falló");

$totalLibros = mysqli_num_rows($resQueryGetLibros);

$LibrosData = mysqli_fetch_assoc($resQueryGetLibros);
?>

<body>
    <div id="listado" class="txt_listado">
        <h2>Libros</h2>
        <p>Total libros: <?php echo $totalLibros; ?></p>

        <ul class="listadoLibros">
            <?php 
            do { 
            ?>
                <li>
                    <p class="LibroData"> <?php echo $LibrosData['titulo'].' | '.$LibrosData['autor'].' | '.$LibrosData['disponibilidad'].' | '.$LibrosData['noPaginas']; ?></p>
                    <!--<p class="accionesLibro"> <a href="reservar.php?idLibro= <?php //echo $LibrosData['id'] ;?></a></p>-->
                </li>
                <?php
            } while($LibrosData = mysqli_fetch_assoc($resQueryGetLibros));
                ?>
        </ul>
    </div>
</body>