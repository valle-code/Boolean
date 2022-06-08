<?php
require("../Datos/conexion.php");
session_start();
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
  $sql_user = "SELECT * FROM usuario WHERE email = '$email'";
  $resultado_user = mysqli_query($conexion, $sql_user) or die(mysqli_error($conexion));
  $row_user = mysqli_fetch_array($resultado_user);
} else {
  Header("Location: ../Usuario/login.php");
}
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
    <div class="navegacion">
      <a href="./index.php"><img src="./imagenes/LogoDani-02.png" class="logo" /></a>
      <nav>
        <ul>
          <li class="barra">
            <a href="./noticias.php" class="decBarra">Noticias</a>
          </li>
          <li class="barra">
            <a href="./crearNoticia.php" class="decBarra">Crear</a>
          </li>
          <li class="barra">
            <a href="./contacto.php" class="decBarra">Contacto</a>
          </li>
          <?php
          if ($email != '') {
            if ($row_user['estado'] == 'admin') {
          ?>
              <li class="barra">
                <a href="./usuarios.php" class="decBarra">Usuarios</a>
              </li>
          <?php }
          } ?>
        </ul>
      </nav>
    </div><br><br>
    <div class="perfil-img">
      <img class=imgPerfil src="./imagenes/<?php echo ($row_user['foto']) ?>" heigth="200px" width="200px" alt="Cambia tu imagen de perfil" />
    </div><br>
    <div class="info">
      <div class="arregloPerfil">
        <div class="perfil">
          <form action="../Logica/controladorPerfil.php?id=<?php echo $row_user['id_usuario'] ?>" method="POST" enctype="multipart/form-data">
            <div class="perfil-info">
              <label for>Nombre</label>
              <input type="text" name="nombre" id="nombre" class="input" placeholder="Nombre" value="<?php echo $row_user['nombre'] ?>" required onkeyup="validarTexto()" /><br><br>
              <div class="aviso">
                <p class="warning" id="warning2"></p>
              </div>
              <label for >Apellidos</label>
              <input type="text" name="apellido" id="apellido" class="input" placeholder="Apellido" value="<?php echo $row_user['apellidos'] ?>" required onkeyup="validarTexto()" /><br><br>
              <div class="aviso">
                <p class="warning" id="warning3"></p>
              </div>
              <div class="lol">
                <input type="file" name="foto" id="foto" value="<?php echo $row_user['foto'] ?>" class="input" />
              </div><br>
              <input type="submit" value="Guardar" id="guardar" name="guardar" class = "btn-perfil"onclick="checkInputs()" /><br><br>
              <div class="aviso">
                <p class="warning" id="warning6"></p>
              </div><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>