<?php 
		
			include("conexion.php");	
			$consulta="UPDATE usuario SET Existe='".$_REQUEST["activo"]."' WHERE Usuario='".$_REQUEST["user"]."' ";
			$sql=mysql_query($consulta,$conexion);  
			//echo $consulta;
			include("guardaBitacora.php");
				bitacora("Actualiza usuario ".$_REQUEST['user'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>