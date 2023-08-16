<?php 
include('conexion.php');

$titulo=$_POST['titulo'];
$link=$_POST['link'];
$descripcion=$_POST['descripcion'];

$insertar="INSERT INTO Videos (titulo, link, descripcion) VALUES ('$titulo','$link','$descripcion');";
$resultado=mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "<script>alert('Error al agregar el producto');</script>";
    echo "<script>window.location.href = 'http://127.0.0.1/proyecto/html/agregar_video.php';</script>";
}
else{
    echo "<script>alert('Se agrego con exito!');</script>";
    echo "<script>window.location.href = 'http://127.0.0.1/proyecto/html/agregar_video.php';</script>";
}

?>