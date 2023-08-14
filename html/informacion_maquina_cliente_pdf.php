<?php

ob_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de tu maquina</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/informacion_maquina_cliente_pdf.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="body">
    <div class="container">
       
        <h2 class="logo">
        <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/proyecto/imagenes/logo.png" class="logo" height="130" alt="" />
        Automatización y mantenimiento
        </h2>
        <div class="container-info" id="container-info">
            <div class="column1">
                <h4>Datos personales</h4>
                <div class="dates">
                    <label for="identificacion" name="identificacion">N°identificacion:</label>
                    <input type="number" name="identificacion">
                </div>
                <div class="dates">
                    <label for="nombre" name="nombre">Nombre:</label>
                    <input type="text" name="nombre">
                </div>
                <div class="dates">
                    <label for="apellido" name="apellido">Apellido:</label>
                    <input type="text" name="apellido">
                </div>
                <h4>Informacion de maquina</h4>
                <div class="dates">
                    <label for="serial" name="serial">Serial:</label>
                    <input type="number" name="serial">
                </div>
                <h4>Estado de llegada del equipo:</h4>
                <div class="dates">
                    <label for="fecha-ingreso" name="fecha-ingreso">Fecha de ingreso:</label>
                    <input type="datetime-local" name="fecha-ingreso">
                </div>
                <div class="dates text-center ">
                    <p>descripcion e imagen del estado en el que llego tu equipo:</p>
                    <textarea name="estado-inicial" id="estado-inicial" cols="30" rows="10"></textarea>
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/proyecto/imagenes/prueba.jpg" alt="imagen del estado en el que llego tu maquina">
                </div>
            </div>
            <div class="column2">
                <h4>Actualizaciones de tu maquina</h4>
                <div class="dates">
                    <label for="fecha-actualizacion" name="fecha-actualizacion">Fecha de ingreso:</label>
                    <input type="datetime-local" name="fecha-actualizacion">
                </div>
                <div class="dates text-center">
                    <p>descripcion e imagen de las ultimas actulizaciones que se le han hecho a tu equipo:</p>
                    <textarea name="estado-inicial" id="estado-inicial" cols="30" rows="10"></textarea>
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/proyecto/imagenes/prueba.jpg" alt="imagen de actualizaciones de tu equipo">
                </div>
                <h4>Estado final de tu equipo</h4>
                <div class="dates">
                    <label for="fecha-salida" name="fecha-salida">Fecha de salida:</label>
                    <input type="datetime-local" name="fecha-salida">
                </div>
                <div class="dates text-center">
                    <p>descripcion e imagen del estado final de tu maquina:</p>
                    <textarea name="estado-inicial" id="estado-inicial" cols="30" rows="10"></textarea>
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/proyecto/imagenes/prueba.jpg" alt="imagen de actualizaciones de tu equipo">
                </div>
            </div>    
        </div>
    </div>
</body>
</html>

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
$dompdf->stream('EstadoMaquina.pdf', array('Attachment'=> false));
?>