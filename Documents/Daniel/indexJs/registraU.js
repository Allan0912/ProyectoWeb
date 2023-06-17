function mostrarCodigo() {
  
  var opcionSeleccionada = document.querySelector('input[name="tipusu"]:checked').value;

  var codigoElemento = document.getElementById("rellena");

  // Lógica para agregar o eliminar la línea de código según la opción seleccionada
  switch (opcionSeleccionada) {

    case "2":
      codigoElemento.innerHTML = `
      
        <label>Crear Contraseña</label>
        <input type="password" name="contraseña" action="http://localhost/proyecto/conexion/registrar_Usuario.php" required>
      `;

      break;

    case "1":
      codigoElemento.innerHTML = '';

      break;
  }
}
