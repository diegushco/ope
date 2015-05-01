<!--Titulo-->
 <div class="page-header position-relative">
   <h1>
     PRIVILEGIOS
   </h1>
 </div><!--/.page-header-->

<div class="row-fluid">
			<div class="span12">				
					 <div class="widget-header widget-header-small header-color-blue">
						 <h5><b>Seleccione un Usuario</b></h5>
					 </div>

		
					<form action="" class="form-horizontal" name="formulario" id="formu" method="post"> 

							<table class="table  table-condensed " style=" font-weight: bold;" >
										<tr>
											<td style="padding: 8px 5px;">Seleccione el usuario</td>
											<td style="padding: 8px 100px; ">
												<select onchange="buscaPrivilegios()" data-placeholder="Seleccione" id="usuarioss" name="usuarioss"  class="chzn-select" >
															<option value="AL" ></option>
															

															<?php
															include("conexion.php");	
															$consu="SELECT * FROM usuario order by usuario asc";
															//echo $consu;
															$sql=mysql_query($consu,$conexion);  
															if($row=mysql_fetch_array($sql)){
																$sql=mysql_query("SELECT * FROM usuario order by Nombre asc",$conexion);  
																while($row=mysql_fetch_array($sql)){
																	echo '<option value="AL" >'.$row['Usuario'].'</option>';
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
											
											<button type="button" class="btn btn-info" value="Guardar" onClick="guardarUsuario(document.formulario)">Registrar</button>
											<button type="button" class="btn btn-inverse" href="javascript:menu('inicio');">Cancelar</button>
										</div>		
									</div>	
								


				</form>	
			
</div>
		
									<div class="row-fluid">
			<div class="span12">				
					 <div class="widget-header widget-header-small header-color-orange">
						 <h5><b>Menu de privilegios</b></h5>
					 </div>

					<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">
											<label>
												Habilitado
											</label>
										</th>
										<th>Item de Menu</th>										
									</tr>
								</thead>
								
								<tbody id="actualiza">								
									
								</tbody>					
		
							</table>


			</div>
		</div>
								
								




<script type="text/javascript">
    $(".chzn-select").chosen({ 'width': '230px'});
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
	


		
	});
function buscaPrivilegios(){			
			var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "man_lista_privilegios.php?hora="+hora+"&usuario="+document.getElementById("usuarioss").options[document.getElementById("usuarioss").selectedIndex].text,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						document.getElementById("actualiza").innerHTML=objeto_ajax.responseText;
						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);	
		}
	function cambia(obj){
		var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "cambiaPrivilegio.php?hora="+hora+"&usuario="+obj.name+"&id_menu="+obj.lang,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
						//document.getElementById("actualiza").innerHTML=objeto_ajax.responseText;
						alert(objeto_ajax.responseText);					
						var a=1;
				}
			}
			objeto_ajax.send(null);	
	}
</script>

