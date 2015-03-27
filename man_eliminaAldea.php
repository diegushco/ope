<?php 
		
			include("conexion.php");	
			$consulta="delete from aldea WHERE Nombre='".$_REQUEST["viejo"]."' and Id_Parroquia=(select Id_Parroquia from parroquia where Nombre='".$_REQUEST["parroquia"]."') ";
			echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Este Item no se puede eliminar, contacte con el administrador";

			mysql_close();				
?>