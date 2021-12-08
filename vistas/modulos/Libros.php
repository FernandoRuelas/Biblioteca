<div id= Buscador>  

        <form action="MostrarLibros.php" method="post">
        <h1>Eliminar Libros</h1>
        <table>
            <tr>
            <td> <label for="idLibro" type="font_size:36">Titulo del libro:</label> </td>
            <td> <input type="text" name="Titulo" size="25" value="<?php isset($_POST["Titulo"]) ? $_POST["Titulo"] : "" ?>"></td>
            </tr>

            <tr>
            <td></td>
            
            <td><input type="submit" value="Buscar" name="Buscar"></td>
            </tr>

   
</div>

<!-- *****************************************************
**   Lugar donde apareceran los libros (falta foreach)      **
***********************************************************-->





</div>





