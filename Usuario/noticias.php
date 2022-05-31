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
                  <div class="wrapper" id="wrapper1">
                    <h5>Noticia 1</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <div class="wrapper" id="wrapper1">
                    <h5>Noticia 1</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="wrapper" id="wrapper1">
                  <h5>Noticia 1</h5>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>

</html>