<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/Orden_de_servicio copy.css">
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
            <ul class="navbar-nav mb-2 mb-lg-3 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Videos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                      <li><a class="dropdown-item" href="#" id="repuestos"">Repuestos</a></li> 
                      <li><hr class="dropdown-divider bg-light"></li>
                      <li><a class="dropdown-item" href="#" id="contacto">Contactanos aqui</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav me-2 mb-2 mb-lg-3 mx-3 ">
              <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle " href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Orden de servicio
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
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
                    <li><a class="dropdown-item" href="../html/agregar_video.html" id="repuestos">Video</a></li> 
                    <li><a class="dropdown-item" href="../html/Agrega_Repuesto.html" id="contacto">Repuesto</a></li>
                  </ul>
              </li>
          </ul>
          <ul class="navbar-nav me-auto mb-2 mb-lg-3 ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Registrar
                </a>
                <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
                  <li><a class="dropdown-item" href="../html/registra_U.html" id="repuestos"">Usuario</a></li> 
                  <li><a class="dropdown-item" href="../html/Registrar_maquina.html" id="contacto">Maquina</a></li>
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

            <form class="d-flex ms-1 mb-2 mx-4">
              <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
            </form>
          </div>
        </div>
      </nav>

      <!---------------------------------Tabla----------------------------------------------------------------->
  
    <div class="container">
      <table>
        <thead>
          <tr>
            <th class="text-center">N°</th>
            <th class="text-center">Orden de servicio</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <th>Imprimir</th>

      
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td id="orden_servicio">Nombre de la persona de la orden de servicio</td>
            <td id="editar"><i class='bx bx-edit-alt'   id="icon_editar"></i></td>
            <td id="eliminar"><i class='bx bx-message-square-x' id="icon_eliminar" ></i></td>
            <td id="imprimir-orden"> <i class='bx bxs-printer' id="imprimir"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!---------------------------------REDES SOCIALES----------------------------------------------------------------->
    <script src="../indexJs/ordenes_de_servicio.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
</body>
</html>