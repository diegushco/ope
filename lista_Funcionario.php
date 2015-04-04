<?php 
		$fila=0;
			include("conexion.php");	
			$sql=mysql_query("SELECT * FROM funcionario order by Nombre asc",$conexion);  
			echo "<option>Seleccione</option>"; 
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query("SELECT * FROM funcionario order by Nombre asc",$conexion);  
				while($row=mysql_fetch_array($sql)){
					echo "<option value='".$row["Id_Funcionario"]."' onclick='funci(this)'>".$row["Nombre"]." ".$row["Apellido"]."-".$row["Organismo"]."</option>"; 



				} //CIERRA WHILEEEEEEEEEEEEE
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>