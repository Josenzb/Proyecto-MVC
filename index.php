<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Ingresar</title>
</head>

<style type="text/css">
	body{
		background-image: url(IMAGENES/image.jpg);
		background-size: 100vw 100vh;
		font-size: 15px;
		font-family: verdana;
		background-attachment:fixed;
		background-repeat: no-repeat; 

}

	#t1{
		position: absolute;
		width: 50%;
		height: 30%;
		margin-left: 25%;
		margin-top: 10%
	}
	h1{
		position: absolute;
		margin-top:4.5%;
		margin-left: 42%; 
		font-family: Comic Sans	; 
		font-size: 270%;
	}
	#r1{
		background-color: white;
		position: absolute;
		margin-top: 5%;
		margin-left: -5%
	}
	#u1{
		margin-left:-5;
		margin-top: 12%;
	}
	#p1{
		position: absolute;
		margin-top:10%;
		margin-left:44%
	}
</style>
<body>
<center>

    	<table id="t1">
    		<tr>
    			<h1 id="i1">Iniciar Sesion</h1>
    			<form name="form1" action="validar.php" method="POST">
    				<p id="p1">Ingrese su usuario</p>
    				<p><input  id="u1" type="text" name="user" placeholder="Usuario" autofocus="" autocomplete="off" required=""></p>
    				<p id="p2">Ingrese su contraseña</p>
    				<p><input type="password" name="password" placeholder="Contraseña" required=""></p>
    				<input type="submit" name="submit" style="background-color: rgba(221, 217, 217); cursor: pointer;">
    			</form>
    		</tr>
    			
    	</table>
    	<!--<a id="r1" href="crear.php">REGISTRATE</a>-->
</center>
</body>
</html>