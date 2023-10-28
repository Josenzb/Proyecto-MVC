<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
</head>
<style type="text/css">
body{
		background-image: url(../IMAGENES/image.jpg);
		background-size: 100vw 100vh;
		font-size: 15px;
		font-family: verdana;
		background-attachment: fixed;
		background-repeat: no-repeat;
		
	}
	table{
		background: rgba(250,250,250,0.7);
		border-radius: 5px;
		border:solid black;
		margin-top: 8%;
		text-align: center;
		width: 350px;
	}
	
	input{
		width: 120px;
		height: 40px;
		border:outset;
		border-radius: 8px;
		padding-top: 5px;
		padding-left: 5px; 
	}
	textarea{
		width: 170px;
		height: 100px;
		border:outset;
		border-radius: 8px;
		padding-top: 5px;
		padding-left: 5px; 
	}
	button{
		width: 120px;
		height: 40px;
		border: white outset;
		border-radius: 8px;
		padding-top: 5px;
		padding-left: 5px;
		background: rgb(250,155,50);
		cursor: pointer;
		font-size: 20px;  
	}	
</style>
<body>
<CENTER>
	<table>
		<tr>
			<td>
			<?php
			$cod=$_GET["search"];
			require_once("../conexion.php"); 
			$sql="SELECT id_cliente,nomb_cliente,ape_cliente,dir_cliente,tel_cliente,cor_cliente,fec_cliente,comentario FROM clientes WHERE id_cliente=$cod ";
			$res=mysqli_query($conexion,$sql);
			while ($edi=mysqli_fetch_assoc($res)) {
				

			?>
				<form name="form1" action="../MODIFICAR/modificar.php?search=<?php echo $cod ?>;" method="POST">
					<h1>Actualizar Informaci&oacuten</h1>
					<p><input type="text" name="id_cliente" style="cursor: not-allowed;" disabled="" value="<?php echo "$edi[id_cliente]"; ?>" >
					<p><input type="text" name="nom_cliente" placeholder="Nombres" value="<?php echo "$edi[nomb_cliente]"; ?>" autocomplete="off" >
					<p><input type="text" name="ape_cliente" placeholder="Apellidos" value="<?php echo "$edi[ape_cliente]"; ?>" autocomplete="off">
					<p><input type="text" name="dir_cliente" placeholder="Direccion" value="<?php echo "$edi[dir_cliente]"; ?>" autocomplete="off">
					<p><input type="text" name="tel_cliente" placeholder="Telefono" value="<?php echo "$edi[tel_cliente]"; ?>" autocomplete="off">
					<p><input type="text" name="cor_cliente" placeholder="Correo" value="<?php echo "$edi[cor_cliente]"; ?>" autocomplete="off">
					<p><input type="date" name="fec_cliente" value="<?php echo "$edi[fec_cliente]"; ?>">
					<p><textarea id="t2" type="text" name="comentarios" placeholder="Escriba aqui los comentarios..."><?php echo "$edi[comentario]"; ?></textarea>
					<p><input type="submit" name="submit" value="Guardar" style="background: rgb(250,155,50);cursor: pointer;height: 40px; font-size: 20px";>
					<a href="../MOSTRAR/mostrar.php"><button>Cancelar</button></a>
				<?php	} ?>

				</form>
			</td>
		</tr>
	</table>
</CENTER>




</body>
</html>