<?php
require("../Datos/conexion.php");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$psw = $_POST['psw'];
// hash 
$hash = hash('ripemd160', $psw);    
$psw2 = $_POST['psw2'];

if (isset($_POST['enviar'])) {
    $sql = "INSERT INTO usuario (nombre, apellidos, email, contraseña) VALUES ('$nombre','$apellidos','$email','$hash')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        Header("Location: ../Usuario/index.php");
    } else {
        echo "error en la consulta";
    }
}
mysqli_close($conexion);
