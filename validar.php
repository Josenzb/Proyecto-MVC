<?php
include("conexion.php");
$user=$_POST["user"];
$pass=$_POST["password"];
//usuario
		$query="SELECT * FROM login";
		$res=mysqli_query($conexion,$query) or die ("Error en la consulta");

		while ($row= mysqli_fetch_array($res)){
			if($user==$row[0]){
				$u=1;	
			}
			else {
			$u=0;	
			}
		}  
//error u

		if($u==0){
			echo "<script>
			alert('El usuario no existe');
			location.href='index.php';
			</script>";
		}
		//contraseña

		  else{
		  	$query="SELECT password FROM login WHERE user='$user'";
		  	$res=mysqli_query($conexion,$query) or die("Error en la consulta");
		  	while ($row= mysqli_fetch_array($res)) {
		  			if ($pass==$row[0]){
		  				echo "<script>
		  				location.href='MENU/menu.php'
		  				</script>";
		  			}
		  			else{
					  	echo "<script>
						alert('La contraseña es incorrecta $pass');
						location.href='index.php';
						</script>";
					}
		  	
		    	}
			}






?>