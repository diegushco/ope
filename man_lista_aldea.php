<?php 
		$fila=0;
			include("conexion.php");
			$consulta="SELECT ald.Existe AS Existe, ald.Nombre AS Nombre, ciu.Nombre AS parroquia
			 FROM aldea ald, ciudad ciu
			  WHERE ald.Id_Ciudad = ciu.Id_Ciudad ORDER BY ald.Nombre ASC ";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query($consulta,$conexion);  
				while($row=mysql_fetch_array($sql)){
					$fila++;

						?>
					<tr>
										<td class="center">
									<label>
										<?php 
											if($row["Existe"]=="1"){
												echo '<input type="checkbox" id="activo'.$fila.'" name="activo'.$fila.'" checked="checked" />';
											}else{
												echo '<input type="checkbox" id="activo'.$fila.'" name="activo'.$fila.'" />';	
											}
										?>

										
										<span class="lbl"></span>
									</label>
										</td>
										
										<td>
											<input  style="width:180px;" value="<?php echo $row["Nombre"]; ?>" type="text" id="aldea<?php echo $fila; ?>" name="aldea<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />
											<input id="viejo<?php echo $fila; ?>" name="viejo<?php echo $fila; ?>"  value="<?php echo $row["Nombre"]; ?>" type="hidden"   />
											<input id="parroquia<?php echo $fila; ?>" name="parroquia<?php echo $fila; ?>"  value="<?php echo $row["parroquia"]; ?>" type="hidden"   />
											<?php
											echo $row["parroquia"];
											?>
										</td>
										
										
										
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												<a href="javascript: modifica_aldea('<?php echo "activo".$fila; ?>','<?php echo "parroquia".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "aldea".$fila; ?>')" class="tooltip-success" data-rel="tooltip" title="Modificar">
												<i class="icon-pencil bigger-130"></i>
												</a>
												
												<a href="javascript: elimina_aldea('<?php echo "activo".$fila; ?>','<?php echo "parroquia".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "aldea".$fila; ?>')" class="tooltip-success red" data-rel="tooltip" title="Eliminar">
												<i class="icon-trash bigger-130"></i>
												</a>
											</div>
											
											
										</td>
									</tr>



<?php

				} //CIERA WHILEEEEEEEEEEEEE
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
