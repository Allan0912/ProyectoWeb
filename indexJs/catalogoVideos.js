window.onscroll = function() {
    var nav = document.querySelector('.nav');
    if (window.pageYOffset > 0) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }
};



var contenedor = document.getElementById('contenedor-videos');

var tutoriales = JSON.parse(localStorage.getItem("tutorial"));

var original = document.getElementById("video-original");

for (let i = 0; i < tutoriales.length; i++) {

  var nuevoVideo = original.cloneNode(true);

  var titulo = nuevoVideo.querySelector('h5');

  var parrafo = nuevoVideo.querySelector('p');

  var videoElement = nuevoVideo.querySelector('video');

  titulo.textContent = tutoriales[i].nombre;

  parrafo.textContent = tutoriales[i].description;

  videoElement.src = tutoriales[i].video;

  contenedor.appendChild(nuevoVideo);
  
  console.log(tutoriales[i].video);
}




