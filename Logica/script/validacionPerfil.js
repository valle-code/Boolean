function validarTexto() {
    var nombre = document.getElementById("nombre").value;
    let tiempo = null;
    clearTimeout(tiempo);
    tiempo = setTimeout(() => {
    
        checkTexto(nombre);
    
    }, 6000);
  }

function checkTexto(texto) {
    var caracteresRaros = ["!", "#", "$", "%", "_", "&", "/", "^", "+", "*"];
    var numeros = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    var i = 0;
    var valido = false;
    if (texto.length >= 1) {
      while (
        i < caracteresRaros.length &&
        !texto.includes(caracteresRaros[i]) &&
        !texto.inludes(numeros[i])
      ) {
        if (texto.includes(caracteresRaros[i]) || texto.includes(numeros[i])) {
          valido = true;
        }
        i++;
      }
    }
  
    if (!valido) {
      document.getElementById("warning2").innerHTML =
        "El campo no puede contener caracteres especiales ni números";
      document.getElementById("warning3").innerHTML =
        "El campo no puede contener caracteres especiales ni números";
    } else {
      document.getElementById("warning2").innerHTML = "";
      document.getElementById("warning3").innerHTML = "";
    }
  }

  function checkInputs() {
    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellido");
  
    if (nombre.value == "" ||
      apellidos.value == ""
    ) {
      document.getElementById("warning6").innerHTML =
        "Todos los campos son obligatorios";
    }
  }