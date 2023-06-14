window.onscroll = function() {
    var nav = document.querySelector('.nav');
    if (window.pageYOffset > 0) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }
};



var contenedor = document.getElementById('contenedor-repuestos');

var repuestos = JSON.parse(localStorage.getItem("repuestos"));


var original = document.getElementById("repuesto-original");



for (let i = 0 ; i < repuestos.length; i++) {

  var nuevorepuesto = original.cloneNode(true);

  var titulo = nuevorepuesto.querySelector('h5');

  var parrafo = nuevorepuesto.querySelector('p');

  titulo.textContent = repuestos[i].nombre;

  parrafo.textContent = repuestos[i].description;

  contenedor.appendChild(nuevorepuesto);
};




