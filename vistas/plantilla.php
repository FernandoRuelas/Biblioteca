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
height: 100px;
padding:10px;
background: #002277; 
}

#login{
height: 130px;
width: 300px;
background: white;
text-align: center;
border: 1px solid black;
position: realtive;
margin: 100px 200px;
}

#logo{
position: left;    
}

nav{
position:relative;
margin:auto;
width:100%;
height:auto;
background:blue;
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
background: #1097EE;

}
</style>
</head>

<header>
    <div id=""><h1> Biblioteca</h1></div>

</header>

<body>

<?php 
   
    include "modulos/navegacion.php";
    
?>


</body>
</html>