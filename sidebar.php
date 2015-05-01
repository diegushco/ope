
<?php
	function buscaMenu($arg1,$arg2,$arg3)
	{
		$valor="";
		//echo count($arg1)."............";
	   	for($i=0;$i<count($arg1);$i++){
	   		if($arg1[$i]==$arg2){
	   			$valor=$arg3[$i];
	   		}
	   		
	   	}
	    return $valor;
	}
	$aco=0;
	include("conexion.php");
	$consu="select pr.Existe as privi, me.Nombre as Nombre
		from menu me, privilegios pr
		where pr.Id_Menu=me.Id_Menu and
		pr.Id_Usuario='".$_SESSION["UsuIdem"]."'";
	$sql=mysql_query($consu,$conexion);  
	while($row=mysql_fetch_array($sql)){
		$rowV[$aco]=$row["Nombre"];
		$rowP[$aco]=$row["privi"];
		$aco++;
	}


?>


<!--MENU LATERAL-->
<div class="sidebar" id="sidebar">
		<ul class="nav nav-list">
			<li id="inicio">
				<a href="javascript:menu('inicio');">
					<i class="icon-home"></i>
					<span class="menu-text"><strong>INICIO </strong> </span>
				</a>
			</li>
			
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-bullhorn"></i>
					<span class="menu-text"><strong>INSPECCIONES</strong>  </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li id="registrar_cita">
						<?php
						if(buscaMenu($rowV,"registrar_cita",$rowP)=="1"){ ?>
							<a href="javascript:menu('registrar_cita');">
								<i class="icon-double-angle-right"></i>
								Registro de CitaConsultar Cita
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Registro de Cita
							</a>
						<?php }							
					?>
						
					</li>
					
					<li id="consultar_cita">
						<?php
						if(buscaMenu($rowV,"consultar_cita",$rowP)=="1"){ ?>
							<a href="javascript:menu('consultar_cita');">
								<i class="icon-double-angle-right"></i>
								Consultar Cita
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Consultar Cita
							</a>
						<?php }							
					?>
						
					</li>
					
					<li id="registrar_inspeccion">
						<?php
						if(buscaMenu($rowV,"registrar_inspeccion",$rowP)=="1"){ ?>
							<a href="javascript:menu('registrar_inspeccion');">
								<i class="icon-double-angle-right"></i>
								Registro de Inspección
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Registro de Inspección
							</a>
						<?php }							
					?>
						
					</li>
					
					<li id="consultar_inspeccion">
						<?php
						if(buscaMenu($rowV,"consultar_inspeccion",$rowP)=="1"){ ?>
							<a href="javascript:menu('consultar_inspeccion');">
								<i class="icon-double-angle-right"></i>
								Consultar Inspección
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Consultar Inspección
							</a>
						<?php }							
					?>
						
					</li>
													
					

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-double-angle-right"></i>
							Mantenimiento
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li id="tipo_inspeccion">
								<?php
						if(buscaMenu($rowV,"man_tipo_inspeccion",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_tipo_inspeccion');">
								<i class="icon-double-angle-right"></i>
								Tipo de Inspección
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Tipo de Inspección
							</a>
						<?php }							
					?>
								
							</li>
							
						</ul>
					</li>
					
				</ul>
			</li>
			
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-book"></i>
					<span class="menu-text"><strong> RA </strong></span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li id="consultar-guardia">
						<?php
						if(buscaMenu($rowV,"consultar_guardia",$rowP)=="1"){ ?>
							<a href="javascript:menu('consultar_guardia');">
								<i class="icon-double-angle-right"></i>
								Consultar Guardia
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Consultar Guardia
							</a>
						<?php }							
					?>
						
					</li>
					<li id="registrar-ra">
						<?php
						if(buscaMenu($rowV,"registrar_ra",$rowP)=="1"){ ?>
							<a href="javascript:menu('registrar_ra');">
								<i class="icon-double-angle-right"></i>
								Registro de un RA
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Registro de un RA
							</a>
						<?php }							
					?>
						
					</li>
					<li id="registrar-ra">
						<?php
						if(buscaMenu($rowV,"imagenes_ra",$rowP)=="1"){ ?>
							<a href="javascript:menu('imagenes_ra');">
								<i class="icon-double-angle-right"></i>
								Imagenes RA
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Imagenes RA
							</a>
						<?php }							
					?>
						
					</li>
	
					<li id="consultar-ra">
						<?php
						if(buscaMenu($rowV,"listado_RA",$rowP)=="1"){ ?>
							<a href="javascript:menu('listado_RA');">
								<i class="icon-double-angle-right"></i>
								Listado de RA
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Listado de RA
							</a>
						<?php }							
					?>
						
					</li>
					<li id="consultar-ra">
						<?php
						if(buscaMenu($rowV,"reporte_ra",$rowP)=="1"){ ?>
							<a href="javascript:menu('reporte_ra');">
								<i class="icon-double-angle-right"></i>
								Generar Reporte
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Generar Reporte
							</a>
						<?php }							
					?>
						
					</li>		
					<li>
						<a href="#" class="dropdown-toggle">
						<i class="icon-double-angle-right"></i>
						Mantenimiento
						<b class="arrow icon-angle-down"></b>
						</a>
						
						<ul class="submenu">
							<li id="tipo_actividad">
								<?php
						if(buscaMenu($rowV,"man_tipo_actividad",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_tipo_actividad');">
								
								Tipo de Actividad
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Tipo de Actividad
							</a>
						<?php }							
					?>
								
							</li>
							
							<li id="accion_tomada">
								<?php
						if(buscaMenu($rowV,"man_accion_tomada",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_accion_tomada');">
								
								Acción Tomada
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Acción Tomada
							</a>
						<?php }							
					?>
								
							</li>
							
							<li id="otros_organismos">
								<?php
						if(buscaMenu($rowV,"man_otros_organismo",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_otros_organismo');">
								
								Otros Organismos
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Otros Organismos
							</a>
						<?php }							
					?>
								
							</li>
							
							<li id="tipo_danho">
								<?php
						if(buscaMenu($rowV,"man_tipo_danhos",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_tipo_danhos');">
								
								Tipo de Daños
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Tipo de Daños
							</a>
						<?php }							
					?>
								
							</li>
							
							<li id="condicion_actividad">
								<?php
						if(buscaMenu($rowV,"man_condicion",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_condicion');">
								
								Condición de Actividad 
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Condición de Actividad 
							</a>
						<?php }							
					?>
								
							</li>
							
							<li id="puesto_comision">
								<?php
						if(buscaMenu($rowV,"man_puesto_comision",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_puesto_comision');">
								
								Puestos en Comisión
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Puestos en Comisión
							</a>
						<?php }							
					?>
								
							</li>
							
						</ul>
					</li>

				</ul>
			</li>
			
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-check"></i>
					<span class="menu-text"><strong>CENSOS</strong></span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li id="registrar_censo">
						<?php
						if(buscaMenu($rowV,"censo",$rowP)=="1"){ ?>
							<a href="javascript:menu('censo');">
								
								Registro de Censo
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Registro de Censo
							</a>
						<?php }							
					?>
						
					</li>
					
					<li id="registrar-ra">
						<?php
						if(buscaMenu($rowV,"imagenes_censo",$rowP)=="1"){ ?>
							<a href="javascript:menu('imagenes_censo');">
								
								Imagenes Censo
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Imagenes Censo
							</a>
						<?php }							
					?>
						
					</li>
					
					<li id="consultar_censo">
						<?php
						if(buscaMenu($rowV,"consultar_censo",$rowP)=="1"){ ?>
							<a href="javascript:menu('consultar_censo');">
								
								Consultar Censo
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Consultar Censo
							</a>
						<?php }							
					?>
						
					</li>
						<li id="consultar-ra">
							<?php
						if(buscaMenu($rowV,"reporte_censo",$rowP)=="1"){ ?>
							<a href="javascript:menu('reporte_censo');">
								<i class="icon-double-angle-right"></i>
								Generar Reporte
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Generar Reporte
							</a>
						<?php }							
					?>
							
					</li>
					
					<li>

						<a href="#" class="dropdown-toggle">
							<i class="icon-double-angle-right"></i>
							Mantenimiento 
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li id="motivo_censo">
								<?php
						if(buscaMenu($rowV,"man_motivos_censo",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_motivos_censo');">
								
								Motivos del Censo
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Motivos del Censo
							</a>
						<?php }							
					?>
								
							</li>

							<li id="tipo_eventos">
								<?php
						if(buscaMenu($rowV,"man_tipo_evento",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_tipo_evento');">
								
								Tipo de Eventos
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Tipo de Eventos
							</a>
						<?php }							
					?>
								
							</li>	
							
							<li id="eventos">
								<?php
						if(buscaMenu($rowV,"man_evento_censo",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_evento_censo');">
								
								Eventos
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Eventos
							</a>
						<?php }							
					?>
								
							</li>	
							
							<li id="condicion_familiar">

								<?php
						if(buscaMenu($rowV,"man_CondicionFamiliar",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_CondicionFamiliar');">
								
								Condición Familiar
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Condición Familiar
							</a>
						<?php }							
					?>
								
							</li>
							
							<li id="necesidades">
								<?php
						if(buscaMenu($rowV,"man_necesidades",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_necesidades');">
								
								Necesidad del Afectado
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Necesidad del Afectado
							</a>
						<?php }							
					?>
								
							</li>	
							
							<li id="enser">
								<?php
						if(buscaMenu($rowV,"man_enseres",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_enseres');">
								
								Enseres
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Enseres
							</a>
						<?php }							
					?>
								
							</li>		

							<li id="tipo_vivienda">
								<?php
						if(buscaMenu($rowV,"man_TipoVivienda",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_TipoVivienda');">
								
								Tipos de Vivienda
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Tipos de Vivienda
							</a>
						<?php }							
					?>
								
							</li>	

							<li id="tenencia_vivienda">
								<?php
						if(buscaMenu($rowV,"man_TenenciaVivienda",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_TenenciaVivienda');">
								
								Tenencia de Vivienda
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Tenencia de Vivienda
							</a>
						<?php }							
					?>
								
							</li>												
							
							<li id="condicion_vivienda">

								<?php
						if(buscaMenu($rowV,"man_CondicionVivienda",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_CondicionVivienda');">
								
								Condición de Vivienda
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Condición de Vivienda
							</a>
						<?php }							
					?>

							</li>	
							
							<li id="otra_propiedad">
								<?php
						if(buscaMenu($rowV,"man_OtraPropiedad",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_OtraPropiedad');">
								
								Otras Propiedades
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Otras Propiedades
							</a>
						<?php }							
					?>
								
							</li>	
							
							<li id="material_elaboracion">

								<?php
						if(buscaMenu($rowV,"man_MaterialElaboracion",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_MaterialElaboracion');">
								
								Material de Elaboración
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Material de Elaboración
							</a>
						<?php }							
					?>
								
							</li>	
							
							<li id="partes_vivienda">

								<?php
						if(buscaMenu($rowV,"man_PartesVivienda",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_PartesVivienda');">
								
								Partes de Vivienda
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Partes de Vivienda
							</a>
						<?php }							
					?>


								
							</li>	
							
							<li id="danho_parte">



								<?php
						if(buscaMenu($rowV,"man_DanhosPartes",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_DanhosPartes');">
								
								Nivel de Daños
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Nivel de Daños
							</a>
						<?php }							
					?>
								
							</li>

						</ul>
					</li>
					
				</ul>
			</li>

			<!-- <li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-tasks"></i>
					<span class="menu-text"><strong>LISTADOS</strong></span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li  id="lista-personal-guardia">
						<a href="javascript:menu('lista-personal-guardia');">
							Personal de guardia
						</a>
					</li>

					<li id="lista-uni-psm-guardia">
						<a href="javascript:menu('lista-uni-psm-guardia');">
							Unidades / PSM de guardia
						</a>
					</li>
				</ul>
			</li>
			-->
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-bar-chart"></i>
					<span class="menu-text"><strong>REPORTES</strong></span>
					
					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li id="graficador">

					<?php
						if(buscaMenu($rowV,"graficador",$rowP)=="1"){ ?>
							<a href="javascript:menu('graficador');">
								
								Generador Grafico
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Generador Grafico
							</a>
						<?php }							
					?>


					</li>
<!--								<li id="tabla-numerica">
						<a href="javascript:menu('tabla-numerica');">
							Generador Numérico
						</a>
					</li>
-->					
				</ul>
			</li>						
			
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-cog"></i>
					<span class="menu-text"><strong>ADMINISTRACIÓN</strong></span>
					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
				
					<li id="usuario">

						<?php
						if(buscaMenu($rowV,"usuarios",$rowP)=="1"){ ?>
							<a href="javascript:menu('usuarios');">
								<i class="icon-double-angle-right"></i>
								Usuarios
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Usuarios
							</a>
						<?php }							
					?>


						
					</li>
					
					<li id="privilegio">

						<?php
						if(buscaMenu($rowV,"privilegios",$rowP)=="1"){ ?>
							<a href="javascript:menu('privilegios');">
								<i class="icon-double-angle-right"></i>
								Privilegios
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Privilegios
							</a>
						<?php }							
					?>

	
					</li>	
				
					<li id="estado">

						<?php
						if(buscaMenu($rowV,"man_estado",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_estado');">
								
								Estados
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Estados
							</a>
						<?php }							
					?>


					</li>
													
					<li id="municipio">
						<?php
						if(buscaMenu($rowV,"man_municipio",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_municipio');">
								
								Municipios
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Municipios
							</a>
						<?php }							
					?>

						
					</li>

					<li id="parroquia">

						<?php
						if(buscaMenu($rowV,"man_parroquia",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_parroquia');">
								
								Parroquias
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Parroquias
							</a>
						<?php }							
					?>

					</li>

					<li id="ciudad">

						<?php
						if(buscaMenu($rowV,"man_ciudad",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_ciudad');">
								
								Ciudades
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								
								Ciudades
							</a>
						<?php }							
					?>


						
					</li>
								
					
					<li id="aldea">

					<?php
						if(buscaMenu($rowV,"man_aldea",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_aldea');">
								<i class="icon-double-angle-right"></i>
								Aldeas
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								<i class="icon-double-angle-right"></i>
								Aldeas
							</a>
						<?php }							
					?>


						
					</li>
					
					<li id="refugios">
						<?php
						if(buscaMenu($rowV,"man_refugios",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_refugios');">
								
								Refugios
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">

								Refugios
							</a>
						<?php }							
					?>
						
					</li>	

					<li id="categoria">
						<?php
						if(buscaMenu($rowV,"man_categorias",$rowP)=="1"){ ?>
							<a href="javascript:menu('man_categorias');">
								<i class="icon-double-angle-right"></i>
								Categorias de Fotografia
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">

								Categorias de Fotografia
							</a>
						<?php }							
					?>

					</li>									
					
					
				</ul>
			</li>
		
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-legal"></i>
					<span class="menu-text"><strong>AUDITORÍA</strong></span>
					
					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li id="bitacora">
						<?php
						if(buscaMenu($rowV,"bitacora",$rowP)=="1"){ ?>
							<a href="javascript:menu('bitacora');">
								Revisión de Bitácora
							</a>
						<?php

						}else{ ?>
							<a href="javascript:menu('not');">
								Revisión de Bitácora
							</a>
						<?php }							
					?>
						
					</li>
				</ul>
			</li>						
			
		</ul>
		<div class="sidebar-collapse" id="sidebar-collapse">
			<i class="icon-double-angle-left"></i>
		</div>
</div>
