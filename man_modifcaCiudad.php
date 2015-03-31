<?php 
		
			include("conexion.php");	
			$consulta="UPDATE ciudad SET Existe='".$_REQUEST["activo"]."',Nombre='".$_REQUEST["nuevo"]."' WHERE Nombre='".$_REQUEST["viejo"]."' and Id_Parroquia=(select Id_Parroquia from parroquia where Nombre='".$_REQUEST["municipio"]."')      ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);
			include("guardaBitacora.php");
				bitacora("Actualiza ciudad ".$_REQUEST['viejo'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>