<?php 
		
			include("conexion.php");	
			$consulta="delete from ciudad WHERE Nombre='".$_REQUEST["viejo"]."' and Id_Municipio=(select Id_Municipio from municipio where Nombre='".$_REQUEST["municipio"]."') ";
//			echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>