<?php
require("../Datos/conexion.php");
$id=$_GET['id'];
$sql="UPDATE usuario SET ban = 'No' WHERE id_usuario='$id'";
$resultado=mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
if ($resultado) {
    Header("Location: ../Usuario/usuarios.php");
} else {
    header("Location: ../Usuario/error404.html");
}
?>