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
        $ruta = "tmp/" . $archivo_nombre;
        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo '<div><b>Error. La extensiónn no es correcta.<br/>
        - Se permiten archivos .gif, .jpg y .png. </b></div>';
        } else {
            //Si la imagen es correcta en tamaño y tipo
            //Se intenta subir al servidor
            if (move_uploaded_file($temp, $ruta)) {
                //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente

                $sql = "INSERT INTO noticia (titulo, descripcion, contenido, autor, foto) VALUES ('$titulo','$descripcion','$descripcion','$autor', '$ruta')";
                $resultado = mysqli_query($conexion, $sql);

                if ($resultado) {
                    Header("Location: ../Usuario/index.php");
                } else {
                    echo "error en la consulta";
                }

                //Mostramos el mensaje de que se ha subido co éxito

            } else {
                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
        }
    }
}
