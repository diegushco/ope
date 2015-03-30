<?php    
	include("conexion.php"); //hago la conexion a la bd	
	
	$consulta="INSERT INTO cs_danho(Nombre,Descripcion) VALUES ('".$_REQUEST["danho"]."','".$_REQUEST["descripcion"]."')";
	$sql=mysql_query ($consulta,$conexion);		
	
	//echo $consulta;
	include("guardaBitacora.php");
				bitacora("Guardo daño de censo ".$_REQUEST["danho"],"Guardar",$conexion);
	if($sql){
			echo "Se guardo correctamente.";
	}else{
			echo "Ha ocurrido un error inesperado, intente de nuevo.";
	}

mysql_close();							
?>