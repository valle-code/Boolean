<?php
require("../Datos/conexion.php");
session_start();

$id = $_GET['id'];
$sql = "SELECT titulo, descripcion, contenido, noticia.foto AS imagen, nombre, apellidos FROM noticia INNER JOIN usuario ON usuario.id = id_user AND noticia.id = '$id'";
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
    <title><?php echo ($fila['titulo'])?></title>
</head>

<body>
    <div id="background-wrapper">
        <header>
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
            <article>
                <h1 id = "head"><?php echo ($fila['titulo']) ?></h1><br>
                <p><?php echo ($fila['contenido']) ?></p><br><br>
            </article>
            <article>
                <div id="imagen">
                    <img id = "img-Articulo" src="./Resources/Noticias/<?php echo ($fila['titulo']) ?>/<?php echo ($fila['imagen']) ?>"  width = "700px" heigth = "700px">
                </div><br>
                <footer>
                        <?php echo("Hecho por ".$fila['nombre'].' '.$fila['apellidos'])?>
                </footer>
            </article>
        </section>
        
    </div>
</body>
</html>