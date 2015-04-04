<?php 
		
			include("conexion.php");	
			$consulta="UPDATE municipio SET Existe='".$_REQUEST["activo"]."',Nombre='".$_REQUEST["nuevo"]."' WHERE Nombre='".$_REQUEST["viejo"]."' and Id_estado=(select Id_estado from estado where Nombre='".$_REQUEST["estado"]."')      ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
				bitacora("Actualiza municipio ".$_REQUEST['viejo'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>