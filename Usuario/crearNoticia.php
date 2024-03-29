<?php 
// requiere inicio de sesion
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
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <script src="../Logica/script/validacionCrear.js"></script>
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title>Crea tu foro</title>
  </head>
  <body>
    <div class="fondo">
      <div class="foro">
        <a title="atras" href="../index.php"><img src="./imagenes/icons8-atrás-100.png" alt="atrás" /></a>
        <form action="../Logica/controladorCrear.php?id=<?php echo $row_user['id_usuario'] ?>" method="POST" enctype="multipart/form-data">
          <div class="grupo" id="grupo1">
            <h1>Información del foro</h1>
            <br>
            <div class="caja" id="caja1">
              <h2 class = "label">Título</h2>
              <br>
              <input type="text" name="nombre" id = "nombre" placeholder="Nombre del foro..." required maxlength="20"/>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
              </div><br>
              <h2 class = "label">Contenido</h2>
              <br>
              <textarea id="contenido" name ="contenido" rows="20" cols="100" placeholder="Contenido" maxlength="8000"></textarea><br><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
              </div>
            </div>
          </div>
          <br><br><br>
          <div class="grupo" id="grupo2">
            <h1>Información del administrador</h1>
            <br>
            <h2 class = "label" id = "labelfoto">Foto</h2>
            <div class="caja" id="caja3">
              
              <br>
              <input name="archivo" id="archivo" type="file" required/><br>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
              </div><br>
            </div>
            <div class="caja" id="caja4">
              <h2 class = "label">Descripcion</h2>
              <br>
              <textarea id="descripcion" name ="descripcion" rows="4" cols="100" placeholder="Breve descripcion.... " maxlength="300"></textarea><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
            </div><br>
            </div>
            <input type="submit" name="aceptar"  id = "aceptar" value="Aceptar" class = "crear-input" onclick="checkInputs()"/><br><br>
            <div class="aviso">
              <p class = "warning" id = "warning6"></p>
            </div><br>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
