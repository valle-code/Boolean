function validarRegistro() {
  var email = document.getElementById("contEmail").value;
  var texto = [document.getElementById("nombre").value, document.getElementById("apellidos").value];
  var contra1 = document.getElementById("psw").value;
  var contra2 = document.getElementById("psw2").value;
  var valido = false;

  if (validarTexto(texto[0]) && validarTexto(texto[1])) {
    if (validarEmail(email)) {
      valido = true;
    }
  } else {
    texto.innerHTML = "El email no es valido";
  }

  return valido;
}

function validarContraseña(contraseña) {
    var valido = false;
    var caracteresRaros = ["!", "#", "$", "%", "&", "/", "^", "+", "*"];
    var numeros = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    var i = 0;
    
    while (i < caracteresRaros.length() && !contraseña.contains(caracteresRaros[i]) && !contraseña.contains(numeros[i])) {
        if ((contraseña.contains(caracteresRaros[i]) && contraseña.contains(numeros[i]))) {
            valido = true;
        }
        i++;
    }
    
    return valido;
}


function validarTexto(texto) {
  return texto.length() == 0;
}

function validarEmail(email) {
  var parte1;
  var parte2;
  var parte3;
  var primerChar;
  var caracteresRaros = ["!", "#", "$", "%", "&", "/", "^", "+", "*"];
  var i = 0;
  var valido = false;

  if (email.contains("@") && email.contains(".")) {
    parte1 = email.split("@")[0];
    parte2 = email.split("@")[1];
    parte4 = parte2.split(".")[1];
    primerChar = parte1.chartAt(0);

    while (
      i < caracteresRaros.length() &&
      primerChar != caracteresRaros[i] &&
      !parte2.contains(caracteresRaros[i])
    ) {
      if (
        (primerChar == caracteresRaros[i] && parte3.equals("com")) ||
        parte3.equals("es")
      ) {
        valido = true;
      }
      i++;
    }
  } else {
    alert("El email no es valido");
  }

  return valido;
}
