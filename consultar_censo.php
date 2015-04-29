	<link rel="stylesheet" href="assets/css/estilo.css">
	<div class="page-header position-relative">
		<h1>
			Consulta de Censo
		</h1>
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
						<button type="button" data-dismiss="modal" class="btn">Cerrar</button>
						
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
				
				<span class="lbl">CEDULA</span>
			</label>
			<input class="input-medium"	 type="text" id="cedula" name="cedula" onfocus='blanco(this)' placeholder="V-0000000" />
			
			<label>
			
			
			
			
			<a href="javascript: traeListado()" class="btn btn-small btn-info">
				<i class="icon-search"></i>
			</a>
			<a href="javascript: menu('consultar_censo')" class="btn btn-small btn-info">
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
			cst.Id_Tipo=csv.Id_Tipo 
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
	</div>	
							
		<script type="text/javascript">
		$("#cedula").mask("a-9999?9999999"); 
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
			cedula=document.getElementById("cedula").value;
			if(rango==""){
				fecha1="";
				fecha2="";
			}

			var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "trae_Censo.php?hora="+hora+"&fecha1="+fecha1+"&fecha2="+fecha2+"&cedula="+cedula,true);
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