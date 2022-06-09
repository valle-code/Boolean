<?php
require("../Datos/conexion.php");
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql_user = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado_user = mysqli_query($conexion, $sql_user) or die(mysqli_error($conexion));
    $row_user = mysqli_fetch_array($resultado_user);
    $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
    $resultado = mysqli_query($conexion, $sql);
    if (isset($_POST['buscar'])) {
        $nombre = $_POST['busqueda'];
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%' ORDER BY id_usuario DESC";
        $resultado = mysqli_query($conexion, $sql);
    } else {
        $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
        $resultado = mysqli_query($conexion, $sql);
    }
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
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title>Usuarios</title>
</head>

<body>
    <div id="user-bck">
        <div class="navegacion">
            <a href="./index.php"><img src="./imagenes/LogoDani-02.png" class="logo" /></a>
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
        <form action="./usuarios.php" method="POST" enctype="multipart/form-data">
            <div class="flex-row">
                <input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
                <input type="submit" name="buscar" id="buscar" value="Buscar">
            </div>
        </form>
        <div class="tabla">
            <div id="insertar"><a href = "./insertar.php"><img id = "insertar-img" src="./imagenes/insertar.png"></a></div>
            <table class="table">
                <thead>
                    <tr>
                        <div class="cabecera">
                            <th></th>
                        </div>
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
                                <th><a href="./autor.php?id=<?php echo $fila['id_usuario'] ?>"><img src="../Usuario/imagenes/<?php echo $fila['foto'] ?>" id="user" heigth="50px" width="50px"></a></th>
                                <th><?php echo $fila['nombre'] ?></th>
                                <th><?php echo $fila['apellidos'] ?></th>
                                <th><?php echo $fila['email'] ?></th>
                                <th><?php echo $fila['ban'] ?></th>
                                <th><?php echo $fila['estado'] ?></th>
                                <?php if ($fila['ban'] == 'No') { ?>
                                    <th><a href="./modUsuario.php?id=<?php echo $fila['id_usuario'] ?>" id="editar"><img src="../Usuario/imagenes/669869_edit_512x512.png" width="50px" heigth="50px"></a></th>
                                <?php } else { ?>
                                    <th><a  href="../Logica/controladorDesbanear.php?id=<?php echo $fila['id_usuario'] ?>" id="desbanear"><img src="../Usuario/imagenes/304167.png" width="50px" heigth="50px"></a></th>
                                <?php } ?>
                                <th><a href="../Logica/controladorEliminar.php?id=<?php echo $fila['id_usuario'] ?>" id="banear"><img src="../Usuario/imagenes/2048px-High-contrast-edit-delete.svg.png" width="50px" heigth="50px"></a></th>
                            </tr>

                        <?php
                        }
                    } else {
                        ?>
                        <h1>No se encuantran usuarios</h1>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>