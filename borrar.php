<?php    
	include("conexion.php");	
	$consulta="SELECT * FROM area_region where fondo_areaf_id='".$_REQUEST["areaf"]."' and region_id='".$_REQUEST["region"]."' and area_id='".$_REQUEST["area"]."' ";
	
		$sql=mysql_query($consulta,$conexion);
			if($row=mysql_fetch_array($sql)){
				echo "Ya existe.";
			}else{
				$consulta="INSERT INTO area_region (fondo_areaf_id,region_id,area_id) VALUES ('".$_REQUEST["areaf"]."','".$_REQUEST["region"]."','".$_REQUEST["area"]."')";
				$sql=mysql_query ($consulta,$conexion);	
				
				include("guardaBitacora.php");
				bitacora("Guardo un area con region","Guardar",$conexion);
									
				if($sql){
						echo "Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}
			}	
/*
hora=1364251589136&areaf=2&region=5&area=2
*/
			mysql_close();							
?>