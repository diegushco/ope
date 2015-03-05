
<div class="page-header position-relative">
	<h1>
			Citas Registradas
	</h1>
</div>
										 										 
<style type="text/css">
	.column{
		background-color: #000;
	}
</style>

<div class="row-fluid">
	<div class="span12">

		<div class="widget-toolbar header-color-blue span12"><h5 style="color:#FFF;"><b>BUSQUEDA AVANZADA</b></h5>										
			 
		</div>
		
		<div class="widget-body">
				<form action="#" name="formulario" id="formu" method="post" class="form-inline"> 
				   <div class="control-group ">
							<hr>
							<br>
							<div class="span1"></div>
							<label>
								<strong>
								<!-- <input type="checkbox" /> -->
								<span class="lbl">Aldea:</span>
								</strong>
							</label>
							<select data-placeholder="Seleccione" id="aldea" name="aldea" onchange="aldeasel(this)"  class="chzn-select" style="padding: 8px 10px;" >
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
								
								
								<!-- <input type="checkbox" /> -->
								<span class="lbl" ><strong>Cedula:</strong></span>
								
							</label>					
								
																						
							<input class="input-medium"	 type="text" id="cedula2" name="cedula2" onfocus='blanco(this)' placeholder="V-0000000" />

							<label>	
							<strong>
							<strong>			
							<span class="lbl">Tipo:</span>
							</strong>
							</label>
							<label colspan="6" style="padding: 8px 8px;">
									<select data-placeholder="Seleccione" id="inspeccion" name="inspeccion"  class="chzn-select"  >
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
							</label>
							<br>
							<br>
							
					
			   		<div class="control-group">
			   			<div class="span1"></div>
						<label  class="span2"><strong>Rango de Fechas</strong></label>
						<br>
						<label>	<span class="lbl span1"> Inicio</span> </label>
						
						<div class="input-append ">
							<input class="input input-medium date-picker" id="fechaI" name="fechaI" type="text" data-date-format="yyyy-mm-dd" onfocus='blanco(this)'/>
							<span class="add-on">
								<i class="icon-calendar"></i>
							</span>
						</div>
						<div class="span1"></div>
						<label>
							<!-- <input type="checkbox" /> -->
							<span class="lbl">Fin</span>
						</label>
			
							<div class="input-append ">
								<input class="input input-medium  date-picker" id="fechaF" name="fechaF" type="text" data-date-format="yyyy-mm-dd" onfocus='blanco(this)'/>
								<span class="add-on">
									<i class="icon-calendar"></i>
								</span>
							</div>
							<a class="btn btn-info btn-small" href="javascript: buscaCita()">
								Buscar
								<i class="icon-search icon-on-right bigger-110"></i>
							</a>
							
			   		</div>

				</form>
		</div>

	</div>	

	<div class="span12">
	<br>				
		<div class="widget-header widget-header-small header-color-orange">
			 <h5 style="color:#FFF;"><b>Resultados</b></h5>
		</div>

		<table id="sample-table-2" class="table table-condensed table-hover">
			<thead>
				
			</thead>
			
			<tbody id="actualiza">								
				
			</tbody>					

		</table>
	</div>
</div>	

 


 <script type="text/javascript">
  $('.date-picker').datepicker().next().on(ace.click_event, function(){
		 $(this).prev().focus();
	 });
 var cont2=1;

$("#cedula2").mask("a-9999?9999999"); 
$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
	$(this).next().focus();
});


 $(".chzn-select").chosen({ 'width': '200px'});

 $('#s,#timepicker2,#timepicker3,#timepicker5').timepicker({
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