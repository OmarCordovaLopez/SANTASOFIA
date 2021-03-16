<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<br>
    <div class="form">
        <form action="guardar.php" method="POST">
            <label for="nombre"><center>Su nombre</center></label>
            <br>
            <input type="text" name="nombre" placeholder="Nombre" required="">
            <br>
            <label for="correo"><center>Direccion de correo</center></label>
            <br>
            <input type="text" name="correo" placeholder="mail@mail.com" required="">
            <br>
            <label for="tipo"><center>Tipo</center></label>
            <br>
            <input type="text" name="tipo" placeholder="Profesor/Alumno" required=""><br>
            <br>
            <label for="grado"><center>Grado</center></label>
            <input type="text" name="grado" placeholder="Ej Cuarto de Primaria" required=""><br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

<?php
    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="proyecto"; //nombre de la base de datos

//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario) or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables 
    $nombre=$_POST['nombre']; //name="nombre"
    $correo=$_POST['correo']; //name="correo"
    $tipo=$_POST['tipo']; //name="tipo"
    $grado=$_POST['grado']; //name="grado"

    //sentencia sql
    $sql="INSERT INTO datos(nombre,correo,tipo,grado) VALUES('$nombre','$correo','$tipo','$grado')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la sentencia de sql
    $ejecutar=mysqli_query($conexion, $sql);     
?>﻿