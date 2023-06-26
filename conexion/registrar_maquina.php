<?php
include('conexion.php');
$tipmaquina=$_POST['tipmaquina'];
$marca=$_POST['marca'];
$serial=$_POST['serial'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];
$insertarm="INSERT INTO dispositivo (Tipo_maquina, Marca, N_serial, fecha_insercion, Descripcion) 
VALUES ('$tipmaquina','$marca','$serial', '$fecha', '$descripcion')";
//ejecutar consulta
$resultado=mysqli_query($conexion, $insertarm);

if(!$resultado){
    echo "<script>alert('Error al Registrar el dispositivo');</script>";
}
else{
    echo "<script>alert('Registro de equipo Exitoso!');window.history.go(-1);</script>";
}
mysqli_close($conexion)

?>