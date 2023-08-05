// parte del perfil de administrador
const input = document.getElementById('foto');
const img = document.getElementById('avatar');

let files
input.addEventListener('change', e =>{
    var file = e.target.files[0];
        var reader = new FileReader()
        reader.onload = function(event){
            var imageURL = event.target.result
            document.getElementById('avatar').src = event.target.result
            localStorage.setItem('imgtpm', imageURL)
        }
        reader.readAsDataURL(file)
})
// parte del banner de administrador 

const inputBanner = document.getElementById('imagen-banner');
const imgBanner = document.getElementById('foto-banner');

let filesBanner
 inputBanner.addEventListener('change', e =>{
    var filesBanner = e.target.files[0];
        var reader = new FileReader()
        reader.onload = function(eventBanner){
            var imgEvent = eventBanner.target.result
            document.getElementById('foto-banner').src = eventBanner.target.result
            localStorage.setItem('imgFoto', imgEvent)
        }
        reader.readAsDataURL(filesBanner)
 })