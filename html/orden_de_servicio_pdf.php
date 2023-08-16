<?php
include('../conexion/conexion.php');
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
    <form method="post" action="http://localhost/proyecto/conexion/registra_orden_servicio.php" id="form">
            <div class="rellenar">
              <input type="number" name="identificar" onblur="bucar_datos();" required id="identificar" autocomplete="off" />
              <label for="rellenar">N° de identifiacion</label>
            </div>

            <div class="rellenar" id="formulario2">
              <input type="datetime-local" id="fecha_ingreso" style="color: rgba(255, 255, 255, 0.644)" name="fechai" required />
              <label>Fecha de ingreso</label>
            </div>
            <div class="rellenar">
              <input type="text" name="nombre" required id="nombre" readonly style="color: #FFFFFF;" autocomplete="off" />
              <label for="rellenar">Nombre del cliente</label>
            </div>

            <div class="descripcion_ingreso" id="formulario2">
              <label>Descripción de ingreso</label>
              <textarea name="descripcioni" id="ingreso" cols="30" rows="10"></textarea>
            </div>
            <div class="rellenar">
              <input type="number" name="serial" id="serial" required autocomplete="off" />
              <label>N° serial de maquina</label>
            </div>

            <div class="rellenar" id="formulario2">
              <input type="datetime-local" id="fecha_actualizacion" style="color: rgba(255, 255, 255, 0.644)" name="fechaactualizacion" required />
              <label>Fecha de actualizacion</label>
            </div>
            <div class="descripcion_actualizacion" id="formulario2">
              <label>Descripcion de actualizacion</label>
              <textarea class="descripcion2" name="descripciona" id="ingreso" cols="30" rows="10"></textarea>
            </div>
        </form>

<?php
$html=ob_get_clean();
//echo $html;

require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf-> getoptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');
//$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('OrdenServicio.pdf', array('Attachment'=> false));

?>
