<?php
include("conexion.php");
			$consulta="select rat.Nombre as tipo, ald.Nombre as aldea, rct.Nombre as accion, rco.Nombre as condicion, rdn.Nombre as dano, raa.Id_Unidad as unidad, raa.Direccion as direccion, raa.Hora_Llamada as hllamada, raa.Hora_Activacion as hactivacion, raa.Hora_Sitio as hsitio, raa.Hora_Fin as hfin, raa.Fecha as fecha, raa.Numero_Folio as folio, raa.Situacion as situacion, raa.Recomendacion as recomendacion, raa.Observacion as observacion
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
rdn.Id_Danho=rdh.Id_Danho and
rac.Id_Actividad='".$_REQUEST["valor"]."'

";
			//$consulta="SELECT * from cs_refugio where Id_Refugio='".$_REQUEST["valor"]."'";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
			


?>

<form action="" class="form-horizontal" name="formulario1" id="formu1" method="post"> 

							<table class="table  table-condensed " style=" font-weight: bold;" >
										<tr>										
											<td style="padding: 8px 5px;">Folio:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["folio"]; ?>
											</td>
											
										</tr>
										<tr>
										<input  style="width:180px;" value="<?php echo $_REQUEST["valor"]; ?>" type="hidden" id="id_re" name="id_re"  />
											<td style="padding: 8px 5px;">Tipo:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["tipo"]; ?>
											</td>
											<td style="padding: 8px 5px;">Aldea:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["aldea"]; ?>
											</td>
											<td style="padding: 8px 5px;">Accion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["accion"]; ?>
											</td>
										</tr>

										<tr>										
											<td style="padding: 8px 5px;">Condicion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["condicion"]; ?>
											</td>
											<td style="padding: 8px 5px;">Daño:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["dano"]; ?>
											</td>
											<td style="padding: 8px 5px;">Unidad:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["unidad"]; ?>
											</td>
										</tr>

										<tr>										
											<td style="padding: 8px 5px;">Direccion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["direccion"]; ?>
											</td>
											<td style="padding: 8px 5px;">Llamada:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["hllamada"]; ?>
											</td>
											<td style="padding: 8px 5px;">Acivacion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["hactivacion"]; ?>
											</td>
										</tr>

										<tr>										
											<td style="padding: 8px 5px;">Sitio:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["hsitio"]; ?>
											</td>
											<td style="padding: 8px 5px;">Fin:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["hfin"]; ?>
											</td>
											<td style="padding: 8px 5px;">Fecha:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["fecha"]; ?>
											</td>
										</tr>
										<tr>										
											<td style="padding: 8px 5px;">Situacion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["situacion"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;">Recomendacion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["recomendacion"]; ?>
											</td>
											
										</tr>
										<tr>										
											<td style="padding: 8px 5px;">Observacion:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["observacion"]; ?>
											</td>
											
										</tr>




									
										
										
										<tr><td colspan="2"><div id="error"></div></td></tr>
									</table>
									<div align="center">
										<div class="btn-group">
											
											<button type="button" class="btn btn-info" value="agregar" onClick="modificarRefugio(document.formulario1)">Modificar</button>
											<button type="button" class="btn btn-inverse" value="eliminar" onClick="eliminarRefugio(document.formulario1)">Eliminar</button>
										</div>		
									</div>	
								


				</form>
			<?php
}
mysql_close();
			?>