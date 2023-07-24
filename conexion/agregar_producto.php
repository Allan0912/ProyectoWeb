<?php 
include('conexion.php');

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$insertar="INSERT INTO producto (titulo,descripcion, img) VALUES ('$titulo','$descripcion','$imagen');";
$resultado=mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "<script>alert('Error al Registrarse');</script>";
}
else{
    echo "<script>alert('Se agrego con exito!');</script>";
    echo "<script>window.location.href = 'http://localhost/proyecto/html/Agrega_Repuesto.php';</script>";
}
?>