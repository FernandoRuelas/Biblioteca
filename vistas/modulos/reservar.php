<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #35afe7;
  font-family: 'Poppins', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  margin: 0;
}

button {
  background-color: rgb(14, 90, 165);
  border: 0;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  color: #fff;
  font-size: 14px;
  padding: 10px 25px;
}

.modal-container {
  display: flex;
  background-color: rgba(0, 0, 0, 0.3);
  align-items: center;
  justify-content: center;
  position: fixed;
  pointer-events: none;
  opacity: 0;  
  top: 0;
  left: 0;
  height: 100vh;
  width: 100vw;
  transition: opacity 0.3s ease;
}

.show {
  pointer-events: auto;
  opacity: 1;
}

.modal {
  background-color: #fff;
  width: 600px;
  max-width: 100%;
  padding: 30px 50px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  text-align: center;
}

.modal h1 {
  margin: 0;
}

.modal p {
  opacity: 0.7;
  font-size: 14px;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">

    <title>Reservar libro</title>

</head>
<body>

  <div id="popUp_contenido" class="popUp-contenido">
    <div class="modal">                  
      <h1>Reservar libro</h1>
      <form action="../../ReservarControlador.php" method="post">
        <p>Seleccione la fecha a reservar</p>
        <!--CALENDARIO-->
        <label for="reserva">Fecha reserva:</label>
        <input type="date" id="fReserva" name="fechaReserva"value=""min="today" max="2100-12-31"></input>
        <br></br>

        <label for="entrega">Fecha Entrega:</label>
        <input type="date" id="fEntrega" name="fechaEntrega"value=""min="today" max="2100-12-31"></input>
        <br></br>

        <label for="entrega">Nombre de usuario:</label>
        <input type="text" id="nUser" name="usuario"></input>
        <br></br>                                

        <!--BOTONES-->
        <input type="submit" name="reservar" value="Reservar">
       
    </div>
  </div>

</body>
</html>