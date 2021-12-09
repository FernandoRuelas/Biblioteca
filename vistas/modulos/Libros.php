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
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 15px;
}

</style>



<body>

   

    <div id=Buscador>
        <form action="MostrarLibros.php" method="post">  
            <table>
                <tr>
                
                    <td><input id="userBox" type="text" name="Buscador" value="<?php echo isset($_POST['Buscador']) ? $_POST['Buscador'] : ""; ?>"></td>
                    <td></td>   
                    <td><input type="submit" value="Bucar" name="BuscarLibro"></td>
                </tr>

        
            </table>

        </form>   



    </div>

   
</body>



