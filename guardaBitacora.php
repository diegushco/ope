<?php 

	function bitacora($evento,$tipo,$conexion){
		$url= $_SERVER["REQUEST_URI"];
		//$usuID=$_SESSION["user"];

		// $_SERVER['REMOTE_ADDR']
				//$consultaB="INSERT INTO bitacora (FechaHora,Observacion,Url,Ip,Id_Usuario,tipo) VALUES (NOW(),'".$evento."','".$url."','".$_SERVER['REMOTE_ADDR']."','".$usuID."','".$tipo."')";
				//mysql_query ($consultaB,$conexion);
				//echo $consultaB;
	}
?>