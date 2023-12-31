// codigo de paginacion
const itemsPerPage = 3
let items;
const paginationContainer = document.getElementById('paginationList')

//barra de navegacionn estatica
window.onscroll = function() {
    var nav = document.querySelector('.nav');
    if (window.pageYOffset > 0) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }
};


//clonar repuesto 

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

  items = document.querySelectorAll('#repuesto-original');
  showPage(1);
  createPaginationButtons();
}

//pedir el repuesto en php y sql, por medio de fetch

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


function showPage(pageNumber){
  const startIndex = (pageNumber - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  items.forEach((item, index) =>{
    if (index >= startIndex && index < endIndex) {
      item.style.display = 'block';
    }else{
      item.style.display = 'none';
    }
  })
};

function createPaginationButtons (){
  const totalPages = Math.ceil(items.length / itemsPerPage);

  for(let i = 1; i <= totalPages; i++){
    const li = document.createElement('li');
    const link = document.createElement('a');
    link.className = 'page-link';
    link.href = '#';
    link.textContent = i;
    li.appendChild(link);
    li.className = 'page-item'
    li.addEventListener('click', (event) =>{
        event.preventDefault()
        showPage(i)
    })
    paginationContainer.appendChild(li)
  }
};


//buscador por filtros

document.addEventListener("keyup", e => {
  if (e.target.matches('#buscador')) {
    const inputValue = e.target.value.toLowerCase();

    document.querySelectorAll("#repuesto-original").forEach(elementoo => {
      const elementText = elementoo.textContent.toLowerCase();

      if (elementText.includes(inputValue)) {
        elementoo.style.display = 'block';
      } else {
        elementoo.style.display = 'none';
      }
    });
  }
});

document.querySelector('#buscador').addEventListener('keydown', e => {
  if (e.key === 'Enter') {
    e.preventDefault();

  }
});

getRepuestos();
