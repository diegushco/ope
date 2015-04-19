<?php session_start(); 
	if(!isset($_SESSION["usuario"])){		
		header("Location:index.php");	
	}
?>
<!DOCTYPE html>
<html>
<?php
	require_once("config.php");
?>
<?php
	require_once("header.php");
?>

<body>

	<?php
		include_once("topbar.php");
	?>

	<div class="main-container container-fluid">
		<a class="menu-toggler" id="menu-toggler" href="#">
			<span class="menu-text"></span>
		</a>
		
		<?php
			require_once("sidebar.php");
		?>
		
		<div class="main-content">
			<?php
				require_once("breadcrumb.php");
			?>
			
			<div class="page-content" id="contenido-page">
				<?php
					if(isset($_REQUEST["image"])){
						if($_REQUEST["image"]=="true"){
							require_once("imagenes_ra.php");	
						}if($_REQUEST["imagec"]=="true"){
							require_once("imagenes_censo.php");	
						}
					}else if(isset($_REQUEST["imagec"])){
						if($_REQUEST["imagec"]=="true"){
							require_once("imagenes_censo.php");	
						}
					}else{
						require_once("inicio.php");
					}
					
				?>
			</div>
		
			
		</div>
		
	</div>

	<?php
		require_once("footer.php");
	?>

	</body>
</html>

