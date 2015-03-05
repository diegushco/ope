<?php 
			
			include("conexion.php");	
			$consulta = "";
			if($_REQUEST["cedula2"]==""&&$_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]!=""&&$_REQUEST["inspeccion"]!=""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion, cit.id_cita as cita
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
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."') AND cit.Estado<>'Anulada'
				";
			}else if($_REQUEST["fechaI"]==""&&$_REQUEST["fechaF"]==""&&$_REQUEST["inspeccion"]==""&&$_REQUEST["aldea"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion, cit.id_cita as cita
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad						  
							  AND ent.Cedula='".$_REQUEST["cedula2"]."' AND cit.Estado<>'Anulada'
							  
				";
			}else if($_REQUEST["aldea"]==""&&$_REQUEST["fechaI"]==""&&$_REQUEST["cedula2"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion, cit.id_cita as cita
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad							  							  
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')	AND cit.Estado<>'Anulada'
				";
			}else if($_REQUEST["aldea"]==""&&$_REQUEST["fechaI"]!=""&&$_REQUEST["cedula2"]==""&&$_REQUEST["inspeccion"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion, cit.id_cita as cita
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							 and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad									  							  
							  AND ('".$_REQUEST["fechaI"]."'<cit.Fecha_Cita && '".$_REQUEST["fechaF"]."'>cit.Fecha_Cita)  AND cit.Estado<>'Anulada'							  
				";
			}else if($_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]==""&&$_REQUEST["cedula2"]==""&&$_REQUEST["inspeccion"]==""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion, cit.id_cita as cita
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad									  							  
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')  AND cit.Estado<>'Anulada'
			";
			
		}else if($_REQUEST["aldea"]!=""&&$_REQUEST["fechaI"]==""&&$_REQUEST["cedula2"]==""&&$_REQUEST["inspeccion"]!=""){
				$consulta="SELECT ent.Nombre as nombre, ent.Apellido as apellido, ent.Telefono as telefono,
							  ent.Cedula as cedula,est.Nombre AS estado, ciu.Nombre AS ciudad,
							  ald.Nombre as aldea,
							  par.Nombre AS parroquia, mun.Nombre AS municipio,
							  cit.Direccion as direccion, cit.Fecha_Solicitud as fsolicitud,
							  cit.Fecha_Cita as fcita,tip.Nombre as tipo, cit.Observacion as observacion, cit.id_cita as cita
							  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald, estado est, ciudad ciu, municipio mun, parroquia par
							  where cit.Id_tipo=tip.Id_tipo
							  and cit.Id_Aldea=ald.Id_Aldea
							  and cit.Id_Entrevistado=ent.Id_Entrevistado
							  and mun.Id_estado = est.Id_estado
								AND par.Id_Municipio = mun.Id_Municipio
								AND ciu.Id_Parroquia = par.Id_Parroquia
								AND ald.Id_Ciudad = ciu.Id_Ciudad									  							  
							  AND ald.Id_Aldea=(select Id_aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
							  AND tip.Id_tipo=(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."')  AND cit.Estado<>'Anulada'
				
";
			}
			
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
			
			if($consulta!=""){
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
						echo "<tr align='center'><td colspan='10'><a class='btn btn-mini btn-primary' onclick='imprimirCita(".$row['cita'].")'><i class='icon-print'></i> Imprimir comprobante de cita</a> <a class='btn btn-mini btn-danger' onclick='eliminaCita(".$row['cita'].")'><i class='icon-remove'></i> Anular cita</a></td></tr>";
						$aco=$aco+1;
					} //CIERRA WHILE
				}else{
					echo "No hay registros";
				}
			}else{
					echo "No hay coincidencias";
			}

			mysql_close();			
?>


									
