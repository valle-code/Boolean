<?php
require("../Datos/conexion.php");

//Si se quiere subir una imagen
if (isset($_POST['aceptar'])) {
    $titulo = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $autor = $_POST['autor'];
    $archivo_nombre = $_FILES['archivo']['name'];

    if (isset($archivo_nombre) && $archivo_nombre != "") {
        $tipo = $_FILES['archivo']['type'];
        $temp = $_FILES['archivo']['tmp_name'];
        $ruta = "../Usuario/Resources/Noticias/".$titulo ."/";
        $rutaDestino = $ruta . $archivo_nombre;

        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo '<div><b>Error. La extensiónn no es correcta.<br/>
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
            

            $sql = "INSERT INTO noticia (titulo, descripcion, contenido, autor, foto) VALUES ('$titulo','$descripcion','$descripcion','$autor', '$archivo_nombre')";
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
}
