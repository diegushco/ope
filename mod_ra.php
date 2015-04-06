<?php 
		
			include("conexion.php");	
			
			$sql=mysql_query("UPDATE ra_actividad SET Situacion='".$_REQUEST["situacion"]."',Observacion='".$_REQUEST["observacion"]."',Recomendacion='".$_REQUEST["recomendacion"]."' WHERE Id_Actividad='".$_REQUEST["id"]."' ",$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>