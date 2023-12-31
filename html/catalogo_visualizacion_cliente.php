<?php

ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatizacion y mantenimiento</title>
    <link rel="stylesheet" href="../css/catalogo_visualizacion_cliente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(44, 44, 105);">
        <div class="nav container-fluid">
          <img id="logo"src="../imagenes/logo.png" width="95px" alt="">
          <p class="nombre">Automatizacion <br> y mantenimiento</p>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-3 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Repuestos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                      <li><a class="dropdown-item" href="../html/catalogo_videos_cliente.php" id="repuestos"">videos</a></li> 
                      <li><hr class="dropdown-divider bg-light"></li>
                      <li><a class="dropdown-item" href="#" id="contacto">Contactanos aqui</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-4">
                    <a class="nav-link" id="info" href="../html/Inicio_sesion_cliente.php">Informacion de maquina</a>
                </li>
            </ul>
          </div>
          <ul class="navbar-nav mb-2 mb-lg-3 ">
            <li><a class="nav-link" href="../html/Perfil_mostrar_cliente.php" id="info">¿Quienes somos?<i class='bx bx-user-circle' id="icon_user"></i></a></li>
          </ul> 
           <form class="d-flex ms-4">
              <input  id="buscador" class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
          </form>
        </div>     
      </nav>
    <!----------------------APARTADO DE VISUALIZACION DE REPUESTOS----------------------------------->
     
    
    <div  class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-evenly" id="contenedor-repuestos">
        <div class="col-sm-12 col-md-4 col-lg-3 repuesto1 mt-5 mx-2 " style="display: none;" id="repuesto-original">
          <figure>
            <h5 class="mt-3" for="titulo"></h5>
            <img for="img-repuesto" class="repuesto mt-3" src="" height="160" alt="imagen del repuesto">  
            <figcaption class="figure-caption mt-1">
              <p for="descripcion" class="align-content-end "></p>
							<a class="ver mx-4" href="../html/visualizacion_repuesto_cliente.php" onclick="mostrader_detaller('repuesto-original')">Ver más</a>
						</figcaption>           
          </figure>
        </div>
      </div
     
      <!--------------------------------------PAGINACION----------------------------------------------->
      <div class="row" id="page">
        <div class="col-12" id="page">
          <nav aria-label="Page barra">
              <ul class="pagination justify-content-center mt-4" id="paginationList" />
          </nav>
        </div>
      </div>
    <!---------------------------------REDES SOCIALES----------------------------------------------------------------->
    <footer>
        <div class="row">
          <div class="redes">
             <hr class="mt-5">
             <ul class="redes">
                 <span class="facebook"><a href="https://www.facebook.com/automatizacionibague/about" target="_blank"><i class='bx bxl-facebook'></i></a></span>
                 <span class="whatsapp"><a href="https://wa.me/573197029448?text=Quiero saber más de tu producto" "><i class='bx bxl-whatsapp'></i></a></span>
                 <span class="gmail"><a href="mailto: allanheller4@gmail.com"><i class='bx bxl-gmail'></i></a></span>
             </ul>
         </div>
        </div>
    </footer>
   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../indexJs/CatalogoVizualizacionCliente.js"></script>
 
</body>
</html>

<?php
