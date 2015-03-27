<?php 
		
			include("conexion.php");	
			$consulta="delete from estado WHERE Nombre='".$_REQUEST["viejo"]."' ";
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Este Item no se puede eliminar, contacte con el administrador";
			echo $consulta;
			mysql_close();				
?>