<?php 
		$fila=0;
			include("conexion.php");

			$vector;
			$vector2;
			$vector3;
			$aco=0;
			$consulta="SELECT * FROM menu";	
				$sql=mysql_query($consulta,$conexion);
				while($row=mysql_fetch_array($sql)){					
					$vector[$aco]=$row["Nombre"];
					$vector3[$aco]=$row["Id_Menu"];
					$aco=$aco+1;
				}


			$consulta="SELECT men.Id_Menu as id_menu, usu.Id_Usuario as id_usuario,pri.Existe as existe, men.Nombre as menu FROM usuario usu,menu men,privilegios pri where usu.Id_Usuario=pri.Id_Usuario and men.Id_Menu=pri.Id_menu and usu.Usuario='".$_REQUEST["usuario"]."'";	
			$sql=mysql_query($consulta,$conexion);  
			//echo $consulta;
			


			if($row=mysql_fetch_array($sql)){
				$sql=mysql_query($consulta,$conexion);  
				while($row=mysql_fetch_array($sql)){
					

						?>
					<tr>
										<td class="center">
									<label>
										<?php 
											if($row["existe"]=="1"){
												echo '<input onchange="cambia(this)" type="checkbox" id="activo'.$fila.'" lang="'.$row["id_menu"].'" name="'.$_REQUEST["usuario"].'" checked="checked" />';
											}else{
												echo '<input onchange="cambia(this)" type="checkbox" id="activo'.$fila.'" lang="'.$row["id_menu"].'" name="'.$_REQUEST["usuario"].'" />';
											}
										?>

										
										<span class="lbl"></span>
									</label>
										</td>
										
										<td>
											<input disabled="disabled" style="width:180px;" value="<?php echo $row["menu"]; ?>" type="text" id="estado<?php echo $fila; ?>" name="estado<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />											
											<?php
												$vector2[$fila]=$row["menu"];
												for($i=0;$i<$aco;$i++){
													if($vector[$i]==$row["menu"]){
														$vector[$i]="-1";
													}
												}
											?>
										</td>
										
									</tr>



<?php
					$fila++;
				} //CIERA WHILEEEEEEEEEEEEE
				for($i=0;$i<$aco;$i++){
					if($vector[$i]!="-1"){
				 ?>


									<tr>
										<td class="center">
									<label>
										<?php echo '<input onchange="cambia(this)" type="checkbox" id="activo1'.$i.'" lang="'.$vector3[$i].'" name="'.$_REQUEST["usuario"].'" />'; ?>

										
										<span class="lbl"></span>
									</label>
										</td>
										
										<td>
											<input disabled="disabled" style="width:180px;" value="<?php echo $vector[$i]; ?>" type="text" id="estado<?php echo $fila; ?>" name="estado<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />											
											
										</td>
										
									</tr>



				<?php } }
			}
				
			
			else{
				$consulta="SELECT * FROM menu";	
				$sql=mysql_query($consulta,$conexion);
				if($row=mysql_fetch_array($sql)){
				$sql=mysql_query($consulta,$conexion);  
				while($row=mysql_fetch_array($sql)){
					$fila++;

						?>
					<tr>
										<td class="center">
									<label>
										<?php 																														
												echo '<input onchange="cambia(this)" type="checkbox" id="activo'.$fila.'" lang="'.$row["Id_Menu"].'" name="'.$_REQUEST["usuario"].'" />';
										?>

										
										<span class="lbl"></span>
									</label>
										</td>
										
										<td>
											<input disabled="disabled" style="width:180px;" value="<?php echo $row["Nombre"]; ?>" type="text" id="estado<?php echo $fila; ?>" name="estado<?php echo $fila; ?>" onfocus='blanco(this)' title="Ingrese los Datos" />											
											
										</td>
										
									</tr>
<?php

				} //CIERA WHILEEEEEEEEEEEEE
				
			}else{
				echo "No hay registro"; // nunca deberia entrar aqui
			}
		}
include("guardaBitacora.php");
					bitacora("Busca lista privilegios de Menu ","Buscar",$conexion);
			mysql_close();			
?>


									
