
<?php 
		$fila=0;
		include("conexion.php");	
		$sql=mysql_query("SELECT Nombre,Direccion
							FROM cs_refugio
							WHERE Id_Refugio='".$_REQUEST["Id_Refugio"]."'",$conexion);  
		if($row=mysql_fetch_array($sql)){
			echo $row["Nombre"]."**".$row["Direccion"];
		}
			
		
		else{
			echo " No hay registro";
		}

		mysql_close();			
?>


									
