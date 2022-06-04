<?php
require("../Datos/conexion.php");
$id=$_GET['id'];
$sql="UPDATE usuario SET ban = 'No' WHERE id='$id'";
$resultado=mysqli_query($conexion,$sql);
if ($resultado) {
    Header("Location: ../Usuario/usuarios.php");
} else {
    echo "Error en la consulta";
}
?>