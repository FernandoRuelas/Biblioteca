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
#encabezado{
    color:white;
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
margin: 0px 2px;;
width:100%;
text-align:left;

}

nav ul li{
display:inline-block;
width:23%;
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
background:#0A3254;
font-size: 40px;
}
.colorBtnNav{
background:#0A3254;

}

section{
position:relative;
padding:20px;
}

#Buscador{
position: fixed;
height: 40px;
width: 250px;
background: white;
border: 1px solid black;

top: 35%;
left: 20%;
margin-top: -100px;
margin-left: -200px;

border-radius: 50px;
padding: 5px;
}


#bloqueLibro{
    background-color: white;
    opacity: 100%;  
    height: 200px;
    width: 900px;
    position: fixed;
    left: 20%;
    margin-top: 150px;
    margin-left: -200px;
    border-radius: 20px;
}



#sectionBook {
    position: relative;
    margin: 10px 180px;
}

#imgBook {
    width: 800px;
    position: fixed; 
}

#imgBook p img{
    float: left;
}



body{
background-image: url('images/bg.jpg');
width: 100%;
height: 100%;
margin: 0;
padding: 0;



</style>
</head>

<header>
    <div id="encabezado"><h1>Biblioteca</h1></div>

</header>

<body>
    
<?php 
   
    include "modulos/navegacion.php";
    
?>

</body>
</html>