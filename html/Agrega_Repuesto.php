<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Agregar repuesto</title>

  <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png">

  <link rel="stylesheet" href="../css/agregar_repuesto.css">

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

              Videos

            </a>

            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">

              <li><a class="dropdown-item" href="#" id="repuestos"">Repuestos</a></li> 

                      <li><hr class=" dropdown-divider bg-light"></li>

              <li><a class="dropdown-item" href="#" id="contacto">Contactanos aqui</a></li>

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

              Agregar repuestos

            </a>

            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">

              <li><a class="dropdown-item" href="agregar_video.php" id="repuestos"">Agregar videos</a></li> 

              <!--<li><a class=" dropdown-item" href="../html/Agrega_Repuesto.php" id="contacto">Repuesto</a></li> -->

            </ul>

          </li>

        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-3 ">

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">

              Registrar

            </a>

            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">

              <li><a class="dropdown-item" href="../html/registrar_Usuario.php" id="repuestos"">Usuario</a></li> 

                  <li><a class=" dropdown-item" href="Registrar_maquina.php" id="contacto">Maquina</a></li>

            </ul>

          </li>

        </ul>
        <ul class="navbar-nav  mb-2 mb-lg-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='bx bx-user-circle' id="icon_user"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
              <li><a class="dropdown-item" href="#" id="repuestos">Mi perfil</a></li>
              <li><a class="dropdown-item" href="../conexion/Cerrar_Sesion.php" id="contacto">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>

      </div>

      <form class="d-flex justify-content-end mb-2 mx-4">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>

      </form>

    </div>




  </nav>










  <!--Apartado para agregar-->
  <form  method="post" action="http://localhost/proyecto/conexion/agregar_producto.php" enctype="multipart/form-data">
    <div class="row mx-4">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 mt-2">
        <div class="input_icon">
          <input type="text" name="titulo" placeholder="Escribe el titulo del repuesto" id="clave" required autocomplete="off">
          <i class='bx bx-edit-alt' id="editar"></i>
        </div>
        <div class="drop-area">
          <h2 id="h2texto">Agregar imagen</h2>
          <img class="imgAgregar" id="imgpreview" style="width: 400px;" alt="">
          <label for="input-file">Seleccionar archivo</label>
          <input type="file" name="imagen" id="input-file" required>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mt-5">
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" 
        placeholder="Agregar una pequeña descripcion..."
        required></textarea>
        <button  class="agregar" id="publicar_repuesto" type="submit">Publicar</button>

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
      </div>
    </div>
  </form>
  

  <script src="../indexJs/agrega_repuesto_explorador_archivos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="../indexJs/AgreRepuesto.js"></script>

</body>

</html>