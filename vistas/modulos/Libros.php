
<!-- *****************************************
**                Buscador                  **
********************************************-->
<div id= Buscador>  
    <input type="text" name="Buscador" size="25" value="<?php isset($_POST["Buscador"]) ? $_POST["Buscador"] : "" ?>">
    <button type="submit" value="submit" name="Buscar">
        <img src="images/lupa.png" width="20px">
    </button>
</div>


<!-- *****************************************
**   Lugar donde apareceran los libros       **
********************************************-->

    <!-- Caja donde apareceran  -->

<div id="bloqueLibro">
    <div id="sectionBook">
        <h1>title</h1>
    </div>
    <div id="imgBook">
        
        <p><img height="120px" width="120px" src= "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftienda.abacolibros.com%2Fwp-content%2Fuploads%2F2019%2F09%2FCaperucita-Roja-2.jpg&f=1&nofb=1"><strong>Autor:</strong> autor <br> bbb</p>

        <button type="submit" name="SeleccionarLibro" value=" Seleccionar "></button>

    </div>
</div>

<!-- ***********************************************************
** Lugar donde aparecera el libro seleccionado (a la derecha) **
*************************************************************-->

<!--
<div id="libroSelecconado">
    
    <h2>Titulo del libro</h2>
    <p><img src="" alt=""></p>

    <div id="estadoDelLibro">
        <label for="estado">Estado</label>
        <label for="estadoLibro"></label>
    </div>

    <div id="calendario">
        <button type="submit" name="btnReservar" value="Reservar"></button>
    </div>

</div>
-->


