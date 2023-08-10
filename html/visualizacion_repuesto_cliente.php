<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nombre del repuesto</title>
  <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">
  <link rel="stylesheet" href="../css/Visualizacion_repuesto_cliente.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(44, 44, 105);">
    <div class="container-fluid">
      <img id="logo" src="../imagenes/logo.png" height="90px" alt="">
      <p class="nombre">Automatizacion <br> y mantenimiento</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-3 ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contenido
            </a>
            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
              <li><a class="dropdown-item" href="../html/catalogo_visualizacion_cliente.php" id="repuestos"">Repuestos</a></li> 
              <li><a class="dropdown-item" href="../html/catalogo_videos_cliente.php" id="repuestos"">Videos</a></li> 
              <li><hr class=" dropdown-divider bg-light"></li>
              <li><a class="dropdown-item" href="#" id="contacto">Contactanos aqui</a></li>
            </ul>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link" id="info" href="../html/Inicio_sesion_cliente.php">Informacion de maquina</a>
          </li>      
        </ul>
      </div>
      <ul class="navbar-nav mb-2 mb-lg-3 ">
        <li><a class="nav-link" href="../html/Perfil_mostrar_cliente.php" id="info">¿Quién soy?<i class='bx bx-user-circle' id="icon_user"></i></a></li>
      </ul> 

      <form class="d-flex justify-content-end mb-2 mx-4">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
      </form>
    </div>
  </nav>


  <!-------------------------------------APARTADO AGREGAR------------------------------------->

  <div class="row mx-4">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 mt-4">
      <div class="input_icon">
        <p id="clave">se debe mostrar el titulo del repuesto</p>
      </div>
      <div class="drop-area">
        <img src="../imagenes/prueba.jpg" class="imgAgregar" id="imgpreview" style="width: 400px;" alt="">
        <input type="file" name="" id="input-file" hidden>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mt-5" id="whatsapp">
      <p name="" id="descripcion" cols="30" rows="10">Se debe mostrar descripcion </p>
      <a href="https://wa.me/57?text=Quiero saber más de tu producto" target="_blank">
        <button class="btn btn-success w-100">
          <div class="row">
            <div class="col-2">
              <i class='bx bxl-whatsapp icon' id="icon"></i>
            </div>
            <div class="col-10">
              <h3>Whatsapp</h3>
            </div>
          </div>
        </button>
      </a>
   
    </div>

  </div>

  </div>

  <script src="../indexJs/agrega_repuesto_explorador_archivos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="../indexJs/AgreRepuesto.js"></script>
  <script src="../indexJs/CatalogoVizualizacionCliente.js" ></script>

</body>

</html>