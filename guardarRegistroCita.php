<?php 

		include("conexion.php");
				$SOY_ID = "";  $SOY_IDP = "";
				$fecha_soli=$_REQUEST["fecha_solicitud"];
				//echo $fecha_soli;


				if ($_REQUEST["propietario"]=="true"){
					$ESPropietario=1;
				}
				else{
					$ESPropietario=0;
				}
				$consulta="INSERT INTO entrevistado (Cedula,Nombre,Apellido,Telefono,Propietario) VALUES ('".$_REQUEST["cedula"].'-'.$_REQUEST["cedula2"]."','".$_REQUEST["nombres"]."','".$_REQUEST["apellidos"]."','".$_REQUEST["telefono"]."','".$ESPropietario."')";
				
				$sql=mysql_query ($consulta,$conexion);	

				include("guardaBitacora.php");
				bitacora("Guardo entrevistado ".$_REQUEST["cedula2"],"Guardar",$conexion);
				//echo ">>>>".mysql_insert_id()."<<<<<";
				//echo $consulta;
				$consulta="SELECT Id_Entrevistado AS SOY_ID FROM entrevistado WHERE Cedula='".$_REQUEST["cedula"].'-'.$_REQUEST["cedula2"]."' ";

				$sql=mysql_query ($consulta,$conexion);	

					if($row=mysql_fetch_array($sql)){
						$SOY_ID=$row["SOY_ID"];
						include("guardaBitacora.php");
					bitacora("Busca entrevistado ".$_REQUEST["cedula2"],"Buscar",$conexion);
					//echo $SOY_ID;
					}

					//echo "otraaa...".$consulta;


				//echo "----".$SOY_ID."-----";
				if($_REQUEST["cedula2pro"]!=""){
					$consulta="INSERT INTO entrevistado (Cedula,Nombre,Apellido,Telefono,Propietario)
					VALUES ('".$_REQUEST["cedula2pro"]."','".$_REQUEST["nombrespro"]."','".$_REQUEST["apellidospro"]."','','1')";
					//echo $consulta;
					$sql1=mysql_query ($consulta,$conexion);	
include("guardaBitacora.php");
				bitacora("Guardo entrevistado ".$_REQUEST["cedula2pro"],"Guardar",$conexion);

					$consulta="SELECT Id_Entrevistado AS SOY_IDP FROM entrevistado WHERE Cedula='".$_REQUEST["cedula2pro"]."' ";

					$sql=mysql_query ($consulta,$conexion);	

						if($row=mysql_fetch_array($sql)){
							$SOY_IDP=$row["SOY_IDP"];
						//echo $SOY_ID;
						}
						//echo "----".$SOY_IDP."-----";

				}
				
				

				//echo $consulta;
				if($sql)
				{
					
					
						if ($_REQUEST["propietario"]=="true")
							$consulta2="INSERT INTO ev_cita (No_Folio,Fecha_Solicitud,Fecha_Cita,Direccion,Observacion,Id_Tipo,Id_Aldea,Id_Entrevistado,Id_Propietario,Id_Funcionario)
					 VALUES ('".$_REQUEST["numero_folio"]."','".$fecha_soli."','".$_REQUEST["fecha"]."','".$_REQUEST["direccion"]."','".$_REQUEST["observacion"]."',(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."'),(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."'),'".$SOY_ID."','".$SOY_ID."',(select Id_Funcionario from funcionario where Nombre='".$_REQUEST["receptor"]."'))";	
						else
							$consulta2="INSERT INTO ev_cita (No_Folio,Fecha_Solicitud,Fecha_Cita,Direccion,Observacion,Id_Tipo,Id_Aldea,Id_Entrevistado,Id_Propietario,Id_Funcionario)
					 VALUES ('".$_REQUEST["numero_folio"]."','".$fecha_soli."','".$_REQUEST["fecha"]."','".$_REQUEST["direccion"]."','".$_REQUEST["observacion"]."',(select Id_Tipo from ev_tipo where Nombre='".$_REQUEST["inspeccion"]."'),(select Id_Aldea from aldea where Nombre='".$_REQUEST["aldea"]."'),'".$SOY_ID."','".$SOY_IDP."',(select Id_Funcionario from funcionario where Nombre='".$_REQUEST["receptor"]."'))";	

						$sql2=mysql_query ($consulta2,$conexion);	
						include("guardaBitacora.php");
				bitacora("Guardo cita ".$_REQUEST["numero_folio"],"Guardar",$conexion);
							//echo $consulta2;
							if($sql2)
							{
									echo "2";
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
