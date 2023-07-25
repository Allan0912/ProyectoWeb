/*primero se llama todos los elementos a utilizar */ 
const dropArea = document.querySelector(".drop-area");
const dragText = dropArea.querySelector("h2");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("#input-file");
const Agregar = document.querySelectorAll(".imgAgregar")

let files;

input.addEventListener('change', e => {
    var file = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function (event) {
        var imageUrl = event.target.result;
        document.getElementById('imgpreview').src = event.target.result;
        localStorage.setItem("imgtmp", imageUrl);
      };

      reader.readAsDataURL(file);
});

//mientras que haya elementos para arratrar se activara "dragover"
dropArea.addEventListener("dragover", (e) =>{
    e.preventDefault();
    dropArea.classList.add('active');
    dragText.textContent ="Suelta para agregar imagen";
});

// "dragleave" es cuando esta arratrando pero no esta dentro del dropArea
dropArea.addEventListener("dragleave", (e) =>{
    e.preventDefault();
    dropArea.classList.remove('active');
    dragText.textContent ="Arrastra y suelta imagen";
});

// "drop" se activa cuando se desea soltar el elemento 
dropArea.addEventListener("drop", (e) =>{
    e.preventDefault();
    files = e.dataTransfer.files;
    showFile(files)
    dropArea.classList.add('active');
    dragText.textContent ="Arrastra y suelta imagen";
});



//funcion para la validacion de archivos


//funcion para la validacion de archivos
//funcion para eliminar el h2 cuando se agrega una imagen 
const h2 = document.querySelector("#h2texto");

input.addEventListener("change",function(){
    if(input.files && input.files[0]){
        //mostrar imagen 
        const reader = new FileReader()
        
        reader.onload = function (e){
            Agregar.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0])
        h2.style.display = "none"
    }
   
})