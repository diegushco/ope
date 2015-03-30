<?php 
		
			include("conexion.php");	
			
			$sql=mysql_query("UPDATE estado SET Existe='".$_REQUEST["activo"]."',Nombre='".$_REQUEST["estado"]."' WHERE Nombre='".$_REQUEST["viejo"]."' ",$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>