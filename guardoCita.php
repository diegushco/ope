<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO persona (cedula,nombre,sexo,torta,descripcion,buzz,no_soy_obligatorio) VALUES ('".$_REQUEST["cedula"]."','".$_REQUEST["nombre"]."','".$_REQUEST["sexo"]."','".$_REQUEST["torta"]."','".$_REQUEST["descripcion"]."','".$_REQUEST["buzz"]."','".$_REQUEST["no_soy_obligatorio"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>