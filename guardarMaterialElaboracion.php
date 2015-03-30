<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO cs_material_elaboracion(Nombre,Descripcion,categoria) VALUES ('".$_REQUEST["material"]."','".$_REQUEST["descripcion"]."','".$_REQUEST["parte"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo material de elaboracion ".$_REQUEST["material"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>