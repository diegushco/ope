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
					echo "\n \n El ultimo Id_Actividad que se guardo es: ".$id_actividad;
				}


				for($i=1;$i<(int)$_REQUEST["cantidad_comision"];$i++ ){
					//hace los insert dentro de este for
					echo "\n \n Hacer inserts de comisiones para: ".$_REQUEST["puesto".$i]."-".$_REQUEST["nombre".$i]."-".$_REQUEST["orga".$i];
				}
				for($i=1;$i<(int)$_REQUEST["cantidad_organismos"];$i++ ){
					//hace los insert dentro de este for
					echo "\n \n Hacer inserts de organismos en sitio para: ".$_REQUEST["organismo".$i]."-".$_REQUEST["unidad".$i]."-".$_REQUEST["jefe".$i];
				}

				if($sql){
						echo "\n \n Se guardo correctamente.";
				}else{
						echo "Ha ocurrido un error inesperado, intente de nuevo.";
				}

			mysql_close();		

			/*
hora=1401630086470&fecha=dasdasd&unidad=asdasd&folio=22&aldea=asdfgh555&estado11=borrar&ciudad11=borrar&municipio11=borrar&parroquia
11=borrar&direccion=xzcvxzcv&hora_llamada=09:10:45&hora_activacion=09:10:45&hora_sitio=09:10:45&hora_culminacion=09:10:45&actividado
1=19&actividad1=false&actividado2=20&actividad2=true&actividado3=21&actividad3=false&actividado4=22&actividad4=false&actividado5=23&
actividad5=false&actividado6=24&actividad6=false&actividado7=25&actividad7=false&actividado8=26&actividad8=false&actividado9=27&acti
vidad9=false&actividado10=28&actividad10=false&actividado11=29&actividad11=false&actividado12=30&actividad12=false&actividado13=31&a
ctividad13=false&actividado14=32&actividad14=false&actividado15=33&actividad15=false&canActividad=15&codiciono1=5&condicion1=false&c
odiciono2=6&condicion2=false&codiciono3=7&condicion3=true&codiciono4=8&condicion4=false&canCondicion=4&acciono1=5&accion1=false&acci
ono2=6&accion2=false&acciono3=7&accion3=true&acciono4=8&accion4=false&acciono5=9&accion5=false&canAccion=5&danoso1=6&danos1=false&da
noso2=7&danos2=false&danoso3=8&danos3=false&danoso4=9&danos4=false&danoso5=10&danos5=false&danoso6=11&danos6=false&danoso7=12&danos7
=false&danoso8=13&danos8=true&danoso9=14&danos9=false&canDanhos=9&puesto1=Conductor&nombre1=1111&orga1=2222&puesto2=Funcionario&nomb
re2=3333&orga2=4444&organismo1=Bomberos&unidad1=555&jefe1=6666&situacion=cx&observacion=xzcv&recomendacion=xzcv&cantidad_comision=3&
cantidad_organismos=2
			*/
?>
