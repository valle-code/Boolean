<?php
require("../Datos/conexion.php");
    $id = 6;
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $archivo_nombre = $_FILES['foto']['name'];
    if (isset($archivo_nombre) && $archivo_nombre != "") {
        $tipo = $_FILES['foto']['type'];
        $temp = $_FILES['foto']['tmp_name'];
        $ruta = "../Usuario/Resources/Usuarios/".$nombre ."/";
        $rutaDestino = $ruta . $archivo_nombre;
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo '<div><b>Error. La extensión no es correcta.<br/>
        - Se permiten archivos .gif, .jpg y .png. </b></div>';
        } else {
            //Si la imagen es correcta en tamaño y tipo
            //Se intenta subir al servidor
            $micarpeta = $ruta;
            if (!file_exists($micarpeta)) {
                mkdir($micarpeta, 0777, true);
            }
        }
        if (move_uploaded_file($temp, $rutaDestino)) {

            $sql = "UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', foto='$rutaDestino' WHERE id='$id'";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                Header("Location: ../Usuario/index.php");
            } else {
                echo "error en la consulta";
            }

            mysqli_close($conexion);
        } else {
            //Si no se ha podido subir la imagen, mostramos un mensaje de error
            echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
    }
?>