function validarEmail() {
    var email = document.getElementById("email").value;
    let tiempo = null;
    clearTimeout(tiempo);
    tiempo = setTimeout(() => {
    checkEmail(email);
    }, 400);
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
    var psw = document.getElementById("psw");
    var email = document.getElementById("email");
    if (
      psw.value === "" ||
      email.value === ""
    ) {
      document.getElementById("warning2").innerHTML =
        "Todos los campos son obligatorios";
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
        document.getElementById("warning1").innerHTML = "";
        } else {
        document.getElementById("warning1").innerHTML = "La contraseña no es valida";
      }
  
    } else {
      document.getElementById("warning1").innerHTML =
        "La contraseña debe tener al menos 8 caracteres";
    }
  }

  function checkEmail(email) {
    var aviso = document.getElementById("warning6");

    if (email.length > 0 && email.includes("@")) {
      aviso.innerHTML = "";
    } else {
      aviso.innerHTML = "El email no es valido";
    }
  }