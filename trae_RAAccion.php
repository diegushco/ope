<div class="row-fluid">
		
								
								<div class="table-header">
									Registros de RA en el sistema
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
											<th>Folio</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												Accion</th>

											<th class="hidden-phone">
												
												Tipo
											</th>
											<th class="hidden-480">Condicion</th>

											<th></th>
										</tr>
									</thead>

									<tbody>


<?php
			include("conexion.php");
			$consulta="select rct.Nombre as aldea, raa.Id_Actividad as actividad, raa.Fecha as fecha, raa.Numero_Folio as folio, rat.Nombre as tipo, rco.Nombre as condicion
				from ra_actividad raa, 
				ra_tipo rat,
				aldea ald,
				ra_accion_actividad rac,
				ra_accion_tomada rct,
				ra_condicion rco,
				ra_actividad_danho rdh,
				ra_danho rdn,				
				ciudad ciud,
				parroquia parr, 
				municipio muni
				where raa.Id_Tipo=rat.Id_Tipo and
				ald.Id_Ciudad=ciud.Id_Ciudad and
				ciud.Id_Parroquia=parr.Id_Parroquia and
				parr.Id_Municipio=muni.Id_Municipio and
				raa.Id_Aldea=ald.Id_Aldea and
				rac.Id_Actividad=raa.Id_Actividad and
				rac.Id_AccionTomada=rct.Id_AccionTomada and
				rco.Id_Condicion=raa.Id_Condicion and
				rdh.Id_Actividad=raa.Id_Actividad and
				rdn.Id_Danho=rdh.Id_Danho and
				ald.Id_Ciudad=ciud.Id_Ciudad and
				ciud.Id_Parroquia=parr.Id_Parroquia and
				parr.Id_Municipio=muni.Id_Municipio and
				raa.fecha >= '".$_REQUEST["fecha1"]."' and
				raa.fecha <= '".$_REQUEST["fecha2"]."' and
				rct.Id_AccionTomada like '%".$_REQUEST["muni"]."%'
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
											<td><?php echo $row["folio"]; ?></td>
											<td class="hidden-480"><?php echo $row["aldea"]; ?></td>
											<td class="hidden-phone"><?php echo $row["tipo"]; ?></td>

											<td class="hidden-480">
												<span class="label label-warning"><?php echo $row["condicion"]; ?></span>
											</td>

											<td class="td-actions">
												<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="javascript: abreModal('<?php echo $row["actividad"]; ?>')">
														<i class="icon-zoom-in bigger-130"></i>
													</a>
	
													<a class="red" onclick="javascript: imprimirRA('<?php echo $row["actividad"]; ?>')">
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
																<a href="javascript: abreModal('<?php echo $row["actividad"]; ?>')" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="javascript: onclick('<?php echo $row["actividad"]; ?>')" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-book bigger-120"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>

<?php } 
include("guardaBitacora.php");
bitacora("Busca lista de RA por accion tomada","Buscar",$conexion);
//cierro if ?>




									</tbody>
								</table>
							
							</div>