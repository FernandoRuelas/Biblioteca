<style>
  #login{
height: 150px;
width: 330px;
background: white;
border: 1px solid black;

position: fixed;
top: 50%;
left: 50%;
margin-top: -100px;
margin-left: -200px;

border-radius: 25px;
padding: 20px;
}


body{
background-image: url('images/bg.jpg');
width: 100%;
height: 100%;
margin: 0;
padding: 0;

}

</style>
<div id="login">
    <h2>Login</h2>

   
  
    <form action="LoginControlador.php" method="post">
      <table>
        <tr>
          <td> <label for="id" type="font_size:36">ID:</label> </td>
          <td><input id="userBox" type="text" name="id" value="<?php echo isset($_POST['id']) ? $_POST['id'] : ""; ?>"></td>
        </tr>

        <tr>
          <td> <label for="password"> Contraseña: </td>
          <td> <input id="passBox" type="password" name="password"> </td>

        </tr>
        

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td></td>
         
          <td><input type="submit" value="Login" name="sent"></td>
        </tr>

      </table>
    </form>
