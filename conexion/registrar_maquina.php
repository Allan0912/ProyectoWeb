<?php
include('conexion.php');
$tipmaquina=$_POST['tipmaquina'];
$marca=$_POST['marca'];
$serial=$_POST['serial'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];

$validar="SELECT * FROM dispositivo WHERE N_serial='$serial'";
$validacion=mysqli_query($conexion,$validar);
$resultado=mysqli_num_rows($validacion);

if($resultado>0){
    echo "<script>alert('Ya existe una maquina con este numero de Serial!');window.history.go(-1)</script>";
}else{
    $insertar="INSERT INTO dispositivo (Tipo_maquina, Marca, N_serial, fecha_insercion, Descripcion) 
    VALUES ('$tipmaquina','$marca','$serial', '$fecha', '$descripcion')";
    $consulta=mysqli_query($conexion, $insertar);

    if(!$consulta){    
        echo "<script>alert('Error al Registrar el dispositivo');</script>";
    }
    else{
        echo "<script>alert('Registro de equipo Exitoso!');</script>";
        echo "<script>window.location.href = 'http://localhost/proyecto/html/registrar_maquina.php';</script>";
    }
}
mysqli_close($conexion)

?>