<?php
include('conexion.php');

if (isset($_POST['buscar'])) {
    $doc = $_POST['doc'];
    $valores = array();
    $valores['existe'] = "0";

    $resultados = mysqli_query($conexion, "SELECT * FROM usuario WHERE Documento = '$doc'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['existe'] = "1";
        $valores['nombre'] = $consulta['Nombre'];
    }
    if ($valores['existe'] === "0") {
        $valores['mensaje'] = "Este cliente aún no se ha registrado";
    }
    sleep(1);
    $valores = json_encode($valores);
    echo $valores;
}
