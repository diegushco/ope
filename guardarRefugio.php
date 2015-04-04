<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO cs_refugio (Nombre,Direccion,Telefono,Capacidad,Descripcion,Id_Aldea) VALUES ('".$_REQUEST["nombre"]."','".$_REQUEST["direccion"]."','".$_REQUEST["telefono"]."','".$_REQUEST["capacidad"]."','".$_REQUEST["descripcion"]."',(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."'))";
				//echo $consulta;
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo refugio ".$_REQUEST["nombre"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>