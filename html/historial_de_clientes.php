<?php
include('../conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial de clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/historial_de_clientes.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(44, 44, 105);">
    <div class="container-fluid">
      <img id="logo" src="../imagenes/logo.png" width="95px" alt="">
      <p class="nombre">Automatizacion <br> y mantenimiento</p>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-3 ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
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
            <a class="nav-link dropdown-toggle " href="#" id="contenido" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Historial de clientes
            </a>
            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
              <li><a class="dropdown-item" href="../html/Ordenes_de_servicio.php" id="contacto">Ordenes de servicio</a>
              </li>
            </ul>
          </li>
        </ul>


        <ul class="navbar-nav me-2 mb-2 mb-lg-3 ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class='bx bx-plus'></i>
              Agregar
            </a>
            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
              <li><a class="dropdown-item" href="../html/agregar_video.php" id="repuestos">Video</a></li>
              <li><a class="dropdown-item" href="../html/Agrega_Repuesto.php" id="contacto">Repuesto</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-3 ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Registrar
            </a>
            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
              <li><a class="dropdown-item" href="../html/registrar_Usuario.php" id="repuestos"">Usuario</a></li> 
                    <li><a class=" dropdown-item" href="../html/Registrar_maquina.php" id="contacto">Maquina</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav  mb-2 mb-lg-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-4" href="#" id="contenido" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class='bx bx-user-circle' id="icon_user"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="contenido" style="background-color:rgb(44, 44, 105);">
              <li><a class="dropdown-item" href="#" id="repuestos">Mi perfil</a></li>
              <li><a class="dropdown-item" href="../conexion/Cerrar_Sesion.php" id="contacto">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex ms-1 mb-2 mx-4" method="get">
          <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search" name="busqueda" >
          <button class="btn btn-outline-warning" type="submit"  name="enviar" ><i class='bx bx-search'></i></button>
        </form>
        <?php
        $where="";

        if(isset($_GET['enviar'])){
          $busqueda = $_GET['busqueda'];
        
        
          if (isset($_GET['busqueda']))
          {
            $where="WHERE usuario.Documento LIKE'%".$busqueda."%' OR Nombre  LIKE'%".$busqueda."%'
            OR Telefono  LIKE'%".$busqueda."%'";
          }
        } 
        ?>
      </div>
    </div>
  </nav>
  <div class="container">
    <table>
      <thead>
        <tr>
          <th>N° documento</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $consulta = "SELECT Documento, Nombre, Apellidos, Correo FROM usuario $where";
        $result_consul = mysqli_query($conexion, $consulta);
        while ($row = mysqli_fetch_assoc($result_consul)) { ?>
          <tr>
            <td>
              <?php echo $row['Documento'] ?>
            </td>
            <td>
              <?php echo $row['Nombre'] ?>
            </td>
            <td>
              <?php echo $row['Apellidos'] ?>
            </td>
            <td>
              <?php echo $row['Correo'] ?>
            </td>
            <td>
              <a href="../conexion/editarUsuario.php?id=<?php echo $row['Documento']?>">
              <i  class='bx bx-edit-alt' id="icon_editar"></i>
            </a>
            </td>
            <td>
              <a href="../conexion/eliminarUsuario.php?id=<?php echo $row['Documento']?>" class="btn btn-danger">
              <i class='bx bx-message-square-x' id="icon_eliminar"></i>
            </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <script src="../indexJs/ordenes_de_servicio.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>