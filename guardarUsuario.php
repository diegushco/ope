<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				$consulta="INSERT INTO usuario (Nombre,Usuario,Password) VALUES ('".$_REQUEST["nombre"]."','".$_REQUEST["usuario"]."','".$_REQUEST["password"]."')";
				$sql=mysql_query ($consulta,$conexion);		
				

				$consu="select Id_Usuario as ide
						from usuario 
						where Usuario='".$_REQUEST["usuario"]."'";
						$sql=mysql_query($consu,$conexion);  
					if($row=mysql_fetch_array($sql)){
						$usuID=$row["ide"];						
					}

					$consu="select Nombre as Nombre, Id_Menu as menu
						from menu";
						$sql=mysql_query($consu,$conexion);  
					while($row2=mysql_fetch_array($sql)){
						
						$consulta="INSERT INTO privilegios (Existe,Id_Usuario,Id_Menu)
						VALUES (0,'".$usuID."','".$row2["menu"]."')";
						$sql1=mysql_query ($consulta,$conexion);		
					}


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