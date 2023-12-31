<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatizacion y mantenimiento</title>
    <link rel="stylesheet" href="../css/catalogo_videos_admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(44, 44, 105);">
        <div class="container-fluid">
          <img id="logo"src="../imagenes/logo.png" width="95px" alt="">
          <p class="nombre">Automatizacion <br> y mantenimiento</p>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-2 mb-2 mb-lg-3 mx-3 ">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle " href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Videos
                </a>
                <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                  <li><a class="dropdown-item" href="../html/Catalogo_inicio_sesion.php" id="contacto">Repuestos</a></li>
                </ul>
            </li>
          </ul>
          
            <ul class="navbar-nav me-2 mb-2 mb-lg-3 mx-3 ">
              <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle " href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Historiales
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                    <li><a class="dropdown-item" href="../html/Ordenes_de_servicio.php" id="repuestos">Ordenes de servicio</a></li> 
                    <li><a class="dropdown-item" href="../html/historial_de_clientes.php" id="contacto">Historial de clientes</a></li>
                  </ul>
              </li>
            </ul>
            
            <ul class="navbar-nav me-2 mb-2 mb-lg-3 ">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bx-plus'></i>
                    Agregar
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                    <li><a class="dropdown-item" href="../html/agregar_video.php" id="repuestos">Video</a></li> 
                    <li><a class="dropdown-item" href="../html/Agrega_repuesto.php" id="contacto">Repuesto</a></li>
                  </ul>
              </li>
            </ul>
            <ul class="navbar-nav me-auto  mb-2 mb-lg-3">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registrar
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                    <li><a class="dropdown-item" href="../html/registrar_Usuario.php" id="repuestos">Usuario</a></li> 
                    <li><a class="dropdown-item" href="../html/Registrar_maquina.php" id="contacto">Maquina</a></li>
                  </ul>
              </li>
          </ul>
          <ul class="navbar-nav me-4 mb-2 mb-lg-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-user-circle' id="icon_user"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                <li><a class="dropdown-item" href="../html/perfil_admin.php" id="repuestos">Mi perfil</a></li> 
                <li><a class="dropdown-item" href="../conexion/Cerrar_Sesion.php" id="contacto">Cerrar sesion</a></li>
              </ul>
           </li>
          </ul>
          <form class="d-flex ms-1 mb-2 mx-4">
              <input  id="buscador" class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
          </form>
        </div>
      </div>
    </nav>
 
      <!----------------------APARTADO DE VISUALIZACION DE REPUESTOS----------------------------------->

     <div class="row row-cols-sm-2 row-cols-md-5 row-cols-lg-6 row-cols-xl-6 justify-content-evenly" id="contenedor-videos">
        <div class="col-sm-12 col-md-6 col-lg-5 video1 mt-5 mx-2" id="video-original">
          <figure>
            <h5 class="mt-3">Titulo del video</h5>
            <video src="" height="190" width="370" autoplay muted>
              <source src="Agregar video"  alt="">  
            </video>
            <figcaption class="figure-caption mt-1">
              <p class="align-content-end ">Este es una pequeña descripcion del video Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil distinctio vel</p>
							<a class="ver mx-4" href="#">Ver más</a>
						</figcaption>           
          </figure>
        </div>
        
        


      </div>
      <div class="row">
        <div class="col-12">
          <nav aria-label="Page barra">
            <ul class="pagination justify-content-center mt-4">
              <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
            </ul>
          </nav>
        </div>
      </div>
     

      
      <!---------------------------------REDES SOCIALES----------------------------------------------------------------->
    <footer>
      <div class="row">
        <div class="redes">
          <hr class="mt-5">
          <ul class="redes">
              <span class="facebook"><a href="#"><i class='bx bxl-facebook'></i></a></span>
              <span class="whatsapp"><a href="#"><i class='bx bxl-whatsapp'></i></a></span>
              <span class="gmail"><a href="#"><i class='bx bxl-gmail'></i></a></span>
          </ul>          
        </div>
    </div>
    </footer>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../indexJs/catalogoVideos.js"></script>
  </body>
</html>