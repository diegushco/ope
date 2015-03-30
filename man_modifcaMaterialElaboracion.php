<?php 
		
			include("conexion.php");	
			$consulta= "UPDATE cs_material_elaboracion SET Existe='".$_REQUEST["activo1"]."',Nombre='".$_REQUEST["material"]."',Descripcion='".$_REQUEST["descripcion"]."' WHERE Nombre='".$_REQUEST["viejo"]."' ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>