
<div id="login">
    <h2>Login</h2>

    <form action="Login.php" method="post">
    <table>
      <tr>
        <td> <label for="id">id:</label> </td>
        <td><input type="text" name="id" value="<?php echo isset($_POST['id']) ? $_POST['id'] : ""; ?>"></td>
      </tr>

      <tr>
        <td> <label for="password"> password: </td>
        <td> <input type="password" name="password"> </td>

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
