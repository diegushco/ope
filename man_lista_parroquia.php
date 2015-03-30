<?php 
		$fila=0;
			include("conexion.php");
			$consulta="SELECT parr.Existe AS Existe, parr.Nombre AS Nombre, mun.Nombre AS municipio FROM municipio mun, parroquia parr WHERE mun.Id_Municipio = parr.Id_Municipio ORDER BY parr.Nombre ASC ";	
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
											<input  style="width:180px;" value="<?php echo $row["Nombre"]; ?>" type="text" id="parroquia<?php echo $fila; ?>" name="parroquia<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />
											<input id="viejo<?php echo $fila; ?>" name="viejo<?php echo $fila; ?>"  value="<?php echo $row["Nombre"]; ?>" type="hidden"   />
											<input id="municipio<?php echo $fila; ?>" name="municipio<?php echo $fila; ?>"  value="<?php echo $row["municipio"]; ?>" type="hidden"   />
											<?php
											echo $row["municipio"];
											?>
										</td>
										
										
										
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												<a href="javascript: modifica_parroquia('<?php echo "activo".$fila; ?>','<?php echo "municipio".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "parroquia".$fila; ?>')" class="tooltip-success" data-rel="tooltip" title="Modificar">
												<i class="icon-pencil bigger-130"></i>
												</a>
												
												<a href="javascript: elimina_parroquia('<?php echo "activo".$fila; ?>','<?php echo "municipio".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "parroquia".$fila; ?>')" class="tooltip-success red" data-rel="tooltip" title="Eliminar">
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


									
