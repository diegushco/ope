<?php
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*10000; //10 mb
$path = "assets/img/imagenes_opg/RA_".time()."_"; // Upload directory
$count = 0;
if(isset($_FILES['file_image']['tmp_name'])){
	
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
		// Loop $_FILES to exeicute all files
	
		foreach ($_FILES['file_image']['name'] as $f => $name) {     
	
		    if ($_FILES['file_image']['error'][$f] == 4) {
		        continue; // Skip file if any error found
		    }	       
		    if ($_FILES['file_image']['error'][$f] == 0) {	           
		        if ($_FILES['file_image']['size'][$f] > $max_file_size) {
		            $message[] = "$name is too large!.";
		            continue; // Skip large files
		        }
				elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
					$message[] = "$name is not a valid format";
					continue; // Skip invalid file formats
				}
		        else{ // No error found! Move uploaded files 
		        	$algo="ASD";
					$nombre_archivo=$_FILES["file_image"]["tmp_name"][$f];
					//echo $dire=$path.$_FILES["file_image"]["tmp_name"][$f];

					 //copy($_FILES["file_image"]["tmp_name"][$f],$dire );

		            move_uploaded_file($nombre_archivo, $path.$name);
		            $count++; // Number of successfully uploaded file
		        	echo "<script>alert('Se guardo correctamente');</script>";

		        	include("conexion.php");	
	
						$consulta="INSERT INTO foto (Nombre,Url,Id_Actividad) VALUES ('".$path.$name."','".$path.$name."','".$_REQUEST["oculto"]."')";
						$sql=mysql_query ($consulta,$conexion);						
						
						//echo $consulta;
						
					mysql_close();


		        }

		    }
		}
	}
}
		
	
header("Location: page.php?image=true");
include_once("page.php");
?>