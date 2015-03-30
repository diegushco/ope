<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO ra_tipo (Nombre,Descripcion) VALUES ('".$_REQUEST["inspeccion"]."','".$_REQUEST["descripcion"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo tipo RA ".$_REQUEST["inspeccion"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>