<?php
require("../Datos/conexion.php");
//$id = $_GET['id'];

$id = $_GET['id'];


$sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./estilos.css" title="style" />
    <link rel="shortcut icon" href="./imagenes/favicon.png" type="image/x-icon">
    <title>Actualizar</title>
</head>
<body>
<div id="container">
    <div class="padre">
      <a title="atras" href="./usuarios.php"><img src="./imagenes/icons8-atrás-100.png" alt="atrás"/></a>
      <div id="cajaMod">
        <form action="../Logica/controladorActualizar.php?id=<?php echo $row['id_usuario'] ?>" method="POST" id = "registro">
          <label for>Email:</label>
          <input type="text" name="email" id="email" placeholder="email" class="inputTexto" value="<?php echo $row['email']?>"><br><br>  
          <label for>Nombre:</label>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="inputTexto"  value="<?php echo $row['nombre']?>"><br><br>   
          <label for>Apellidos:</label>
          <input type="text" name="apellidos" id="apellidos" placeholder="apellidos" class="inputTexto" value="<?php echo $row['apellidos']?>"><br><br>    
          <label for>Baneado</label>
          <input type="text" name="ban" id="ban" class="inputTexto" value="<?php echo $row['ban']?>"><br><br>
          <label for>Estado</label>
          <input type="text" name="estado" id="estado" class="inputTexto" value="<?php echo $row['estado']?>"><br><br><br>
          <input type="submit" name="actualizar" id="actualizar" value="Actualizar"/><br><br>
        </form>
      </div>
    </div>
  </div>
</body>
</html>