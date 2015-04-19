<?php 
		$fila=0;
			include("conexion.php");
			$consulta="SELECT cen.Id_Censo as idCenso, afe.nombre as nombre, afe.apellido as apellido, cen.Fecha_Censo as fecha
			FROM cs_censo cen,cs_afectado afe WHERE afe.Id_Afectado=cen.Id_Afectado and afe.Cedula= '".$_REQUEST["cedula"]."' ";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
				echo '<input type="hidden" id="oculto" name="oculto" value=""/>
						<table id="sample-table-1" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>	
						<th></th>											
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Fecha Censo</th>											
						</tr>
					</thead>
					<tbody>';
					$sql=mysql_query($consulta,$conexion);  
					while($row=mysql_fetch_array($sql)){
					echo '
						<tr>
						<td class="center">
							<label>
								<input type="checkbox" onclick=sele(this) value="'.$row["idCenso"].'" id="cen'.$fila.'" name="cen'.$fila.'" />
								<span class="lbl"></span>
							</label>
							</td>
							<td>							
								'.$row["nombre"].'
							</td>
							<td>
								'.$row["apellido"].'
							</td>
							<td>
								'.$row["fecha"].'
							</td>												
						</tr>';
					}
						echo '</tbody>
				</table>';
					
				
			}
			//fecha, folio, aldea, tipo actividad	
			
			else{
				echo "No hay registro";
			}
			include("guardaBitacora.php");
			bitacora("Busca por cedula censo ".$_REQUEST["cedula"],"Buscar",$conexion);
			mysql_close();			
?>


									
