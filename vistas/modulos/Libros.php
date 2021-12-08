<div id= Buscador>  
    <input type="text" name="Buscador" size="25" value="<?php isset($_POST["Buscador"]) ? $_POST["Buscador"] : "" ?>">
    <input type="image" src="images/lupa.png" name="Serch" class="btnSearch" width="35" height="20" alt="submit"/>
</div>

<!-- *****************************************************
**   Lugar donde apareceran los libros (falta foreach)      **
***********************************************************-->

<div>

    <div id="bloqueLibro">
        <div id="sectionBook">
        </div>
        <div id="titulo">
            <h1>Caperucita roja</h1>
        </div>
        <div id="imgBook">
            
            <p><img height="120px" width="120px" src= "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftienda.abacolibros.com%2Fwp-content%2Fuploads%2F2019%2F09%2FCaperucita-Roja-2.jpg&f=1&nofb=1"><strong>Autor:</strong> CUENTOS DE HADAS <br> De camino a casa de su abuelita, Caperucita Roja se encuentra en el bosque a un lobo que parece muy simpático ¡Pero a la abuelita le pasa algo muy extraño!. Caperucita Roja forman parte de la colección Primeros lectores, diseñada por expertos y pensada para que los niños lean con sus padres. Cada libro contiene un cuento tradicional que el adulto podrá leer en voz alta y oraciones cortas que el pequeño podrá leer con facilidad.</p>
            <!-- <input type="image" src="images/btnSelect.png" name="Select" class="btnSelect" width="120" height="60" alt="submit"/> -->
            <input type="button" id="Reservar" onclick=" location.href= 'vistas/modulos/reservar.php' " value="reservar" name="reservar"/>
           <!-- <button id="Comprar" onclick="location.href= 'Comprar.php'">Comprar</button> -->
        </div>
    </div>


</div>



