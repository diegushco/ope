<?php
include("conexion.php");
			$consulta="SELECT * from cs_refugio where Id_Refugio='".$_REQUEST["valor"]."'";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($row=mysql_fetch_array($sql)){
			


?>

<form action="" class="form-horizontal" name="formulario1" id="formu1" method="post"> 

							<table class="table  table-condensed " style=" font-weight: bold;" >
										<tr>
										<input  style="width:180px;" value="<?php echo $_REQUEST["valor"]; ?>" type="hidden" id="id_re" name="id_re"  />
											<td style="padding: 8px 5px;">Nombre:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" value="<?php echo $row["Nombre"]; ?>" type="text" id="mnombre" name="mnombre" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
											<td style="padding: 8px 5px;">Direccion:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" value="<?php echo $row["Direccion"]; ?>" type="text" id="mdireccion" name="direccion" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
											<td style="padding: 8px 5px;">Telefono:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" value="<?php echo $row["Telefono"]; ?>" type="text" id="mtelefono" name="mtelefono" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
										</tr>
										<tr>
											<td style="padding: 8px 5px;">Capacidad:</td>
											<td style="padding: 8px 0px;">
												<input  style="width:180px;" value="<?php echo $row["Capacidad"]; ?>" type="text" id="mcapacidad" name="mcapacidad" onfocus='blanco(this)' title="Ingrese los Datos" />
											</td>
											<td style="padding: 8px 5px;">Descripcion:</td>
											<td style="padding: 8px 0px;">
												<textarea id="mdescripcion"  name="mdescripcion" onfocus='blanco(this)' title="Ingrese los Datos" ><?php echo $row["Descripcion"]; ?></textarea>
											</td>
											<td style="padding: 8px 5px;">Aldea:</td>
											<td style="padding: 8px 0px;">
												<?php echo $row["Nombre"]; ?>
											</td>
										</tr>
										<tr>
											<td style="padding: 8px 5px;">Habilitado:</td>
											<td style="padding: 8px 0px;">
											<label>
										<?php

													if($row["Existe"]=="1"){
														echo '<input type="checkbox" id="activo" name="activo" checked="checked" />';
													}else{
														echo '<input type="checkbox" id="activo" name="activo" />';	
													}
												?>

										
										<span class="lbl"></span>
									</label>
																					

									
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
include("guardaBitacora.php");
					bitacora("Busca detalle de refugio ".$_REQUEST["valor"],"Buscar",$conexion);
mysql_close();
			?>