<!--Titulo-->
 <div class="page-header position-relative">
   <h1>
     INSPECCIONES
   </h1>
 </div><!--/.page-header-->

<div class="row-fluid">
			<div class="span12">				
					 <div class="widget-header widget-header-small header-color-blue">
						 <h5><b>Gestión de Tipos</b></h5>
					 </div>

		
					<form action="" class="form-horizontal" name="formulario" id="formu" method="post"> 

							<table class="table  table-condensed " style=" font-weight: bold;" >
										<tr>
											<td style="padding: 8px 5px;">Nombre del Tipo Inspección</td>
											<td style="padding: 8px 100px; ">
											<input  style="width:180px;" type="text" id="inspeccion" name="inspeccion" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>										
										</tr>
										<tr>
											<td style="padding: 8px 5px;">Descripcion:</td>
											<td style="padding: 8px 100px;">
												<textarea style="width:360px;" id="descripcion"  name="descripcion" onfocus='blanco(this)' title="Ingrese los Datos" ></textarea>
											</td>
										</tr>	
										
										<tr><td colspan="2"><div id="error"></div></td></tr>
									</table>
									<div align="center">
										<div class="btn-group">
											
											<button type="button" class="btn btn-info" value="Guardar" onClick="guardarTipoInspeccion(document.formulario)">Registrar</button>
											<button type="button" class="btn btn-inverse" href="javascript:menu('inicio');">Cancelar</button>
										</div>		
									</div>	
								


				</form>	
			
</div>
		
									<div class="row-fluid">
			<div class="span12">				
					 <div class="widget-header widget-header-small header-color-orange">
						 <h5><b>Listado de Inspecciones</b></h5>
					 </div>

					<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">
											<label>
												Habilitado
											</label>
										</th>
										
										<th>Nombre</th>
															
																				
										<th>Descripcion</th>
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
function traeListado(){
		
			
			var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "man_lista_inspecciones.php?hora="+hora,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("actualiza").innerHTML=objeto_ajax.responseText;
						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);
		}
</script>

