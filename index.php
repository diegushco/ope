<?php session_start();

		
		unset($_SESSION["usuario"]);
		unset($_SESSION["UsuIdem"]);	
		session_unset();

	require_once("header.php");
?>

<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1>
										<i class="icon-bullhorn white	"></i>
										<span class="white">INAPROCET <?php  echo date("Y"); ?></span>
									</h1>
								</div>
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													Utilice su cuenta de dominio
												</h4>

												<div class="space-6"></div>

												<form name="formulario" id="formu" method="post" />
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input name="user" id="user" type="text" class="span12" placeholder="Usuario de dominio" />
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input name="pass" id="pass" type="password" class="span12" placeholder="Clave de dominio" />
																<i class="icon-lock"></i>
															</span>
														</label>

														<div class="space"></div>

														<div class="clearfix">

															<a href="javascript: entra(document.formulario)" class="width-35 pull-right btn btn-small btn-primary">
																Entrar	
															</a>
														</div>

														<div class="space-4"></div>
													</fieldset>
												</form>

											</div><!--/widget-main-->

										</div><!--/widget-body-->
									</div><!--/login-box-->

								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->

<script>
	document.getElementById("user").focus();

</script>

<?php
	require_once("footer.php");
?>