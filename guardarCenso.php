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
				


				for($i=1;$i<=(int)$_REQUEST["canPropiedad"];$i++ ){
					if($_REQUEST["propiedad".$i]=="true"){
						$propiedadGuardar=$_REQUEST["propiedado".$i]; //falta
					}
				}


				if($_REQUEST["masculino"]=="true"){
					$sexo="M";
				}else if($_REQUEST["femenino"]=="true"){
					$sexo="F";
				}
				if($_REQUEST["venezolano1"]=="true"){
					$nacionalidad="V";
				}else if($_REQUEST["extranjero1"]=="true"){
					$nacionalidad="E";
				}

				if($_REQUEST["lphsi"]=="true"){
					$lph="true";
				}else if($_REQUEST["lphno"]=="true"){
					$lph="false";
				}

				$consulta="INSERT INTO cs_afectado (Cedula,Nombre,Apellido,Sexo,Nacionalidad,Fecha_Nacimiento,Estado_Civil,Situacion_Conyugal,Telefono,Residencia_Estado,Residencia_Comunidad,Nivel_instruccion,Situacion_Laboral,LPH,uso_LPH,Id_OtraPropiedad
) VALUES ('".$_REQUEST["cedula"]."','".$_REQUEST["nombre"]."','".$_REQUEST["apellido"]."','".$sexo."','".$nacionalidad."','".$_REQUEST["fechaNac"]."','".$_REQUEST["estadoCivil"]."','".$_REQUEST["conyugue"]."','".$_REQUEST["telefonos"]."','".$_REQUEST["tiempoEstado"]."','".$_REQUEST["tiempoComunidad"]."','".$_REQUEST["instruccion"]."','".$_REQUEST["trabajo"]."','".$lph."','".$_REQUEST["procedencia"]."','".$propiedadGuardar."')";
				$sql=mysql_query ($consulta,$conexion);



				$sql=mysql_query("SELECT Id_Afectado FROM cs_afectado where Cedula='".$_REQUEST["cedula"]."' and Apellido='".$_REQUEST["apellido"]."' and Residencia_Comunidad='".$_REQUEST["tiempoComunidad"]."' ",$conexion);  
				if($row=mysql_fetch_array($sql)){
					$id_afectado=$row["Id_Afectado"];					
				}

				$consulta="INSERT INTO cs_censo (Id_Censo,Fecha_Censo,Observacion,Id_Aldea,Id_Motivo,Id_Entrevistado,Id_Afectado,Id_CondicionFamiliar,Id_Funcionario,Id_Vivienda,Id_Evento) VALUES ('".$_REQUEST["cedula"]."','".$_REQUEST["nombre"]."','".$_REQUEST["apellido"]."','".$sexo."','".$nacionalidad."','".$_REQUEST["fechaNac"]."','".$_REQUEST["estadoCivil"]."','".$_REQUEST["conyugue"]."','".$_REQUEST["telefonos"]."','".$_REQUEST["tiempoEstado"]."','".$_REQUEST["tiempoComunidad"]."','".$_REQUEST["instruccion"]."','".$_REQUEST["trabajo"]."','".$lph."','".$_REQUEST["procedencia"]."','".$propiedadGuardar."')";
				$sql=mysql_query ($consulta,$conexion);


				cs_censo
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
hora=1429148480110&
nombre=Diego&
apellido=Guerrero&
cedula=17877206&
femenino=true&
masculino=false&
venezolano1=true&
extranjero1=false&
fechaNac=2015-04-15&
estadoCivil=Casado&
conyugue=Concubino&
telefonos=5465465&
tiempoEstado=554&
tiempoComunidad=4556&
instruccion=Analfabeta&
trabajo=Empresa Privada&
ingresoMensual=44&
lphsi=true&
lphno=false&
procedencia=dfdfg&
aldea=Calle 88&
estado11=Tachira&
municipio11=Antonio Rómulo Costa&
ciudad11=Las Mesas&
parroquia11=Antonio Rómulo Costa&
tipoVivienda=Casa vecindad&
tenencia=Compartida&
motivoCenso=Elevacion de montaña&
danho=&
colapsoo1=1&
colapso1=true&
colapsoo2=2&
colapso2=false&
colapsoo3=3&
colapso3=false&
colapsoo4=5&
colapso4=false&
colapsoo5=6&
colapso5=false&
canColapso=5&
grietao1=1&
grieta1=false&
grietao2=2&
grieta2=false&
grietao3=3&
grieta3=false&
grietao4=5&
grieta4=false&
grietao5=6&
grieta5=false&
canGrieta=5&
cs_condicion=Desalojo por alto riesgo&
nroFamilias=45&
nroHabitaciones=645989&
materialTecho=Platabanda&
materialParedes=Ladrillo&
materialPisos=Cemento&
nacionalidad1=V&
cedula1=3443&
sexo1=F&
apellido1=adfgdfg&
nombre1=gnvn&
fecha1=1988/09/08&
parentesco1=Madre&
nivel1=Secundaria&
ocupacion1=vbcvb&
ingreso1=vbnvbn&
ensero1=1&
enser1=true&
ensero2=2&
enser2=false&
ensero3=3&
enser3=false&
ensero4=4&
enser4=false&
ensero5=5&
enser5=false&
ensero6=6&
enser6=false&
ensero7=7&
enser7=false&
ensero8=8&
enser8=false&
ensero9=9&
enser9=false&
ensero10=10&
enser10=false&
ensero11=11&
enser11=false&
ensero12=12&
enser12=true&
ensero13=13&
enser13=false&
ensero14=14&
enser14=false&
ensero15=15&
enser15=false&
ensero16=16&
enser16=true&
ensero17=17&
enser17=false&
ensero18=18&
enser18=false&
ensero19=19&
enser19=false&
ensero20=20&
enser20=false&
ensero21=21&
enser21=false&
ensero22=22&
enser22=false&
canEnser=22&
necesidado1=1&
necesidad1=true&
necesidado2=2&
necesidad2=false&
cannecesidad=2&
propiedado1=1&
propiedad1=true&
propiedado2=2&
propiedad2=false&
canPropiedad=2&
condFamiliaro1=2&
condFamiliar1=true&
condFamiliaro2=3&
condFamiliar2=false&
canConFami=2&
refugio=Refugio el caiman&
direccion_refugio=barrio el caiman, calle 5 #7-8&
fechaIngreso=16-04-2015&
cantidad_familiar=2
			*/
?>