
<?php 
		$fila=0;
			include("conexion.php");	
			$sql=mysql_query("SELECT * FROM cs_motivo order by Id_Motivo asc",$conexion);  
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query("SELECT * FROM cs_motivo order by Nombre asc",$conexion);  
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
										
										<td >
											<input value="<?php echo $row["Nombre"]; ?>" type="text" id="motivo<?php echo $fila; ?>" name="motivo<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />
											<input id="viejo<?php echo $fila; ?>" name="viejo<?php echo $fila; ?>"  value="<?php echo $row["Nombre"]; ?>" type="hidden"   />
											
										</td>

											<td style="padding: 8px 0px; width:400 px;" >
												<textarea id="descripcion<?php echo $fila; ?>"  name="descripcion<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" ><?php echo $row["Descripcion"]; ?></textarea>
																							
											</td>


										
										
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												<a href="javascript: modificaPuesto('<?php echo "activo".$fila; ?>','<?php echo "motivo".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "descripcion".$fila; ?>')" class="tooltip-success" data-rel="tooltip" title="Modificar">
												<i class="icon-pencil bigger-130"></i>
												</a>
												
												<a href="javascript: eliminaPuesto('<?php echo "activo".$fila; ?>','<?php echo "motivo".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "descripcion".$fila; ?>')" class="tooltip-success red" data-rel="tooltip" title="Eliminar">
												<i class="icon-trash bigger-130"></i>
												</a>
											</div>
											
											
										</td>
									</tr>



<?php

				} //CIERRA WHILEEEEEEEEEEEEE
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
