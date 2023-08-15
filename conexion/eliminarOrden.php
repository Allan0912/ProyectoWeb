<?php
include('conexion.php');

if(isset($_GET['id'])){
    $Documento = $_GET['id'];
    $consulta = "DELETE FROM orden_servicio WHERE id_ORDEN = $Documento";
    $resultado = mysqli_query($conexion, $consulta);
    if(!$resultado){
        die("este resultado no existe");
    }
    header("location: http://localhost/proyecto/html/Ordenes_de_servicio.php");
}
?>