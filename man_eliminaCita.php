<?php 
		
			include("conexion.php");	
			$consulta="UPDATE ev_cita SET Estado='Anulada' WHERE Id_Cita=".$_REQUEST['cita'];
//			echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>