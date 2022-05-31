<?php
require("../Datos/conexion.php");
$id = $_GET["id"];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./estilos.css" type="text/css" />
    <script src="../Logica/script/validacionPerfil.js"></script>
    <title>Perfil</title>
  </head>
  <body>

    <div class="responsive">
      <a title="atras" href="./index.php"><img src="./imagenes/icons8-atrás-100.png" alt="atrás"/></a>
      <div class="perfil">   
            <div class="perfil-img">
              <img class = imgPerfil src="./imagenes/descarga.jpg" alt="Cambia tu imagen de perfil" />
            </div>
          <form>
            <div class="perfil-info">
              <label for>Nombre</label>
              <input type="text" name="nombre" id="nombre" class = "input" placeholder="Nombre" required onkeyup = "validarTexto()"/><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning2"></p>
              </div><br>
              <label for>Apellido</label>
              <input type="text" name="apellido" id="apellido" class = "input" placeholder="Apellido" required onkeyup = "validarTexto()"/><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning3"></p>
              </div><br>
              <label for>Foto</label>
              <div class="lol">
                <input type="file" name="foto" id="foto" class = "input"/>
              </div><br><br>
              <input type="submit" value="Guardar" id = "guardar" required onclick = "checkInputs()"/><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning6"></p>
              </div><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>