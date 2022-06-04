<?php

require("../Datos/conexion.php");


$id=$_GET['id'];

$sql="DELETE FROM usuario WHERE id='$id'";
$resultado=mysqli_query($conexion,$sql);

    if($resultado){
        Header("Location: ../Usuario/usuarios.php");
    }
?>