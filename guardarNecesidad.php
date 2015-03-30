<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO cs_necesidad(Nombre,Descripcion) VALUES ('".$_REQUEST["necesidad"]."','".$_REQUEST["descripcion"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo necesidad de censo ".$_REQUEST["necesidad"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>