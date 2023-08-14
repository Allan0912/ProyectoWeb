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