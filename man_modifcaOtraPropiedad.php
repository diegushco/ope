<?php 
		
			include("conexion.php");	
			$consulta= "UPDATE cs_otra_propiedad SET Existe='".$_REQUEST["activo1"]."',Nombre='".$_REQUEST["propiedad"]."',Descripcion='".$_REQUEST["descripcion"]."' WHERE Nombre='".$_REQUEST["viejo"]."' ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
				bitacora("Actualiza propiedad de censo  ".$_REQUEST['propiedad'],"Actualizar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>