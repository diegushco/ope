<?php 

ob_start();
session_start();
$error = ob_get_clean();

	function bitacora($evento,$tipo,$conexion){
		$url= $_SERVER["REQUEST_URI"];
		$usuID=$_SESSION["UsuIdem"];
		$IP=($_SERVER['REMOTE_ADDR']);

		$consultaB="INSERT INTO bitacora (FechaHora,Observacion,Url,Ip,Id_Usuario,tipo)
		VALUES (NOW(),'".$evento."','".$url."','".$IP."','".$usuID."','".$tipo."')";
		//echo $consultaB;
		mysql_query ($consultaB,$conexion);
				
	}
?>