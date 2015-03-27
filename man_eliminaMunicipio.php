<?php 
		
			include("conexion.php");	
			$consulta="delete from municipio WHERE Nombre='".$_REQUEST["viejo"]."' and Id_estado=(select Id_estado from estado where Nombre='".$_REQUEST["estado"]."') ";
//			echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Este Item no se puede eliminar, contacte con el administrador";

			mysql_close();				
?>