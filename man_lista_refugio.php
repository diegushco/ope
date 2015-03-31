<?php 
		$fila=0;
			include("conexion.php");
			$consulta="SELECT ald.Nombre AS aldea, re.Nombre AS Nombre, re.Id_Refugio AS id_re FROM cs_refugio re, aldea ald WHERE ald.Id_Aldea = re.Id_Aldea ORDER BY re.Nombre ASC ";	
			
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query($consulta,$conexion);  
				while($row=mysql_fetch_array($sql)){
					$fila++;

						?>
					<tr>
										
										
										<td>
											
											<?php
											echo $row["Nombre"];
											?> (<strong><?php
											echo $row["aldea"];
											?></strong>)
										</td>
										
										
										
										
										<td class="td-actions">
											<div class="hidden-phone visible-desktop action-buttons">
												
												
												
															<a href="javascript: abreModal('<?php echo $row["id_re"]; ?>')" class="tooltip-info" data-rel="tooltip" title="Detalle">
															<span class="blue">
																<i class="icon-zoom-in bigger-120"></i>
															</span>
															</a>
														
												
											</div>
											
											
										</td>
									</tr>



<?php

				} //CIERA WHILEEEEEEEEEEEEE
				include("guardaBitacora.php");
					bitacora("Busca lista de refugios ","Buscar",$conexion);
			}
				
			
			else{
				echo " No hay registro";
			}

			mysql_close();			
?>


									
