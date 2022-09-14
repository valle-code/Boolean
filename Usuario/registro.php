<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos.css" type="text/css">
  <script src="../Logica/script/validacionRegistro.js"></script>
  <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
  <title>Registrtae</title>
</head>

<body>
  <div id="container">

    <div class="padre">

      <a title="atras" href="../index.php"><img src="./imagenes/icons8-atrás-100.png" alt="atrás"/></a>
      <div id="caja">
        <form action="../Logica/controladorRegistro.php" method="post" id="registro">
          <br>
          <label for class="labelRegistro">Email:</label>
          <input type="text" name="email" id="email" class="inputTexto" required onkeyup="validarEmail()" /><br><br>
          <div class="aviso">
            <p class="warning" id="warning1"></p>
          </div><br>
          <label for class="labelRegistro">Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="inputTexto" required /><br><br>
          <div class="aviso">
            <p class="warning" id="warning2"></p>
          </div><br>
          <label for class="labelRegistro">Apellidos:</label>
          <input type="text" name="apellidos" id="apellidos" class="inputTexto" required /><br><br>
          <div class="aviso">
            <p class="warning" id="warning3"></p>
          </div><br>
          <label for class="labelRegistro">Contraseña:</label>
          <input type="password" name="psw" id="psw" minlength="8" maxlength="16" class="inputTexto" required onkeyup="validarPsw()" /><br><br>
          <div class="aviso">
            <p class="warning" id="warning4"></p>
          </div><br>
          <label for class="labelRegistro">Confirmar contraseña:</label>
          <input type="password" name="psw2" id="psw2" class="inputTexto" minlength="8" maxlength="16" required onkeyup="validarEquals()" /><br><br>
          <div class="aviso">
            <p class="warning" id="warning5"></p>
          </div><br>
          <input type="submit" name="enviar" id="enviar" value="Registrarse" class="submit-border" onclick="checkInputs()" /><br>
          <div class="aviso">
            <p class="warning" id="warning6"></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>