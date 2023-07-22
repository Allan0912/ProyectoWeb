<?php
include('conexion.php');

if(isset($_GET['id'])){
    $Documento = $_GET['id'];
    $consulta = "DELETE FROM usuario WHERE Documento = $Documento";
    $resultado = mysqli_query($conexion, $consulta);
    if(!$resultado){
        die("este resultado no existe");
    }
    header("location: http://localhost/proyecto/html/historial_de_clientes.php");
}
?>
