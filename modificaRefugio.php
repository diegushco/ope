<?php 
			if($_REQUEST["activo"]=="true"){
				$activ=1;
			}else{
				$activ=0;
			}
			include("conexion.php");	
			$consulta="UPDATE cs_refugio SET Existe='".$activ."',Nombre='".$_REQUEST["mnombre"]."',Direccion='".$_REQUEST["mdireccion"]."',Telefono='".$_REQUEST["mtelefono"]."',Capacidad='".$_REQUEST["mcapacidad"]."',Descripcion='".$_REQUEST["mdescripcion"]."' WHERE Id_Refugio='".$_REQUEST["id_re"]."'  ";
			//echo $consulta;
			$sql=mysql_query($consulta,$conexion);  
			if($sql){ //cuentaVieja CuentaNueva centroV centroN
				echo "Se modifico correctamente";				
			}
			else
				echo "Ha ocurrido un error inesperado, intente de nuevo";

			mysql_close();				
?>