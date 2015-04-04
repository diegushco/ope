		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-gears"></i>
							SAOP
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
						<li class="light-blue">
							<a title="Cerrar Sesion" href="javascript: salir()" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Bienvenido,</small><i class="icon-off"></i>
									<?php echo $_SESSION["usuario"]; ?>
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
