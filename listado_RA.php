	<div class="page-header position-relative">
		<h1>
			Listado de RA
		</h1>
	</div><!--/.page-header-->
	<div id="myModal" class="modal hide fade">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Detalle de RA</h3>
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
				<input type="text" id="rango-fecha" />
			</div>
			
			<label>
				
				<span class="lbl">ALDEA</span>
			</label>
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
			
			<label>
			
			
			
			
			<button type="submit" class="btn btn-small btn-info">
				<i class="icon-search"></i>
			</button>
			</div>
		</form>
		</div>	
	</div>
	
	<div id="contenido">
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
												Aldea</th>

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
			$consulta="select raa.Id_Actividad as actividad, raa.Fecha as fecha, raa.Numero_Folio as folio, ald.Nombre as aldea, rat.Nombre as tipo, rco.Nombre as condicion
				from ra_actividad raa, 
				ra_tipo rat,
				aldea ald,
				ra_accion_actividad rac,
				ra_accion_tomada rct,
				ra_condicion rco,
				ra_actividad_danho rdh,
				ra_danho rdn
				where raa.Id_Tipo=rat.Id_Tipo and
				raa.Id_Aldea=ald.Id_Aldea and
				rac.Id_Actividad=raa.Id_Actividad and
				rac.Id_AccionTomada=rct.Id_AccionTomada and
				rco.Id_Condicion=raa.Id_Condicion and
				rdh.Id_Actividad=raa.Id_Actividad and
				rdn.Id_Danho=rdh.Id_Danho";
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

													<a class="green" href="#">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="#">
														<i class="icon-trash bigger-130"></i>
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
																<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="icon-edit bigger-120"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-120"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>

<?php
include("guardaBitacora.php");
					bitacora("Busca listado RA ".$row["folio"],"Buscar",$conexion);

 } //cierro if ?>




									</tbody>
								</table>
							
							</div>
	</div>	
							
		<script type="text/javascript">
		$('.chzn-select').chosen();
		$('#rango-fecha').daterangepicker();
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
		
			
			var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "trae_RA.php?hora="+hora,true);
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
			objeto_ajax.open("GET", "mdetalle_ra.php?hora="+hora+"&valor="+id_valor,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("cuerpomodal").innerHTML=objeto_ajax.responseText;
						$("#myModal").modal("show");
				}
			}
			objeto_ajax.send(null);
	

}
function abreModalM(id_valor){
	var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "mdetalle_ra.php?hora="+hora+"&valor="+id_valor,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("cuerpomodal").innerHTML=objeto_ajax.responseText;
						$("#myModal").modal("show");
				}
			}
			objeto_ajax.send(null);
	

}
		</script>
	

	