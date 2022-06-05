<?php
require("../Datos/conexion.php");

// sistema de login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $hash = hash('ripemd160', $psw);
    // comprobar que no hay nulos
    if (empty($_POST['email']) || empty($_POST['psw'])) {
        header("Location: ../Usuario/error404.html");
    } else {
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND contraseña = '$hash'";
        $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
        $filas = mysqli_num_rows($resultado);
        if ($filas > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            if ($fila['ban'] == 'No') {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['psw'] = $psw;
                Header("Location: ../Usuario/index.php");
            } else {
                Header("Location: ../Usuario/baneado.html");
            }
        } else {
            Header("Location: ../Usuario/usuarioExiste.html");
        }
    }
}
?>
