<!DOCTYPE html>
<html>
<head>
	<title>Confirmar</title>
</head>
<style type="text/css">
	body{
		background-image: url(../IMAGENES/image.jpg);
		background-size: 100vw 100vh;
		font-size: 15px;
		font-family: verdana;
	}
	table{
		background: rgba(250,250,250,0.7);
		border-radius: 5px;
		border-collapse: collapse;
		margin-top: 15%;
		text-align: center;
		width: 700px;
	}
	td{
		border:solid black;
		width: 10px;
		height: 10px; 
		padding: 5px;z
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
	#b2{
		width: 120px;
		height: 40px;
		border: white outset;
		border-radius: 8px;
		padding-top: 5px;
		padding-left: 5px;
		background: rgb(108, 196, 60);
		cursor: pointer;
		font-size: 20px;
		outline: none;  
	}
	#b3{
		width: 120px;
		height: 40px;
		border: white outset;
		border-radius: 8px;
		padding-top: 5px;
		padding-left: 5px;
		background: rgb(211, 59, 59);
		cursor: pointer;
		font-size: 20px; 
		outline: none; 
	}
	#b2:hover{
		background-color:rgb(80, 175, 28);
	}
	#b3:hover{
		background-color: rgb(209, 43, 43);
	}	
</style>	
<body>
<CENTER>
	<table>
		<tr>
			<td>
				<?php
					include("../conexion.php");
					$cod=$_GET["search"];

					$sql="SELECT nomb_cliente,ape_cliente FROM clientes WHERE id_cliente=$cod";
					$res=mysqli_query($conexion,$sql);

					while ($row=mysqli_fetch_array($res)) {
						$nom=$row[0];
						$ape=$row[1];
					}
				
				echo "<h2>¿Está seguro que desea eliminar a $nom $ape?</h2>";
				?>
				<p><a href="eliminar.php?search=<?php echo $cod; ?>"><button id="b2">Eliminar</button></a>
				<a href="../MOSTRAR/mostrar.php"><button id="b3" ">Cancelar</button></a>
			</td>
		</tr>
	</table>
</CENTER>
</body>
</html>
