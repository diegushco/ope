<?php    
	include("conexion.php"); //hago la conexion a la bd	
	
	$consulta="INSERT INTO cs_otra_propiedad(Nombre,Descripcion) VALUES ('".$_REQUEST["propiedad"]."','".$_REQUEST["descripcion"]."')";
	$sql=mysql_query ($consulta,$conexion);		
	
	//echo $consulta;
	if($sql){
			echo "Se guardo correctamente.";
	}else{
			echo "Ha ocurrido un error inesperado, intente de nuevo.";
	}

mysql_close();							
?>