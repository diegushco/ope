<?php 
		
			include("conexion.php");	
			$consulta= "UPDATE ra_accion_tomada SET Existe='".$_REQUEST["activo1"]."',Nombre='".$_REQUEST["accion"]."',Descripcion='".$_REQUEST["descripcion"]."' WHERE Nombre='".$_REQUEST["viejo"]."' ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
				bitacora("Actualiza accion tomada ".$_REQUEST['accion'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>