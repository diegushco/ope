
<?php 
		$fila=0;
			include("conexion.php");	
			$sql=mysql_query("SELECT * FROM ra_otros_organismo order by Nombre asc",$conexion);  
			echo "<option>Seleccione</option>"; 
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query("SELECT * FROM ra_otros_organismo order by Nombre asc",$conexion);  
				while($row=mysql_fetch_array($sql)){
					echo "<option>".$row["Nombre"]."</option>"; 


				} //CIERRA WHILEEEEEEEEEEEEE
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
