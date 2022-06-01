<?php
require("../Datos/conexion.php");
$sql = "SELECT *  FROM noticia";
$resultado = mysqli_query($conexion, $sql);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <link href=" https://fonts.google.com/css?family=Kanit" rel = "stylesheet">
    <!--favicon-->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Noticias</title>
</head>

<body>
    <!--Barra de navegación-->
    <div class="contenedor">
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
        </div>
        <!--Hazme un div centrado con tarjetas -->
        <div class="algo">
            <div class="tarjeta">
                <div class="texto">
                <?php 
                    if ($resultado) {
                        while ($fila = mysqli_fetch_array($resultado)) {
                ?>
                    <a href = "https://youtu.be/2gOONm89Nnk?t=2405">
                        <div class="wrapper" style="background-image: url('Resources/Noticias/<?php echo($fila['titulo'])?>/<?php echo($fila['foto'])?>')">
                        <h5><?php echo($fila['titulo']) ?></h5>
                        <p>
                            <?php echo($fila['descripcion']) ?>
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
</body>

</html>