<?php 
			
			include("conexion.php");	
			$consulta="delete from cs_refugio WHERE Id_Refugio='".$_REQUEST["id_re"]."'  ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se elimino correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>