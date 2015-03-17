<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO cs_evento(Nombre,Id_TipoEvento) VALUES ('".$_REQUEST["evento"]."',(select Id_TipoEvento from cs_tipo_evento where Nombre='".$_REQUEST["tipo"]."'))";
				$sql=mysql_query ($consulta,$conexion);		
				
				echo $consulta;
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>