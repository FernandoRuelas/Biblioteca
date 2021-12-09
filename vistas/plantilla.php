<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

<!--Aqui reseteamos los valores que estan predeterminados, los marjenes-->
<style>

 *{
     margin: 0;
     padding: 0;
     list-style: none;
 }   

header{
margin:auto;
height: 40px;
padding:10px;
background: #002277;
 
}

#Buscador{
position: fixed;
height: 40px;
width: 250px;
background: white;
border: 1px solid black;

top: 30%;
left: 20%;
margin-top: -100px;
margin-left: -200px;

border-radius: 50px;
padding: 5px;
}

#inicioPanel {
    background-color: white;
    opacity: 90%; 
    height: 350px;
    width: 750px;
    position: fixed;
    left: 17%;
    top: 17%;
    margin-top: 100px;
    margin-left: -150px;
    border-radius: 20px; 
    border: 1px solid black;
}

#bloqueLibro{
    background-color: white;
    opacity: 100%;  
    height: 200px;
    width: 750px;
    position: fixed;
    left: 17%;
    top: 17%;
    margin-top: 250px;
    margin-left: -150px;
    border-radius: 20px;
}

#titulo{
    margin-top: -5px;
    margin-left: 150px;
}

#sectionBook {
    position: relative;
    margin: 10px 180px;
}

#imgBook {
    width: 700px;
    position: fixed;
    top: 40%;
    left: 8%;
}

#imgBook p img{
    float: left;
    top: 40%;
    left: 8%;

}

#bloqueAdmi {
    position: fixed;
    top: 25%;
    left: 65%;
}

#MostrarReservados {
    position: fixed;
    top: 25%;
    left: 65%;
}

#comprarLibro {
    position: fixed;
    top: 25%;
    left: 65%;
}

#login{
height: 130px;
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


#logo{
position: left;    
}

nav{
position:relative;
margin:auto;
width:100%;
height:auto;
background:#0774F7;
}

nav ul{
position:relative;
margin:auto;
width:100%;
text-align:left;
}

nav ul li{
display:inline-block;
width:20%;
line-height:50px;
list-style: nome;
margin-left:30px;
}

nav ul li a{
color:white;
text-decoration:navy;
}

.active{
width: 23%;
font-size: 20px;

animation-name: seciones;
animation-duration: 0.5s;
animation-delay: 0s;
animation-fill-mode: forwards;
}

@keyframes seciones {
  from {top: 0px; background-color: #0774F7;}
  to {top: 20px; background-color: #0A3254;}
}

.colorBtnNav{
background:#0A3254;

animation-name: seciones;
animation-duration: 0.5s;
animation-delay: 0s;
animation-fill-mode: forwards;
}


section{
position:relative;
padding:20px;
}

#userBox {
background-color: white;
  background-image: url("images/user.png");
  background-position: 1px 1px; 
  background-repeat: no-repeat;
  padding: 5px 5px 5px 40px;
}

#passBox {
background-color: white;
  background-image: url("images/password.png");
  background-position: 1px 1px; 
  background-repeat: no-repeat;
  padding: 5px 5px 5px 40px;
}

#Box{
    right: 5px;
    resize: none;
}

#nomDesc {
    position: fixed;
    right: 72%;
    top: 23%;
}

#infoUser {
    position: fixed;
    margin: 20px 30px;

    background-color: white;
    opacity: 100%; 
    height: 480px;
    width: 1250px;
    border-radius: 25px;
}

#nomUser {
    position: fixed;
    margin: 5px 20px;
    font-weight: 700;
    right: 850px;
}

#imgUser {
    position: fixed;
    margin: 15px;
    max-width: 255px;
    max-height: 255px;
}

#Pregunta {
    position: fixed;
    right: 5px;
    top: 200px;
    background: white;
    height: 360px;
    width: 275px;
    border-radius: 20%;
    vertical-align: middle;
    border: 1px solid black;
}


body{
background-image: url('images/bg.jpg');
width: 100%;
height: 100%;
margin: 0;
padding: 0;

}

</style>
</head>

<header>
    <div id=""><h1 style="color:white"> Biblioteca</h1></div>

</header>

<body>
    
<?php
   
    include "modulos/navegacion.php";
    
?>

</body>
</html>
