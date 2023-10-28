<!DOCTYPE html>
<html>
<head>
	<title>Mostrar</title>
</head>
<style type="text/css">
	body{
		background-image: url(../IMAGENES/image.jpg);
		background-size: 100vw 100vh;
		font-size: 15px;
		font-family: verdana;
	}
	table{
		background: rgba(20,250,2550,0.7);
		border-radius: 5px;
		border-collapse: collapse;
		margin-top: 15%;
		text-align: center;
		width: 380px;
	}
	td{
		border:solid black;
		width: 10px;
		height: 10px; 
		padding: 5px;
	}
	td#t2{
		border:solid black;
		width: 10px;
		height: 10px; 
		padding: 5px;
		background-color: rgb(130,200,50);
		text-align: center;

	}
	tr#t3{
		 background-color: rgba(130,200,50,0.6);
	}
	tr{
		background-color: rgba(255,255,255,0.8 );
	}
	#b4{
		width: 120px;
		height: 40px;
		border: white outset;
		border-radius: 8px;
		padding-top: px;
		padding-left: 5px;
		background-color: yellow; 
		cursor: pointer;
		font-size: 20px; 
		outline: none; 
	} 




</style>	
<body>
<CENTER>
<?php
		require_once("../conexion.php");
		$sql="SELECT id_cliente,nomb_cliente,ape_cliente,dir_cliente,tel_cliente,cor_cliente,fec_cliente,comentario,estado FROM clientes";
		$res=mysqli_query($conexion,$sql);
		$co="SELECT count(id_cliente) FROM clientes";

			while ($con=mysqli_fetch_assoc($res)) {
				echo "La cantidad de personas registradas son :".$co[1];}
?>
	<table>
		<tr>
		<td ; colspan="10" id="t2">
			<h1>LISTADO DE CLIENTES</h4>
		</td>
		<tr id="t3">
			<td>
				<h2>Cedula</h2>
			</td>
			<td>
				<h2>Nombre</h2>
			</td>
			<td>
				<h2>Apellidos</h2>
			</td>
			<td>
				<h2>Direccion</h2>
			</td>
			<td>
				<h2>Telefono</h2>
			</td>
			<td>
				<h2>Correo</h2>
			</td>
			<td>
				<h2>Fecha</h2>
			</td>
			<td>
				<h2>Comentario</h2>
			</td>
			<td>
				<h2>Actualizar</h2>
			</td>
			<td>
				<h2>Eliminar</h2>
			</td>
		</tr>
		<tr>	
			<?php
				require_once("../conexion.php");
				$sql="SELECT id_cliente,nomb_cliente,ape_cliente,dir_cliente,tel_cliente,cor_cliente,fec_cliente,comentario,estado FROM clientes";
				$res=mysqli_query($conexion,$sql);
				$co="SELECT count(id_cliente) FROM clientes";

				while ($val=mysqli_fetch_assoc($res)) {
					echo "<td>$val[id_cliente]</td><td>$val[nomb_cliente]</td><td>$val[ape_cliente]</td><td>$val[dir_cliente]</td><td>$val[tel_cliente]</td><td>$val[cor_cliente]</td><td>$val[fec_cliente]</td><td>$val[comentario]</td><td><a href='../MODIFICAR/editar.php?search=$val[id_cliente]'><img src='../IMAGENES/Actualizar.png' width='28px' title='Editar'></a><td><a href='../ELIMINAR/confirmar.php?search=$val[id_cliente]'><img src='../IMAGENES/eliminar.png' width='25px' title='Eliminar'></a></tr><tr>";
				}


?>			
		
		</tr>
	</table>
	<p></p><a href="../MENU/menu.php"><button id="b4">Menu</button></a>
</CENTER>
</body>
</html>