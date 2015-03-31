<?php 
		
			include("conexion.php");	
			$consulta="UPDATE aldea SET Existe='".$_REQUEST["activo"]."',Nombre='".$_REQUEST["nuevo"]."' WHERE Nombre='".$_REQUEST["viejo"]."' and Id_Ciudad=(select Id_Ciudad from ciudad where Nombre='".$_REQUEST["parroquia"]."') ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
				bitacora("Actualiza aldea ".$_REQUEST['nuevo'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>