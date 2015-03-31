<?php 
		$fila=0;
			include("conexion.php");
			$consulta="SELECT ce.Existe AS Existe, ce.Nombre AS Nombre, te.Nombre AS tipo
			FROM cs_evento ce, cs_tipo_evento te
			WHERE ce.Id_TipoEvento = te.Id_TipoEvento ORDER BY ce.Nombre ASC ";	
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
											<input  style="width:180px;" value="<?php echo $row["Nombre"]; ?>" type="text" id="evento<?php echo $fila; ?>" name="evento<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />
											<input id="viejo<?php echo $fila; ?>" name="viejo<?php echo $fila; ?>"  value="<?php echo $row["Nombre"]; ?>" type="hidden"   />
											<input id="tipo<?php echo $fila; ?>" name="tipo<?php echo $fila; ?>"  value="<?php echo $row["tipo"]; ?>" type="hidden"   />
											<?php
											echo $row["tipo"];
											?>
										</td>
										
										
										
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												<a href="javascript: modifica_evento1('<?php echo "activo".$fila; ?>','<?php echo "tipo".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "evento".$fila; ?>')" class="tooltip-success" data-rel="tooltip" title="Modificar">
												<i class="icon-pencil bigger-130"></i>
												</a>
												
												<a href="javascript: mensaje_elimina()" class="tooltip-success red" data-rel="tooltip" title="Eliminar">
												<i class="icon-trash bigger-130"></i>
												</a>
											</div>
											
											
										</td>
									</tr>



<?php

				} //CIERA WHILEEEEEEEEEEEEE
				include("guardaBitacora.php");
					bitacora("Busca lista evento ","Buscar",$conexion);
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>