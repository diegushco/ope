<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO usuario (Nombre,Usuario,Password) VALUES ('".$_REQUEST["nombre"]."','".$_REQUEST["usuario"]."','".$_REQUEST["password"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo usuario ".$_REQUEST["usuario"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>