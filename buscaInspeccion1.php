<?php 
			

			/*
hora=1427032929606
&num_folio=1111******************
&cedula2=2222********************
&inspeccion=informe de algo
&municipio=Bolívar
&aldea=La piedrita
&fechaI=2015-03-16
&fechaF=2015-03-26
			*/
			include("conexion.php");	
			$consulta = "";
			
				if($_REQUEST["fechaF"]!=""){
					
					$consulta="SELECT eev.Fecha as fechae, eev.Informe_Actividad as informe,
					eev.Recomendacion as recomendacion, eev.Observacion as observacion,	
					cit.No_Folio as folio, ent.Nombre as nombre, ent.Apellido as apellido, 
					ent.Telefono as telefono, ent.Cedula as cedula,est.Nombre AS estado,
					 ciu.Nombre AS ciudad, ald.Nombre as aldea, par.Nombre AS parroquia,
					  mun.Nombre AS municipio, cit.Direccion as direccion, 
					  cit.Fecha_Solicitud as fsolicitud, cit.Fecha_Cita as fcita,
					  tip.Nombre as tipo, cit.Observacion as observacion, 
					  cit.id_cita as cita 
					  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald,
					   estado est, ciudad ciu, municipio mun, parroquia par,
					   ev_evaluacion eev
					  where cit.Id_tipo=tip.Id_tipo and cit.Id_Aldea=ald.Id_Aldea and
					   cit.Id_Entrevistado=ent.Id_Entrevistado and
					   mun.Id_estado = est.Id_estado AND
					   par.Id_Municipio = mun.Id_Municipio AND
					   ciu.Id_Parroquia = par.Id_Parroquia AND
					   ald.Id_Ciudad = ciu.Id_Ciudad AND cit.Estado<>'Anulada' AND
					   eev.Id_Cita=cit.Id_Cita AND
					   ent.Cedula like '%".$_REQUEST["cedula2"]."%' AND
					   cit.No_Folio like '%".$_REQUEST["num_folio"]."%' AND
					   mun.Nombre like '%".$_REQUEST["municipio"]."%' AND
					   ald.Nombre like '%".$_REQUEST["aldea"]."%' AND
					   tip.Nombre like '%".$_REQUEST["inspeccion"]."%'AND
					   cit.Fecha_Cita BETWEEN '".$_REQUEST["fechaI"]."' AND '".$_REQUEST["fechaF"]."'
					     ";
				//echo "<<<<";
				}else{
					//echo ">>>";
					$consulta="SELECT eev.Fecha as fechae, eev.Informe_Actividad as informe,
					eev.Recomendacion as recomendacion, eev.Observacion as observacion,
					cit.No_Folio as folio, ent.Nombre as nombre, ent.Apellido as apellido, 
					ent.Telefono as telefono, ent.Cedula as cedula,est.Nombre AS estado,
					 ciu.Nombre AS ciudad, ald.Nombre as aldea, par.Nombre AS parroquia,
					  mun.Nombre AS municipio, cit.Direccion as direccion, 
					  cit.Fecha_Solicitud as fsolicitud, cit.Fecha_Cita as fcita,
					  tip.Nombre as tipo, cit.Observacion as observacion, 
					  cit.id_cita as cita 
					  FROM ev_cita cit,ev_tipo tip,entrevistado ent,aldea ald,
					   estado est, ciudad ciu, municipio mun, parroquia par,
					   ev_evaluacion eev 
					  where cit.Id_tipo=tip.Id_tipo and cit.Id_Aldea=ald.Id_Aldea and
					   cit.Id_Entrevistado=ent.Id_Entrevistado and
					   mun.Id_estado = est.Id_estado AND
					   par.Id_Municipio = mun.Id_Municipio AND
					   ciu.Id_Parroquia = par.Id_Parroquia AND
					   ald.Id_Ciudad = ciu.Id_Ciudad AND cit.Estado<>'Anulada' AND
					   eev.Id_Cita=cit.Id_Cita AND
					   ent.Cedula like '%".$_REQUEST["cedula2"]."%' AND
					   cit.No_Folio like '%".$_REQUEST["num_folio"]."%' AND
					   mun.Nombre like '%".$_REQUEST["municipio"]."%' AND
					   ald.Nombre like '%".$_REQUEST["aldea"]."%' AND
					   tip.Nombre like '%".$_REQUEST["inspeccion"]."%' AND
					   cit.Fecha_Cita like '%".$_REQUEST["fechaI"]."%'
					     ";
				}

				
			
			//echo "---".$consulta."---";
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
						echo "<tr><td style='background-color: #ffeecc;'>Fecha Evaluacion:</td><td colspan='9'>".$row["fechae"]."</td><tr>";
						echo "<tr><td style='background-color: #ffeecc;'>Informe:</td><td colspan='9'>".$row["informe"]."</td><tr>";
						echo "<tr><td style='background-color: #ffeecc;'>Recomendacion:</td><td colspan='9'>".$row["recomendacion"]."</td><tr>";
						echo "<tr><td style='background-color: #ffeecc;'>Observacion:</td><td colspan='9'>".$row["observacion"]."</td><tr>";						
						echo "<tr align='center'><td colspan='10'><a class='btn btn-mini btn-primary' onclick='imprimirInspeccion(".$row['cita'].")'><i class='icon-print'></i> Imprimir comprobante de inspeccion</a> </td></tr>";
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