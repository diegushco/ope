<div  class="row-fluid">
	<div align="right" class="span12">
		<table  class="table-condensed ">
			<tr >
				<td ><strong>Fecha</strong></td>
				<td>
						<div class="control-group" style="z-index:1000">
							<div class="row-fluid input-append">
								<input class="span10 date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
								<span class="add-on">
									<i class="icon-calendar"></i>
								</span>
							</div>
						</div>
				</td>
				<td><strong>Id</strong></td>
				<td>
					<input   class="span8" type="text" id="form-field-1" title="Ingrese Datos" />
				</td>	
			</tr>
		</table>					
	</div>
</div>
<form action="#" name="formulario" id="formu" method="post">  
<div class="row-fluid">
	<div class="span12 widget-container-span">
		<div class="widget-box transparent">
			<div class="widget-header">
				
				<div class="widget-toolbar no-border">
					<ul class="nav nav-tabs" id="myTab2">
						<li class="active">
							<a data-toggle="tab" href="#afectado" class="green">DATOS DEL AFECTADO</a>
						</li>

						<li>
							<a data-toggle="tab" href="#vivienda" class="purple">DATOS DE LA VIVIENDA</a>
						</li>

						<li>
							<a data-toggle="tab" href="#carga" class="orange">CARGA FAMILIAR</a>
						</li>

						<li>
							<a data-toggle="tab" href="#enseress" class="red">ENSERES</a>
						</li>

						<li>
							<a data-toggle="tab" href="#nece" class="blue">NECESIDADES</a>
						</li>
						<li>
							<a href="javascript: guardaCenso()" class=" btn btn-small btn-success" ><i class="icon-ok"></i>GUARDAR</a>	
						</li>
					</ul>
				</div>
			</div>
<!-- class="span12" -->
	<div class="widget-body">
		<div class="widget-main ">
			<div class="tab-content">
				<div id="afectado" class="tab-pane in active" style="min-height:400px;">
								 <table class="table table-condensed table-hover">
									<tr>
										<td><strong>Nombres</strong></td>
										<td><input   type="text" id="form-field-1" title="Ingrese Datos" /></td>
										<td><strong>Apellidos</strong></td>
										<td><input   type="text" id="form-field-1" title="Ingrese Datos" /></td>
										<td><strong>Cedula</strong></td>
										<td><input   type="text" id="form-field-1" title="Ingrese Datos" /></td>
								 	</tr>

									<tr>
										 <td><strong>Sexo</strong></td>
										 <td>
											 <div class="control-group form-inline">
												 
												 <div class="controls">
													 <label>
														 <input name="form-field-checkbox" type="checkbox" />
														 <span class="lbl"> F</span>
													 </label>
													 
													 <label>
														 <input name="form-field-checkbox" type="checkbox" />
														 <span class="lbl"> M</span>
													 </label>
													 
													 
												 </div>
											 </div>
										 </td>
										 <td><strong>Nacionalidad</strong></td>
										 <td>
											 <div class="control-group form-inline">
												 
												 <div class="controls">
													 <label>
														 <input name="venezolano1" id="venezolano1" type="checkbox" lang="1" onchange="extranjero(this)" />
														 <span class="lbl"> V</span>
													 </label>
													 
													 <label>
														 <input name="extranjero1" id="extranjero1" type="checkbox" lang="2" onchange="extranjero(this)" />
														 <span class="lbl"> E</span>
													 </label>
												 </div>
											 </div>
										 </td>
										 <td id="extranjero11"></td>
										 <td id="extranjero22"></td>
									</tr>

									<tr>
										<td ><strong>Fecha de Nacimiento</strong></td>
										<td >
											<div class="controls">
												<input title="Seleccione una fecha" class="date-picker input-small" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
												<span class="add-on">
													<i class="icon-calendar"></i>
												</span>
											</div>
										</td>
										 <td ><strong>Estado Civil</strong></td>
										 <td style="padding: 8px 0px;">
														<select  data-placeholder="Seleccione"   class="chzn-select" id="sel2">
															<option value="AL" ></option>
															<option value="AL" >Soltero</option>
															<option value="AK" >Casado</option>
															<option value="AZ" >Divorciado</option>
															<option value="AZ" >Viudo</option>
														</select>
													</td>
										 <td ><strong>Situación Conyugal</strong></td>
										 <td>
											 <select data-placeholder="Seleccione"  class="chzn-select" data-placeholder="Seleccione" >
												 <option value="AL" ></option>
												 <option value="AL" >Ninguna</option>
												 <option value="AL" >Concubino</option>												 
												 <option value="AK" >Separados</option>										 
											 </select>
										 </td>
									</tr>

									<tr>
										<td><strong>Telefonos</strong></td>
										<td><input   class="span12" type="text" id="form-field-1" title="Ingrese Datos" /></td>			
										<td><strong>Tiempo en el Estado</strong></td>
										<td><input   class="span12" type="text" id="form-field-1" title="Ingrese Datos" /></td>
										<td><strong>Tiempo en la Comunidad</strong></td>
										<td><input   class="span12" type="text" id="form-field-1" title="Ingrese Datos" /></td>
									</tr>

								 	<tr>
										<td><strong>Nivel de Instrucción</strong></td>
										<td>
											<select data-placeholder="Seleccione"  class="chzn-select" data-placeholder="Seleccione" >
												<option value="AL" ></option>
												<option value="AL" >Analfabeta</option>
												<option value="AK" >Primaria</option>
												<option value="AZ" >Secundaria</option>
												<option value="AZ" >Tecnica</option>
												<option value="AZ" >Universitaria</option>
											</select>
										</td>
										<td><strong>Situación Laboral</strong></td>
										<td>
											<select data-placeholder="Seleccione"  class="chzn-select" data-placeholder="Seleccione" >
												<option value="AL" ></option>
												<option value="AL" >Empresa Privada</option>
												<option value="AK" >Organismo Publico</option>
												<option value="AZ" >Negocio Propio</option>
												<option value="AZ" >Jubilado</option>
												<option value="AZ" >Desempleado</option>
											</select>
										</td>
										<td colspan="1"><strong>Ingreso Mensual</strong></td>
										<td><input  type="text" id="form-field-1" title="Ingrese Datos" /></td>
									</tr>

									<tr>
										<td><strong>LPH</strong></td>
										<td>
											<div class="control-group form-inline">
												<div class="controls">
													<label>
														<input name="lphsi" id="lphsi" onchange="lph(this)" type="checkbox" />
														<span class="lbl"> Si</span>
													</label>
													
													<label>
														<input name="lphno" id="lphno" onchange="lph(this)" type="checkbox" />
														<span class="lbl"> No</span>
													</label>
														
												</div>
											</div>
										</td>	
										<td><strong>Procedencia</strong></td>
										<td><input   class="span12" type="text" id="form-field-1" title="Ingrese Datos" /></td>
										<td><strong>Aldea</strong></td>
										<td>
											<select data-placeholder="Seleccione" id="aldea" name="aldea" onchange="aldeasel(this)"  class="chzn-select" >
																	<option value="AL" ></option>
																	

																	<?php
																	include("conexion.php");	
																	$sql=mysql_query("SELECT * FROM aldea order by Nombre asc",$conexion);  
																	if($row=mysql_fetch_array($sql)){
																		$sql=mysql_query("SELECT * FROM aldea order by Nombre asc",$conexion);  
																		while($row=mysql_fetch_array($sql)){
																			echo '<option value="'.$row['Id_Aldea'].'" >'.$row['Nombre'].'</option>';
																		}
																	}
																	mysql_close();
																	?>
											</select>
										</td>
									</tr>

									<tr>
										<td><strong>Estado</strong></td>
										<td >
											<input disabled="disabled" class="span12" name="estado11" id="estado11" type="text" title="Ingrese Datos" />
										</td>
										<td ><strong>Municipio</strong></td>
										<td >
											<input   disabled="disabled"  class="span12" type="text" name="municipio11" id="municipio11" title="Ingrese Datos" />
										</td>
										<td><strong>Ciudad</strong></td>
										<td>
											<input   disabled="disabled"  class="span12" type="text" name="ciudad11" id="ciudad11" title="Ingrese Datos" />
										</td>	
									</tr>

									<tr>
										<td><strong>Parroquia</strong></td>
										<td>
											<input   disabled="disabled"  class="span12" type="text" name="parroquia11" id="parroquia11" title="Ingrese Datos" />
										</td>
									</tr>

								 </table>		
				</div>

				<div id="vivienda" class="tab-pane" style="min-height:400px;">
				 <table class="table table-condensed">
									 <tr>
										 <td><strong>Tipo</strong></td>
										 <td>
											 <select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
																	<option value="AL" ></option>
																	

																	<?php
																	include("conexion.php");	
																	$sql=mysql_query("SELECT * FROM cs_tipo order by Nombre asc",$conexion);  
																	if($row=mysql_fetch_array($sql)){
																		$sql=mysql_query("SELECT * FROM cs_tipo order by Nombre asc",$conexion);  
																		while($row=mysql_fetch_array($sql)){
																			echo '<option value="'.$row['Id_Tipo'].'" >'.$row['Nombre'].'</option>';
																		}
																	}
																	mysql_close();
																	?>



																</select>
										 </td>
										 <td><strong>Tenencia</strong></td>
										 <td >
											 <select data-placeholder="Seleccione" id="tenencia" name="tenencia" class="chzn-select" >
																	<option value="AL" ></option>
																	

																	<?php
																	include("conexion.php");	
																	$sql=mysql_query("SELECT * FROM cs_tenencia order by Nombre asc",$conexion);  
																	if($row=mysql_fetch_array($sql)){
																		$sql=mysql_query("SELECT * FROM cs_tenencia order by Nombre asc",$conexion);  
																		while($row=mysql_fetch_array($sql)){
																			echo '<option value="'.$row['Id_Tenencia'].'" >'.$row['Nombre'].'</option>';
																		}
																	}
																	mysql_close();
																	?>
												</select>
										 </td>
										 <td><strong>Motivo</strong></td>
										 <td>
											 <select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
																	<option value="AL" ></option>
																	

																	<?php
																	include("conexion.php");	
																	$sql=mysql_query("SELECT * FROM cs_motivo order by Nombre asc",$conexion);  
																	if($row=mysql_fetch_array($sql)){
																		$sql=mysql_query("SELECT * FROM cs_motivo order by Nombre asc",$conexion);  
																		while($row=mysql_fetch_array($sql)){
																			echo '<option value="'.$row['Id_Motivo'].'" >'.$row['Nombre'].'</option>';
																		}
																	}
																	mysql_close();
																	?>

											</select>
										 </td>
									 </tr>
		 
									 <tr>
										 <td><strong>Daños</strong></td>
										 <td >
											 <select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
												<option value="AL" ></option>
												<?php
												include("conexion.php");	
												$sql=mysql_query("SELECT * FROM cs_danho order by Nombre asc",$conexion);  
												if($row=mysql_fetch_array($sql)){
													$sql=mysql_query("SELECT * FROM cs_danho order by Nombre asc",$conexion);  
													while($row=mysql_fetch_array($sql)){
														echo '<option value="'.$row['Id_Danhos'].'" >'.$row['Nombre'].'</option>';
													}
												}
												mysql_close();
												?>
											</select>
										 </td>								
										 <td><strong>Colapso de</strong></td>
		 <td colspan="2">
		<?php
			include("conexion.php");	
							$i=0;
							$y=0;
							$sql=mysql_query("SELECT * FROM cs_parte",$conexion);  
							if($row=mysql_fetch_array($sql)){
								$sql=mysql_query("SELECT * FROM cs_parte",$conexion);  
								echo "<table><tr>";
								while($row=mysql_fetch_array($sql)){
									if($y==3||$i==0){
										echo "</tr><tr>";
										$y=0;
									}
									$i++;$y++;
									echo '<td><label class="inline"><input type="hidden" name="colapsoo'.$i.'" id="colapsoo'.$i.'" value="'.$row["Id_Parte"].'" /><input onchange="validaColapso(this)" name="colapso'.$i.'" id="colapso'.$i.'" type="checkbox" /><span style="padding: 2px 4px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
									
								}
								echo "<input type='hidden' name='canColapso' id='canColapso' value='".$i."'></table>";
							}
							mysql_close();


			for($i=0;$i<7;$i++){
				
			}
			
		?>
		 </td>									
										 <td><strong>Grietas en</strong></td>
										 <td >
												 <?php
														include("conexion.php");	
																$i=0;
																$y=0;
																$sql=mysql_query("SELECT * FROM cs_parte",$conexion);  
																if($row=mysql_fetch_array($sql)){
																	$sql=mysql_query("SELECT * FROM cs_parte",$conexion);  
																	echo "<table><tr>";
																	while($row=mysql_fetch_array($sql)){
																		if($y==3||$i==0){
																			echo "</tr><tr>";
																			$y=0;
																		}
																		$i++;$y++;
																		echo '<td><label class="inline"><input type="hidden" name="grietao'.$i.'" id="grietao'.$i.'" value="'.$row["Id_Parte"].'" /><input onchange="validaGrieta(this)" name="grieta'.$i.'" id="grieta'.$i.'" type="checkbox" /><span style="padding: 1px 1px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
																		
																	}
																	echo "<input type='hidden' name='canGrieta' id='canGrieta' value='".$i."'></table>";
																}
																mysql_close();
												?>
										 </td>									
									 </tr>

									 <tr>
										 <td><strong>Condición</strong></td>
										 <td>
											 <select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
																	<option value="AL" ></option>
																	

																	<?php
																	include("conexion.php");	
																	$sql=mysql_query("SELECT * FROM cs_condicion order by Nombre asc",$conexion);  
																	if($row=mysql_fetch_array($sql)){
																		$sql=mysql_query("SELECT * FROM cs_condicion order by Nombre asc",$conexion);  
																		while($row=mysql_fetch_array($sql)){
																			echo '<option value="'.$row['Id_Condicion'].'" >'.$row['Nombre'].'</option>';
																		}
																	}
																	mysql_close();
																	?>
											</select>
										 </td>
										 <td><strong>Nº de Familias</strong></td>
										 <td><input  class="span10" type="text" id="form-field-1" title="Ingrese Datos" /></td>
										 <td><strong>Nº de Habitaciones</strong></td>
										 <td><input  class="span10" type="text" id="form-field-1" title="Ingrese Datos" /></td>
									 </tr>

									 <tr>
										 	<td><strong>Material Techos</strong></td>
										 	<td>
										 		<select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
																		<option value="AL" ></option>
																		

																		<?php
																		include("conexion.php");	
																		$sql=mysql_query("SELECT * FROM cs_material_elaboracion where categoria='Techo' order by Nombre asc",$conexion);  
																		if($row=mysql_fetch_array($sql)){
																			$sql=mysql_query("SELECT * FROM cs_material_elaboracion where categoria='Techo' order by Nombre asc",$conexion);  
																			while($row=mysql_fetch_array($sql)){
																				echo '<option value="'.$row['Id_MaterialElaboracion'].'" >'.$row['Nombre'].'</option>';
																			}
																		}
																		mysql_close();
																		?>



																	</select>
											</td>
											<td><strong>Material Paredes</strong></td>
										 	<td>
										 		<select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
																		<option value="AL" ></option>
																		

																		<?php
																		include("conexion.php");	
																		$sql=mysql_query("SELECT * FROM cs_material_elaboracion where categoria='Paredes' order by Nombre asc",$conexion);  
																		if($row=mysql_fetch_array($sql)){
																			$sql=mysql_query("SELECT * FROM cs_material_elaboracion where categoria='Paredes' order by Nombre asc",$conexion);  
																			while($row=mysql_fetch_array($sql)){
																				echo '<option value="'.$row['Id_MaterialElaboracion'].'" >'.$row['Nombre'].'</option>';
																			}
																		}
																		mysql_close();
																		?>

												</select>
											</td>
											<td><strong>Material Pisos</strong></td>
										 	<td>
										 		<select data-placeholder="Seleccione" id="aldea" name="aldea" class="chzn-select" >
												<option value="AL" ></option>

												<?php
												include("conexion.php");	
												$sql=mysql_query("SELECT * FROM cs_material_elaboracion where categoria='Pisos' order by Nombre asc",$conexion);  
												if($row=mysql_fetch_array($sql)){
													$sql=mysql_query("SELECT * FROM cs_material_elaboracion where categoria='Pisos' order by Nombre asc",$conexion);  
													while($row=mysql_fetch_array($sql)){
														echo '<option value="'.$row['Id_MaterialElaboracion'].'" >'.$row['Nombre'].'</option>';
													}
												}
												mysql_close();
												?>

												</select>
											</td>	
									 </tr>
	 				</table>
				</div>

				<div id="carga" class="tab-pane" style="min-height:400px;">
					
						<table class="table table-responsive" id="tabla-clonar">
							<thead>
								<tr>
									<th>Nac.</th>
									<th>Cédula</th>
									<th>Sexo</th>
									<th>Apellido</th>
									<th>Nombre</th>
									<th>Fecha Nac</th>
									<th>Parentesco</th>
									<th>Nivel Ins.</th>
									<th>Ocupación</th>
									<th>Ingreso</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><select style="width:50px" class="span12 " ><option value="V">V</option><option value="E">E</option></select></td>
									<td><input type="text" class="input input-small" /></td>
									<td><select style="width:50px" class="span12"><option value="M">M</option><option value="F">F</option></select></td>
									<td><input type="text" class="input input-small"  /></td>
									<td><input type="text" class="input input-small"  /></td>
									<td>											
										<div class="row-fluid input-append input-small">
											<input class="input input-small date-picker" id="fecha" type="text" data-date-format="dd-mm-yyyy" onfocus="blanco(this)"/><span class="add-on"><i class="icon-calendar"></i></span>
										</div>											
									</td>
									<td>
										<select class="input-small" id="aldea" name="aldea" onfocus="blanco(this)"><option value="AL" >Seleccione</option><option value="AL" >Hijo(a)</option><option value="AZ" >Concubino(a)</option><option value="AZ" >Padre</option><option value="AZ" >Madre</option><option value="AZ" >Hermano(a)</option><option value="AZ" >Tio(a)</option><option value="AZ" >Cuñado(a)</option><option value="AZ" >Abuelo(a)</option><option value="AK" >Nieto(a)</option><option value="AZ" >Sobrino(a)</option><option value="AZ" >Primo(a)</option></select>
									</td>
									<td><select class="span12" data-placeholder="Seleccione" ><option value="AL" >Seleccione</option><option value="AL" >Analfabeta</option><option value="AK" >Primaria</option><option value="AZ" >Secundaria</option><option value="AZ" >Tecnica</option><option value="AZ" >Universitaria</option></select></td>
									<td><input type="text" class="input input-small"  /></td>
									<td><input type="text" class="input input-mini" /></td>
								</tr>
							</tbody>
						</table>
						<div align="right">
						<a  class=" btn btn-small btn-primary" id="agregar" ><i class="icon-plus"></i>Agregar Fila</a>	
						</div>	
				</div>	

				<div id="enseress" class="tab-pane" style="min-height:400px;">
					
						<table class="table table-condensed">
							<tr>
								<td><strong>Enseres Perdidos</strong></td>
							</tr>
							<tr>
							<td colspan="10">
								 <?php
								include("conexion.php");	
												$i=0;
												$y=0;
												$sql=mysql_query("SELECT * FROM cs_enser",$conexion);  
												if($row=mysql_fetch_array($sql)){
													$sql=mysql_query("SELECT * FROM cs_enser",$conexion);  
													echo "<table><tr>";
													while($row=mysql_fetch_array($sql)){
														if($y==7||$i==0){
															echo "</tr><tr>";
															$y=0;
														}
														$i++;$y++;
														echo '<td><label class="inline"><input type="hidden" name="ensero'.$i.'" id="ensero'.$i.'" value="'.$row["Id_Enser"].'" /><input onchange="validaGrieta(this)" name="enser'.$i.'" id="enser'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
														
													}
													echo "<input type='hidden' name='canGrieta' id='canGrieta' value='".$i."'></table>";
												}
												mysql_close();

							?>
							</td>						
							</tr>
					 	</table>
				</div>	

				<div id="nece" class="tab-pane" style="min-height:400px;">
					<table class="table table-condensed">
					<tr> 

						<td><strong>Necesidades Prioritarias</strong></td>
						<td >
							 <?php
									include("conexion.php");	
													$i=0;
													$y=0;
													$sql=mysql_query("SELECT * FROM cs_necesidad",$conexion);  
													if($row=mysql_fetch_array($sql)){
														$sql=mysql_query("SELECT * FROM cs_necesidad",$conexion);  
														echo "<table><tr>";
														while($row=mysql_fetch_array($sql)){
															if($y==3||$i==0){
																echo "</tr><tr>";
																$y=0;
															}
															$i++;$y++;
															echo '<td><label class="inline"><input type="hidden" name="necesidado'.$i.'" id="necesidado'.$i.'" value="'.$row["Id_Necesidad"].'" /><input  name="necesidad'.$i.'" id="necesidad'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
															
														}
														echo "<input type='hidden' name='cannecesidad' id='cannecesidad' value='".$i."'></table>";
													}
													mysql_close();
								?>
						</td>
						<td><strong>Otras Propiedades</strong></td>
						<td >
						<?php
							include("conexion.php");	
										$i=0;
										$y=0;
										$sql=mysql_query("SELECT * FROM cs_otra_propiedad",$conexion);  
										if($row=mysql_fetch_array($sql)){
											$sql=mysql_query("SELECT * FROM cs_otra_propiedad",$conexion);  
											echo "<table><tr>";
											while($row=mysql_fetch_array($sql)){
												if($y==2||$i==0){
													echo "</tr><tr>";
													$y=0;
												}
												$i++;$y++;
												echo '<td><label class="inline"><input type="hidden" name="propiedado'.$i.'" id="propiedado'.$i.'" value="'.$row["Id_OtraPropiedad"].'" /><input  name="propiedad'.$i.'" id="propiedad'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
												
											}
											echo "<input type='hidden' name='canPropiedad' id='canPropiedad' value='".$i."'></table>";
										}
										mysql_close();
							?>
						</td>						
					</tr>
					<tr>
						<td><strong>Condición Familiar</strong></td>
						<td>
						<?php
							include("conexion.php");	
										$i=0;
										$y=0;
										$sql=mysql_query("SELECT * FROM cs_condicion_familiar",$conexion);  
										if($row=mysql_fetch_array($sql)){
											$sql=mysql_query("SELECT * FROM cs_condicion_familiar",$conexion);  
											echo "<table><tr>";
											while($row=mysql_fetch_array($sql)){
												if($y==3||$i==0){
													echo "</tr><tr>";
													$y=0;
												}
												$i++;$y++;
												echo '<td><label class="inline"><input type="hidden" name="condFamiliaro'.$i.'" id="condFamiliaro'.$i.'" value="'.$row["Id_CondicionFamiliar"].'" /><input  name="condFamiliar'.$i.'" id="condFamiliar'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
												
											}
											echo "<input type='hidden' name='can' id='can' value='".$i."'></table>";
										}
										mysql_close();
							?>
						</td>
						<td><strong>Albergue/Refugio</strong></td>
						<td >
						<select data-placeholder="Seleccione" id="refugio" name="refugio" onchange="refugiosel(this)" class="chzn-select" >
																	<option value="AL" ></option>
																	

																	<?php
																	include("conexion.php");	
																	$sql=mysql_query("SELECT * FROM cs_refugio order by Nombre asc",$conexion);  
																	if($row=mysql_fetch_array($sql)){
																		$sql=mysql_query("SELECT * FROM cs_refugio order by Nombre asc",$conexion);  
																		while($row=mysql_fetch_array($sql)){
																			echo '<option value="'.$row['Id_Refugio'].'" >'.$row['Nombre'].'</option>';
																		}
																	}
																	mysql_close();
																	?>
							</select>
						</td>
					</tr>
						<tr>
						
							<td><strong>Dirección del Albergue</strong></td>
							<td colspan="12">
								<textarea style="height:100px;" disabled="" onfocus="blanco(this)" title="Ingrese una direccion" id="direccion_refugio" name="direccion_refugio" class="span12"   ></textarea>
							</td>	
						
						</tr>
						<tr>
							<td><strong>Fecha de Ingreso</strong></td>
							<td>
								<div class="control-group" style="z-index:1000">
									<div class="row-fluid input-append">
										<input class="span8 date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
										<span class="add-on">
											<i class="icon-calendar"></i>
										</span>
									</div>
								</div>
							</td>		
						</tr>	
				 </table>
				</div>

			</div>
		</div>
	</div><!--widget-body-->
</div><!--/row-->
</form>
 <script type="text/javascript">
  $('.date-picker').datepicker().next().on(ace.click_event, function(){
		 $(this).prev().focus();
	 });
 var cont2=1;
/* 	function cabecera(){

 		

}

agregaGrupo();*/
$(document).ready(function($)
		{
$("#agregar").click(function(){
	addTableRow($("tabla-clonar"));
	return false;
});
function addTableRow(table)
			{
				
    rowCount = 0;
    $("#table tr td:first-child").each(function() {
        rowCount++;
        $(this).text(rowCount);   
    });
		
				// clone the last row in the table
				var $tr = $(table).find("tbody tr:last").clone();
				
				
				// get the name attribute for the input and select fields
				$tr.find("input,select").attr("name", function()
				{
					// break the field name and it's number into two parts
					var parts = this.id.match(/(\D+)(\d+)$/);
					// create a unique name for the new field by incrementing
					// the number for the previous field by 1
					return parts[1] + ++parts[2];
					
				// repeat for id attributes
				}).attr("id", function(){
					var parts = this.id.match(/(\D+)(\d+)$/);
					return parts[1] + ++parts[2];
				});
				// append the new row to the table
				$(table).find("tbody tr:last").after($tr);
				
	
				

			};
	});	



















/*$("#agregar").click(function(){
	var tabla = $('#tabla-clonar');
    var tr = $('tbody tr:last', tabla);
    tr.clone().appendTo(tabla).find(':text').val('');
    $('.date-picker').datepicker().next().on(ace.click_event, function(){
		 $(this).prev().focus();
	 });
});*/


 	function lph(lph){
 		document.getElementById("lphsi").checked=false;
 		document.getElementById("lphno").checked=false;
 		lph.checked=true;
 	}
 		function extranjero(check){
 			document.getElementById("venezolano1").checked=false;
 			document.getElementById("extranjero1").checked=false;
 			check.checked=true;
 			if(check.lang=="1"){
 				document.getElementById("extranjero11").innerHTML='';
 				document.getElementById("extranjero22").innerHTML='';
 			}else{
 				document.getElementById("extranjero11").innerHTML='<strong>Pais</strong>';
 				document.getElementById("extranjero22").innerHTML='<input   class="input-medium" type="text" id="pais_extranjero" name="pais_extranjero" title="Ingrese Datos" />';
 				document.getElementById("pais_extranjero").focus();
 			}
 			
 		}
	 
	 $(".chzn-select").chosen({ 'width': '150px'});
	
	 $('#timepicker1,#timepicker2,#timepicker3,#timepicker5').timepicker({
		 minuteStep: 1,
		 showSeconds: true,
		 showMeridian: false
	 });
	 
	 $().ready(function(){
		 $("input").tooltip({
			 placement: "bottom",
		 });
		 $("textarea").tooltip({
			 placement: "bottom",
		 });
		 
		 
	 });
	 
 </script>