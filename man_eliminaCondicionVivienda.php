<?php 
		
			include("conexion.php");	
			$consulta="delete from cs_condicion WHERE Nombre='".$_REQUEST["viejo"]."'";
		//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Este Item no se puede eliminar, contacte con el administrador";

			mysql_close();				
?>