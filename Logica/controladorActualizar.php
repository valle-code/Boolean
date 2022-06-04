<?php

require("../Datos/conexion.php");
$id=$_GET['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$estado=$_POST['estado'];
$ban = $_POST['ban'];
$sql="UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', email='$email', ban = '$ban', estado='$estado' WHERE id='$id'";
$resultado=mysqli_query($conexion,$sql);

if($resultado){
    Header("Location: ../Usuario/usuarios.php");
} else{
    echo "Error en la consulta";
}

mysqli_close($conexion);
?>