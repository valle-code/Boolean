<?php
require("../Datos/conexion.php");
$id = $_GET['id'];
$sql = "SELECT *  FROM noticia WHERE id = '$id'";
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
                </ul>
            </nav>
        </header>
        <section>
            <article>
                <h1 id = "head"><?php echo ($fila['titulo']) ?></h1><br><br>
                <p><?php echo ($fila['contenido']) ?></p>
            </article><br><br>
            <article>
                <div id="imagen">
                    <img id = "img-Articulo" src="./Resources/Noticias/<?php echo ($fila['titulo']) ?>/<?php echo ($fila['foto']) ?>"  width = "700px" heigth = "700px">
                </div>
            </article>
        </section>
    </div>
</body>

</html>