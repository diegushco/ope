<?php
include_once("conexion.php");	
$sql=mysql_query("SELECT * FROM ins_citas WHERE id_cita=".$_REQUEST['codigo'],$conexion);  
if($row=mysql_fetch_array($sql)){
?>

<table class="table  table-condensed " style=" font-weight: bold;" >
	<tr>
		<td style="padding: 8px 5px;">Nº de Cita</td>
		<td style="padding: 8px 0px;">
				<input  onfocus="blanco(this)" style="width:120px;" disabled="" type="text" id="numero_cita" name="numero_cita" title="Rellene el campo" value="<?php echo $row['id_cita'];?>" />
		</td>
		<td style="padding: 8px 5px;">Fecha de Inspección</td>
		<td style="padding: 8px 0px;">
			<input onfocus="blanco(this)" title="Seleccione una fecha" class="date-picker input-medium" id="fecha" name="fecha" type="text" data-date-format="yyyy-mm-dd" />
			<span class="add-on">
				<i class="icon-calendar"></i>
			</span>
		</td>
		<td style="padding: 8px 5px;">Nº Folio</td>
		<td style="padding: 8px 0px;">
			<input  onfocus="blanco(this)" style="width:120px;" type="text" id="numero" name="numero" title="Rellene el campo" disabled="" value="<?php echo $row['no_folio'];?>" placeholder="3409/2013" />
		</td>		
	</tr>
	<tr>
		<td style="padding: 8px 5px;">Aldea:</td>
		<td style="padding: 8px 0px;">
			<input type="text" disabled="" value="<?php echo $row['aldea'];?>" />
		</td>									
		<td style="padding: 8px 5px;">Estado:</td>
		<td style="padding: 8px 0px;">
			<input disabled="disabled" class="span12" name="estado11" id="estado11" type="text" title="Ingrese Datos" value="<?php echo $row['estado'];?>" />
		</td>
		<td style="padding: 8px 5px;">Municipio:</td>
		<td style="padding: 8px 0px;">
			<input disabled="disabled" class="span12" type="text" name="municipio11" id="municipio11" title="Ingrese Datos" value="<?php echo $row['municipio'];?>" />
		</td>
		
	</tr>

	<tr>
		<td style="padding: 8px 5px;">Parroquia:</td>
		<td style="padding: 8px 0px;">
		<input disabled="disabled" class="span10" type="text" name="parroquia11" id="parroquia11" title="Ingrese Datos" value="<?php echo $row['parroquia'];?>" />
		</td>	
		<td style="padding: 8px 5px;">Ciudad:</td>
		<td style="padding: 8px 0px;">
		<input   disabled="disabled"  class="span12" type="text" name="ciudad11" id="ciudad11" title="Ingrese Datos" value="<?php echo $row['ciudad'];?>" />
		</td>
		<td></td><td></td>
		
	</tr>
	<tr>
		<td style="padding: 8px 5px;">Direccion:</td>
		<td colspan="5" style="padding: 8px 0px;">
			<textarea onfocus="blanco(this)" disabled="" title="Ingrese una direccion" class="span12" name="direccion" id="direccion" ><?php echo $row['direccion'];?></textarea>
		</td>
	</tr>
	<tr>
		<td style="padding: 8px 5px;">Entrevistado:</td>
		<td style="padding: 8px 0px;" colspan="3">
			<input onfocus="blanco(this)" disabled=""  type="text" id="entrevistado" class="span12" name="entrevistado" title="Rellene el campo" value="<?php echo $row['nombre']." ".$row['apellido'];?>" />						
		</td>		
		<td style="padding: 8px 5px;">Cédula</td>
		<td style="padding: 8px 0px;">
			<input class="input-medium" disabled=""	 type="text" id="cedula3" name="cedula3" onfocus='blanco(this)' value="<?php echo $row['cedula'];?>" />
		</td>
	</tr>
	<tr>
		<?php
			if($row['propietario']==1){
		?>
		<td style="padding: 8px 5px;">Propietario:</td>
		<td style="padding: 8px 0px;" colspan="3">
			<input onfocus="blanco(this)"  type="text" id="propietario" class="span12" name="propietario" title="Rellene el campo" value="<?php echo $row['nombre']." ".$row['apellido']; ?>" disabled=""/>						
		</td>		
		<td style="padding: 8px 5px;">Cédula</td>
		<td style="padding: 8px 0px;">
			<input type="text" id="cedula" class="span10" value="<?php echo $row['cedula'];?>" disabled="" />				
		</td>
			<?php
				}else{
			
					$nom = ""; $ape = ""; $ced = "";
					if($row['propietarioced']!='NULL' && $row['propietarioced']!=null && $row['propietarioced']!='')
					{
						$pro = "SELECT * FROM entrevistado WHERE Id_Entrevistado=".$row['propietarioced'];
						$eje = mysql_query($pro,$conexion);
						if($r = mysql_fetch_array($eje)){
							$nom = $r['Nombre']; $ape = $r['Apellido']; $ced = $r['Cedula'];
						}
					}
			?>
			<td style="padding: 8px 5px;">Propietario:</td>
			<td style="padding: 8px 0px;" colspan="3">
				<input onfocus="blanco(this)"  type="text" id="propietario" class="span12" name="propietario" title="Rellene el campo" value="<?php echo $nom." ".$ape; ?>" disabled=""/>						
			</td>		
			<td style="padding: 8px 5px;">Cédula</td>
			<td style="padding: 8px 0px;">
				<input type="text" id="cedula" class="span10" value="<?php echo $ced;?>" disabled="" />				
			</td>
			<?php
				}
			?>										
		
	</tr>
	<tr>
		<td style="padding: 8px 5px;">Actividad:</td>
		<td colspan="5" style="padding: 8px 0px;">
			<input type="text" value="<?php echo $row['tipo'];?>" disabled="" class="span12">
		</td>
	</tr>
	<tr>
		<td style="padding: 8px 5px;"><strong>Informe de Actividad</strong></td>
		<td style="padding: 8px 0px;" colspan="6"><textarea onfocus="blanco(this)"  class="span12" name="informe" id="informe" rows="4" ></textarea></td>		
	</tr>
	<tr>
		<td style="padding: 8px 5px;"><strong>Recomendaciones</strong></td>
		<td style="padding: 8px 0px;" colspan="6"><textarea onfocus="blanco(this)"  class="span12" name="recomendaciones" id="recomendaciones" rows="4"></textarea></td>		
	</tr>
	<tr>
		<td style="padding: 8px 5px;"><strong>Observaciones</strong></td>
		<td style="padding: 8px 0px;" colspan="5"><textarea onfocus="blanco(this)"  class="span12" name="observacion" id="observacion"></textarea></td>		
	</tr>
	<tr><td colspan="2"><div id="error"></div></td></tr>
</table>
<div align="center">
	<div class="btn-group">											
		<a class="btn btn-warning" href="javascript: registraInspeccion(document.formulario)">Registrar</a>																					
		<a href="#" id="cancelarb" class="btn btn-inverse" >Cancelar</a>
	</div>		
</div>	
<?php	
	}else{
		echo "Sin información";
	}
?>
<script>
    $("#cancelarb").click(function(){
    	$("#contenido-page").load("registrar_inspeccion.php");
    });
    $("#cedula2").mask("a-9999?9999999999");
    $(".chzn-select").chosen({ 'width': '95%'});
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
</script>