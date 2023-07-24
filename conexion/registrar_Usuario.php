<?php
include('conexion.php');
//Recibiendo datos y almacenando en la variables 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$documento=$_POST['documento'];
$tusu=$_POST['tipusu'];
if($tusu == 2){
    $contraseña = $_POST['contraseña'];
}else{
    $contraseña = '';
}
$validar="SELECT * FROM usuario WHERE Documento='$documento'";
$validacion=mysqli_query($conexion, $validar);
$resultado=mysqli_num_rows($validacion);
if($resultado>0){
    echo "<script>alert('Ya existe un cliente con este numero de identificacion!');window.history.go(-1)</script>";
}else{
    $insertar="INSERT INTO usuario(Documento, Nombre, Apellidos, Telefono, Correo, fk_Tipo_de_usuario,Contraseña) 
    VALUES ('$documento','$nombre','$apellido', '$telefono', '$correo', '$tusu','$contraseña')";
    $consulta=mysqli_query($conexion, $insertar);
    if(!$consulta){
        echo "<script>alert('Error al Registrarse');</script>";
    }
    else{
        echo "<script>alert('Registro Exitoso!');</script>";
        echo "<script>window.location.href = 'http://localhost/proyecto/html/registrar_Usuario.php';</script>";
    }
}
mysqli_close($conexion)
?>