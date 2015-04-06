<?php 
		
			include("conexion.php");	
			$consulta="delete from parroquia WHERE Nombre='".$_REQUEST["viejo"]."' and Id_Municipio=(select Id_Municipio from municipio where Nombre='".$_REQUEST["municipio"]."') ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);
			include("guardaBitacora.php");
			bitacora("Elimina parroquia ".$_REQUEST["viejo"],"Eliminar",$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Este Item no se puede eliminar, contacte con el administrador";

			mysql_close();				
?>