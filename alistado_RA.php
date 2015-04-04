	<div class="page-header position-relative">
		<h1>
			Listado de RA
		</h1>
	</div><!--/.page-header-->
	
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
			<select class="chzn-select" id="sel8" data-placeholder="Seleccione Indicador">
				<option value="" />
				<option value="AL" >Medicamento Uno</option>
				<option value="AK" >Medicamento Dos</option>
				<option value="AZ" >Medicamento Tres</option>
				<option value="AR" >Medicamento Cuatro</option>
			</select>
			
			
			
			
			
			<button type="submit" class="btn btn-small btn-info">
				<i class="icon-search"></i>
			</button>
			</div>
		</form>
		</div>	
	</div>
	
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
											<th><i class="icon-time bigger-110 hidden-phone"></i>
												Fecha</th>
											<th>Folio</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												Aldea</th>

											<th class="hidden-phone">
												
												Tipo
											</th>
											<th class="hidden-480">
												<i class="icon-bullhorn bigger-110 hidden-phone"></i>
												Condicion</th>

											<th></th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#">app.com</a>
											</td>
											<td>$45</td>
											<td class="hidden-480">3,330</td>
											<td class="hidden-phone">Feb 12</td>

											<td class="hidden-480">
												<span class="label label-warning">Expiring</span>
											</td>

											<td class="td-actions">
												<div class="hidden-phone visible-desktop action-buttons">
													<a class="blue" href="#">
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
																<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
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

										













































									</tbody>
								</table>
							
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
		</script>
	

	