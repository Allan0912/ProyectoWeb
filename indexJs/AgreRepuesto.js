//agrega los valores de titulo, img y descripcion a los nuevos div

var repuestos ={};

function agregarElemento (){
    const clave = document.getElementById("clave");
    const descripcion = document.getElementById("descripcion")

    if(!localStorage.getItem("repuestos")){

        var repuesto = [];
        var objectoJson = JSON.stringify(repuesto);
        localStorage.setItem('repuestos', objectoJson);

    }

    if (clave.value && descripcion.value){
        console.log(repuestos);
        var repuesto = { 

            nombre: clave.value,
            description: descripcion.value,
            img: localStorage.getItem("imgtmp")

          };

          var repuestos = JSON.parse(localStorage.getItem("repuestos"));
          repuestos.push(repuesto);


          var objectoJson = JSON.stringify(repuestos);

          localStorage.setItem('repuestos', objectoJson);
    }
    document.getElementById("clave").value = "";
    document.getElementById("descripcion").value = "";
}

