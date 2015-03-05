<!--Titulo-->
 <div class="page-header position-relative">
   <h1>
     REFUGIOS
   </h1>
 </div><!--/.page-header-->

<div class="row-fluid">
			<div class="span12">				


<!--Modal para iniciar sesion-->
				<div id="myModal" class="modal hide fade">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Detalle de Refugio</h3>
					</div>
					<div class="modal-body" >
						<div id="cuerpomodal" >
						




						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn">Close</button>
						
					</div>
				</div>
				<!--CIERO Modal para iniciar sesion-->


					 <div class="widget-header widget-header-small header-color-blue">
						 <h5><b>Gestión de refugios</b></h5>
					 </div>

		
					<form action="" class="form-horizontal" name="formulario" id="formu" method="post"> 

							<table class="table  table-condensed " style=" font-weight: bold;" >
										<tr>
											<td style="padding: 8px 5px;">Nombre:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" type="text" id="nombre" name="nombre" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
											<td style="padding: 8px 5px;">Direccion:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" type="text" id="direccion" name="direccion" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
											<td style="padding: 8px 5px;">Telefono:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" type="text" id="telefono" name="telefono" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
										</tr>
										<tr>
											<td style="padding: 8px 5px;">Capacidad:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" type="text" id="capacidad" name="capacidad" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
											<td style="padding: 8px 5px;">Descripcion:</td>
											<td style="padding: 8px 0px;">
												<textarea id="descripcion" name="descripcion" onfocus='blanco(this)' title="Ingrese los Datos" ></textarea>
											</td>
											<td style="padding: 8px 5px;">Aldea:</td>
											<td style="padding: 8px 0px;">
												<select data-placeholder="Seleccione" id="aldea" name="aldea"  class="chzn-select" >
															<option value="AL" ></option>
															

															<?php
															include("conexion.php");	
															$sql=mysql_query("SELECT * FROM aldea order by Nombre asc",$conexion);  
															if($row=mysql_fetch_array($sql)){
																$sql=mysql_query("SELECT * FROM aldea order by Nombre asc",$conexion);  
																while($row=mysql_fetch_array($sql)){
																	echo '<option value="AL" >'.$row['Nombre'].'</option>';
																}
															}
															mysql_close();
															?>



														</select>
											</td>
										</tr>


										
										<tr><td colspan="2"><div id="error"></div></td></tr>
									</table>
									<div align="center">
										<div class="btn-group">
											
											<button type="button" class="btn btn-info" value="Guardar" onClick="guardarRefugio(document.formulario)">Registrar</button>
											<button type="button" class="btn btn-inverse" href="javascript:menu('inicio');">Cancelar</button>
										</div>		
									</div>	
								


				</form>	
			
</div>
		
									<div class="row-fluid">
			<div class="span12">				
					 <div class="widget-header widget-header-small header-color-orange">
						 <h5><b>Listado de muncipios</b></h5>
					 </div>

					<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										
										<th>Nombre</th>
															
																				
										<th></th>
									</tr>
								</thead>
								
								<tbody id="actualiza">								
									
								</tbody>					
		
							</table>


			</div>
		</div>
								
								




<script type="text/javascript">
    $(".chzn-select").chosen({ 'width': '130px'});
    $('.date-picker').datepicker().next().on(ace.click_event, function(){
        $(this).prev().focus();
    });
	$().ready(function(){
		$("input").tooltip({
			placement: "bottom",
		});
		$("textarea").tooltip({
			placement: "bottom",
		});
		traeListado();



		
	});
function abreModal(id_valor){
	var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "mdetalle_refugio.php?hora="+hora+"&valor="+id_valor,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("cuerpomodal").innerHTML=objeto_ajax.responseText;
						$("#myModal").modal("show");
				}
			}
			objeto_ajax.send(null);
	

}
function traeListado(){
		
			
			var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "man_lista_refugio.php?hora="+hora,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("actualiza").innerHTML=objeto_ajax.responseText;
						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);
		
		
		}
</script>

