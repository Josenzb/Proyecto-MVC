s<?php
	include("../conexion.php");
	$cod=$_GET["search"];
	$conexion->query("DELETE FROM clientes WHERE id_cliente=$cod");
	header('location:../MOSTRAR/mostrar.php');
	
?>