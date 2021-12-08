<div id=bloqueLibro>

<?php include("connections/conn_localhost.php");?>
  
    
    <?php if (isset($_POST['Buscar'])) {  ?>

     

        <?php $queryMostrar=sprintf("SELECT id, UrlImagen, titulo, prologo, autor, noPaginas FROM libro where titulo=%s",
      mysqli_real_escape_string($connLocalhost, trim($_POST['Titulo'])));?>
        <?php $result=mysqli_query($connLocalhost, $queryMostrar);?>   
        
       <?php  if(mysqli_num_rows($result)){?>
        
             <table>

            <?php while($mostrar=mysqli_fetch_array($result) ){?>
                
                <tr>
                    <td><?php echo $mostrar['id']?></td>
                    <td><img src="<<?php echo $mostrar['UrlImagen']?>"></td>
                    <td><strong><?php echo $mostrar['titulo']?></strong></td>
                    <td><p><?php echo $mostrar['prologo']?></p></td>
                    <td><?php echo $mostrar['autor']?></td>
                    <td><?php echo $mostrar['noPaginas']?></td>
                    <td><input type="button" id="Reservar" onclick=" location.href= 'vistas/modulos/reservar.php' " value="reservar" name="reservar"/></td>
                </tr>

            <?php }?>

            
            </table>
        <?php }?>


    <?php } ?>
