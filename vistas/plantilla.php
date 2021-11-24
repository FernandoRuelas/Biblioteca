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
padding:10px;
background: #002277; 
}

#login{
position: relative;
margin: 10px 1500px;
width: 50px;
text-align: left;
border: 3px solid white;
background: blue;

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
width:90%;
text-align:left;
}

nav ul li{
display:inline-block;
width:30%;
line-height:50px;
list-style: nome;
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

    <div id="login">
        <ul>
            <li><a herf="Index.php?seccion1=login"></a><b>Login</b></li>
        </ul>
    </div>
</header>

<body>

<?php 
   
    include "modulos/navegacion.php";
    
?>


</body>
</html>