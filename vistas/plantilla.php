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

#login{
height: 130px;
width: 300px;
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
color:black;
text-decoration:navy;
}

section{
position:relative;
padding:20px;
}

body{
background-image: url('images/bg.jpg');
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