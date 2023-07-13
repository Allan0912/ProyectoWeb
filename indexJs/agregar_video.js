const dropArea = document.querySelector(".drop-area");
const dragText = dropArea.querySelector("h2");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("#input-file");
const Agregar = document.querySelectorAll(".imgAgregar")
let files;

button.addEventListener('click', e => {
    input.click(); //LLama el input quiere decir al explorador de archivos 
});

input.addEventListener('change', e => {
    
    files= this.files;
    dropArea.classList.add("active");
    //cada vez que cambie un archivo se colorea la zona y se aplica el drop-area. active de css
    showFile(files);
    dropArea.classList.remove('active')
});

//mientras que haya elementos para arratrar se activara "dragover"
dropArea.addEventListener("dragover", (e) =>{
    e.preventDefault();
    dropArea.classList.add('active');
    dragText.textContent ="Suelta";
});

// "dragleave" es cuando esta arratrando pero no esta dentro del dropArea
dropArea.addEventListener("dragleave", (e) =>{
    e.preventDefault();
    dropArea.classList.remove('active');
    dragText.textContent ="Arrastra";
});

// "drop" se activa cuando se desea soltar el elemento 
dropArea.addEventListener("drop", (e) =>{
    e.preventDefault();
    files = e.dataTransfer.files;
    showFile(files)
    dropArea.classList.add('active');
    dragText.textContent ="Arrastra y suelta imagen";
});
