<?php
require("../Datos/conexion.php");
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql_user = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado_user = mysqli_query($conexion, $sql_user) or die(mysqli_error($conexion));
    $row_user = mysqli_fetch_array($resultado_user);
} else {
   $email = '';
   $psw = '';
}
$id = $_GET['id'];
$sql = "SELECT * FROM noticia INNER JOIN usuario ON id_usuario = id_user AND id_usuario = '$id'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado);
$registros = mysqli_num_rows($resultado);
if ($registros == 0) {
    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($resultado);
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
    <div class="perfil-autor">
      <img class=imgPerfil src="./imagenes/<?php echo ($fila['foto']) ?>" heigth="200px" width="200px" alt="Cambia tu imagen de perfil" /><br>
      <div class="nombreAutor"><h1><?php echo($fila['nombre'].' '.$fila['apellidos']) ?></h1></div>
    </div><br>
    <div class="info-autor">
      <div class="arregloAutor">
        <div class="articulos-autor">
            <?php if ($registros == 0) { ?>
                <h1 id = "avisoArt">Este usuario no ha publicado nada</h1>
            <?php } else { ?>
            <?php
                $sql = "SELECT * FROM noticia INNER JOIN usuario ON id_usuario = id_user AND id_usuario = '$id'";
                $resultado = mysqli_query($conexion, $sql);
                while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <a href="./articulo.php?id=<?php echo $fila['id'] ?>">
                <div class="wrapper" style="background-image: url('Resources/Noticias/<?php echo ($fila['titulo']) ?>/<?php echo ($fila['imagen']) ?>')">
                    <h5><?php echo ($fila['titulo']) ?></h5>
                    <p>
                        <?php echo ($fila['descripcion']) ?>
                    </p>
                </div>
            </a>
            <?php } ?>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>