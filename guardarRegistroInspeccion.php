<?php 
/*
hora=1416171726558&numero_cita=8&fecha=2014-11-17&numero=1231/1231&estado11=Tachira&municipio11=Andrés Bello&parroquia11=Andres Bello&ciudad11=Cordero&direccion=adsda&entrevistado=sdasd asdasd&cedula3=V-3123123&propietario=llllll&cedula=V&cedula2=123123&inspeccion=informe de algo&informe=asd&observacion=asd 
*/
 	include("conexion.php");
 	$consulta="INSERT INTO ev_evaluacion VALUES (NULL,NOW(),'".$_REQUEST['direccion']."','".$_REQUEST['informe']."','".$_REQUEST['observacion']."','".$_REQUEST['recomendaciones']."','1','".$_REQUEST['numero_cita']."')"; 
	$sql=mysql_query ($consulta,$conexion);		

	if($sql){
		$actualizacion = "UPDATE ev_cita SET estado='Procesada' WHERE id_cita=".$_REQUEST['numero_cita'];
		$sql2=mysql_query ($actualizacion,$conexion);		
		if($sql2){
			echo "Se guardo correctamente.";
		}else{
			echo "Ha ocurrido un error inesperado, intente de nuevo.";	
		}
	}else{
			echo "Ha ocurrido un error inesperado, intente de nuevo.";
	}

	mysql_close();	
