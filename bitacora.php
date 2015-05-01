<?php 

ob_start();
session_start();
$error = ob_get_clean();
?>
	<link rel="stylesheet" href="assets/css/estilo.css">
	<div class="page-header position-relative">
		<h1>
			Bitacora
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
	
	
	<div id="contenido">
		<div class="row-fluid">
		
								
								<div class="table-header">
									Registros de Bitacora en el sistema
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
											<th>URL</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												IP</th>

											<th class="hidden-phone">
												
												Usuario
											</th>
											<th class="hidden-480">Tipo</th>
											<th></th>
											
										</tr>
									</thead>

									<tbody>


<?php
			include("conexion.php");
			$consulta="select bita.FechaHora as fecha, bita.Url as url, bita.Ip as ip, usua.usuario as usuario, bita.tipo as tipo
from bitacora bita, usuario usua
where usua.Id_Usuario=bita.Id_Usuario
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
											<td><?php echo substr($row["url"], 0, 25); ?></td>
											<td class="hidden-480"><?php echo $row["ip"]; ?></td>
											<td class="hidden-phone"><?php echo $row["usuario"]; ?></td>

											<td class="hidden-480">
												<?php
													if($row["tipo"]=="Buscar"){?>
														<span class="label label-warning"><?php echo $row["tipo"]; ?></span>
														<?php														
													}else if($row["tipo"]=="Guardar"){?>
														<span class="label label-success"><?php echo $row["tipo"]; ?></span>
														<?php														
													}else if($row["tipo"]=="Actualizar"){?>
														<span class="label label-info arrowed arrowed-righ"><?php echo $row["tipo"]; ?></span>
														<?php														
													}else if($row["tipo"]=="Eliminar"){?>
														<span class="label label-inverse arrowed-in"><?php echo $row["tipo"]; ?></span>
														<?php														
													}
												?>
												
											</td>

											<td class="td-actions">
												<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="javascript: urls('<?php echo $row["url"]; ?>')">
														<i class="icon-zoom-in bigger-130"></i>
													</a>

													

													
												</div>

												<div class="hidden-desktop visible-phone">
													<div class="inline position-relative">
														<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
															<i class="icon-caret-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
															<li>
																<a href="javascript: urls('<?php echo $row["url"]; ?>')" class="tooltip-info" data-rel="tooltip" title="View">
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

 ?>




									</tbody>
								</table>
							
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


function urls(id_valor){
	alert(id_valor);
}

		</script>