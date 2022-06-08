<?php
require("../Datos/conexion.php");
// inicia la sesion con email 
session_start();
$email = '';
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

$sql = "SELECT * FROM noticia INNER JOIN usuario ON id_usuario = id_user AND ban = 'No' ORDER BY id DESC LIMIT 2";
$resultado = mysqli_query($conexion, $sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <!-- normalize css -->

    <!--favicon-->
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <!--Barra de navegación-->
    <div class="contenedor">
        <div id="nav-row">
            <div class="navegacion">
                <a href="./index.php"><img src="./imagenes/LogoDani-02.png" class="logo" /></a>
                <nav>
                    <ul>
                        <li class="barra" id="barra1">
                            <a href="./noticias.php" class="decBarra">Noticias</a>
                        </li>

                        <li class="barra" id="barra2">
                            <a href="./crearNoticia.php" class="decBarra">Crear</a>
                        </li>
                        <!-- <li class="barra">
                        <a href="./perfil.php "class="decBarra">Perfil</a>
                    </li> -->

                        <li class="barra" id="barra3">
                            <a href="./contacto.php" class="decBarra">Contacto</a>
                        </li>

                        <?php
                        if ($email != '') {
                            if ($row_user['estado'] == 'admin') {
                        ?>
                                <li class="barra" id="barra4">
                                    <a href="./usuarios.php" class="decBarra">Usuarios</a>
                                </li>
                        <?php }
                        } ?>


                    </ul>
                </nav>
            </div>
            <!-- identificación de la cuenta en index -->
            <div class="identificacion">
                <?php if ($email != '') { ?>
                    <a href = "./perfil.php"><img src="./imagenes/<?php echo $row_user['foto']; ?>" id="imgId" heigth = "75px" width = "75px"/></a>
                <?php } ?>
            </div>
        </div>
        <!--Columna izquierda-->
        <main>
            <div class="columna">
                <h1 id="boolean">Boolean</h1>
                <p id="parrafo1">
                    Boolean es un sitio web en el que tratar sobre temas candentes en nuestra sociedad,
                    como pueden ser las estafas de diversos tipos, noticias más recientes o eventos deportivos. Desde el punto de vista de la
                    información, se trata de un sitio web que se dedica a la divulgación de información
                    sobre temas que sean de interés general, desde una perspectiva neutral y objetiva.
                </p>
                <br><br>
                <div id="botones">
                    <div class="btnLogin">
                        <?php if ($email != '') { ?>
                            <a href="../Logica/controladorCerrar.php" class="boton">Cerrar sesión</a>
                        <?php } else { ?>
                            <a href="./login.php" class="boton">Iniciar sesión</a>
                        <?php } ?>
                    </div>
                    <div class="btnReg">
                        <a href="./registro.php" class="boton">Registrarse</a>
                    </div>
                </div>
            </div>
            <!--Columna derecha-->
            <div class="columna" id="noticias">
                <div class="arreglo">
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
    </main>
    </div>
</body>

</html>