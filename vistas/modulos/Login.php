
<div id="login">
    <h2>Login</h2>

    <form action="Login.php" method="post">
    <table>
      <tr>
        <td> <label for="id" type="font_size:36">ID:</label> </td>
        <td><input id="userBox" type="text" name="id" value="<?php echo isset($_POST['id']) ? $_POST['id'] : ""; ?>"></td>
      </tr>

      <tr>
        <td> <label for="password"> Contraseña: </td>
        <td> <input id="passBox" type="password" name="password"> </td>

      </tr>
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
