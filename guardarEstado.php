<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO estado (Nombre) VALUES ('".$_REQUEST["estado"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>