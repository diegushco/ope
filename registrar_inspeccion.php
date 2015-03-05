  		<div class="page-header position-relative">
				<h1>
				Registro de Inspección
				</h1>
		</div>
		<div class="row-fluid">
			<div class="span12">
			<form class="form-inline">
				<div class="controls">
					<label class="control_label">Nro de Cita: </label>
					<div class="input-append">
						<input  onfocus="blanco(this)" style="width:120px;" disabled="" type="text" id="numero_cita" name="numero_cita" title="Rellene el campo" placeholder="0000" />
						<span class="btn btn-small btn-warning">
							<a href="#modal-citas" role="button" class="white" data-toggle="modal"> <i class="icon-list"></i> </a>
						</span>
					</div>
				</div>
			</form>
			</div>
		</div>
		<form action="#" name="formulario" id="formu" method="post"> 	
		<div class="header-color-orange ">											 										 
				 <div class="widget-toolbar"><h5 style="color:#FFF;"><b>DATOS DE INSPECCION</b></h5>																		 
					</div>
		</div>	
		<div class="row-fluid">
		<div class="span12" id="datos">
								
		</div>								
</div>
</form>				
	<div id="modal-citas" class="modal hide" tabindex="-1">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="blue">Listado de Citas</h4>
		</div>

		<div class="modal-body">
			<div class="row-fluid">
				<?php
					include "conexion.php";
					$consulta="SELECT id_cita,fecha_solicitud,fecha_cita,estado,a.id_entrevistado,nombre,apellido,cedula FROM ev_cita a, entrevistado b where estado='Iniciada' and a.id_entrevistado=b.id_entrevistado order by fecha_solicitud";

					$sql=mysql_query ($consulta,$conexion);	
					?>
					<table class="table table-condensed table-hovered">
						<tbody>
							<tr>
								<th>Código</th>
								<th>Fecha Solicitud</th>
								<th>Fecha Cita</th>
								<th>Entrevistado</th>
							</tr>
						<?php
							while($row=mysql_fetch_array($sql)){
						?>
							<tr onclick="enviar_padre_cita(<?php echo $row[0];?>)">
								<th><?php echo $row[0];?></th>
								<th><?php echo $row[1];?></th>
								<th><?php echo $row[2];?></th>
								<th><?php echo $row[5].", ".$row[6];?></th>
							</tr>
						<?php
							}
						?>
						</tbody>						
					</table>
			</div>
		</div>
	</div><!--PAGE CONTENT ENDS-->
									

<script type="text/javascript">
	function enviar_padre_cita(cita){
		$("#numero_cita").val(cita);
		$("#datos").load("info_citas.php",{codigo:cita});
		$("#modal-citas").modal('hide');
	}	
</script>
