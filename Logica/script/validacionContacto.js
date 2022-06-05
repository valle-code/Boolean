function validarTexto() {
    var nombre = document.getElementById("nombre").value;
    let tiempo = null;
    clearTimeout(tiempo);
    tiempo = setTimeout(() => {
    
    checkTexto(nombre);
    
    }, 100);
  }

  function validarEmail() {
    var email = document.getElementById("email").value;
    let tiempo = null;
    clearTimeout(tiempo);
    tiempo = setTimeout(() => {
    checkEmail(email);
    }, 400);
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
        !texto.includes(numeros[i])
      ) {
        if (texto.includes(caracteresRaros[i]) || texto.includes(numeros[i])) {
          valido = true;
        }
        i++;
      }
    } else {
        valido = true;
    }
  
    if (!valido) {
      document.getElementById("warning2").innerHTML =
        "El campo no puede contener caracteres especiales ni números";
    } else {
      document.getElementById("warning2").innerHTML = "";
    }
  }

  function checkInputs() {
    var email = document.getElementById("email");
    var mensaje = document.getElementById("mensaje");
  
    if (email.value == "" ||
      mensaje.value == ""
    ) {
      document.getElementById("warning6").innerHTML =
        "Todos los campos son obligatorios";
    }
  }

  function checkEmail(email) {
    var parte1;
    var parte2;
    var parte3;
    var primerChar;
    var caracteresRaros = ["!", "#", "$", "%", "&", "/", "^", "+", "*", "_"];
    var i = 0;
    var condicion = false;
    var aviso = document.getElementById("warning1");

    if (email.length > 0 && email.includes("@") && email.includes(".")) {
      parte1 = email.split("@")[0];
      parte2 = email.split("@")[1];
      parte3 = parte2.split(".")[0];
      primerChar = parte1.charAt(0);
      
      if (parte1.length > 0 && parte2.length > 0 && parte3.length > 0 && parte3 == 'com' || 'es') {
        while ( i < caracteresRaros.length && !parte1.includes(caracteresRaros[i]) && !parte2.includes(caracteresRaros[i]) && !primerChar.includes(caracteresRaros[i])) {
          if (parte1.includes(caracteresRaros[i]) || parte2.includes(caracteresRaros[i]) || primerChar.includes(caracteresRaros[i])) {
            condicion = true;
          }
          i++;
        }

        }
    }
    if (!condicion) {
      aviso.innerHTML = "El email no es valido";
    } else {
      aviso.innerHTML = "";
    }
  }