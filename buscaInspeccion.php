<?php 
include("conexion.php");
if ($_REQUEST["cedula2"]==""&&$_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]!=""&&$_REQUEST["inspeccion"]!="") {
	# code...

	$consulta= "SELECT * 
					FROM ev_evaluacion eva, ev_tipo tip, entrevistado ent, aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
					WHERE eva.Id_tipo=tip.Id_tipo
					  and cit.Id_Aldea=ald.Id_Aldea
					  and cit.Id_Entrevistado=ent.Id_Entrevistado
					  and mun.Id_estado = est.Id_estado
						AND par.Id_Municipio = mun.Id_Municipio
						AND ciu.Id_Parroquia = par.Id_Parroquia
						AND ald.Id_Ciudad = ciu.Id_Ciudad	
					 AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
					 AND ('".$_REQUEST["fechaI"]."'<cit.Fecha_Cita && '".$_REQUEST["fechaF"]."'>cit.Fecha_Cita)							  
					 AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')	
				";


	$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad		
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
							  AND ('".$_REQUEST["fechaI"]."'<cit.Fecha_Cita && '".$_REQUEST["fechaF"]."'>cit.Fecha_Cita)							  
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')
				";

}


?>






<?php 
			
			include("conexion.php");	
			if($_REQUEST["cedula2"]==""&&$_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]!=""&&$_REQUEST["inspeccion"]!=""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad		
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
							  AND ('".$_REQUEST["fechaI"]."'<cit.Fecha_Cita && '".$_REQUEST["fechaF"]."'>cit.Fecha_Cita)							  
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')
				";
			}else if($_REQUEST["fechaI"]==""&&$_REQUEST["fechaF"]==""&&$_REQUEST["inspeccion"]==""&&$_REQUEST["aldea"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad						  
							  AND ent.Cedula='".$_REQUEST["cedula2"]."'
							  
				";
			}else if($_REQUEST["aldea"]==""&&$_REQUEST["fechaI"]==""&&$_REQUEST["cedula2"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad							  							  
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')						  
				";
			}else if($_REQUEST["aldea"]==""&&$_REQUEST["fechaI"]!=""&&$_REQUEST["cedula2"]==""&&$_REQUEST["inspeccion"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							 and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad									  							  
							  AND ('".$_REQUEST["fechaI"]."'<cit.Fecha_Cita && '".$_REQUEST["fechaF"]."'>cit.Fecha_Cita)							  
				";
			}else if($_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]==""&&$_REQUEST["cedula2"]==""&&$_REQUEST["inspeccion"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad									  							  
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
				
			";
			
		}else if($_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]==""&&$_REQUEST["cedula2"]==""&&$_REQUEST["inspeccion"]!=""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad									  							  
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')
				
";
			}
			//echo $consulta;
			/*$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad		
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
							  AND ('".$_REQUEST["fechaI"]."'<cit.Fecha_Cita && '".$_REQUEST["fechaF"]."'>cit.Fecha_Cita)
							  AND ent.Cedula='".$_REQUEST["cedula2"]."'
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')
				";*/
			
				//echo $consulta;
			$sql=mysql_query($consulta,$conexion);     
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query($consulta,$conexion);  
				$aco=0; 
				while($row=mysql_fetch_array($sql)){
					if($aco>=1){
						echo "<hr>";
					}
					echo "<tr><td style='background-color: #ffeecc;'>Nombre:</td><td>".$row["nombre"]."</td><td style='background-color: #ffeecc;'>Apellido</td><td>".$row["apellido"]."</td><td style='background-color: #ffeecc;'>Cedula:</td><td>".$row["cedula"]."</td><td style='background-color: #ffeecc;'>Telfono:</td><td>".$row["telefono"]."</td><td style='background-color: #ffeecc;'>Aldea:</td><td>".$row["aldea"]."</td><tr>";
					echo "<tr><td style='background-color: #ffeecc;'>Parroquia:</td><td>".$row["parroquia"]."</td><td style='background-color: #ffeecc;'>Municipio</td><td>".$row["municipio"]."</td><td style='background-color: #ffeecc;'>Ciudad:</td><td>".$row["ciudad"]."</td><td style='background-color: #ffeecc;'>Estado:</td><td>".$row["estado"]."</td><td style='background-color: #ffeecc;'>Tipo:</td><td>".$row["tipo"]."</td><tr>";
					echo "<tr><td style='background-color: #ffeecc;'>Fecha Solicitud:</td><td>".$row["fsolicitud"]."</td><td style='background-color: #ffeecc;'>Direccion</td><td colspan='7'>".$row["direccion"]."</td><tr>";
					$aco=$aco+1;


				} //CIERRA WHILEEEEEEEEEEEEE
				include("guardaBitacora.php");
					bitacora("Busca inspeccion de ".$row["cedula"],"Buscar",$conexion);
			}
				
			
			else{
				echo "No hay registros";
			}

			mysql_close();			
?>


									
