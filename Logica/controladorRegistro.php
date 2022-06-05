<?php
require("../Datos/conexion.php");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$hash = hash('ripemd160', $psw);
$psw2 = $_POST['psw2'];

if (isset($_POST['enviar'])) {
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado = mysqli_query($conexion, $sql);
    $filas = mysqli_num_rows($resultado);
    if ($filas > 0) {
        header("Location: ../Usuario/emailEqual.html");
    } else {
        if ($psw == $psw2) {
            $sql = "INSERT INTO usuario (nombre, apellidos, email, contraseña) VALUES ('$nombre','$apellidos','$email','$hash')";
            $resultado = mysqli_query($conexion, $sql);
            if ($resultado) {
               header("Location: ../Usuario/index.php");
            } else {
               header("Location: ../Usuario/error404.html");
            }
        } else {
            header("Location: ../Usuario/pswEqual.html");
        }
    }
    mysqli_close($conexion);
}
?>
