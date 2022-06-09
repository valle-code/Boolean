<?php
require("../Datos/conexion.php");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$hash = hash('ripemd160', $psw);
$estado = $_POST['estado'];

if (isset($_POST['enviar'])) {
    // comprobar que no hay nulos y que email contenga @
    if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['email']) || empty($_POST['psw']) || empty($_POST['estado']) || !strpos($email, '@') || strlen($psw) < 8) {
        header("Location: ../Usuario/error404.html");
    } else {
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
        $filas = mysqli_num_rows($resultado);
        if ($filas > 0) {
            header("Location: ../Usuario/emailEqual.html");
        } else {

            $sql = "INSERT INTO usuario (nombre, apellidos, email, contraseña, estado) VALUES ('$nombre','$apellidos','$email','$hash','$estado')";
            $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
            if ($resultado) {
                header("Location: ../Usuario/usuarios.php");
            } else {
                header("Location: ../Usuario/error404.html");
            }
        }
    }
    mysqli_close($conexion);
}
?>
