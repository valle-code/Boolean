function checkInputs() {
    var descripcion = document.getElementById("descripcion");
    var nombre = document.getElementById("autor");
    var titulo = document.getElementById("nombre");
    if (
      descripcion.value == "" ||
      nombre.value == "" ||
      titulo.value == "" 
    ) {
      document.getElementById("warning6").innerHTML =
        "Todos los campos son obligatorios";
    }
  }