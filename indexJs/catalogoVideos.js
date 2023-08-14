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

//buscador por filtros

document.addEventListener("keyup", e => {
  if (e.target.matches('#buscador')) {
    const inputValue = e.target.value.toLowerCase();

    document.querySelectorAll("#video-original").forEach(videoo => {
      const elementText = videoo.textContent.toLowerCase();

      if (elementText.includes(inputValue)) {
        videoo.style.display = 'block';
      } else {
        videoo.style.display = 'none';
      }
    });
  }
});

document.querySelector('#buscador').addEventListener('keydown', e => {
  if (e.key === 'Enter') {
    e.preventDefault();

  }
});