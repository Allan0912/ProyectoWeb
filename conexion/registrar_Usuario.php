<?php
include('conexion.php');
//Recibiendo datos y almacenando en la variables 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$documento=$_POST['documento'];
$tusu=$_POST['tusu'];
if($tusu == 1){
    $contraseña = $_POST['contraseña'];
}else{
    $contraseña = '';
}

//consulta para insertar
$insertar="INSERT INTO usuario(Documento, Nombre, Apellidos, Telefono, Correo, fk_Tipo_de_usuario,Contraseña) 
VALUES ('$documento','$nombre','$apellido', '$telefono', '$correo', '$tusu','$contraseña')";
//ejecutar consulta
$resultado=mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "<script>alert('Error al Registrarse');</script>";
}
else{
    echo "<script>alert('Registro Exitoso!');window.history.go(-1);</script>";
}
mysqli_close($conexion)
?>