<?php 
		
			include("conexion.php");	
			$consulta="delete from cs_tipo WHERE Nombre='".$_REQUEST["viejo"]."'";
		//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>