<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO cs_enser(Nombre,Descripcion) VALUES ('".$_REQUEST["enser"]."','".$_REQUEST["descripcion"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				
				//echo $consulta;
				include("guardaBitacora.php");
				bitacora("Guardo enseres de censo ".$_REQUEST["enser"],"Guardar",$conexion);
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();							
?>