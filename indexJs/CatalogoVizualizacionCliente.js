window.onscroll = function() {
    var nav = document.querySelector('.nav');
    if (window.pageYOffset > 0) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }
};




getRepuestos();



function listado (repuestos){

console.log(repuestos);
  
var contenedor = document.getElementById('contenedor-repuestos');

var original = document.getElementById("repuesto-original");

for (let i = 0 ; i < repuestos.length; i++) {

  var nuevorepuesto = original.cloneNode(true);

  var titulo = nuevorepuesto.querySelector('h5');

  var parrafo = nuevorepuesto.querySelector('p');

  var img = nuevorepuesto.querySelector ('img')

  titulo.textContent = repuestos[i].titulo;

  parrafo.textContent = repuestos[i].descripcion;

  var imagenbase64 = repuestos [i].imagen_base64;

  img.src = `data:image/jpeg;base64,${imagenbase64}`;

  nuevorepuesto.style["display"]= "block";

  contenedor.appendChild(nuevorepuesto);
  
};
}



function getRepuestos() {
  // URL del archivo PHP que devolverá los registros
  const url = 'http://localhost/proyecto/conexion/obtener_registro.php';

  // Realizar la petición GET
  fetch(url)
  .then(response => response.json())
  .then(data => {
      listado(data);
  })
  .catch(error => {
      console.error('Error al hacer la petición:', error);
  });
}
  