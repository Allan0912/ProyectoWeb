<?php
include('conexion.php'); //Utlizando la conexion del archivo 'conexion.php'

$usuario=$_POST['usuario'];//metodo para recibir la informacion del formulario
$contraseña=$_POST['contraseña'];


$consulta="SELECT * FROM usuario WHERE Documento='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
    header("location:http://127.0.0.1/proyecto/html/Catalogo_inicio_sesion.html");
}
else{
    echo "<script>alert('Los datos no coinciden');window.history.go(-1);</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion)
?>