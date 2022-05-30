// FUNCIONES DE EVENTOS 
function validarEmail() {
  var email = document.getElementById("email").value;
  let tiempo = null;
  clearTimeout(tiempo);
  tiempo = setTimeout(() => {
  checkEmail(email);
  }, 6000);
}

function validarTexto() {
  var nombre = document.getElementById("nombre").value;
  let tiempo = null;
  clearTimeout(tiempo);
  tiempo = setTimeout(() => {
  checkTexto(nombre);
  }, 6000);
}

function validarPsw() {
  var psw = document.getElementById("psw").value;
  let tiempo = null;
  clearTimeout(tiempo);
  tiempo = setTimeout(() => {
  checkPsw(psw);
  }, 300);
}

function checkInputs() {
  var nombre = document.getElementById("nombre");
  var apellidos = document.getElementById("apellidos");
  var email = document.getElementById("email");
  var psw = document.getElementById("psw");
  var psw2 = document.getElementById("psw2");

  if (nombre.value == "" &&
    apellidos.value == "" &&
    psw.value == "" &&
    psw2.value == "" &&
    email.value == ""
  ) {
    document.getElementById("warning6").innerHTML =
      "Todos los campos son obligatorios";
  }
}

// FUNCIONES DE AYUDA
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

function checkPsw(psw) {
  var valido = false;
  var caracteresRaros = ["!", "#", "$", "%", "&", "/", "^", "+", "*", "_"];
  var numeros = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
  var i = 0;

  if (psw.length >= 8) {
    console.log("entra");
    while (i < caracteresRaros.length && !psw.includes(caracteresRaros[i]) && !psw.includes(numeros[i])) {
      if (psw.includes(caracteresRaros[i]) && psw.includes(numeros[i])) {
        valido = true;
      }
      i++;
    }

    if (!valido) {
      document.getElementById("warning4").innerHTML = "";
      } else {
      document.getElementById("warning4").innerHTML = "La contraseña no es valida";
    }

  } else {
    console.log("hasta la polla")
    document.getElementById("warning4").innerHTML =
      "La contraseña debe tener al menos 8 caracteres";
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


