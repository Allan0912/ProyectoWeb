<?php
$conexion = new mysqli('localhost','root','+crR+qw..!U2','proyecto1');

if ($conexion -> connect_errno){
	die('Problemas con el servidor'.$conexion->connect_errno);
}


?>