<?php 
		
			include("conexion.php");	
			$consulta= "UPDATE ra_otros_organismo SET Existe='".$_REQUEST["activo1"]."',Nombre='".$_REQUEST["organismo"]."',Descripcion='".$_REQUEST["descripcion"]."' WHERE Nombre='".$_REQUEST["viejo"]."' ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
				bitacora("Actualiza otros organismos de RA  ".$_REQUEST['organismo'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>