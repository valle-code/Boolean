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
    
    <!--favicon-->
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title>Home</title>
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
        <!--Columna izquierda-->      
        <main>
            <div class="columna">
                <h1 id="boolean">Boolean</h1>
                <p id="parrafo1">
                    Boolean es un sitio web en el que tratar sobre temas candentes en nuestra sociedad
                    como pueden ser las estafas de diversos tipos. Desde el punto de vista de la
                    información, se trata de un sitio web que se dedica a la divulgación de información
                    sobre temas que sean de interés general.
                </p>
                <br><br>
                <div id="botones">
                    <a href="./login.php" class="boton">Iniciar sesión</a>
                    <a href="./registro.php" class="boton">Registrarse</a>
                </div>
            </div>
            <!--Columna derecha-->
            <div class="columna" id = "noticias">
                <a href = "https://youtu.be/2gOONm89Nnk?t=2405">
                    <div class="wrapper" id="wrapper1">
                    <h5>Noticia 1</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    </div>
                </a>

                <div class="wrapper" id="wrapper2">
                    <h5>Noticia 2</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>