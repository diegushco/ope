<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO cs_tipo_evento(Nombre) VALUES ('".$_REQUEST["evento"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>