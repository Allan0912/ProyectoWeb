function mostrarCodigo() {
  
  var opcionSeleccionada = document.querySelector('input[name="tipusu"]:checked').value;

  var codigoElemento = document.getElementById("rellena");

  // Lógica para agregar o eliminar la línea de código según la opción seleccionada
  switch (opcionSeleccionada) {

    case 'desple2':
      codigoElemento.innerHTML = `
        <label>Crear Contraseña</label>
        <input type="password" required>
      `;

      break;

    case 'desple1':
      codigoElemento.innerHTML = '';

      break;
  }
}
