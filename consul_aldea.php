
<?php 
		$fila=0;
			include("conexion.php");	
			$sql=mysql_query("SELECT est.Nombre AS estado, ciu.Nombre AS ciudad, par.Nombre AS parroquia, mun.Nombre AS municipio
								FROM aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
								WHERE mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad
								and ald.Id_Aldea='".$_REQUEST["id_aldea"]."'",$conexion);  
			if($row=mysql_fetch_array($sql)){
				echo $row["estado"]."**".$row["ciudad"]."**".$row["parroquia"]."**".$row["municipio"];
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
