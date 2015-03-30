<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO municipio (Nombre,Id_estado) VALUES ('".$_REQUEST["municipio"]."',(select Id_estado from estado where Nombre='".$_REQUEST["estado"]."'))";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo municipio ".$_REQUEST["municipio"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>