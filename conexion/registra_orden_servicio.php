<?php
include('conexion.php');

$documento = $_POST['identificar'];
$fechaingreso=$_POST['fechai'];
$nombre=$_POST['nombre'];
$descripcioni=$_POST['descripcioni'];
$serial=$_POST['serial'];
$fechaactualizacion=$_POST['fechaactualizacion'];
$descripciona=$_POST['descripciona'];

$validar="SELECT * FROM dispositivo WHERE N_serial='$serial'";
$validacion=mysqli_query($conexion, $validar);
$resultado=mysqli_num_rows($validacion);

if($resultado==0){
    echo "<script>alert('Este dispositivo no existe!');</script>";
    echo "<script>window.location.href = 'http://localhost/proyecto/html/Formulario_orden_de_servicio.php';</script>";
}else{
    $insertar="INSERT INTO orden_servicio(fk_Usuario_Documento_cliente, fecha_insercion, Nombre, Estado_Inicial, Dispositivo_Serial, 	fecha_actualizacion,Estado_Final) 
    VALUES ('$documento','$fechaingreso','$nombre', '$descripcioni', '$serial', '$fechaactualizacion','$descripciona')";
    $consulta=mysqli_query($conexion, $insertar);
    if(!$consulta){
        echo "<script>alert('Error al Registrarse');</script>";
    }
    else{
        echo "<script>alert('Orden de servicio generada!');</script>";
        echo "<script>window.location.href = 'http://localhost/proyecto/html/Formulario_orden_de_servicio.php';</script>";
    }
}
mysqli_close($conexion)


?>