<?php
include('../conexion/conexion.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $consulta = "SELECT * FROM orden_servicio WHERE id_ORDEN = $id";
  $resultado = mysqli_query($conexion, $consulta);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $identificacion = $row['fk_Usuario_Documento_cliente'];
    $fechai = $row['fecha_insercion'];
    $nombre = $row['Nombre'];
    $descripcioni = $row['Estado_Inicial'];
    $serial = $row['Dispositivo_Serial'];
    $fechaa = $row['fecha_actualizacion'];
    $descrsal = $row['Estado_Final'];
  }
}
ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orden de servicio</title>
</head>

<body>
  <div class="Formulario row">
    <div class="col-12">
    <!-- espacio para el logo --> 
      <div class="Formulario row">
        <div class="col-12">
          <div class="formulario">
            <img src="" height="70" alt="" />
            <p style="color: blue;" class="logo">Automatización y mantenimiento</p>
            <h1 style="color:brown;">Orden de servicio</h1>
            <div class="imgcliente">
              <i class="bx bxs-analyse"></i>
            </div>
            <form method="post">
              <div class="rellenar">
                <label for="rellenar">Nombre del cliente:</label>
                <div><?php echo $nombre ?></div>
              </div>
              <br>
              <div class="rellenar">
                <label for="rellenar">N° de identifiacion:</label>
                <div><?php echo $identificacion ?> </div>
              </div>
              <hr>
              <div class="rellenar" id="formulario2">
                <label>Fecha de ingreso</label>
                <div><?php echo $fechai ?></div>
              </div>
              <br>
              <div class="descripcion_ingreso" id="formulario2">
                <label>Descripción de ingreso</label>
                <textarea name="descripcioni" id="ingreso" cols="30" rows="10" readonly><?php echo $descripcioni ?></textarea>
              </div>
              <div class="rellenar">
                <label>N° serial de maquina:</label>
                <div><?php echo $serial ?></div>
              </div>

              <div class="rellenar" id="formulario2">
                <label>Fecha de actualizacion</label>
                <div><?php echo $fechaa ?></div>
              </div>
              <br>
              <div class="descripcion_actualizacion" id="formulario2">
                <label>Descripcion de actualizacion</label>
                <textarea class="descripcion2" name="descripciona" id="ingreso" cols="30" rows="10" value=""><?php echo $descrsal ?></textarea>
              </div>
              <div>
                <p>Muchas Gracias por Confiar y Adquirir nuestros Servicios !</p>
                <p>Es de nuestro gusto atenderle</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
<?php
$html = ob_get_clean();
//echo $html;

require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getoptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');
//$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('OrdenServicio.pdf', array('Attachment' => false));

?>