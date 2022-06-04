<?php
require("../Datos/conexion.php");
//$id = $_GET['id'];

$id = $_GET['id'];


$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./estilos.css" title="style" />
</head>

<body>
    <div id="containerMod">
        <div class="padreMod">
            <div id="cajaMod">
                <form action="../Logica/controladorActualizar.php?id=<?php echo  $row['id']  ?>" method="post" id = "actualizar">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $row['nombre']?>"><br><br>
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']?>"><br><br>
                    <input type="text" name="email" id="email" placeholder="email" value="<?php echo $row['email']?>"><br><br>
                    <input type="text" name="ban" id="ban" placeholder="apellidos" value="<?php echo $row['ban']?>"><br><br>
                    <input type="text" name="estado" id="estado" placeholder="666999999" value="<?php echo $row['estado']?>"><br><br>
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>