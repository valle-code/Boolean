
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    
    <script src="../Logica/validacionContacto.js"></script>
    <title>Contacto</title>
</head>

<body>
    <!--Barra de navegación-->
    <div id = "contenedorId">
        <div class="navegacion">
            <a href = "./index.php"><img src="./imagenes/LogoDani-02.png" class="logo"/></a>
            <nav>
                <ul>
                    <li class="barra">
                        <a href="./index.php" class="decBarra">Home</a>
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
        <!---->
        <div id = "contcontainer">
            <div class = "padre">
              <div id = "logcaja">
                <form action="#" method="post">
                    <div id = "campos">
                        <label for>Email:</label>
                        <input type="text" name="email" id="email" class = "cotEmail" required placeholder = "Tu email" onkeyup = "validarEmail()"/><br><br>
                        <div class="aviso">
                            <p class = "warning" id = "warning1"></p>
                        </div><br>
                        <label>Mensaje:</label>
                        <input type="text" name="mensaje" id="mensaje" required placeholder = "Escribe tu mensaje..." onkeyup = "validarTexto()"/><br><br>
                        <div class="aviso">
                            <p class = "warning" id = "warning2"></p>
                        </div><br>
                        <input type="submit" name="contenviar" id="contenviar" value = "Enviar" onclick="checkInputs()"><br><br>
                        <div class="aviso">
                            <p class = "warning" id = "warning6"></p>
                        </div><br>
                    </div>  
                </form>
               </div>
            </div>
        </div>
    </div>
</body>

</html>