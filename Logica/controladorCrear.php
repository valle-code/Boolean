<?php
require("../Datos/conexion.php");

//Si se quiere subir una imagen
if (isset($_POST['aceptar'])) {
    // comprobar que no hay nulos

    $id = $_GET['id'];
    $titulo = $_POST['nombre'];
    $contenido = $_POST['contenido'];
    $descripcion = $_POST['descripcion'];
    $archivo_nombre = $_FILES['archivo']['name'];

    // comprobar que no hay nulos
    if (empty($_POST['nombre']) || empty($_POST['contenido']) || empty($_POST['descripcion']) || empty($_FILES['archivo']['name'])) {
        header("Location: ../Usuario/error404.html");
    } else {
        if (isset($archivo_nombre) && $archivo_nombre != "") {
            $tipo = $_FILES['archivo']['type'];
            $temp = $_FILES['archivo']['tmp_name'];
            $ruta = "../Usuario/Resources/Noticias/".$titulo ."/";
            $rutaDestino = $ruta . $archivo_nombre;
    
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
                header("Location: ../Usuario/error404.html");
            } else {
                $carpeta = $ruta;
                // Si la carpeta no existe, se crea
                if (!file_exists($carpeta)) {
                    mkdir($carpeta, 0777, true);
                } else {
                    header("Location: ../Usuario/noticiaEqual.html");
                }
            }
            if (move_uploaded_file($temp, $rutaDestino)) {
                $sql = "INSERT INTO noticia (id_user, titulo, descripcion, contenido, imagen) VALUES ('$id','$titulo','$descripcion','$contenido', '$archivo_nombre')";
                $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    
                if ($resultado) {
                    Header("Location: ../Usuario/index.php");
                } else {
                    header("Location: ../Usuario/error404.html");
                }
    
                mysqli_close($conexion);
            } else {
                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                header("Location: ../Usuario/error404.html");
            }
        }
    }
}
?>
