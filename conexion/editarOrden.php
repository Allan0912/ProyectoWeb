<?php 
include('conexion.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta = "SELECT * FROM orden_servicio WHERE id_ORDEN = $id";
    $resultado = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($resultado)==1){
        $row= mysqli_fetch_array($resultado);
        $identificacion=$row['fk_Usuario_Documento_cliente'];
        $fechai=$row['fecha_insercion'];
        $nombre=$row['Nombre'];
        $descripcioni=$row['Estado_Inicial'];
        $serial=$row['Dispositivo_Serial'];
        $fechaa=$row['fecha_actualizacion'];
        $descrsal=$row['Estado_Final'];
    }
    if(isset($_POST['Actualizar'])){
      $condicion=$_GET['id'];
      $fechaactualizacion=$_POST['fechaactualizacion'];
      $descripciona=$_POST['descripciona'];

      
        $Actualizacoin="UPDATE orden_servicio set fecha_actualizacion = '$fechaactualizacion' , Estado_Final = '$descripciona'
                        WHERE id_ORDEN= $condicion";
        
        echo "<script>alert('Orden de servicio actualizada');</script>";
        mysqli_query($conexion,$Actualizacoin);
        header("location: http://localhost/proyecto/html/Ordenes_de_servicio.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Orden de servicio</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/Formulario_orden_de_servicio.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../imagenes/logo.png" type="image/png" />
</head>

<body>
    <div class="Formulario row">
      <div class="col-12">
        <div class="formulario">
          <img src="../imagenes/logo.png" height="70" alt="" />
          <p class="logo">Automatización y mantenimiento</p>
          <h1>Orden de servicio</h1>
          <div class="imgcliente">
            <i class="bx bxs-analyse"></i>
          </div>
          <form method="post" action="editarOrden.php?id=<?php echo $_GET['id']?>" id="form">
            <div class="rellenar">
              <input type="number" name="identificar" required id="identificar" autocomplete="off" value="<?php echo $identificacion?>" readonly/>
              <label for="rellenar">N° de identifiacion</label>
            </div>

            <div class="rellenar" id="formulario2">
              <input type="datetime-local" id="fecha_ingreso" style="color: rgba(255, 255, 255, 0.644)" name="fechai" value="<?php echo $fechai?>" required readonly/>
              <label>Fecha de ingreso</label>
            </div>
            <div class="rellenar">
              <input type="text" name="nombre"  id="nombre"  style="color: #FFFFFF;" autocomplete="off" value="<?php echo $nombre?>" required readonly/>
              <label for="rellenar">Nombre del cliente</label>
            </div>

            <div class="descripcion_ingreso" id="formulario2">
              <label>Descripción de ingreso</label>
              <textarea name="descripcioni" id="ingreso" cols="30" rows="10"  readonly><?php echo $descripcioni?></textarea>
            </div>
            <div class="rellenar">
              <input type="number" name="serial" id="serial" required autocomplete="off" value="<?php echo $serial?>" readonly/>
              <label>N° serial de maquina</label>
            </div>

            <div class="rellenar" id="formulario2">
              <input type="datetime-local" id="fecha_actualizacion" style="color: rgba(255, 255, 255, 0.644)" name="fechaactualizacion" value="<?php echo $fechaa?>" required />
              <label>Fecha de actualizacion</label>
            </div>
            <div class="descripcion_actualizacion" id="formulario2">
              <label>Descripcion de actualizacion</label>
              <textarea class="descripcion2" name="descripciona" id="ingreso" cols="30" rows="10" value=""><?php echo $descrsal?></textarea>
            </div>

            <div class="row">
              <div class="col-6">
                <input type="submit" value="Cancelar" id="cancelar" onclick="limpiar()" />
              </div>
              <div class="col-6">
                <input type="submit" name="Actualizar" value="Actualizar" id="editar" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>