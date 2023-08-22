const itemsPerPage = 2;
let items;
const paginationContainer = document.getElementById('paginationList');


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




//clonar repuesto 

getvideo();

function listado (video){

console.log(video);
  
var contenedor = document.getElementById('contenedor-videos');

var original = document.getElementById("video-original");


for (let i = 0 ; i < video.length; i++) {

  var nuevideo = original.cloneNode(true);

  var titulo = nuevideo.querySelector('h5');

  var parrafo = nuevideo.querySelector('p');

  var videoo = nuevideo.querySelector ('iframe')

  titulo.textContent = video[i].titulo;

  parrafo.textContent = video[i].descripcion;

  videoo.src = video[i].video_link; 


  //var imagenbase64 = video [i].imagen_base64;

  //img.src = `data:image/jpeg;base64,${imagenbase64}`;

  nuevideo.style["display"]= "block";
  

  
  contenedor.appendChild(nuevideo);
  };  
  items = document.querySelectorAll('.video1'); 
  showPage(1);
  createPaginationButtons();
}

//pedir el repuesto en php y sql, por medio de fetch

function getvideo() {
  // URL del archivo PHP que devolverá los registros
  const url = 'http://localhost/proyecto/conexion/obtener_video.php';

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




function showPage(pageNumber) {
    const startIndex = (pageNumber - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;

    items.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    })
};

function createPaginationButtons () {
    const totalPages = Math.ceil(items.length / itemsPerPage);

    for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement('li');
        const link = document.createElement('a');
        link.className= "page-link";
        link.href= "#";
        link.textContent = i;
        li.appendChild(link);
        li.className = "page-item";
        li.addEventListener('click', (event) => {
            event.preventDefault();
            showPage(i);
        });
        paginationContainer.appendChild(li);
    }
};

