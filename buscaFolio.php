<?php 
		$fila=0;
			include("conexion.php");
			$consulta="SELECT ra.Id_Actividad as idid, ald.Nombre as aldea,ra.Fecha as fecha,tipo.Nombre as actividad FROM ra_actividad ra,aldea ald,ra_tipo tipo WHERE ald.Id_Aldea=ra.Id_Aldea and ra.Id_Tipo=tipo.Id_Tipo and ra.Numero_Folio = '".$_REQUEST["folio"]."' ";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
				echo '<table id="sample-table-1" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>												
							<th>Fecha</th>
							<th>Aldea</th>
							<th>Actividad</th>											
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="hidden" id="oculto" name="oculto" value='.$row["idid"].' />
								'.$row["fecha"].'
							</td>
							<td>
								'.$row["aldea"].'
							</td>
							<td>
								'.$row["actividad"].'
							</td>												
						</tr>										
					</tbody>
				</table>';
				include("guardaBitacora.php");
					bitacora("Busca folio ".$_REQUEST["folio"],"Buscar",$conexion);
				
			}
			//fecha, folio, aldea, tipo actividad	
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
