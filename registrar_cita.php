<!--Titulo-->
 <div class="page-header position-relative">
   <h1>
     Registro de Cita
   </h1>
</div><!--/.page-header-->
<form action="#" name="formulario" id="formu" method="post">  
<div class="row-fluid">
<div class="span12">				
<div class="header-color-orange ">											 										 
	<div class="widget-toolbar"><h5 style="color:#FFF;"><b>DATOS DEL SOLICITANTE</b></h5>										
				 
	</div>
</div>		
<table class="table  table-condensed table-striped" style=" font-weight: bold;" >
			
			<tr>
				<td style="padding: 10px 25px;">Fecha de Solicitud</td>
				<td style="padding: 10px 0px;">
				<?php date_default_timezone_set('America/Caracas'); ?>
				<input type="text" class="span11" name="fecha_solicitud" id="fecha_solicitud" value="<?php echo date("Y/m/d"); ?>" disabled="" placeholder="1" />
				</td>	

				<td style="padding: 10px 25px;">Nº Folio</td>
				<td style="padding: 10px 0px;">
					<input  onfocus="blanco(this)" style="width:120px;" type="text" id="numero_folio" name="numero_folio" title="Rellene el campo" placeholder="3409/2013" />
				</td>

				
			</tr>
			<tr>
				<td style="padding: 10px 25px;">Nombres Ent.</td>
				<td style="padding: 10px 0px;">
				<input  style="width:155px;" type="text" id="nombres" name="nombres" onfocus='blanco(this)' title="Ingrese los Datos" />
				</td>
				<td style="padding: 10px 25px;">Apellidos Ent.</td>
				<td style="padding: 10px 0px;">
					<input  style="width:150px;" type="text" id="apellidos" name="apellidos"  onfocus='blanco(this)' title="Ingrese los Datos" />
				</td>
				<td style="padding: 10px 25px;">Cédula Ent.</td>
				<td style="padding: 10px 0px;">
							<div class="form-inline">
								<label>
									<input name="cedula" id="cedula" value="V" type="radio" />
									<span class="lbl"> V</span>
								</label>
									
								<label>
									<input name="cedula" id="cedula" value="E" type="radio" />
									<span class="lbl"> E</span>
								</label>
								<input class="input-medium"	 type="text" id="cedula2" name="cedula2" onfocus='blanco(this)' placeholder="Numero de Cédula" />
				
							</div>														
							</td>

			</tr>
			<tr>
				<td style="padding: 10px 25px;">Teléfono</td>
				<td style="padding: 10px 0px;">
					<input class="input-medium"	type="text" id="telefono" name="telefono" onfocus='blanco(this)' placeholder="Ingrese Datos" />
				</td>								
				<td style="padding: 10px 25px;">Propietario</td>											
				<td style="padding: 10px 0px;">
					<input name="propietario" id="propietario" type="checkbox" value="" />
					 <span class="lbl"> SI</span>
				</td>
			<td style="padding: 10px 25px;"><strong>Aldea</strong></td>
			<td style="padding: 10px 0px;">
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
			<tr id="fila-oculta">
				<td style="padding: 10px 25px;">Nombres Pro.</td>
				<td style="padding: 10px 0px;">
					<input  style="width:155px;" type="text" lang="noObligatorio" id="nombrespro" name="nombrespro" onfocus='blanco(this)' title="Ingrese los Datos" />
				</td>
				<td style="padding: 10px 25px;">Apellidos Pro.</td>
				<td style="padding: 10px 0px;">
					<input  style="width:150px;" type="text" lang="noObligatorio"  id="apellidospro" name="apellidospro"  onfocus='blanco(this)' title="Ingrese los Datos" />
				</td>
				<td style="padding: 10px 25px;">Cédula Pro.</td>
				<td style="padding: 10px 0px;">
					<div class="form-inline">
						<input class="input-medium"	 type="text"  lang="noObligatorio" id="cedula2pro" name="cedula2pro" onfocus='blanco(this)' placeholder="Numero de Cédula" />
					</div>														
				</td>

			</tr>
			<tr>
				<td style="padding: 10px 25px;"><strong>Estado</strong></td>
				<td style="padding: 10px 0px;">									
					<input disabled="disabled" class="span11" name="estado11" id="estado11" type="text" title="Ingrese Datos" />
				</td>
				<td style="padding: 10px 25px;"><strong>Municipio</strong></td>
				<td style="padding: 10px 0px;">
					<input   disabled="disabled"  class="span10" type="text" name="municipio11" id="municipio11" title="Ingrese Datos" />
				</td>
				<td style="padding: 10px 25px;"><strong>Parroquia</strong></td>
				<td style="padding: 10px 0px;">
					<input   disabled="disabled"  class="span10" type="text" name="parroquia11" id="parroquia11" title="Ingrese Datos" />
				</td>
				
				
				
				
			</tr>
			<tr>
				<td style="padding: 10px 25px;"><strong>Ciudad</strong></td>
				<td style="padding: 10px 0px;">
					<input   disabled="disabled"  class="span11" type="text" name="ciudad11" id="ciudad11" title="Ingrese Datos" />
				</td>
				<td style="padding: 10px 25px;">Direccion</td>
				<td style="padding: 10px 0px;" colspan="4" >
					<textarea title="Ingrese una direccion" class="span12" id="direccion" name="direccion" onfocus='blanco(this)'></textarea>
				</td>
			</tr>
			<tr>
				
				


				<td style="padding: 10px 25px;">Fecha de Inspección</td>
				<td style="padding: 10px 0px;">
							<div class="control-group">
								<div class="row-fluid input-append ">
									<input class="span10 date-picker" id="fecha" name="fecha" type="text" data-date-format="yyyy-mm-dd" onfocus='blanco(this)'/>
									<span class="add-on">
										<i class="icon-calendar"></i>
									</span>
								</div>
							</div>
						</td>
						<td style="padding: 10px 25px;" >Tipo de Inspección</td>
						<td style="padding: 10px 0px;">
							<select data-placeholder="Seleccione" id="inspeccion" name="inspeccion"  class="chzn-select1" >
								<option value="AL" ></option>
							<?php
								include("conexion.php");	
								$sql=mysql_query("SELECT * FROM ev_tipo order by Nombre asc",$conexion);  
								if($row=mysql_fetch_array($sql)){
									$sql=mysql_query("SELECT * FROM ev_tipo order by Nombre asc",$conexion);  
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
				<td style="padding: 10px 25px;" ><strong>Observaciones </strong></td>
				<td style="padding: 10px 0px;"colspan="5"><textarea  class="span12" onfocus='blanco(this)' name="observacion" id="observacion" lang="noObligatorio"></textarea></td>		
			</tr>
			<tr>
					<td></td>

					<td colspan="2" style="padding: 10px 65px;" >Funcionario Receptor</td>
						<td colspan="3"  style="padding: 10px 0px;">
							<select data-placeholder="Seleccione" id="receptor" name="receptor"  class="chzn-select1" >
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
			<tr><td colspan="6"><div id="error"></div></td></tr>
		</table>
		<div align="center">
			<div class="btn-group">
				
				<a class="btn btn-warning" href="javascript: registraCita(document.formulario)">Registrar</a>
				<button type="button" class="btn btn-inverse" href="javascript:menu('inicio');">Cancelar</button>
			</div>		
		</div>	
	
</div>
		
	</form>	


		
<script type="text/javascript">
    $(".chzn-select").chosen({ 'width': '180px'});
    $(".chzn-select1").chosen({ 'width': '200px'});
    $('.date-picker').datepicker().next().on(ace.click_event, function(){
        $(this).prev().focus();
    });
    $("#propietario").change(function(){
    	if($("#propietario").is(":checked")){
    		$("#fila-oculta").hide();
    	}else{
    		$("#fila-oculta").show();
    	}
    });
    $("#cedula2").mask("9999?999999999");
    $("#cedula2pro").mask("a-99999?99999");
    $("#telefono").mask("(0999)-9999999");
	$().ready(function(){
		$("input").tooltip({
			placement: "bottom",
		});
		$("textarea").tooltip({
			placement: "bottom",
		});
		
		
	});
	
</script>

