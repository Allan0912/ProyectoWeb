const nav = document.querySelector("nav")

window.addEventListener('scroll', function(){
    nav.classList.toggle('bajar',window.scrollY>0)
});

/*const itemsPerPage = 4;
const items = document.querySelectorAll('.video1');
const paginationContainer = document.getElementById('paginationList');

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

showPage(1);
createPaginationButtons();
*/
//buscador de elementos por filtro

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
  