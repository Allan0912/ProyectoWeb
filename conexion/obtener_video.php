<?php 
header("Access-Control-Allow-Origin: *");
include('conexion.php');

$sql = "SELECT titulo, link, descripcion FROM videos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $registros = [];

    while ($row = $result->fetch_assoc()) {
        $row['video_link'] = $row['link']; 
        unset($row['link']); 
        $registros[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($registros);
} else {
    echo json_encode('error de registro');
}
?>
