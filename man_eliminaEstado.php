<?php 
		
			include("conexion.php");	
			
			$sql=mysql_query("delete from estado WHERE Nombre='".$_REQUEST["viejo"]."' ",$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>