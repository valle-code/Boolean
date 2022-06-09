<?php
require("../Datos/conexion.php");

$id = $_GET['id'];
$nombre = $_POST['nombre2'];
$apellidos = $_POST['apellido2'];
$archivo_nombre = $_FILES['foto']['name'];
if (isset($archivo_nombre) && $archivo_nombre != "") {
    $tipo = $_FILES['foto']['type'];
    $temp = $_FILES['foto']['tmp_name'];
    $ruta = "../Usuario/imagenes/";
    $rutaDestino = $ruta . $archivo_nombre;
    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
        header("Location: ../Usuario/error404.html");
    } else {
        //Si la extensión de la imagen es correcta, se intenta subir al PC
        if (move_uploaded_file($temp, $rutaDestino)) {

            $sql = "UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', foto='$archivo_nombre' WHERE id_usuario='$id'";
            $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

            if ($resultado) {
                Header("Location: ../Usuario/perfil.php");
            } else {
                header("Location: ../Usuario/error404.html");
            }

            mysqli_close($conexion);
        } else {
            //Si no se ha podido subir la imagen, mostramos un mensaje de error
            header("Location: ../Usuario/error404.html");
            mysqli_close($conexion);
        }
    }
} else {
    $sql = "UPDATE usuario SET nombre='$nombre', apellidos='$apellidos' WHERE id_usuario='$id'";
    $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

    if ($resultado) {
        Header("Location: ../Usuario/perfil.php");
    } else {
        header("Location: ../Usuario/error404.html");
    }
}
?>
