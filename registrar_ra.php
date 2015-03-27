<div class="page-header position-relative">
						<h1>
								Registro de un RA
						</h1>						
					</div>	
<form action="#" name="formulario" id="formu" method="post"> 	
<div class="row-fluid">
	<div class="span12">
	
		<table class="table table-condensed">
			<tbody>
				<tr>
					<td><strong>Fecha</strong></td>
					<td >
						<div class="controls">
							<input onfocus="blanco(this)" title="Seleccione una fecha" class=" date-picker input-medium" id="fecha" name="fecha" type="text" data-date-format="yyyy-mm-dd" />
							<span class="add-on">
								<i class="icon-calendar"></i>
							</span>
						</div>
					</td>
					<td><strong>Unidad Nº</strong></td>
					<td><input onfocus="blanco(this)" placeholder="00-ASDF79846"   class="span12" type="text" id="unidad" name="unidad" title="Ingrese Datos" /></td>
					<td><strong>Folio Nº</strong></td>
					<td><input onfocus="blanco(this)"  class="span12" type="text" id="folio" name="folio" title="Ingrese Datos" /></td>
					</tr>
					<tr>
					<td ><strong>Aldea</strong></td>
					<td >
						
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
					<td><strong>Estado</strong></td>
					<td>									
						<input  disabled="disabled" class="span12" name="estado11" id="estado11" type="text" title="Ingrese Datos" />
					</td>
					<td><strong>Ciudad</strong></td>
					<td>
						<input  disabled="disabled"  class="span12" type="text" name="ciudad11" id="ciudad11" title="Ingrese Datos" />
					</td>
					
				</tr>
				<tr>
					<td><strong>Municipio</strong></td>
					<td>
						<input  disabled="disabled"  class="span12" type="text" name="municipio11" id="municipio11" title="Ingrese Datos" />
					</td>
					<td><strong>Parroquia</strong></td>
					<td >
						<input  disabled="disabled"  class="span12" type="text" name="parroquia11" id="parroquia11" title="Ingrese Datos" />
					</td>
					
				</tr>
				<tr>									
				
					<td><strong>Dirección</strong></td>
					<td colspan="5">
						<textarea onfocus="blanco(this)" title="Ingrese una direccion" id="direccion" name="direccion" class="span12"  ></textarea>
					</td>
				</tr>
				<tr>
				
					<td> </td>
					<td><strong>Hora de llamada</strong></td>
					<td>
						<div class="input-append bootstrap-timepicker">
							<input onfocus="blanco(this)" id="hora_llamada" name="hora_llamada" type="text" class="input-small">
							<span class="add-on">
								<i class="icon-time"></i>																	
							</span>
						</div>
					</td>
					<td><strong>Hora de Activación</strong></td>
					<td>
						<div class="input-append bootstrap-timepicker">
							<input onfocus="blanco(this)" id="hora_activacion" name="hora_activacion" type="text" class="input-small">
							<span class="add-on">
								<i class="icon-time"></i>																	
							</span>
						</div>
					</td>
					<td> </td>
				</tr>
				<tr>
				
				<td> </td>
				<td ><strong>Hora en el Sitio</strong></td>
				<td >
					<div class="input-append bootstrap-timepicker">
						<input onfocus="blanco(this)" id="hora_sitio" name="hora_sitio"  type="text" class="input-small">
						<span class="add-on">
							<i class="icon-time"></i>																	
						</span>
					</div>
				</td>
				<td ><strong>Hora Culminación</strong></td>
				<td >
					<div class="input-append bootstrap-timepicker">
						<input onfocus="blanco(this)" id="hora_culminacion" name="hora_culminacion"  type="text" class="input-small">
						<span class="add-on">
							<i class="icon-time"></i>																	
						</span>
					</div>
				</td>
				<td> </td>
				</tr>
				<tr>
					<td colspan="6">
						<div class="header-color-orange ">											 										 
							 <div class="widget-toolbar"><h6 style="color:#FFF;"><b>Tipo de Actividad</b></h6>												
							 
						 </div>
						</div>
					</td>
				</tr>
				<tr>
					
					<td><strong></strong></td>
					<td colspan="7">
						<?php
							include("conexion.php");	
											$i=0;
											$y=0;
											$sql=mysql_query("SELECT * FROM ra_tipo",$conexion);  
											if($row=mysql_fetch_array($sql)){
												$sql=mysql_query("SELECT * FROM ra_tipo",$conexion);  
												echo "<table><tr>";
												while($row=mysql_fetch_array($sql)){
													if($y==5||$i==0){
														echo "</tr><tr>";
														$y=0;
													}
													$i++;$y++;
													echo '<td><label class="inline"><input type="hidden" name="actividado'.$i.'" id="actividado'.$i.'" value="'.$row["Id_Tipo"].'" /><input onchange="validaActividad(this)" name="actividad'.$i.'" id="actividad'.$i.'" type="checkbox" /><span style="padding: 2px 4px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
													
												}
												echo "<input type='hidden' name='canActividad' id='canActividad' value='".$i."'></table>";
											}
											mysql_close();
		
						?>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<div class="header-color-green ">											 										 
							 <div class="widget-toolbar"><h6 style="color:#FFF;"><b>Condición</b></h6>
							 </div>
						 </div>
						
					</td>
				</tr>
				<tr>
					<td><strong></strong></td>
					
					<td colspan="5">
							<?php
							include("conexion.php");	
											$i=0;
											$y=0;
											$sql=mysql_query("SELECT * FROM ra_condicion",$conexion);  
											if($row=mysql_fetch_array($sql)){
												$sql=mysql_query("SELECT * FROM ra_condicion",$conexion);  
												echo "<table><tr>";
												while($row=mysql_fetch_array($sql)){
													if($y==5||$i==0){
														echo "</tr><tr>";
														$y=0;
													}
													$i++;$y++;
													echo '<td><label class="inline"><input type="hidden" name="condiciono'.$i.'" id="codiciono'.$i.'" value="'.$row["Id_Condicion"].'" /><input onchange="validaCondicion(this)" name="condicion'.$i.'" id="condicion'.$i.'" type="checkbox" /><span style="padding: 2px 4px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
													
												}
												echo "<input type='hidden' name='canCondicion' id='canCondicion' value='".$i."'></table>";
											}
											mysql_close();


							
							
						?>
					</td>	
					
					
				</tr>
				<tr>
					<td colspan="6">
						<div class="header-color-purple ">											 										 
							 <div class="widget-toolbar"><h6 style="color:#FFF;"><b>Acciones Tomadas</b></h6>
							 </div>
						 </div>
						
					</td>
				</tr>
				<tr>
					<td><strong></strong></td>
					
					<td colspan="5">
						<?php
							include("conexion.php");	
											$i=0;
											$y=0;
											$sql=mysql_query("SELECT * FROM ra_accion_tomada",$conexion);  
											if($row=mysql_fetch_array($sql)){
												$sql=mysql_query("SELECT * FROM ra_accion_tomada",$conexion);  
												echo "<table><tr>";
												while($row=mysql_fetch_array($sql)){
													if($y==5||$i==0){
														echo "</tr><tr>";
														$y=0;
													}
													$i++;$y++;
													echo '<td><label class="inline"><input type="hidden" name="acciono'.$i.'" id="acciono'.$i.'" value="'.$row["Id_AccionTomada"].'" /><input onchange="validaAccion(this)" name="accion'.$i.'" id="accion'.$i.'" type="checkbox" /><span style="padding: 2px 4px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
													
												}
												echo "<input type='hidden' name='canAccion' id='canAccion' value='".$i."'></table>";
											}
											mysql_close();


							
							
						?>
					</td>					
					
				</tr>
				<tr>
					<td colspan="6">
						<div class="header-color-red ">											 										 
							 <div class="widget-toolbar"><h6 style="color:#FFF;"><b>Daños</b></h6>
							 </div>
						 </div>
						
					</td>
				</tr>
				<tr>
				<td><strong></strong></td>
				
				<td colspan="5">
					<?php
							include("conexion.php");	
											$i=0;
											$y=0;
											$sql=mysql_query("SELECT * FROM ra_danho",$conexion);  
											if($row=mysql_fetch_array($sql)){
												$sql=mysql_query("SELECT * FROM ra_danho",$conexion);  
												echo "<table><tr>";
												while($row=mysql_fetch_array($sql)){
													if($y==5||$i==0){
														echo "</tr><tr>";
														$y=0;
													}
													$i++;$y++;
													echo '<td><label class="inline"><input type="hidden" name="danoso'.$i.'" id="danoso'.$i.'" value="'.$row["Id_Danho"].'" /><input onchange="validaDanhos(this)" name="danos'.$i.'" id="danos'.$i.'" type="checkbox" /><span style="padding: 2px 4px;" class="lbl"> '.$row['Nombre'].'</span></label></td>';
													
												}
												echo "<input type='hidden' name='canDanhos' id='canDanhos' value='".$i."'></table>";
											}
											mysql_close();


							for($i=0;$i<7;$i++){
								
							}
							
						?>
				</td>	
				</tr>
				<th><strong>COMISION</strong></th>
				<tr>
					<table class="table table-condensed">
						
							<tr>
								<th>Puesto</th>
								<th>Nombre</th>
								<th>Organismo</th>
								</tr>
														
					</table>
					<table class="table table-condensed" id="comision">
												
					</table>
					<td  >
						<a  class=" btn btn-small btn-primary" id="agregar" href="javascript: agregaPuesto()" ><i class="icon-plus"></i>Agregar Fila</a>
					</td>	
				</tr>	
				<br>		
				<tr>							
					<table class="table table-condensed">
						<tr>
								<th>Organismos en el Sitio</th>
								<th>Unidad</th>
								<th>Jefe de Comisión</th>
							</tr>
					</table>
					<table class="table  table-condensed" id="organismos">																
															
					</table>
					<td >
						<a class="btn btn-small btn-primary" id="agregar2" href="javascript: agregaOrganismos()"><i class="icon-plus"></i>Agregar Fila</a>
					</td>	
				</tr>	
				<br><br>	
				<tr>
					<td><strong>Situación</strong></td>
					<td colspan="5">
						<textarea onfocus="blanco(this)" title="Ingrese una direccion" name="situacion" id="situacion" class="span12"  ></textarea>
					</td>						
				</tr>
				<tr>
					<td><strong>Observaciones</strong></td>
					<td colspan="5">
						<textarea onfocus="blanco(this)" title="Ingrese una direccion" name="observacion" id="observacion" class="span12"  ></textarea>
					</td>	
				</tr>
				<tr>
					<td><strong>Recomendaciones</strong></td>
					<td colspan="5">
						<textarea onfocus="blanco(this)" title="Ingrese una direccion" name="recomendacion" id="recomendacion" class="span12"  ></textarea>
					</td>	
				</tr>
				<tr><td colspan="2"><div id="error"></div></td></tr>
				</tbody>
				
			<tfoot>									
					<td colspan="8">
						<div align="center">
							<a class="btn btn-info" href="javascript: registraRA(document.formulario)">Registrar</a>																					
							<button type="submit" class="btn btn-inverse" >Cancelar</button>										
						</div>
					</td>
				</tr>
			</tfoot>
		</table>
		
	</div>
</div><input type="hidden" name="cantidad_comision" id="cantidad_comision" >
		<input type="hidden" name="cantidad_organismos" id="cantidad_organismos" >
</form>

<script type="text/javascript">
var cont=1,cont2=1;
	var unidad,unidad2,funcionarios;

function agregaOrganismos(){
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
	//miTabla.setAttribute("width", "300px");
	miTabla.setAttribute("border", "0");

	
	td1.innerHTML = "<select  onfocus='blanco(this)' data-placeholder='Seleccione' id='organismo"+cont2+"' name='organismo"+cont2+"' >"+unidad2+"</select>";
	td2.innerHTML = '<input   onfocus="blanco(this)" class="span12" type="text" id="unidad'+cont2+'" name="unidad'+cont2+'" title="Ingrese Datos" />';
	td3.innerHTML = '<input   onfocus="blanco(this)" class="span12" type="text" id="jefe'+cont2+'" name="jefe'+cont2+'" title="Ingrese Datos" />';	
	td4.innerHTML = "<img width='30' src='assets/img/delete.png' title='Eliminar' class='aumentaTamanoIcon' onClick='eliminarFila(this)' />";	
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);	
	tbBody.appendChild(tr);
	miTabla.appendChild(tbBody);
	miCapa = document.getElementById('organismos');
	miCapa.appendChild(miTabla);
	//document.getElementById("organismo"+cont2).setAttribute("class", "chzn-select");
	cont2+=1;
	document.getElementById("cantidad_organismos").value=cont2;
}


function funci(funcio){
	//alert(funcio.value);
	//alert(funcio.parentElement.name);
	document.getElementById("h"+funcio.parentElement.name).value=funcio.value;
	//alert(document.getElementById(funcio.parentElement.name).value);
	//alert(funcio.parentElement.name);
}
function agregaPuesto(){
	
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
	//miTabla.setAttribute("width", "300px");
	miTabla.setAttribute("border", "0");

	
	td1.innerHTML = "<select onfocus='blanco(this)' data-placeholder='Seleccione' id='puesto"+cont+"' name='puesto"+cont+"' >"+unidad+"</select>";
	td2.innerHTML = "<select onfocus='blanco(this)' data-placeholder='Seleccione' id='funcionario"+cont+"' name='funcionario"+cont+"' >"+funcionarios+"</select>";
	td3.innerHTML = '<input type="hidden" id="hfuncionario'+cont+'" name="hfuncionario'+cont+'" value="asd" >';	
	td4.innerHTML = "<img width='30' src='assets/img/delete.png' title='Eliminar' class='aumentaTamanoIcon' onClick='eliminarFila(this)' />";	
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);	
	tbBody.appendChild(tr);
	miTabla.appendChild(tbBody);
	miCapa = document.getElementById('comision');
	miCapa.appendChild(miTabla);
	cont+=1;
	document.getElementById("cantidad_comision").value=cont;
}	
function cargaPuestos(){
	//alert(aldea.options[aldea.selectedIndex].value);
	
	var hora2= new Date().getTime();
		objeto_ajax2=objetoAjax(); 
		objeto_ajax2.open("GET", "lista_Puesto.php?hora="+hora2,true);
		objeto_ajax2.onreadystatechange=function() {	
			if (objeto_ajax2.readyState==4) {
					unidad=objeto_ajax2.responseText;
					agregaPuesto();	

			}
		}
		objeto_ajax2.send(null);
}
function cargaFuncionarios(){
	//alert(aldea.options[aldea.selectedIndex].value);
	
	var hora33= new Date().getTime();
		objeto_ajax33=objetoAjax(); 
		objeto_ajax33.open("GET", "lista_Funcionario.php?hora="+hora33,true);
		objeto_ajax33.onreadystatechange=function() {	
			if (objeto_ajax33.readyState==4) {
					funcionarios=objeto_ajax33.responseText;
					

			}
		}
		objeto_ajax33.send(null);
}
function cargaOrganismos(){
	//alert(aldea.options[aldea.selectedIndex].value);
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "lista_Organismos.php?hora="+hora,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					unidad2=objeto_ajax.responseText;
					agregaOrganismos();	

			}
		}
		objeto_ajax.send(null);
}
cargaFuncionarios();
cargaPuestos();
cargaOrganismos();

	

function eliminarFila(obj){
    var oTr = obj;
    while(oTr.nodeName.toLowerCase()!='tr'){
    oTr=oTr.parentNode;
    }
    var root = oTr.parentNode;

    root.removeChild(oTr);
 }

 //hora_llamada hora_activacion hora_sitio hora_culminacion
    $(".chzn-select").chosen({ 'width': '180px'});    
    $('.date-picker').datepicker().next().on(ace.click_event, function(){
        $(this).prev().focus();
    });

    
    


	$('#hora_llamada,#hora_activacion,#hora_sitio,#hora_culminacion').timepicker({
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
	
	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file:'Cargar Archivos...',
		btn_choose:'Buscar',
		btn_change:'Cambiar',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});
	
	$('#id-input-file-3').ace_file_input({
		style:'well',
		btn_choose:'Arrastra la imagen o da click para seleccionar',
		btn_change:null,
		no_icon:'icon-cloud-upload',
		droppable:true,
		thumbnail:'small'
		//,icon_remove:null//set null, to hide remove/reset button
		/**,before_change:function(files, dropped) {
			//Check an example below
			//or examples/file-upload.html
			return true;
			}*/
			/**,before_remove : function() {
				return true;
				}*/
				,
				preview_error : function(filename, error_code) {
					//name of the file that failed
					//error_code values
					//1 = 'FILE_LOAD_FAILED',
					//2 = 'IMAGE_LOAD_FAILED',
					//3 = 'THUMBNAIL_FAILED'
					//alert(error_code);
				}
				
				}).on('change', function(){
				//console.log($(this).data('ace_input_files'));
				//console.log($(this).data('ace_input_method'));
			});
	
			//dynamically change allowed formats by changing before_change callback function
			$('#id-file-format').removeAttr('checked').on('change', function() {
				var before_change
				var btn_choose
				var no_icon
				if(this.checked) {
					btn_choose = "Drop images here or click to choose";
					no_icon = "icon-picture";
					before_change = function(files, dropped) {
						var allowed_files = [];
						for(var i = 0 ; i < files.length; i++) {
							var file = files[i];
							if(typeof file === "string") {
								//IE8 and browsers that don't support File Object
								if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
							}
							else {
								var type = $.trim(file.type);
								if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
								|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
								) continue;//not an image so don't keep this file
							}
							
							allowed_files.push(file);
						}
						if(allowed_files.length == 0) return false;
						
						return allowed_files;
					}
				}
				else {
					btn_choose = "Drop files here or click to choose";
					no_icon = "icon-cloud-upload";
					before_change = function(files, dropped) {
						return files;
					}
				}
				var file_input = $('#id-input-file-3');
				file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
				file_input.ace_file_input('reset_input');
			});
			
			/*$("#agregar").on('click', function(){
				$("#comision tbody tr:eq(0)").clone().appendTo("#comision tbody");
			});*/
			/*$("#agregar2").on('click', function(){
				$("#organismos tbody tr:eq(0)").clone().appendTo("#organismos tbody");
			});*/
	
</script>