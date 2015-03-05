<?php 

		include("conexion.php");

				$fecha_soli=date('Y-m-d',time()-(24*60*60));



				if ($_REQUEST["propietario"]=="true"){
					$ESPropietario=1;
				}
				else{
					$ESPropietario=0;
				}
				$consulta="INSERT INTO entrevistado (Cedula,Nombre,Apellido,Telefono,Propietario)
				VALUES ('".$_REQUEST["cedula"].'-'.$_REQUEST["cedula2"]."','".$_REQUEST["nombres"]."','".$_REQUEST["apellidos"]."','".$_REQUEST["telefono"]."','".$ESPropietario."')";
				//echo $consulta;
				$sql=mysql_query ($consulta,$conexion);	

				$consulta="INSERT INTO entrevistado (Cedula,Nombre,Apellido,Telefono,Propietario)
				VALUES ('".$_REQUEST["cedula2pro"]."','".$_REQUEST["nombrespro"]."','".$_REQUEST["apellidospro"]."','','1')";
				//echo $consulta;
				$sql1=mysql_query ($consulta,$conexion);	
				

				//echo $consulta;
				if($sql && $sql1)
				{
					$SOY_ID = ""; $SOY_IDP = "";

					$consulta="SELECT Id_Entrevistado AS SOY_ID FROM entrevistado WHERE Cedula='".$_REQUEST["cedula"].'-'.$_REQUEST["cedula2"]."' ";

						$sql=mysql_query ($consulta,$conexion);	

						if($row=mysql_fetch_array($sql)){
							$SOY_ID=$row["SOY_ID"];
							//echo $SOY_ID;
						}

						$consulta="SELECT Id_Entrevistado AS SOY_ID FROM entrevistado WHERE Cedula='".$_REQUEST["cedula2pro"]."' ";

						$sql=mysql_query ($consulta,$conexion);	

						if($row=mysql_fetch_array($sql)){
							$SOY_IDP=$row["SOY_ID"];
							//echo $SOY_ID;
						}	
						
						if ($_REQUEST["propietario"]=="true")
							$consulta2="INSERT INTO ev_cita (No_Folio,Fecha_Solicitud,Fecha_Cita,Direccion,Observacion,Id_Tipo,Id_Aldea,Id_Entrevistado,Id_Propietario)
					 VALUES ('".$_REQUEST["numero_folio"]."','".$fecha_soli."','".$_REQUEST["fecha"]."','".$_REQUEST["direccion"]."','".$_REQUEST["observacion"]."',(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."'),(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."'),'".$SOY_ID."','".$SOY_ID."')";	
						else
							$consulta2="INSERT INTO ev_cita (No_Folio,Fecha_Solicitud,Fecha_Cita,Direccion,Observacion,Id_Tipo,Id_Aldea,Id_Entrevistado,Id_Propietario)
					 VALUES ('".$_REQUEST["numero_folio"]."','".$fecha_soli."','".$_REQUEST["fecha"]."','".$_REQUEST["direccion"]."','".$_REQUEST["observacion"]."',(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."'),(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."'),'".$SOY_ID."','".$SOY_IDP."')";	

						$sql2=mysql_query ($consulta2,$conexion);	

							if($sql2)
							{
									echo mysql_insert_id();
							}
							else
							{
									echo "0";
							}
						
				}else{
						echo "0";
				}

			mysql_close();		

?>
