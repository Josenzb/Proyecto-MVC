<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
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
		background: rgb(184, 216, 210)
		border-radius: 10px;
		border:solid white;
		margin-top: 8%;
		text-align: center;
		width: 350px;
	}
	
	input{
		width: 170px;
		height: 30px;
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
</style>
<body>
<CENTER>
	<table>
		<tr>
			<td>
				<form name="form1" action="../AGREGAR/grabar.php" method="POST">
					<h1>Datos Cliente</h1>
					<p><input type="text" name="id_cliente" placeholder="Cedula" autofocus required="" autocomplete="off">
					<p><input type="text" name="nom_cliente" placeholder="Nombres" required="" autocomplete="off">
					<p><input type="text" name="ape_cliente" placeholder="Apellidos" required="" autocomplete="off">
					<p><input type="text" name="dir_cliente" placeholder="Direccion" required="" autocomplete="off">	
					<p><input type="text" name="tel_cliente" placeholder="Telefono" required="" autocomplete="off">
					<p><input type="text" name="cor_cliente" placeholder="Correo" required="" autocomplete="off">
					<p><input type="date" name="fec_cliente" required="">
					<p><textarea id="t2" type="text" name="comentarios" placeholder="Escriba aqui los comentarios..."></textarea>
					<p><input type="submit" name="submit" style="background: rgb(250,155,50);cursor: pointer;height: 50px";>
				</form>
			</td>
		</tr>
	</table>
</CENTER>
</body>
</html>