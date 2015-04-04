<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO aldea (Nombre,Id_Ciudad) VALUES ('".$_REQUEST["aldea"]."',(select Id_Ciudad from ciudad where Nombre='".$_REQUEST["parroquia"]."'))";
				//echo $consulta;
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo aldea ".$_REQUEST["aldea"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>