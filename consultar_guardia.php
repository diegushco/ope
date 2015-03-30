<!--

SELECT  a.gfu_inicio AS fechaI,a.gfu_fin AS fechaF,a.fun_cedula AS cedula, b.pue_letras AS puesto
FROM ln_guafun a, ln_puesto b, ln_division c
WHERE a.gua_id = (SELECT MAX(gua_id) FROM ln_guardias WHERE gua_existe=1) 
AND a.pue_id=b.pue_id AND b.pue_letras IN ('PRE','CRE') 
AND a.div_id=c.div_id



 -->







<div class="page-header position-relative">
	<h1>
			Guardia Operaciones
	</h1>
</div>
										 										 


<div class="row-fluid">
	<div class="span12">

		
		<div class="widget-body">


				<form action="#" name="formulario" id="formu" method="post" class="form-inline"> 
				   <div class="control-group ">
				   	
				   	<div class="span1"></div>

				   	<h5 class="header smaller lighter blue span12">Fecha Ini:

				   		<small>
				   		
				   		<?php 


				   			include("conexion_guardia.php");	
									$consulta= "SELECT  a.gfu_inicio AS fechaI,a.gfu_fin AS fechaF,a.fun_cedula AS cedula, b.pue_letras AS puesto
									FROM ln_guafun a, ln_puesto b, ln_division c
									WHERE a.gua_id = (SELECT MAX(gua_id) FROM ln_guardias WHERE gua_existe=1) 
									AND a.pue_id=b.pue_id AND b.pue_letras IN ('PRE','CRE') 
									AND a.div_id=c.div_id";


									$sql=mysql_query($consulta,$conexion);  
									if($row=mysql_fetch_array($sql)){
										$sql=mysql_query($consulta,$conexion);  
										
											
											echo $row['fechaI'];
											?> 

											<label class="lighter blue " >Fecha Fin: </label>


											<?php 
											echo $row['fechaF'] ;
								
									}
									mysql_close();

				   		 ?>
						
				   	</small>	

				   	</h5>	
				   	
				   	<br>
				   	<div class="span1"></div>
				   	<label style="padding: 8px 10px 8px 50px;" >  RESCATISTAS: </label>
				   			
					<textarea  style="0px 600px 0px 8px; width:500px;"  onfocus='blanco(this)' name="rescatista" id="recastista" lang="noObligatorio">
						
								<?php
									include("conexion_guardia.php");	
									$consulta= "SELECT  a.gfu_inicio AS fechaI,a.gfu_fin AS fechaF,a.fun_cedula AS cedula, b.pue_letras AS puesto
									FROM ln_guafun a, ln_puesto b, ln_division c
									WHERE a.gua_id = (SELECT MAX(gua_id) FROM ln_guardias WHERE gua_existe=1) 
									AND a.pue_id=b.pue_id AND b.pue_letras IN ('PRE','CRE') 
									AND a.div_id=c.div_id";


									$sql=mysql_query($consulta,$conexion);  
									if($row=mysql_fetch_array($sql)){
										$sql=mysql_query($consulta,$conexion);  
										while($row=mysql_fetch_array($sql)){

											if($row['puesto']=='PRE')	
											echo 'CI-'.$row['cedula'];
										}
									}
									mysql_close();
									?>

					</textarea>
						<br>
						<br>
						<br>
					<div class="span1"></div>
				   	<label style="padding: 8px 10px 8px 40px;" >  CONDUCTORES: </label>
			
					<textarea style="0px 600px 0px 8px; width:500px;" onfocus='blanco(this)' name="rescatista" id="recastista" lang="noObligatorio">
								
								<?php
									include("conexion_guardia.php");	
									$consulta= "SELECT  a.gfu_inicio AS fechaI,a.gfu_fin AS fechaF,a.fun_cedula AS cedula, b.pue_letras AS puesto
									FROM ln_guafun a, ln_puesto b, ln_division c
									WHERE a.gua_id = (SELECT MAX(gua_id) FROM ln_guardias WHERE gua_existe=1) 
									AND a.pue_id=b.pue_id AND b.pue_letras IN ('PRE','CRE') 
									AND a.div_id=c.div_id";


									$sql=mysql_query($consulta,$conexion);  
									if($row=mysql_fetch_array($sql)){
										$sql=mysql_query($consulta,$conexion);  
										while($row=mysql_fetch_array($sql)){

											if($row['puesto']=='CRE')	
											echo 'CI-'.$row['cedula'];
										}
									}
									mysql_close();
									?>
					</textarea>
							
		   </div>
				</form>   
         </div> 

		</form>
	</div>	




 <script type="text/javascript">
  $('.date-picker').datepicker().next().on(ace.click_event, function(){
		 $(this).prev().focus();
	 });
 var cont2=1;

	 
$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
	$(this).next().focus();
});




 $(".chzn-select").chosen({ 'width': '150px'});

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