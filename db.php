<?php

    //Conectar la base de datos
    $conexion = mysqli_connect("localhost", "root", "taroroot", "pruebas", "3306");

    //Comprobar el estado de la conexión
    if(!mysqli_connect_errno()){
        echo "Conexión exitosa".'<br/>';
    }else{
        echo "Conexión fallida. Código del error: ".mysqli_connect_errno().'<br/>';
    }

    //Consultar la codificación de caracteres
    mysqli_query($conexion, "SET NAMES 'utf8'");

    //Consultar SELECT desde PHP
    $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");
    while($usuario = mysqli_fetch_assoc($usuarios)){
        echo "<h2>Usuario: </h2>".$usuario['usuario']."<br/>";
        echo "<h2>Correo: </h2>".$usuario['correo']."<br/>";
        echo "<h2>Password: </h2>".$usuario['password']."<br/>";
    }
