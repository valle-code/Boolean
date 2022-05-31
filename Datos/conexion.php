<?php
    $host="localhost";
    $user="root";
    $pasw="";
    $bd="boolean";
    $conexion=mysqli_connect($host,$user,$pasw);

    if(mysqli_connect_errno()){
        echo "Error al conectar con la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf8");
?>