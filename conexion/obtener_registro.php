<?php 
header("Access-Control-Allow-Origin: *");
include('conexion.php');

$sql = "SELECT titulo, descripcion, img FROM producto";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $registros = array();

    while ($row = $result->fetch_assoc()) {
        $row['imagen_base64'] = base64_encode($row['img']);
        unset($row['img']);
        $registros[] = $row;
    }

    header('Content-Type: application/json');
    while (ob_get_level()) {
        ob_end_clean();
    }
    echo json_encode($registros);
} else {
    
    echo json_encode('error de registro');
    
}
