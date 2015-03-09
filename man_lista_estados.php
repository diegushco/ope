<?php 
		$fila=0;
			include("conexion.php");	
			$sql=mysql_query("SELECT * FROM estado order by Id_estado asc",$conexion);  
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query("SELECT * FROM estado order by Nombre asc",$conexion);  
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
											<input  style="width:180px;" value="<?php echo $row["Nombre"]; ?>" type="text" id="estado<?php echo $fila; ?>" name="estado<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />
											<input id="viejo<?php echo $fila; ?>" name="viejo<?php echo $fila; ?>"  value="<?php echo $row["Nombre"]; ?>" type="hidden"   />
											
										</td>										
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												<a href="javascript: modifica_estado('<?php echo "activo".$fila; ?>','<?php echo "estado".$fila; ?>','<?php echo "viejo".$fila; ?>')" class="tooltip-success" data-rel="tooltip" title="Modificar">
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
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
