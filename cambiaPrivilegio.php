<?php 		
			include("conexion.php");	
			$consulta="SELECT pri.Id_Privilegios as id_pri,pri.Existe as Existe FROM usuario usu,privilegios pri where usu.Id_Usuario=pri.Id_Usuario and usu.Usuario='".$_REQUEST['usuario']."' and pri.Id_Menu='".$_REQUEST['id_menu']."'";	
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			
			if($row=mysql_fetch_array($sql)){//si consigo lo actualizo
				if($row["Existe"]=="1")
					$consulta="UPDATE privilegios SET Existe='0' WHERE Id_Privilegios='".$row["id_pri"]."' ";			
				else
					$consulta="UPDATE privilegios SET Existe='1' WHERE Id_Privilegios='".$row["id_pri"]."' ";			
				$sql=mysql_query($consulta,$conexion);  
				include("guardaBitacora.php");
				bitacora("Actualiza privilegios  ".$_REQUEST['usuario'],"Buscar",$conexion);
			}else{//sino consigo lo agrego
				$consulta="INSERT INTO privilegios (Id_Usuario,Id_Menu) 
				VALUES ((select Id_Usuario from usuario where Usuario='".$_REQUEST['usuario']."'),'".$_REQUEST['id_menu']."')";				
				//echo $consulta;
				$sql=mysql_query ($consulta,$conexion);	
			}
			include("guardaBitacora.php");
				bitacora("Guardo privilegios de usuario","Guardar",$conexion);
			if($sql){
				echo "Se modifico correctamente";
			}else{
				echo "Hubo un error, cierre e intente de nuevo";
			}
//echo $consulta;
			mysql_close();				
?>