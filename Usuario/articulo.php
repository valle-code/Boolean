<?php
require("../Datos/conexion.php");
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql_user = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado_user = mysqli_query($conexion, $sql_user) or die(mysqli_error($conexion));
    $row_user = mysqli_fetch_array($resultado_user);
} else {
   $email = '';
   $psw = '';
}
$id = $_GET['id'];
$sql = "SELECT * FROM noticia INNER JOIN usuario ON id_usuario = id_user AND id = '$id'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title><?php echo ($fila['titulo'])?></title>
</head>

<body>
    <div id="background-wrapper">
        <header>
        <div class="navegacion">
          <a href = "../index.php"><img src="./imagenes/LogoDani-02.png" class="logo"/></a>
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
                    <?php
                    if ($email != '') {
                        if ($row_user['estado'] == 'admin') { ?>
                        <li class="barra">
                            <a href="./usuarios.php" class="decBarra">Usuarios</a>
                        </li>
                    <?php } 
                    }?>
                </ul>
            </nav>
        </header>
        <section>
            <div id="center-image">
                <article>
                    <h1 id = "head"><?php echo ($fila['titulo']) ?></h1><br>
                    <div id="centrar-perfil-autor">
                        <div id="perfil-author">
                            <a href = "./autor.php?id=<?php echo $fila['id_usuario'] ?>"><img src="./imagenes/<?php echo ($fila['foto']) ?>" class="autor" width = "75px" heigth = "75px"/><a>
                            <h5><?php echo ($fila['nombre'] . ' ' . $fila['apellidos']) ?></h5><br>
                        </div>
                    </div>
                    <p><?php echo ($fila['contenido']) ?></p><br><br>    
                </article>
                <article>
                    <div id="imagen">
                        <img id = "img-Articulo" src="./Resources/Noticias/<?php echo ($fila['titulo']) ?>/<?php echo ($fila['imagen']) ?>"  width = "80%" heigth = "80%">
                    </div><br>
                </article>
            </div>
        </section>
        
    </div>
</body>
</html>