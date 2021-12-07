<div id=infoUser>
  <div id=nomDesc>
  <h2 style="position:fixed ;right: 72%; top:top: 23%;" id="nomUser" style="color: white;"><h1><?php echo $_SESSION['userNombre'];?> </h1> </h2>
  <p>Descripcion</p>
</div>

  <img id="imgUser" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXk5ueutLeqsbTn6eqpr7PJzc/j5ebf4eLZ3N2wtrnBxsjN0NLGysy6v8HT1tissra8wMNxTKO9AAAFDklEQVR4nO2d3XqDIAxAlfivoO//tEOZWzvbVTEpic252W3PF0gAIcsyRVEURVEURVEURVEURVEURVEURVEURVEURVEURflgAFL/AirAqzXO9R7XNBVcy9TbuMHmxjN6lr92cNVVLKEurVfK/zCORVvW8iUBnC02dj+Wpu0z0Y6QlaN5phcwZqjkOkK5HZyPAjkIjSO4fIdfcOwFKkJlX4zPu7Ha1tIcwR3wWxyFhRG6g4Je0YpSPDJCV8a2Sv2zd1O1x/2WMDZCwljH+clRrHfWCLGK8REMiql//2si5+DKWKcWeAGcFMzzNrXC/0TUwQ2s6+LhlcwjTMlYsUIQzPOCb7YBiyHopyLXIEKPEkI/TgeuiidK/R9FniUDOjRDpvm0RhqjMyyXNjDhCfIMYl1gGjIMIuYsnGEYRMRZOMMunaLVwpWRW008v6fYKDIzxCwVAeNSO90BJW6emelYBRF/kHpYGVaoxTDAaxOFsfP9y8hpJ4xd7gOcij7JNGQ1EYFgkPJa1jQEiYZXRaRINKxSDUW9n+FT82lSKadkiru9/4XPqSLWOekGPoY05TAvLm9orm+YWuwHoBHkZKijNBJGmeb61eL6Ff/6q7bLr7yvv3vKGhpDRjvgjGaPz+gUg6YgcvpyAR2FIZ9U6nEEyZRTovmEU32KichpGn7C17XrfyH9gK/c0CMP05HZIM2uf9sEveizKveBy9/6Qt7o89ne33D525cfcIMW6ab+TMEukQbQbu+xu7X3A9bChmWaCeAkG17bpntwXgWxHaMzGPmUaR5dQZiKqRVeUZ3047fi3nAu28h4CHxCsZAgmEH8Y27jJAhm8c+5RQzRQNVGhVFSfxOYIjp/pP7RxzjevYXVGf4eLt+BJ1vCuLuLkrgABgCGXZ2wik5uty+oBvNirI6mkzhAf4Gsb58Hcm67Jzd+KwD10BYPLL3e0MjvKrgAULnOfveF/O4N2Xb9BZom3gJes3F9X5Zze8/6Yt09b4CrqsEjUv8oFBaR2rl+6CZr2xVrp24o/WitBKuGrrpl1+bFkmK2qXTON4VpbdfLa7o7y/WdLxG7lm2Lqh2clOwTegbvc/vj2U78CwhA87Bn8G5Nk3eOb0Nsr9flz3sG78UUtue4kpv1xvjg3TMay62BMlTlP+vrOMnJsRmt/ze0jsfkPPYdAH57hK+34PeOyc8XIXu5xT2HsUkdZz+adwg8HGFfQ3K5jtDvbUiO4Di9/ywHGrL88pDizZ++oTp+an+SMX/ndymUCwmHMdO7yuOx83pUx/eEMU0AvxWndwgidAqOZ8ypCwdEfvvEo6D9HwpA8wzvmOJEqAg9ySu8g4x0Hb9hSB/BANEKJ+LbPBU0lzbAJs4xt1AoshKkUGQmiH8/jJ0gdhTTLmSegHlPE0oOdXALnqDjKYh3px//fSgSWG8UqfrrIICzYYSJXRr9BSPbpNzw7gBjKjKOYI7ReIGqQRIap5+5MdjyvuDkExvGeXSlONWZAP3/AZBwJohU7QJRGU+cTVH18ELmRPNBmibW6MT/k1b0XhdkRBvyT6SB6EYv/GvhSmRNpGngRULsAlxMCGNXp7w3FfdEbTEEDdLI9TdIKRUzUesa3I461ER8cpNT7gMRhpKmYVS9ELOgCUQsa4SsulciKiLbY+AnHD8cpuhISsnxpamI84sbDq9qYJgf8wiiOBrC7Ml7M7ZECCqKoiiKoiiKoiiKoijv5AvJxlZRyNWWLwAAAABJRU5ErkJggg==" alt="foto perfil">

  <div id="editarPerfil">      
    
  </div>

</div>

<div id="bloqueAdmi">
    <div id="AgregarLibro">
    <form action="PerfilAdmi.php" method="post">
      <h1>Agregar Libros</h1>
      <table>
        <tr>
          <td> <label for="autorLibro" type="font_size:36">Autor del libro:</label> </td>
          <td><input id="userBox" type="text" name="autorLibro" value="<?php echo isset($_POST['autorLibro']) ? $_POST['autorLibro'] : ""; ?>"></td>
        </tr>

        <tr>
          <td> <label for="nombreLibro"> Nombre del libro: </td>
          <td> <input id="userBox" type="text" name="nombreLibro"> </td>

        </tr>

        <tr>
          <td> <label for="prologoLibro"> Prologo del libro: </td>
          <td> <input id="userBox" type="text" name="prologoLibro"> </td>

        </tr>

        <tr>
          <td> <label for="paginasLibro"> Paginas del libro: </td>
          <td> <input id="userBox" type="text" name="PaginasLibro"> </td>

        </tr>
        

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td></td>
         
          <td><input type="submit" value="Agregar" name="AgregarLibro"></td>
        </tr>

      </table>
    </form>

    </div>



    <div id="EliminarLibros">
        <form action="PerfilAdmi.php" method="post">
        <h1>Eliminar Libros</h1>
        <table>
            <tr>
            <td> <label for="idLibro" type="font_size:36">Id del libro:</label> </td>
            <td><input id="userBox" type="text" name="autorLibro" value="<?php echo isset($_POST['idLibro']) ? $_POST['idLibro'] : ""; ?>"></td>
            </tr>

            <tr>
            <td></td>
            
            <td><input type="submit" value="Eliminar" name="ElimiarLibro"></td>
            </tr>

    </div>

    <div id="ModificarLibros">

    



    </div>


</div>