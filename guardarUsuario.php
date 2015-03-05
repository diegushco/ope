<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO usuario (Nombre,Usuario,Password) VALUES ('".$_REQUEST["nombre"]."','".$_REQUEST["usuario"]."','".$_REQUEST["password"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>