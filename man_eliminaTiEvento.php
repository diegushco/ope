<?php 
		
			include("conexion.php");	
			$consulta="delete from cs_tipo_evento WHERE Nombre='".$_REQUEST["viejo"]."'";
		//echo $consulta;
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
			bitacora("Elimina evento censo tipo ".$_REQUEST["viejo"],"Eliminar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "No se puede borrar, usado en otro registro";

			mysql_close();				
?>