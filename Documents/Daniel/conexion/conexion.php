<?php
$conexion = new mysqli('localhost','root','','proyecto1');

if ($conexion -> connect_errno){
	die('Problemas con el servidor'.$conexion->connect_errno);
}


?>