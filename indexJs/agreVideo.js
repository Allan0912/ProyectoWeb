var tutorial = {};

function agregarVideo() {
  const titulo = document.getElementById("titulo");
  const descripcion = document.getElementById("descripcion");

  if (!localStorage.getItem("tutorial")) {
    var repuesto = [];
    var objectoJson = JSON.stringify(repuesto);
    localStorage.setItem('tutorial', objectoJson);
  }

  if (titulo.value && descripcion.value) {
    console.log(tutorial);
    var repuesto = {
      nombre: titulo.value,
      description: descripcion.value,
      video: localStorage.getItem("videotmp")
    };

    var tutoriales = JSON.parse(localStorage.getItem("tutorial"));
    tutoriales.push(repuesto);

    var objectoJson = JSON.stringify(tutoriales);
    localStorage.setItem('tutorial', objectoJson);
  }
  
  document.getElementById("titulo").value = "";
  document.getElementById("descripcion").value = "";
}


//input.addEventListener('change', e => {
  //var file = e.target.files[0];
   // var reader = new FileReader();

    //reader.onload = function (event) {
     // var videoUrl = event.target.result;
      //document.getElementById('videopreview').src = event.target.result;
     // localStorage.setItem("videotmp", videoUrl);
    //};

    //reader.readAsDataURL(file);
//});