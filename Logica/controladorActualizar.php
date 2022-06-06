<?php

require("../Datos/conexion.php");
if (isset($_POST['actualizar'])) {
    // comprobar que no hay nulos
    if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['email'])) {
        header("Location: ../Usuario/error404.html");
    } else {
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $email=$_POST['email'];
        $estado=$_POST['estado'];
        $ban = $_POST['ban'];
        $sql="UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', email='$email', ban='$ban', estado='$estado' WHERE id='$id'";
        $resultado=mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

        if($resultado){
            header("Location: ../Usuario/usuarios.php");
        } else{
            header("Location: ../Usuario/error404.html");
        }
    }
}



mysqli_close($conexion);
?>