<?php    
				include("conexion.php"); //hago la conexion a la bd	
				
				
				for($i=1;$i<=(int)$_REQUEST["canPropiedad"];$i++ ){
					if($_REQUEST["propiedad".$i]=="true"){
						$propiedadGuardar=$_REQUEST["propiedado".$i]; 
					}
				}
				for($i=1;$i<=(int)$_REQUEST["canConFami"];$i++ ){
					if($_REQUEST["condFamiliar".$i]=="true"){
						$condFamiliar=$_REQUEST["condFamiliaro".$i]; 
					}
				}
				for($i=1;$i<=(int)$_REQUEST["canColapso"];$i++ ){
					if($_REQUEST["colapso".$i]=="true"){
						$colapso_parte=$_REQUEST["colapsoo".$i]; 
					}
				}

				for($i=1;$i<=(int)$_REQUEST["canGrieta"];$i++ ){
					if($_REQUEST["grieta".$i]=="true"){
						$grieta=$_REQUEST["grietao".$i]; 
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
) VALUES ('".$nacionalidad."-".$_REQUEST["cedula"]."','".$_REQUEST["nombre"]."','".$_REQUEST["apellido"]."','".$sexo."','".$nacionalidad."','".$_REQUEST["fechaNac"]."','".$_REQUEST["estadoCivil"]."','".$_REQUEST["conyugue"]."','".$_REQUEST["telefonos"]."','".$_REQUEST["tiempoEstado"]."','".$_REQUEST["tiempoComunidad"]."','".$_REQUEST["instruccion"]."','".$_REQUEST["trabajo"]."','".$lph."','".$_REQUEST["procedencia"]."','".$propiedadGuardar."')";
				$sql=mysql_query ($consulta,$conexion);



				$sql=mysql_query("SELECT Id_Afectado FROM cs_afectado where Cedula='".$nacionalidad."-".$_REQUEST["cedula"]."' and Apellido='".$_REQUEST["apellido"]."' and Residencia_Comunidad='".$_REQUEST["tiempoComunidad"]."' ",$conexion);  
				if($row=mysql_fetch_array($sql)){
					$id_afectado=$row["Id_Afectado"];					
				}

				
				$consulta="INSERT INTO cs_vivienda (Numero_Familias,Numero_Habitaciones,Id_Condicion,Id_MaterialElaboracion,Id_Tenencia,Id_Tipo,Id_Parte,Id_Danho,Id_Parte_Grieta,Id_MaterialParedes,Id_MaterialPisos)
				VALUES ('".$_REQUEST["nroFamilias"]."','".$_REQUEST["nroHabitaciones"]."',(select Id_Condicion from cs_condicion where Nombre='".$_REQUEST["cs_condicion"]."'),(select Id_MaterialElaboracion from cs_material_elaboracion where Nombre='".$_REQUEST["materialTecho"]."'),(select Id_Tenencia from cs_tenencia where Nombre='".$_REQUEST["tenencia"]."'),(select Id_Tipo from cs_tipo where Nombre='".$_REQUEST["tipoVivienda"]."'),'".$colapso_parte."',(select Id_Danho from cs_danho where Nombre='".$_REQUEST["danho"]."'),'".$grieta."',(select Id_MaterialElaboracion from cs_material_elaboracion where Nombre='".$_REQUEST["materialParedes"]."'),(select Id_MaterialElaboracion from cs_material_elaboracion where Nombre='".$_REQUEST["materialPisos"]."'))";
				$sql=mysql_query ($consulta,$conexion);
				
				$sql=mysql_query("SELECT Id_Vivienda FROM cs_vivienda where Numero_Familias='".$_REQUEST["nroFamilias"]."' and Numero_Habitaciones='".$_REQUEST["nroHabitaciones"]."' and Id_Parte='".$colapso_parte."' order by Id_Vivienda desc ",$conexion);  
				if($row=mysql_fetch_array($sql)){
					$id_vivienda=$row["Id_Vivienda"];					
				}
				for($i=1;$i<=(int)$_REQUEST["canEnser"];$i++ ){
					if($_REQUEST["enser".$i]=="true"){
						$cons="INSERT INTO cs_vivienda_enser (Id_Enser, Id_Vivienda)
						VALUES('".$_REQUEST["ensero".$i]."','".$id_vivienda."')";
						$sql=mysql_query($cons,$conexion);
					}
				}

				$consulta="INSERT INTO cs_censo (Fecha_Censo,Observacion,Id_Aldea,Id_Motivo,Id_Afectado,Id_CondicionFamiliar,Id_Funcionario,Id_Vivienda,Id_Evento) 
				VALUES ('".$_REQUEST["fechaC"]."','".$_REQUEST["observacion"]."',(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."'),(select Id_Motivo from cs_motivo where Nombre='".$_REQUEST["motivoCenso"]."'),'".$id_afectado."','".$condFamiliar."',(select Id_Funcionario from funcionario where Nombre='".$_REQUEST["funcionario"]."'),'".$id_vivienda."',(select Id_Evento from cs_evento where Nombre='".$_REQUEST["evento"]."'))";
				$sql=mysql_query ($consulta,$conexion);


				for($i=1;$i<=(int)$_REQUEST["cannecesidad"];$i++ ){
					if($_REQUEST["necesidad".$i]=="true"){
						$cons="INSERT INTO cs_necesidad_afectado (Id_Necesidad, Id_Afectado)
						VALUES('".$_REQUEST["necesidado".$i]."','".$id_afectado."')";
						$sql=mysql_query($cons,$conexion);
					}
				}

				$consulta="INSERT INTO cs_refugio_afectado (Id_Afectado,Id_Refugio,Fecha_Ingreso) 
				VALUES ('".$id_afectado."',(select Id_Refugio from cs_refugio where Nombre='".$_REQUEST["refugio"]."'),'".$_REQUEST["fechaIngreso"]."')";
				$sql=mysql_query($consulta,$conexion);

				for($i=1;$i<(int)$_REQUEST["cantidad_familiar"];$i++ ){
					
						$cons="INSERT INTO cs_familiar (Cedula,Nombre,Apellido,Fecha_Nacimiento,Parentesco,Nivel_Instruccion,Ocupacion,Ingreso_Mensual,Id_Afectado)
						VALUES('".$_REQUEST["nacionalidad".$i]."-".$_REQUEST["cedula".$i]."','".$_REQUEST["nombre".$i]."','".$_REQUEST["apellido".$i]."','".$_REQUEST["fecha".$i]."','".$_REQUEST["parentesco".$i]."','".$_REQUEST["nivel".$i]."','".$_REQUEST["ocupacion".$i]."','".$_REQUEST["ingreso".$i]."','".$id_afectado."')";
						$sql=mysql_query($cons,$conexion);
					
				}

				include("guardaBitacora.php");
				bitacora("Guardo censo ".$id_afectado,"Guardar",$conexion);

				
				
				if($sql){
						echo "Se guardo correctamente";
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