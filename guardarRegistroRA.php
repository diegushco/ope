<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				for($i=1;$i<=(int)$_REQUEST["canActividad"];$i++ ){
					if($_REQUEST["actividad".$i]=="true"){
						$actividadGuardar=$_REQUEST["actividado".$i];
					}
				}
				for($i=1;$i<=(int)$_REQUEST["canCondicion"];$i++ ){
					if($_REQUEST["condicion".$i]=="true"){
						$condicionGuardar=$_REQUEST["codiciono".$i];
					}
				}
				for($i=1;$i<=(int)$_REQUEST["canAccion"];$i++ ){
					if($_REQUEST["accion".$i]=="true"){
						$accionGuardar=$_REQUEST["acciono".$i]; //falta
					}
				}
				for($i=1;$i<=(int)$_REQUEST["canDanhos"];$i++ ){
					if($_REQUEST["danos".$i]=="true"){
						$danhosGuardar=$_REQUEST["danoso".$i]; //falta
					}
				}


				$consulta="INSERT INTO ra_actividad 
				(Id_Unidad,Direccion,Hora_LLamada,Hora_Activacion,Hora_Sitio,Hora_Fin,Fecha,
				Numero_Folio,Situacion,Observacion,Recomendacion,Id_Tipo,Id_Condicion,Id_Aldea)
				VALUES ('".$_REQUEST["unidad"]."','".$_REQUEST["direccion"]."','".$_REQUEST["hora_llamada"]."'
				,'".$_REQUEST["hora_activacion"]."','".$_REQUEST["hora_sitio"]."','".$_REQUEST["hora_culminacion"]."'
				,'".$_REQUEST["fecha"]."','".$_REQUEST["folio"]."','".$_REQUEST["situacion"]."'				
				,'".$_REQUEST["observacion"]."','".$_REQUEST["recomendacion"]."','".$actividadGuardar."'								
				,'".$condicionGuardar."',(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."')
					)";
				$sql=mysql_query ($consulta,$conexion);		
				
				$sql=mysql_query("SELECT Id_Actividad FROM ra_actividad where Direccion='".$_REQUEST["direccion"]."' and Numero_Folio='".$_REQUEST["folio"]."' and Hora_Sitio='".$_REQUEST["hora_sitio"]."' ",$conexion);  
				if($row=mysql_fetch_array($sql)){
					$id_actividad=$row["Id_Actividad"];
					//echo "\n \n El ultimo Id_Actividad que se guardo es: ".$id_actividad;
				}
				include("guardaBitacora.php");
				bitacora("Guardo actividad ".$id_actividad,"Guardar",$conexion);

				for($i=1;$i<(int)$_REQUEST["cantidad_comision"];$i++ ){
					//hace los insert dentro de este for
					//guardo en funcionario_actividad..pero eso va con funcionario y eso complica la cosa =/
					$consu="INSERT INTO funcionario_actividad (Id_Funcionario, Id_Actividad, Fecha, Id_Puesto) VALUES ('".$_REQUEST["hfuncionario".$i]."','".$id_actividad."',NOW(),(select Id_Puesto from ra_puesto where Nombre='".$_REQUEST["puesto".$i]."'))";
					//echo $consu;
					$sql=mysql_query ($consu,$conexion);
					//echo "\n \n Hacer inserts de comisiones para: ".$_REQUEST["puesto".$i]."-".$_REQUEST["hfuncionario".$i];
				}
				for($i=1;$i<(int)$_REQUEST["cantidad_organismos"];$i++ ){
					//hace los insert dentro de este for
					//guardo en tabla ra_organismo_actividad
					$consu="INSERT INTO ra_organismo_actividad (Id_OtrosOrganismo, Id_Actividad, Unidad, Jefe_Comision) VALUES ((select Id_OtrosOrganismo from ra_otros_organismo where Nombre='".$_REQUEST["organismo".$i]."'),'".$id_actividad."','".$_REQUEST["unidad".$i]."','".$_REQUEST["jefe".$i]."')";
					//echo $consu;
					$sql=mysql_query ($consu,$conexion);
					//echo "\n \n Hacer inserts de organismos en sitio para: ".$_REQUEST["organismo".$i]."-".$_REQUEST["unidad".$i]."-".$_REQUEST["jefe".$i];
				}

				for($i=1;$i<=(int)$_REQUEST["canAccion"];$i++ ){
					if($_REQUEST["accion".$i]=="true"){
						$id_accion=$_REQUEST["acciono".$i];
					}
					
				}
				$consu="INSERT INTO ra_accion_actividad (Id_Actividad, Id_AccionTomada) VALUES ('".$id_actividad."','".$id_accion."')";
				$sql=mysql_query ($consu,$conexion);


				for($i=1;$i<=(int)$_REQUEST["canDanhos"];$i++ ){
					if($_REQUEST["danos".$i]=="true"){
						$IdDano=$_REQUEST["danoso".$i];
					}
					
				}
				$consu="INSERT INTO ra_actividad_danho (Id_Actividad, Id_Danho) VALUES ('".$id_actividad."','".$IdDano."')";
				$sql=mysql_query ($consu,$conexion);

				if($sql){
						echo $id_actividad;
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();		

			/*









<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>
												<i class="icon-time bigger-110 hidden-phone"></i>
												Fecha</th>
											<th>Folio</th>
											<th class="hidden-480">
												<i class="icon-home bigger-110 hidden-phone"></i>
												Aldea</th>

											<th class="hidden-phone">
												
												Tipo
											</th>
											<th class="hidden-480">Condicion</th>

											<th></th>
										</tr>
									</thead>




			
			fecha folio aldea tipo condicion
hora=1427552731905&fecha=2015-03-17&unidad=34234&folio=3434
&aldea=La piedrita&estado11=Tachira&ciudad11=Cordero
&municipio11=Andrés Bello&parroquia11=Andres Bello
&direccion=sdfsd f&hora_llamada=09:55:00&hora_activacion=09:55:00
&hora_sitio=09:55:00&hora_culminacion=09:55:00&actividado1=19&actividad1=false
&actividado2=20&actividad2=false&actividado3=21&actividad3=false&actividado4=22
&actividad4=false&actividado5=24&actividad5=false&actividado6=25&actividad6=true
&actividado7=26&actividad7=false&actividado8=27&actividad8=false&actividado9=28
&actividad9=false&actividado10=29&actividad10=false&actividado11=30
&actividad11=false&actividado12=31&actividad12=false&actividado13=32
&actividad13=false&actividado14=33&actividad14=false&canActividad=14
&codiciono1=5&condicion1=false&codiciono2=6&condicion2=false
&codiciono3=7&condicion3=true&codiciono4=8&condicion4=false&canCondicion=4
&acciono1=5&accion1=false&acciono2=6&accion2=true&acciono3=7&accion3=false
&acciono4=8&accion4=false&acciono5=9&accion5=false&canAccion=5&danoso1=6
&danos1=false&danoso2=7&danos2=false&danoso3=8&danos3=false&danoso4=9
&danos4=false&danoso5=10&danos5=false&danoso6=11&danos6=false&danoso7=12
&danos7=true&danoso8=13&danos8=false&danoso9=14&danos9=false&canDanhos=9
&puesto1=Funcionario&funcionario1=nathaly garnica-inaprocet&hfuncionario1=1
&puesto2=Jefe de Comision&funcionario2=nathaly garnica-inaprocet
&hfuncionario2=1&organismo1=Bomberos&unidad1=rwerwer&jefe1=werwer
&situacion=erfawer awer&observacion=wae rwaer &recomendacion= awerwa er
&cantidad_comision=3&cantidad_organismos=2
			*/
?>