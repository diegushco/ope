
<?php 
		$fila=0;
			include("conexion.php");	
			$sql=mysql_query("SELECT * FROM cs_tipo_evento order by Nombre asc",$conexion);  
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query("SELECT * FROM cs_tipo_evento order by Nombre asc",$conexion);  
				while($row=mysql_fetch_array($sql)){
					$fila++;

						?>
					<tr>
										
										
										<td >
											<input value="<?php echo $row["Nombre"]; ?>" type="text" id="evento<?php echo $fila; ?>" name="evento<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />
											<input id="viejo<?php echo $fila; ?>" name="viejo<?php echo $fila; ?>"  value="<?php echo $row["Nombre"]; ?>" type="hidden"   />
											
										</td>

															
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												<a href="javascript: modificaEventoCenso('<?php echo "evento".$fila; ?>','<?php echo "viejo".$fila; ?>')" class="tooltip-success" data-rel="tooltip" title="Modificar">
												<i class="icon-pencil bigger-130"></i>
												</a>
												
												<a href="javascript: eliminaEventoCenso('<?php echo "evento".$fila; ?>','<?php echo "viejo".$fila; ?>','<?php echo "descripcion".$fila; ?>')" class="tooltip-success red" data-rel="tooltip" title="Eliminar">
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


									
