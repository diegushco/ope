<style type="text/css">
	.titulo{
		font-size: 16px;
		color: #44749D !important;
	}
</style>
	<link rel="stylesheet" href="assets/css/estilo.css">
	<div class="page-header position-relative titulo">
		<h2>
			Reporte de Censo por Municipio
		</h2>
	</div><!--/.page-header-->
	<div id="myModal" class="modal hide fade">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Detalle de Censo</h3>
					</div>
					<div class="modal-body" >
						<div id="cuerpomodal" >
						




						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn">Close</button>
						
					</div>
				</div>
	<div class="row-fluid">
		<div class="span12">
		<form class="form-inline">
		   <div class="control-group">
			<label>
				
				<span class="lbl">FECHA</span>
			</label>
			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-calendar"></i>
				</span>
				<input type="text" id="rango-fecha" name="rango-fecha" />
			</div>
			
			<label>
				
				<span class="lbl">Municipio</span>
			</label>
			<select data-placeholder="Seleccione" id="aldea" name="aldea" onchange="aldeasel1(this)"  class="chzn-select" >
											<option value="AL" ></option>
											

											<?php
											include("conexion.php");	
											$sql=mysql_query("SELECT * FROM municipio order by Nombre asc",$conexion);  
											if($row=mysql_fetch_array($sql)){
												$sql=mysql_query("SELECT * FROM municipio order by Nombre asc",$conexion);  
												while($row=mysql_fetch_array($sql)){
													echo '<option value="'.$row['Id_Municipio'].'" >'.$row['Nombre'].'</option>';
												}
											}
											mysql_close();		
											?>



										</select>
			
			<label>
			
			
			
			
			<a href="javascript: traeListado()" class="btn btn-small btn-info">
				<i class="icon-search"></i>
			</a>
			<a href="javascript: menu('listado_censo_municipio')" class="btn btn-small btn-info">
				<i class="icon-refresh"></i>
			</a>
			</div>
		</form>
		</div>	
	</div>
	
	<div id="contenido">
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
												Municipio</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												Tipo</th>
											

											<th></th>
										</tr>
									</thead>

									<tbody>


<?php
			include("conexion.php");


$consulta="select mun.Nombre as municipio, cc.Id_Censo as idCenso, cvi.Id_Vivienda as idvi,
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
cvi.Id_Vivienda=cc.Id_Vivienda 

";

			
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
											<td class="hidden-phone"><?php echo $row["municipio"]; ?></td>

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

<?php


 } //cierro while 
include("guardaBitacora.php");
					bitacora("Busca censo reporte por municipio","Buscar",$conexion);


		$aco1=0;
		include("conexion.php");	
		$cons="


					select DISTINCT mun.Nombre as Nombre, mun.Id_Municipio as Id_Municipio
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
					cvi.Id_Vivienda=cc.Id_Vivienda



			";
		$sql=mysql_query($cons,$conexion);  
		if($row=mysql_fetch_array($sql)){
			$sql=mysql_query($cons,$conexion);  
			while($row=mysql_fetch_array($sql)){
				$resultado = str_replace(" ", "\n", $row['Nombre']);
				$nombres[$aco1]=$resultado;

				$consulta1="
				select count(mun.Id_Municipio) as cantidad, mun.Nombre
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
					mun.Id_Municipio like '%".$row['Id_Municipio']."%' ";
					//echo $consulta1;
				$sql2=mysql_query($consulta1,$conexion);  
				if($row2=mysql_fetch_array($sql2)){
					$vecM[$aco1]=$row2['cantidad'];
				}else{
					$vecM[$aco1]=0;
				}
				$aco1=$aco1+1;
			}
		}
			
					

$_SESSION["dat"]=$vecM;
$_SESSION["nombres"]=$nombres;
 ?>




									</tbody>
								</table>
							<img id="grafico" src="graficoBarCC.php?var=<?php echo time(); ?>" />
							</div>
	</div>	
							
		<script type="text/javascript">
		var aldea1="";
		$('.chzn-select').chosen();
		$('#rango-fecha').daterangepicker({format: 'YYYY/MM/DD'});
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}

			})

function traeListado(){
			rango=document.getElementById("rango-fecha").value;
			rango=rango.split("-");
			fecha1=rango[0];
			fecha2=rango[1];
			


			var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "trae_CensoMun.php?hora="+hora+"&fecha1="+fecha1+"&fecha2="+fecha2+"&idbus="+aldea1,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("contenido").innerHTML=objeto_ajax.responseText;
						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);
		
		
		}

function abreModal(id_valor){
	var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "mdetalle_censo.php?hora="+hora+"&valor="+id_valor,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("cuerpomodal").innerHTML=objeto_ajax.responseText;
						$("#myModal").modal("show");
				}
			}
			objeto_ajax.send(null);
	

}

function aldeasel1(aldea){
	
aldea1=aldea.options[aldea.selectedIndex].value;

}
		</script>