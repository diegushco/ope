<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO ra_otros_organismo (Nombre,Descripcion) VALUES ('".$_REQUEST["organismo"]."','".$_REQUEST["descripcion"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo otros organismos ".$_REQUEST["organismo"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>