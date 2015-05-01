<?php
include("conexion.php");
			$consulta="select cc.Id_Censo idce, cvi.Id_Vivienda as idvi, csa.Id_Afectado as idafe, cc.Id_Censo as id, csa.Cedula as cedula ,csa.Nombre as nombre ,csa.Apellido as apellido, csa.Sexo as sexo, csa.Nacionalidad as nacionalidad, csa.Fecha_Nacimiento as fechanac, csa.Estado_Civil as estadoCivil, csa.Situacion_Conyugal as conyugue, csa.Telefono as telefono, csa.Residencia_Estado as tiempoEstado, csa.Residencia_Comunidad as tiempoComunidad, csa.Nivel_instruccion as nivelInstruccion, csa.Situacion_Laboral as trabajo, csa.LPH as lph, csa.uso_LPH as usoLPH, cr.Nombre as nombre_refugio, cra.Fecha_Ingreso as fecha_ingreso_refugio, cop.Nombre as otra_propiedad, cc.Fecha_Censo as FechaCenso, cc.Observacion as observacionCenso, cm.Nombre as motivo, ce.Nombre as evento, fu.Nombre as nombreFuncionario, fu.Apellido as apellidoFuncionario, al.Nombre as aldea, cf.Nombre as condicionFamiliar, cvi.Numero_Familias as canFamilias, cvi.Numero_Habitaciones as canHabitaciones, cda.Nombre as dano, cten.Nombre as tenencia, ctip.Nombre as tipoVivienda, cpar.Nombre as parteCenso, cmel1.Nombre as materialTecho, cmel2.Nombre as materialParedes, cmel3.Nombre as materialPiso
from cs_afectado csa, cs_otra_propiedad cop, cs_refugio_afectado cra, cs_refugio cr, cs_censo cc, cs_evento ce, funcionario fu, aldea al, cs_motivo cm, cs_condicion_familiar cf, cs_vivienda cvi, cs_danho cda, cs_tenencia cten, cs_tipo ctip, cs_parte cpar, cs_material_elaboracion cmel1, cs_material_elaboracion cmel2, cs_material_elaboracion cmel3
where
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
cc.Id_Censo='".$_REQUEST["valor"]."'

";
			//$consulta="SELECT * from cs_refugio where Id_Refugio='".$_REQUEST["valor"]."'";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
				$idafe=$row["idafe"];		
				$idce=$row["idce"];


?>

<form action="" class="form-horizontal" name="formulario1" id="formu1" method="post"> 

							<table class="table  table-condensed "  >
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Cedula:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["cedula"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Nombre:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["nombre"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Apellido:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["apellido"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Sexo:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["sexo"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Fecha Nac.:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["fechanac"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Edo. Civil:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["estadoCivil"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Conyugue:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["conyugue"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Telefono:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["telefono"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Tiempo en el estado:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["tiempoEstado"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Tiempo en la Comunidad:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["tiempoComunidad"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Nivel Instruccion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["nivelInstruccion"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Trabajo:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["trabajo"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">LPH:</td>
											<td style="padding: 8px 0px;">
												<?php
													if($row["lph"]=="true"){
														
													}else{
														echo "No"; 		
													}
												 ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Uso LPH:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["usoLPH"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Refugio:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["nombre_refugio"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Fecha Refugio:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["fecha_ingreso_refugio"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Otra Propiedad:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["otra_propiedad"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Fecha Censo:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["FechaCenso"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Observacion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["observacionCenso"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Motivo:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["motivo"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Evento:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["evento"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Funcionario:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["nombreFuncionario"]." ".$row["apellidoFuncionario"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">asdasd:</td>
											<td style="padding: 8px 0px;">
												<?php   ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Aldea:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["aldea"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Condicion Familiar:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["condicionFamiliar"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Cantidad Familias:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["canFamilias"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Cantidad Hab.:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["canHabitaciones"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Daño:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["dano"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Tenencia:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["tenencia"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Tipo Vivienda:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["tipoVivienda"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Grietas en:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["parteCenso"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Material Techo:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["materialTecho"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;font-weight: bold;">Material Paredes:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["materialParedes"]; ?>
											</td>
											<td style="padding: 8px 5px;font-weight: bold;">Material Piso:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["materialPiso"]; ?>
											</td>
											
											
										</tr>
										<?php
											$cons="select cne.Nombre as necesidad
												from cs_afectado csaf, cs_necesidad_afectado cna, cs_necesidad cne
												where csaf.Id_Afectado=cna.Id_Afectado and
												cna.Id_Necesidad=cne.Id_Necesidad and
												csaf.Id_Afectado='".$row["idafe"]."'";
											$sql=mysql_query($cons,$conexion);  
											?>
											<tr>										
													<td style="padding: 8px 5px;font-weight: bold;">Necesidades:</td>
													
												</tr>
											<?php
											while($row2=mysql_fetch_array($sql)){
												?>
												
												<tr>										
													
													<td style="padding: 8px 0px;">
														<?php echo $row2["necesidad"]; ?>
													</td>
													
													
												</tr>
												<?php
											}
										?>
										<?php
											$cons="select cf.Cedula as ced,cf.Nombre as nombre,cf.apellido as apellido,
											cf.Fecha_Nacimiento as fecha, cf.Parentesco as parentesco, 
											cf.Nivel_Instruccion as nivel, cf.Ocupacion as ocupacion,
											 cf.Ingreso_Mensual as ingreso
												from cs_familiar cf, cs_afectado ca
												where ca.Id_Afectado=cf.Id_Afectado and
												ca.Id_Afectado='".$row["idafe"]."'";
												//echo $cons;
											$sql=mysql_query($cons,$conexion);  
											?>
											<tr>										
													<td style="padding: 8px 5px;font-weight: bold;">Carga Familiar:</td>
													
												</tr>
												<tr>										
													<td style="padding: 8px 5px;font-weight: bold;">Cedula</td>
													<td style="padding: 8px 5px;font-weight: bold;">Nombre</td>
													<td style="padding: 8px 5px;font-weight: bold;">Apellido</td>
													<td style="padding: 8px 5px;font-weight: bold;">Fecha Nac.</td>
													<td style="padding: 8px 5px;font-weight: bold;">Parentesco</td>
													<td style="padding: 8px 5px;font-weight: bold;">Instruccion</td>
													<td style="padding: 8px 5px;font-weight: bold;">Ocupacion</td>
													<td style="padding: 8px 5px;font-weight: bold;">Ingreso Mensual</td>
													
												</tr>
											<?php
											while($row2=mysql_fetch_array($sql)){
												?>
												
												<tr>										
													
													<td style="padding: 8px 0px;"><?php echo $row2["ced"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["nombre"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["apellido"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["fecha"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["parentesco"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["nivel"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["ocupacion"]; ?></td>
													<td style="padding: 8px 0px;"><?php echo $row2["ingreso"]; ?></td>
													
													
												</tr>
												<?php
											}
										?>
										<?php
											$cons="select cse.Nombre as enser
											from cs_vivienda_enser cve, cs_enser cse
											where cve.Id_Enser=cse.Id_Enser and
												cve.Id_Vivienda='".$row["idvi"]."'";
												//echo $cons;
											$sql=mysql_query($cons,$conexion);  
											?>
											<tr>										
													<td style="padding: 8px 5px;font-weight: bold;">Enseres:</td>
													
												</tr>
											<?php
											while($row2=mysql_fetch_array($sql)){
												?>
												
												<tr>										
													
													<td style="padding: 8px 0px;">
														<i class="icon-ok bigger-110 hidden-phone"></i><?php echo $row2["enser"]; ?>
													</td>
													
													
												</tr>
												<?php
											}
										?>
										<?php
											$cons="select Url
											from foto
											where Id_Censo='".$row["idce"]."'";
												//echo $cons;
											$sql=mysql_query($cons,$conexion);  
											?>
											<tr>										
													<td style="padding: 8px 5px;font-weight: bold;">Fotos:</td>
													
												</tr>
											<?php
											while($row2=mysql_fetch_array($sql)){
												?>
												
												<tr>										
													
													<td style="padding: 8px 0px;">
														<img width="200" height="200" src="<?php echo $row2["Url"]; ?>" />
													</td>
													
													
												</tr>
												<?php
											}
										?>
										
										<tr><td colspan="2"><div id="error"></div></td></tr>
									</table>
									
								


				</form>
			<?php
}





include("guardaBitacora.php");
					bitacora("Busca detalle de Censo ".$_REQUEST["valor"],"Buscar",$conexion);
mysql_close();
			?>