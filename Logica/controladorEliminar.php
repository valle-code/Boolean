<?php

require("../Datos/conexion.php");


$id=$_GET['id'];

$sql="DELETE FROM usuario WHERE id='$id'";
$resultado=mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

    if($resultado){
        Header("Location: ../Usuario/usuarios.php");
    } else {
        header("Location: ../Usuario/error404.html");
    }
?>