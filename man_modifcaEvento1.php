<?php 
		
			include("conexion.php");	
			$consulta="UPDATE cs_evento SET Existe='".$_REQUEST["activo"]."',Nombre='".$_REQUEST["nuevo"]."' 
			WHERE Nombre='".$_REQUEST["viejo"]."' 
			and Id_TipoEvento=(select Id_TipoEvento from cs_tipo_evento where Nombre='".$_REQUEST["tipo"]."') ";
			

			echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>