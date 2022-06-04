<?php
require("../Datos/conexion.php");
$sql = "SELECT * FROM usuario ORDER BY id DESC";
$resultado = mysqli_query($conexion, $sql);
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql_user = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado_user = mysqli_query($conexion, $sql_user) or die(mysqli_error($conexion));
    $row_user = mysqli_fetch_array($resultado_user);
} else {
  Header("Location: ../Usuario/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <title>Usuarios</title>
</head>
<body>
    <div id="user-bck">
        <div class="navegacion">
            <a href = "./index.php"><img src="./imagenes/LogoDani-02.png" class="logo"/></a>
            <nav>
                <ul>
                    <li class="barra">
                        <a href="./noticias.php" class="decBarra">Noticias</a>
                    </li>
                    <li class="barra">
                        <a href="./crearNoticia.php" class="decBarra">Crear</a>
                    </li>
                    <li class="barra">
                        <a href="./perfil.php" class="decBarra">Perfil</a>
                    </li>
                    <li class="barra">
                        <a href="./contacto.php" class="decBarra">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div><br>
        <!--Columna derecha-->
        <div class="tabla">
                <table class="table">
                    <thead>
                        <tr>
                            <div class="cabecera">
                                <th>Nombre</th>
                            </div>
                            <div class="cabecera">
                                <th>Apellidos</th>
                            </div>
                            <div class="cabecera">
                                <th>Correo</th>
                            </div>
                            <div class="cabecera">
                                <th>Baneado</th>
                            </div>
                            <div class="cabecera">
                                <th>Estado</th>
                            </div>
                            <div class="cabecera">
                                <th></th>
                            </div>
                            <div class="cabecera">
                                <th></th>
                            </div>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if ($resultado) {
                            while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                                <tr>
                                    <th><?php echo $fila['nombre'] ?></th>
                                    <th><?php echo $fila['apellidos'] ?></th>
                                    <th><?php echo $fila['email'] ?></th>
                                    <th><?php echo $fila['ban'] ?></th>
                                    <th><?php echo $fila['estado'] ?></th>
                                    <?php if ($fila['ban'] == 'No') {?>
                                    <th><a href="./modUsuario.php?id=<?php echo $fila['id'] ?>" id="editar"><img src = "../Usuario/imagenes/669869_edit_512x512.png" width = "50px" heigth = "50px"></a></th>
                                    <?php } else {?>
                                        <th><a href="../Logica/controladorDesbanear.php?id=<?php echo $fila['id'] ?>" id="desbanear"><img src = "../Usuario/imagenes/304167.png" width = "50px" heigth = "50px"></a></th>
                                    <?php } ?>
                                    <th><a href="../Logica/controladorEliminar.php?id=<?php echo $fila['id'] ?>" id="banear"><img src = "../Usuario/imagenes/2048px-High-contrast-edit-delete.svg.png" width = "50px" heigth = "50px"></a></th>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>