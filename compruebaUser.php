<?php  session_start();
		
			include("conexion.php");	
			$consulta="select usu.Id_Usuario as idem,usu.usuario as usuario		
			from usuario usu
			where usu.Existe=1 and
			 usu.usuario='".$_REQUEST["user"]."' and
			 usu.Password='".$_REQUEST["pass"]."' ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			
			if($row=mysql_fetch_array($sql)){
				$_SESSION["usuario"]=$row["usuario"];
				$_SESSION["UsuIdem"]=$row["idem"];				
				echo "1";		
				
				include("guardaBitacora.php");
				bitacora("Inicio sesion ".$_REQUEST["user"],"Buscar",$conexion);
											
			}
			else{
				echo "Usuario y/o contraseña incorrectos.";
			}

			mysql_close();			
?>