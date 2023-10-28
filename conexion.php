<?php
require_once("config.php");
	$conexion=mysqli_connect($localhost,$root,$password,$dbname) or die("Error al conectarse a la base de datos");
	return $conexion;
?>	