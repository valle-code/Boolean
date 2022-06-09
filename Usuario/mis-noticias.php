<?php
require("../Datos/conexion.php");
session_start();
$email = '';
$id = $_GET['id'];
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql_user = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado_user = mysqli_query($conexion, $sql_user) or die(mysqli_error($conexion));
    $row_user = mysqli_fetch_array($resultado_user);
} else {
    $email = '';
    $psw = '';
    $row_user['estado'] = '';
}

$sql = "SELECT *  FROM noticia INNER JOIN usuario ON id_usuario = id_user WHERE id_usuario = '$id'";
$resultado = mysqli_query($conexion, $sql);

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <link href=" https://fonts.google.com/css?family=Kanit" rel="stylesheet">
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title>Mis noticias</title>
</head>

<body>
    <!--Barra de navegación-->
    <div class="contenedor-news">
        <div id="nav-row">
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
                            <a href="./contacto.php" class="decBarra">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="identificacion">
                <?php if ($email != '') { ?>
                    <a href = "./perfil.php"><img src="./imagenes/<?php echo $row_user['foto']; ?>" id="imgId" heigth = "50px" width = "50px"/></a>
                <?php } ?>
            </div>
        </div><br><br><br><br>
        <div class="algo">
            <div class="tarjeta">
                <div class="texto">
                    <div id="arreglo3">
                        <?php
                        if ($resultado) {
                            while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                                <a href="./articulo.php?id=<?php echo $fila['id'] ?>">
                                    <div class="wrapper" style="background-image: url('Resources/Noticias/<?php echo ($fila['titulo']) ?>/<?php echo ($fila['imagen']) ?>')">
                                        <h5><?php echo ($fila['titulo']) ?></h5>
                                        <p>
                                            <?php echo ($fila['descripcion']) ?>
                                        </p>
                                    </div>
                                </a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>