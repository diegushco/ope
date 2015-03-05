
<!DOCTYPE html>
<html>
	<head>
		<title>INAPROCET</title>
		
		<meta charset="utf-8" />
		<meta name="description" content="Novedades de inaprocet 2014" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/fullcalendar.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />	
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.css" />
	</head>
<body>

		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-bullhorn"></i>
							OPERACIONES - PLANIFICACIÓN Y GESTIÓN DE RIESGOS
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Bienvenido,</small>
									Usuario
								</span>

								<!--<i class="icon-caret-down"></i>-->
							</a>

							<!--<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Opciones
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Salir
									</a>
								</li>
							</ul>-->
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#">
		<span class="menu-text"></span>
	</a>
	
	
<!--MENU LATERAL-->
			<div class="sidebar" id="sidebar">
					<ul class="nav nav-list">
						<li id="inicio">
							<a href="javascript:menu('inicio');">
								<i class="icon-home"></i>
								<span class="menu-text"><strong> INICIO </strong> </span>
							</a>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-bullhorn"></i>
								<span class="menu-text"><strong> INSPECCIONES</strong>  </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li id="registrar_cita">
									<a href="javascript:menu('registrar_cita');">
										<i class="icon-double-angle-right"></i>
										Registro de Cita
									</a>
								</li>
								
								<li id="consultar_cita">
								<a href="javascript:menu('consultar_cita');">
									<i class="icon-double-angle-right"></i>
									Consultar Cita
									</a>
								</li>
								
								<li id="registrar_inspeccion">
									<a href="javascript:menu('registrar_inspeccion');">
										<i class="icon-double-angle-right"></i>
										Registro de Inspección
									</a>
								</li>
								
								<li id="modificar_inspeccion">
									<a href="javascript:menu('modificar_inspeccion');">
										<i class="icon-double-angle-right"></i>
										Modificar Inspección
									</a>
								</li>
																
								<li id="consultar_inspeccion">
									<a href="javascript:menu('consultar_inspeccion');">
										<i class="icon-double-angle-right"></i>
										Consultar Inspección
									</a>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										Mantenimiento
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li id="tipo_inspeccion">
											<a href="javascript:menu('mant_tipo_inspeccion');">
												Tipo de Inspección
											</a>
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
									<a href="javascript:menu('');">
									<i class="icon-double-angle-right"></i>
									Consultar Guardia
									</a>
								</li>
								<li id="registrar-ra">
									<a href="javascript:menu('registrar_ra');">
										<i class="icon-double-angle-right"></i>
										Registro de un RA
									</a>
								</li>
								<li id="modificar_ra">
									<a href="javascript:menu('');">
										<i class="icon-double-angle-right"></i>
										Modificar RA
									</a>
								</li>
								<li id="consultar-ra">
									<a href="javascript:menu('');">
										<i class="icon-double-angle-right"></i>
										Consultar RA
									</a>
								</li>
						
								<li>
									<a href="#" class="dropdown-toggle">
									<i class="icon-double-angle-right"></i>
									Mantenimiento
									<b class="arrow icon-angle-down"></b>
									</a>
									
									<ul class="submenu">
										<li id="tipo_actividad">
											<a href="javascript:menu('');">
											Tipo de Actividad
											</a>
										</li>
										
										<li id="accion_tomada">
											<a href="javascript:menu('');">
											Acción Tomada
											</a>
										</li>
										
										<li id="otros_organismos">
											<a href="javascript:menu('');">
											Otros Organismos
											</a>
										</li>
										
										<li id="tipo_danho">
											<a href="javascript:menu('');">
											Tipo de Daños
											</a>
										</li>
										
										<li id="condicion_actividad">
											<a href="javascript:menu('');">
											Condición de Actividad 
											</a>
										</li>
										
										<li id="puesto_comision">
											<a href="javascript:menu('');">
											Puestos en Comisión
											</a>
										</li>
										
									</ul>
								</li>
						
						
<!--								<li id="lista-nov-guardia">
									<a href="javascript:menu('lista-nov-guardia');">
										<i class="icon-double-angle-right"></i>
										Listado novedades en guardia
									</a>
								</li>
-->
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
									<a href="javascript:menu('');">
										Registro de Censo
									</a>
								</li>
								
								<li id="modificar_censo">
									<a href="javascript:menu('');">
										Modificar Censo
									</a>
								</li>
								
								<li id="consultar_censo">
									<a href="javascript:menu('');">
									Consultar Censo
									</a>
								</li>
								
								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										Mantenimiento 
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li id="motivo_censo">
											<a href="javascript:menu('');">
												Motivos del Censo
											</a>
										</li>
										
										<li id="eventos">
											<a href="javascript:menu('');">	
											Eventos
											</a>
										</li>	
										
										<li id="condicion_familiar">
											<a href="javascript:menu('');">
												Condición Familiar                         
											</a>
										</li>
										
										<li id="necesidades">
											<a href="javascript:menu('');">	
											Necesidad del Afectado
											</a>
										</li>	
										
										<li id="enser">
											<a href="javascript:menu('');">
												Enseres
											</a>
										</li>		

										<li id="tipo_vivienda">
											<a href="javascript:menu('');">
												Tipos de Vivienda
											</a>
										</li>	

										<li id="tenencia_vivienda">
											<a href="javascript:menu('');">		
												Tenencia de Vivienda
											</a>
										</li>												
										
										<li id="condicion_vivienda">
											<a href="javascript:menu('');">	
												Condición de Vivienda
											</a>
										</li>	
										
										<li id="otra_propiedad">
											<a href="javascript:menu('');">		
												Otras Propiedades
											</a>
										</li>	
										
										<li id="material_elaboracion">
											<a href="javascript:menu('');">											
											Material de Elaboración 												
											</a>
										</li>	
										
										<li id="partes_vivienda">
											<a href="javascript:menu('');">		
												Partes de Vivienda
											</a>
										</li>	
										
										<li id="danho_parte">
											<a href="javascript:menu('');">	
												Daños en Partes
											</a>
										</li>	

									</ul>
								</li>
								
							</ul>
						</li>

						<li>
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
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-bar-chart"></i>
								<span class="menu-text"><strong>REPORTES</strong></span>
								
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li id="graficador">
									<a href="javascript:menu('graficador');">
										Generador Gráfico
									</a>
								</li>
<!--								<li id="tabla-numerica">
									<a href="javascript:menu('tabla-numerica');">
										Generador Numérico
									</a>
								</li>
-->
								<li id="zonas-rojas">
									<a href="javascript:menu('zonas-rojas');">
										Zonas Rojas
									</a>
								</li>
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
									<a href="javascript:menu('usuarios');">
									<i class="icon-double-angle-right"></i>
									Usuarios
									</a>
								</li>
								
								<li id="privilegio">
									<a href="javascript:menu('privilegios');">
									<i class="icon-double-angle-right"></i>
									Privilegios
									</a>
								</li>	
							
								<li id="estado">
									<a href="javascript:menu('estado');">
										Estados
									</a>
								</li>
																
								<li id="municipio">
									<a href="javascript:menu('municipio');">
										Municipios
									</a>
								</li>
							
								<li id="ciudad">
									<a href="javascript:menu('ciudad');">
										Ciudades
									</a>
								</li>
								
								<li id="parroquia">
									<a href="javascript:menu('parroquias');">
										<i class="icon-double-angle-right"></i>
										Parroquias
									</a>
								</li>
								
								<li id="aldea">
									<a href="javascript:menu('aldeas');">
									<i class="icon-double-angle-right"></i>
									Aldeas
									</a>
								</li>
								
								<li id="refugios">
									<a href="javascript:menu('');">		
									Refugios
									</a>
								</li>	
		
								<li id="categoria">
									<a href="javascript:menu('categorias');">
									<i class="icon-double-angle-right"></i>
									Categorias de Fotografia
									</a>
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
									<a href="javascript:menu('bitacora');">
										Revisión de Bitácora
									</a>
								</li>
							</ul>
						</li>						
						
					</ul>
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left"></i>
					</div>
			</div>	
	<div class="main-content">
		
<!--Breadcrumb-->
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">INAPROCET</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active" id="breadtext">Inicio</li>
					</ul><!--.breadcrumb-->
				</div>		
		<div class="page-content" id="contenido-page">
	
		</div>
		
	</div>
	
</div>

	<!-- 
<footer ><div class="container text-center">
      <div class="container text-center">
      <img width="50" src="assets/img/facebook.png" alt="">
      <img width="50" src="assets/img/twitter.png" alt="">
       <br>
        &copy; Copyright 2014        </div>
      </div>
      </footer>
-->	  
<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
	if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/flot/jquery.flot.min.js"></script>
<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="assets/js/flot/jquery.flot.resize.min.js"></script>
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/bootbox.min.js"></script>
<script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="assets/js/date-time/moment.min.js"></script>
<script src="assets/js/date-time/daterangepicker.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>
<script type="text/javascript">
	function menu(pagina)
	{
		$.post( pagina, function( data ) {
		  var texto=$( "li#"+pagina ).find("a").text();
		  $("#breadtext").html( texto );
		  
		  $("#contenido-page").html(data);

		  $( "ul.nav" ).find( "li" ).removeClass( "active" );
		  
		  $( "#"+pagina ).attr('class', 'active');
		});
	}
   
	$(function() {
	
	
		var agent = navigator.userAgent.toLowerCase();
			if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
			$('#tasks').on('touchstart', function(e){
				var li = $(e.target).closest('#tasks li');
				if(li.length == 0)return;
				var label = li.find('label.inline').get(0);
				if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
			});
	})
</script>

	</body>
</html>

