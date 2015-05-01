<div class="row-fluid">
		
								
								<div class="table-header">
									Registros de Censo en el sistema
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>
												<i class="icon-time bigger-110 hidden-phone"></i>
												Fecha</th>
											<th>Nombre</th>
											

											<th class="hidden-phone">
												
												Apellido
											</th>
											<th class="hidden-480">
												<i class="icon-share bigger-110 hidden-phone"></i>
												Telefono</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												Tipo</th>
											

											<th></th>
										</tr>
									</thead>

									<tbody>


<?php
			include("conexion.php");
			$consulta="SELECT afe.Telefono as telefono, cst.Nombre as tipo, cen.Id_Censo as idCenso, afe.nombre as nombre, afe.apellido as apellido, cen.Fecha_Censo as fecha
			FROM cs_censo cen,cs_afectado afe, cs_vivienda csv, cs_tipo as cst
			WHERE afe.Id_Afectado=cen.Id_Afectado and
			csv.Id_Vivienda=cen.Id_Vivienda and 
			cst.Id_Tipo=csv.Id_Tipo and
			cen.Fecha_Censo >= '".$_REQUEST["fecha1"]."' and
			cen.Fecha_Censo <= '".$_REQUEST["fecha2"]."' and						
			afe.Cedula like '%".$_REQUEST["cedula"]."%'
			";	
			//echo $consulta;
				$sql=mysql_query ($consulta,$conexion);	
				while($row=mysql_fetch_array($sql)){
					//$id_actividad=$row["Id_Actividad"];
					//echo "\n \n El ultimo Id_Actividad que se guardo es: ".$id_actividad;
				


		?>



										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"><?php echo $row["fecha"]; ?></a>
											</td>
											<td><?php echo $row["nombre"]; ?></td>
											<td class="hidden-480"><?php echo $row["apellido"]; ?></td>
											<td class="hidden-phone"><?php echo $row["telefono"]; ?></td>

											<td class="hidden-480">
												<span class="label label-warning"><?php echo $row["tipo"]; ?></span>
											</td>

											<td class="td-actions">
												<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="javascript: abreModal('<?php echo $row["idCenso"]; ?>')">
														<i class="icon-zoom-in bigger-130"></i>
													</a>

													<a class="red" onclick="javascript: imprimirCenso('<?php echo $row["idCenso"]; ?>')">
														<i class="icon-book bigger-130"></i>
													</a>
												</div>

												<div class="hidden-desktop visible-phone">
													<div class="inline position-relative">
														<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
															<i class="icon-caret-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
															<li>
																<a href="javascript: abreModal('<?php echo $row["idCenso"]; ?>')" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
																</a>
															</li>

															
														</ul>
													</div>
												</div>
											</td>
										</tr>

<?php


 } //cierro while 
include("guardaBitacora.php");
					bitacora("Busca listado Censo","Buscar",$conexion);

 ?>




									</tbody>
								</table>
							
							</div>