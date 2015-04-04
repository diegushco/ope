<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO ra_accion_tomada (Nombre,Descripcion) VALUES ('".$_REQUEST["accion"]."','".$_REQUEST["descripcion"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo acciones tomadas de RA","Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>