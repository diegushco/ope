<?php 
			
			include("conexion.php");	
			$consulta="delete from cs_refugio WHERE Id_Refugio='".$_REQUEST["id_re"]."'  ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			include("guardaBitacora.php");
			bitacora("Elimina refugio ".$_REQUEST["id_re"],"Eliminar",$conexion);
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Este Item no se puede eliminar, contacte con el administrador";

			mysql_close();				
?>