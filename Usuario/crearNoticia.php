<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="estilos.css" title="style" />
    <script src="../Logica/script/validacionCrear.js"></script>
    <title>Crea tu foro</title>
  </head>
  <body>
    <div class="fondo">
      <div class="foro">
        <a title="atras" href="./index.php"><img src="./imagenes/icons8-atrás-100.png" alt="atrás" /></a>
        <form action="../Logica/controladorCrear.php" method="POST" enctype="multipart/form-data">
          <div class="grupo" id="grupo1">
            <h1>Información del foro</h1>
            <br>
            <div class="caja" id="caja1">
              <h2>Título</h2>
              <br>
              <input type="text" name="nombre" id = "nombre" placeholder="Nombre del foro..." required maxlength="20"/>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
              </div><br>
              <h2>Contenido</h2>
              <br>
              <textarea id="descripcion" name ="descripcion" name = "descripcion" rows="4" cols="50" placeholder="Contenido" maxlength="3000"></textarea><br><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
              </div>
            </div>
          </div>
          <br><br><br>
          <div class="grupo" id="grupo2">
            <h1>Información del administrador</h1>
            <br>
            <div class="caja" id="caja3">
              <h2>Foto</h2>
              <br>
              <input name="archivo" id="archivo" type="file" required/><br>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
              </div><br>
            </div>
            <div class="caja" id="caja4">
              <h2>Autor</h2>
              <br>
              <input type="text" name="autor" id = "autor" placeholder="Tu nombre" required maxlength="20"/><br><br>
              <div class="aviso">
                <p class = "warning" id = "warning1"></p>
            </div><br>
            </div>
            <input type="submit" name="aceptar"  id = "aceptar" value="Aceptar" onclick="checkInputs()"/><br><br>
            <div class="aviso">
              <p class = "warning" id = "warning6"></p>
            </div><br>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
