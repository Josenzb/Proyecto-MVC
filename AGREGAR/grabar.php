<?php	

require_once("../conexion.php");		
				$ced=$_POST["id_cliente"];
				$nom=$_POST["nom_cliente"];
				$ape=$_POST["ape_cliente"];
				$dir=$_POST["dir_cliente"];
				$tel=$_POST["tel_cliente"];
				$cor=$_POST["cor_cliente"];
				$fec=$_POST["fec_cliente"];
				$com=$_POST["comentarios"];
				
				$conexion->query("INSERT INTO clientes(id_cliente,nomb_cliente,ape_cliente,dir_cliente,tel_cliente,cor_cliente,fec_cliente,comentario)
				 VALUES('$ced','$nom','$ape','$dir','$tel','$cor','$fec','$com')");

				mysqli_close($conexion);

				echo "<script>
				location.href='../MOSTRAR/mostrar.php';	
				</script>";

?>