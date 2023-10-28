<?php	

require_once("../conexion.php");		
				$nom=$_POST["nom_cliente"];
				$ape=$_POST["ape_cliente"];
				$dir=$_POST["dir_cliente"];
				$tel=$_POST["tel_cliente"];
				$cor=$_POST["cor_cliente"];
				$fec=$_POST["fec_cliente"];
				$com=$_POST["comentarios"];
				$re=$_GET["search"];

				$conexion->query("UPDATE clientes SET nomb_cliente='$nom',ape_cliente='$ape',dir_cliente='$dir',tel_cliente='$tel',cor_cliente='$cor',fec_cliente='$fec',comentario='$com' WHERE  id_cliente=$re");

				mysqli_close($conexion);

				echo "<script>
				location.href='../MOSTRAR/mostrar.php';	
				</script>";

?>