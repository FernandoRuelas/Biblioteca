<style>
#listado{
height: 75%;
width: 70%;
background: white;
border: 1px solid black;

position: fixed;
top: 30%;
left: 25%;
margin-top: -100px;
margin-left: -200px;

border-radius: 25px;
padding: 20px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 15px;
}

body{
   
background-image: url('images/bg.jpg');
width: 100%;
height: 100%;
margin: 0;
padding: 0;

}
</style>

<body>

    <div id=Buscador>
        <form action="MostrarLibros.php" method="post">  
            <tableU>
                <tr>
                    <td><input id="userBox" type="text" name="Buscador" value="<?php echo isset($_POST['Buscador']) ? $_POST['Buscador'] : ""; ?>"></td>
                    <td></td>   
                    <td><input type="submit" value="Bucar" name="BuscarLibro"></td>
                </tr>
        
            </tableU>

        </form>   

    </div>
    <div id=Buscador>
        <form action="Index.php" method="post">  
            <table1>
                <tr>
                    <td></td>   
                    <td><input type="submit" value="Menu Principal" name="Menu"></td>
                </tr>

            </table1>

        </form>   

    </div>

   
         <?php if(!isset($_SESSION)) { 
            session_start();
        }?>
        <?php if (isset($_POST['Buscador'])) { ?>
           
            
            <?php include("connections/conn_localhost.php"); ?>

             <?php $queryGetLibros = sprintf("SELECT id, titulo, prologo, autor, disponibilidad, UrlImagen, noPaginas FROM libro WHERE titulo='%s'",
                 mysqli_real_escape_string($connLocalhost, trim($_POST['Buscador']))
            ); ?>
    
             <?php $resQueryGetLibros = mysqli_query($connLocalhost, $queryGetLibros)
             or trigger_error("El libro no esta disponible"); ?>
    
             <?php $totalLibros = mysqli_num_rows($resQueryGetLibros);?>
    
             <?php $LibrosData = mysqli_fetch_assoc($resQueryGetLibros);?>
            
            <div id="listado" class="txt_listado">

                <table>

                        <tr>
                            <th>ID</th>
                            <th>Portada</th>
                            <th>Ttitulo</th>
                            <th>Prologo</th>
                            <th>Autor</th>
                            <th>noPaginas</th>
                            <th>Reserva</th>
                        </tr>
                    
                    <?php do{?>
                        
                    
                        <tr>
                            <td><?php echo $LibrosData['id']?></td>
                            <td><img src="<<?php echo $LibrosData['UrlImagen']?>" width="100" height="100" ></td>
                            <td><strong><?php echo $LibrosData['titulo']?></strong></td>
                            <td><p><?php echo $LibrosData['prologo']?></p></td>
                            <td><?php echo $LibrosData['autor']?></td>
                            <td><?php echo $LibrosData['noPaginas']?></td>
                            <td><input type="button" id="Reservar" onclick=" location.href= 'vistas/modulos/reservar.php' " value="reservar" name="reservar"/></td>
                        </tr>

                    <?php } while($LibrosData=mysqli_fetch_assoc($resQueryGetLibros) )?>


                </table>

            </div>

        <?php }?>
</body>



