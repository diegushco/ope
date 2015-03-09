<?php 
		
			include("conexion.php");	
			$consulta="delete from estado WHERE Nombre='".$_REQUEST["viejo"]."' ";
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";
			echo $consulta;
			mysql_close();				
?>