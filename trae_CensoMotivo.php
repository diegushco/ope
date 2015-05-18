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
												Motivo</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												Tipo</th>
											

											<th></th>
										</tr>
									</thead>

									<tbody>


<?php
			include("conexion.php");
			$consulta="select cm.Nombre as motivo, cc.Id_Censo as idCenso, cvi.Id_Vivienda as idvi,
 csa.Id_Afectado as idafe, cc.Id_Censo as id, csa.Cedula as cedula ,
 csa.Nombre as nombre ,csa.Apellido as apellido, csa.Sexo as sexo,
csa.Nacionalidad as nacionalidad, csa.Fecha_Nacimiento as fechanac,
csa.Estado_Civil as estadoCivil, csa.Situacion_Conyugal as conyugue,
csa.Telefono as telefono, csa.Residencia_Estado as tiempoEstado,
csa.Residencia_Comunidad as tiempoComunidad,
csa.Nivel_instruccion as nivelInstruccion,
csa.Situacion_Laboral as trabajo, csa.LPH as lph,
csa.uso_LPH as usoLPH, cr.Nombre as nombre_refugio, 
cra.Fecha_Ingreso as fecha_ingreso_refugio,
cop.Nombre as otra_propiedad, cc.Fecha_Censo as FechaCenso,
cc.Observacion as observacionCenso, cm.Nombre as motivo,
ce.Nombre as evento, fu.Nombre as nombreFuncionario,
fu.Apellido as apellidoFuncionario, al.Nombre as aldea,
cf.Nombre as condicionFamiliar, 
cvi.Numero_Familias as canFamilias, 
cvi.Numero_Habitaciones as canHabitaciones, 
cda.Nombre as dano, cten.Nombre as tenencia,
 ctip.Nombre as tipoVivienda, cpar.Nombre as parteCenso, 
 cmel1.Nombre as materialTecho, 
 cmel2.Nombre as materialParedes, 
 cmel3.Nombre as materialPiso
from cs_afectado csa, cs_otra_propiedad cop, cs_refugio_afectado cra, cs_refugio cr, cs_censo cc, cs_evento ce, funcionario fu, aldea al, cs_motivo cm, cs_condicion_familiar cf, cs_vivienda cvi, cs_danho cda, cs_tenencia cten, cs_tipo ctip, cs_parte cpar, cs_material_elaboracion cmel1, cs_material_elaboracion cmel2, cs_material_elaboracion cmel3
, ciudad ciu, parroquia parr, municipio mun
where
mun.Id_Municipio=parr.Id_Municipio and
parr.Id_Parroquia=ciu.Id_Parroquia and
ciu.Id_Ciudad=al.Id_Ciudad and
cra.Id_Refugio=cr.Id_Refugio and
cra.Id_Afectado=csa.Id_Afectado and
csa.Id_OtraPropiedad=cop.Id_OtraPropiedad and
cc.Id_Evento=ce.Id_Evento and
fu.Id_Funcionario=cc.Id_Funcionario and
al.Id_Aldea=cc.Id_Aldea and
cm.Id_Motivo=cc.Id_Motivo and
cf.Id_CondicionFamiliar=cc.Id_CondicionFamiliar and
cda.Id_Danho=cvi.Id_Danho and
cten.Id_Tenencia=cvi.Id_Tenencia and
ctip.Id_Tipo=cvi.Id_Tipo and
cpar.Id_Parte=cvi.Id_Parte and
cmel1.Id_MaterialElaboracion=cvi.Id_MaterialElaboracion and
cmel2.Id_MaterialElaboracion=cvi.Id_MaterialParedes and
cmel3.Id_MaterialElaboracion=cvi.Id_MaterialPisos and
csa.Id_Afectado=cc.Id_Afectado and
cvi.Id_Vivienda=cc.Id_Vivienda and
				cc.Fecha_Censo >= '".$_REQUEST["fecha1"]."' and
				cc.Fecha_Censo <= '".$_REQUEST["fecha2"]."' and
				cm.Id_Motivo like '%".$_REQUEST["idbus"]."%' 
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
												<a href="#"><?php echo $row["FechaCenso"]; ?></a>
											</td>
											<td><?php echo $row["nombre"]; ?></td>
											<td class="hidden-480"><?php echo $row["apellido"]; ?></td>
											<td class="hidden-phone"><?php echo $row["motivo"]; ?></td>

											<td class="hidden-480">
												<span class="label label-warning"><?php echo $row["tipoVivienda"]; ?></span>
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

															

															<li>
																<a href="javascript: imprimirCenso('<?php echo $row["idCenso"]; ?>')" class="tooltip-error" data-rel="tooltip" title="Delete">
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
bitacora("Busca lista de Censo por motivo","Buscar",$conexion);
//cierro if ?>




									</tbody>
								</table>
							
							</div>