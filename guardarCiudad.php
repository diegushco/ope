<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO ciudad (Nombre,Id_Parroquia) VALUES ('".$_REQUEST["ciudad"]."',(select Id_Parroquia from parroquia where Nombre='".$_REQUEST["municipio"]."'))";
				//echo $consulta;
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>