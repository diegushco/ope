<script>
var cont2=1;

function agregaCargaFamiliar1(){
	//alert("cooooooooooooooooooooooooooooo");

miTabla = document.createElement("table");
	tbBody = document.createElement("tbody");
	tr = document.createElement("tr");
	td1 = document.createElement("td");
	td2 = document.createElement("td");
	td3 = document.createElement("td");
	td4 = document.createElement("td");
	td5 = document.createElement("td");
	td6 = document.createElement("td");	
	td7 = document.createElement("td");		
	td8 = document.createElement("td");
	td9 = document.createElement("td");
	td10 = document.createElement("td");
	//miTabla.setAttribute("width", "300px");
	miTabla.setAttribute("border", "0");

	td1.innerHTML='<select id="nacionalidad'+cont2+'" name="nacionalidad'+cont2+'" style="width:50px" class="span12 " ><option value="V">V</option><option value="E">E</option></select>';
	td2.innerHTML='<input id="cedula'+cont2+'" name="cedula'+cont2+'" type="text" class="input input-small" />';
	td3.innerHTML='<select id="sexo'+cont2+'" name="sexo'+cont2+'" style="width:50px" class="span12"><option value="M">M</option><option value="F">F</option></select>';
	td4.innerHTML='<input id="apellido'+cont2+'" name="apellido'+cont2+'" type="text" class="input input-small"  />';
	td5.innerHTML='<input id="nombre'+cont2+'" name="nombre'+cont2+'" type="text" class="input input-small date-picker"  />';
	td6.innerHTML='<input placeholder="1995/02/28" id="fecha'+cont2+'" name="fecha'+cont2+'" type="text" class="input input-small"  />';
	td7.innerHTML='<select class="input-small" id="parentesco'+cont2+'" name="parentesco'+cont2+'" ><option value="AL" >Seleccione</option><option value="AL" >Hijo(a)</option><option value="AZ" >Concubino(a)</option><option value="AZ" >Padre</option><option value="AZ" >Madre</option><option value="AZ" >Hermano(a)</option><option value="AZ" >Tio(a)</option><option value="AZ" >Cuñado(a)</option><option value="AZ" >Abuelo(a)</option><option value="AK" >Nieto(a)</option><option value="AZ" >Sobrino(a)</option><option value="AZ" >Primo(a)</option></select>';
	td8.innerHTML='<select id="nivel'+cont2+'" name="nivel'+cont2+'" class="span12" data-placeholder="Seleccione" ><option value="AL" >Seleccione</option><option value="AL" >Analfabeta</option><option value="AK" >Primaria</option><option value="AZ" >Secundaria</option><option value="AZ" >Tecnica</option><option value="AZ" >Universitaria</option></select>';
	td9.innerHTML='<input id="ocupacion'+cont2+'" name="ocupacion'+cont2+'" type="text" class="input input-small"  />';
	td10.innerHTML='<input id="ingreso'+cont2+'" name="ingreso'+cont2+'" type="text" class="input input-small"  />';

	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	tr.appendChild(td7);
	tr.appendChild(td8);
	tr.appendChild(td9);
	tr.appendChild(td10);

	tbBody.appendChild(tr);
	miTabla.appendChild(tbBody);
	miCapa = document.getElementById('tabla-clonar1');
	miCapa.appendChild(miTabla);
	//document.getElementById("organismo"+cont2).setAttribute("class", "chzn-select");
	cont2+=1;
	document.getElementById("cantidad_familiar").value=cont2;
	
}

</script>
<form action="#" name="formulario" id="formu" method="post">  
<div  class="row-fluid">
	<div align="right" class="span12">
		<table  class="table-condensed ">
			<tr >
				<td ><strong>Fecha</strong></td>
				<td>
						<div class="control-group" style="z-index:1000">
							<div class="row-fluid input-append">
								<input class="span10 date-picker" id="fechaC" name="fechaC" type="text" data-date-format="yyyy/mm/dd" />
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
										<td><input   type="text" id="nombre" name="nombre" title="Ingrese Datos" /></td>
										<td><strong>Apellidos</strong></td>
										<td><input   type="text" id="apellido" name="apellido" title="Ingrese Datos" /></td>
										<td><strong>Cedula</strong></td>
										<td><input   type="text" id="cedula" name="cedula" title="Ingrese Datos" /></td>
								 	</tr>

									<tr>
										 <td><strong>Sexo</strong></td>
										 <td>
											 <div class="control-group form-inline">
												 
												 <div class="controls">
													 <label>
														 <input name="femenino" id="femenino" type="checkbox" onchange="sexo(this)" />
														 <span class="lbl"> F</span>
													 </label>
													 
													 <label>
														 <input name="masculino" id="masculino" type="checkbox" onchange="sexo(this)" />
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
												<input title="Seleccione una fecha" class="date-picker input-small" id="fechaNac" name="fechaNac" type="text" data-date-format="yyyy-mm-dd" />
												<span class="add-on">
													<i class="icon-calendar"></i>
												</span>
											</div>
										</td>
										 <td ><strong>Estado Civil</strong></td>
										 <td style="padding: 8px 0px;">
														<select  data-placeholder="Seleccione" class="chzn-select" id="estadoCivil" name="estadoCivil">
															<option value="AL" ></option>
															<option value="AL" >Soltero</option>
															<option value="AK" >Casado</option>
															<option value="AZ" >Divorciado</option>
															<option value="AZ" >Viudo</option>
														</select>
													</td>
										 <td ><strong>Situación Conyugal</strong></td>
										 <td>
											 <select data-placeholder="Seleccione" id="conyugue" name="conyugue"  class="chzn-select" data-placeholder="Seleccione" >
												 <option value="AL" ></option>
												 <option value="AL" >Ninguna</option>
												 <option value="AL" >Concubino</option>												 
												 <option value="AK" >Separados</option>										 
											 </select>
										 </td>
									</tr>

									<tr>
										<td><strong>Telefonos</strong></td>
										<td><input   class="span12" type="text" id="telefonos" name="telefonos" title="Ingrese Datos" /></td>			
										<td><strong>Tiempo en el Estado</strong></td>
										<td><input   class="span12" type="text" id="tiempoEstado" name="tiempoEstado" title="Ingrese Datos" /></td>
										<td><strong>Tiempo en la Comunidad</strong></td>
										<td><input   class="span12" type="text" id="tiempoComunidad" name="tiempoComunidad" title="Ingrese Datos" /></td>
									</tr>

								 	<tr>
										<td><strong>Nivel de Instrucción</strong></td>
										<td>
											<select id="instruccion" name="instruccion" data-placeholder="Seleccione"  class="chzn-select" data-placeholder="Seleccione" >
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
											<select id="trabajo" name="trabajo" data-placeholder="Seleccione"  class="chzn-select" data-placeholder="Seleccione" >
												<option value="AL" ></option>
												<option value="AL" >Empresa Privada</option>
												<option value="AK" >Organismo Publico</option>
												<option value="AZ" >Negocio Propio</option>
												<option value="AZ" >Jubilado</option>
												<option value="AZ" >Desempleado</option>
											</select>
										</td>
										<td colspan="1"><strong>Ingreso Mensual</strong></td>
										<td><input  type="text" id="ingresoMensual" name="ingresoMensual" title="Ingrese Datos" /></td>
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
										<td><input   class="span12" type="text" name="procedencia" id="procedencia" title="Ingrese Datos" /></td>
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
											 <select data-placeholder="Seleccione" id="tipoVivienda" name="tipoVivienda" class="chzn-select" >
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
											 <select data-placeholder="Seleccione" id="motivoCenso" name="motivoCenso" class="chzn-select" >
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
											 <select data-placeholder="Seleccione" id="danho" name="danho" class="chzn-select" >
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
											 <select data-placeholder="Seleccione" id="cs_condicion" name="cs_condicion" class="chzn-select" >
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
										 <td><input  class="span10" type="text" id="nroFamilias" name="nroFamilias" title="Ingrese Datos" /></td>
										 <td><strong>Nº de Habitaciones</strong></td>
										 <td><input  class="span10" type="text" id="nroHabitaciones" name="nroHabitaciones" title="Ingrese Datos" /></td>
									 </tr>

									 <tr>
										 	<td><strong>Material Techos</strong></td>
										 	<td>
										 		<select data-placeholder="Seleccione" id="materialTecho" name="materialTecho" class="chzn-select" >
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
										 		<select data-placeholder="Seleccione" id="materialParedes" name="materialParedes" class="chzn-select" >
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
										 		<select data-placeholder="Seleccione" id="materialPisos" name="materialPisos" class="chzn-select" >
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

									<tr>
										 	<td><strong>Evento</strong></td>
										 	<td>
										 		<select data-placeholder="Seleccione" id="evento" name="evento" class="chzn-select" >
																		<option value="AL" ></option>
																		

																		<?php
																		include("conexion.php");	
																		$sql=mysql_query("SELECT * FROM cs_evento order by Nombre asc",$conexion);  
																		if($row=mysql_fetch_array($sql)){
																			$sql=mysql_query("SELECT * FROM cs_evento order by Nombre asc",$conexion);  
																			while($row=mysql_fetch_array($sql)){
																				echo '<option value="'.$row['Id_Evento'].'" >'.$row['Nombre'].'</option>';
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
					
						<table class="table table-responsive" >
							<thead id="tabla-clonar2">
								
							</thead>
							<tbody id="tabla-clonar1">
								
							</tbody>
						</table>
						<div align="right">
						<a href="javascript:agregaCargaFamiliar1()" class="btn btn-small btn-primary" ><i class="icon-plus"></i>Agregar Fila</a>	
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
														echo '<td><label class="inline"><input type="hidden" name="ensero'.$i.'" id="ensero'.$i.'" value="'.$row["Id_Enser"].'" /><input name="enser'.$i.'" id="enser'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
														
													}
													echo "<input type='hidden' name='canEnser' id='canEnser' value='".$i."'></table>";
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
												echo '<td><label class="inline"><input type="hidden" name="propiedado'.$i.'" id="propiedado'.$i.'" value="'.$row["Id_OtraPropiedad"].'" /><input  onchange="validaPropiedad(this)"   name="propiedad'.$i.'" id="propiedad'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
												
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
												echo '<td><label class="inline"><input type="hidden" name="condFamiliaro'.$i.'" id="condFamiliaro'.$i.'" value="'.$row["Id_CondicionFamiliar"].'" /><input onchange="validaConFami(this)"   name="condFamiliar'.$i.'" id="condFamiliar'.$i.'" type="checkbox" /><span style="padding: 10px 10px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
												
											}
											echo "<input type='hidden' name='canConFami' id='canConFami' value='".$i."'></table>";
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
								<textarea style="height:50px;" disabled="" onfocus="blanco(this)" title="Ingrese una direccion" id="direccion_refugio" name="direccion_refugio" class="span12"   ></textarea>
							</td>	
						
						</tr>
						
						<tr>
						<td ><strong>Fecha de Ingreso</strong></td>
										<td >
											<div class="controls">
												<input title="Seleccione una fecha" class="date-picker input-small" id="fechaIngreso" name="fechaIngreso" type="text" data-date-format="yyyy/mm/dd" />
												<span class="add-on">
													<i class="icon-calendar"></i>
												</span>
											</div>
										</td>
						</tr>
						
<tr>
				

					<td  ><strong>Funcionario Receptor</strong></td>
						<td  >
							<select data-placeholder="Seleccione" id="funcionario" name="funcionario"  class="chzn-select" >
								<option value="AL" ></option>
							<?php
								include("conexion.php");	
								$sql=mysql_query("SELECT * FROM funcionario order by Nombre asc",$conexion);  
								if($row=mysql_fetch_array($sql)){
									$sql=mysql_query("SELECT * FROM funcionario order by Nombre asc",$conexion);  
									while($row=mysql_fetch_array($sql)){
										echo '<option value="AL" >'.$row['Nombre'].'</option>';
									}
								}
								mysql_close();
								?>

							</select>
						</td>
			</tr>






						<tr>
						
							<td><strong>Observacion</strong></td>
							<td colspan="12">
								<textarea style="height:50px;" onfocus="blanco(this)" title="Ingrese observacion sobre el censo" id="observacion" name="observacion" class="span12"   ></textarea>
							</td>	
						
						</tr>	
				 </table>
				</div>

			</div>
		</div>
	</div><!--widget-body-->
</div><!--/row-->
<input type="hidden" name="cantidad_familiar" id="cantidad_familiar" >
</form>
 <script type="text/javascript">
 
 
function headerTable1(){
						
	miTabla = document.createElement("table");
	tbBody = document.createElement("tbody");
	tr = document.createElement("tr");
	tr.setAttribute("font-weight","bold");
	td1 = document.createElement("td");
	td2 = document.createElement("td");
	td3 = document.createElement("td");
	td4 = document.createElement("td");
	td5 = document.createElement("td");
	td6 = document.createElement("td");	
	td7 = document.createElement("td");		
	td8 = document.createElement("td");
	td9 = document.createElement("td");
	td10 = document.createElement("td");
	//miTabla.setAttribute("width", "300px");
	miTabla.setAttribute("border", "0");
	td1.setAttribute('width', '54px');
	td2.setAttribute('width', '98px');
	td3.setAttribute('width', '54px');
	td4.setAttribute('width', '98px');
	td5.setAttribute('width', '98px');
	td6.setAttribute('width', '98px');
	td7.setAttribute('width', '86px');
	td8.setAttribute('width', '26px');
	td9.setAttribute('width', '98px');
	td10.setAttribute('width', '98px');
	

	td1.innerHTML='Nac.';
	td2.innerHTML='Cédula';
	td3.innerHTML='Sexo';
	td4.innerHTML='Apellido';
	td5.innerHTML='Nombre';
	td6.innerHTML='Fecha Nac';
	td7.innerHTML='Parentesco';
	td8.innerHTML='Nivel Ins.';
	td9.innerHTML='Ocupación';
	td10.innerHTML='Ingreso';
	

	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	tr.appendChild(td7);
	tr.appendChild(td8);
	tr.appendChild(td9);
	tr.appendChild(td10);

	tbBody.appendChild(tr);
	miTabla.appendChild(tbBody);
	miCapa = document.getElementById('tabla-clonar2');
	miCapa.appendChild(miTabla);
}

headerTable1();

//headerTable();
  $('.date-picker').datepicker().next().on(ace.click_event, function(){
		 $(this).prev().focus();
	 });


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
 <?php
/*
ejemplo
hora=1429093358349
&nombre=asd
&apellido=sdf
&cedula=323
&femenino=true
&masculino=false
&venezolano1=true
&extranjero1=false
&fechaNac=2015-04-07
&estadoCivil=Casado
&conyugue=Concubino
&telefonos=232323
&tiempoEstado=3434
&tiempoComunidad=4343
&instruccion=Primaria
&trabajo=Organismo Publico
&ingresoMensual=3434
&lphsi=true
&lphno=false
&procedencia=sdafdf
&aldea=La piedrita
&estado11=Tachira
&municipio11=Andrés Bello									
&ciudad11=Cordero
&parroquia11=Andres Bello
&tipoVivienda=Pieza
&tenencia=Cedida al cuidado
&motivoCenso=Inundacion de Planicie
&danho=Perdida Total
&colapsoo1=1
&colapso1=true
&colapsoo2=2
&colapso2=false
&colapsoo3=3
&colapso3=false
&colapsoo4=5
&colapso4=false&
colapsoo5=6
&colapso5=false
&canColapso=5
&grietao1=1
&grieta1=false
&grietao2=2
&grieta2=false
&grietao3=3
&grieta3=false
&grietao4=5
&grieta4=false
&grietao5=6
&grieta5=false
&canGrieta=5
&aldea=Desalojo por alto riesgo
&nroFamilias=33
&nroHabitaciones=44
&materialTecho=Platabanda
&materialParedes=Ladrillo
&materialPisos=Granito
&nacionalidad1=V
&cedula1=333
&sexo1=M
&apellido1=xdfsdf
&nombre1=sdfsdf
&fecha1=1988/08/09
&parentesco1=Padre
&nivel1=Primaria
&nombre1=sdfsdf
&nombre1=
&ensero1=1
&enser1=true
&ensero2=2
&enser2=false
&ensero3=3
&enser3=false
&ensero4=4
&enser4=false
&ensero5=5
&enser5=false
&ensero6=6
&enser6=false
&ensero7=7
&enser7=false
&ensero8=8
&enser8=false
&ensero9=9
&enser9=false
&ensero10=10
&enser10=false
&ensero11=11
&enser11=true
&ensero12=12
&enser12=true
&ensero13=13
&enser13=false
&ensero14=14
&enser14=false
&ensero15=15
&enser15=false
&ensero16=16
&enser16=false
&ensero17=17
&enser17=false
&ensero18=18
&enser18=false
&ensero19=19
&enser19=false
&ensero20=20
&enser20=false
&ensero21=21
&enser21=false
&ensero22=22
&enser22=false
&canEnser=22
&necesidado1=1
&necesidad1=true
&necesidado2=2
&necesidad2=false
&cannecesidad=2
&propiedado1=1
&propiedad1=true
&propiedado2=2
&propiedad2=false
&canPropiedad=2
&condFamiliaro1=2
&condFamiliar1=true
&condFamiliaro2=3
&condFamiliar2=false
&canConFami=2
&refugio=Refugio giraldo
&direccion_refugio=Calle 3 #7-3
&fechaIngreso=21-04-2015
&cantidad_familiar=2

*/

 ?>