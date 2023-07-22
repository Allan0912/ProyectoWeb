const nav = document.querySelector("nav")

window.addEventListener('scroll', function(){
    nav.classList.toggle('bajar',window.scrollY>0)
})