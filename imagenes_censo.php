
<div class="page-header position-relative">
						<h1>
								Imagenes Censo
						</h1>						
</div>	
				
<div class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			<div class="span12" id="success">
				
			</div>
		</div>
		<form action="guarda_imagenes_censo.php" method="post" enctype="multipart/form-data" name="formu">	
		<table class="table table-condensed">
			<tbody>
			<tr>
					
					<td colspan="1"><strong>Cedula</strong></td>
					<td colspan="1">
						<div class="input-append">
							<input class="input-medium"	 type="text" id="cedula" name="cedula" onfocus='blanco(this)' placeholder="V-0000000" />
							<span class="btn btn-warning">
								<i class="icon-search bigger-110"></i>
								<a style="text-decoration:none;color:white;" href="javascript: buscaCedula()" >Buscar</a> 
							</span>
						</div>
					</td>
					
			</tr>
			<tr><td colspan="4">
				<div id="info"></div>
			</td></tr>
			<tr>
					<td colspan="4"><strong>Reseña Fotografica</strong></td>
			</tr>
			<tr>
					<td colspan="4">						
						<input multiple="" type="file" id="file_image" name="file_image[]" id="" />						
					</td>
			</tr>

				<tr><td colspan="2"><div id="error"></div></td></tr>
				</tbody>
				
			<tfoot>									
					<td colspan="8">
						<div align="center">
							<button type="button" onclick="verifica_busquedad()" class="btn btn-info" >Guardar</button>																	
						</div>
					</td>
				
			</tfoot>
		</table>
		</form>	
	</div>
</div>

<script type="text/javascript">
	$("#cedula").mask("a-9999?9999999"); 
	$().ready(function(){
		$("input").tooltip({
			placement: "bottom",
		});
		$("textarea").tooltip({
			placement: "bottom",
		});
		
		
	});
	
	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file:'Seleccionar Archivos...',
		btn_choose:'Examinar',
		btn_change:'Cambiar',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});
	
	$('#file_image').ace_file_input({
		style:'well',
		btn_choose:'Arrastra la imagen o da click para seleccionar',
		btn_change:null,
		no_icon:'icon-cloud-upload',
		droppable:true,
		thumbnail:'small'
		//,icon_remove:null//set null, to hide remove/reset button
		/**,before_change:function(files, dropped) {
			//Check an example below
			//or examples/file-upload.html
			return true;
			}*/
			/**,before_remove : function() {
				return true;
				}*/
				,
				preview_error : function(filename, error_code) {
					//name of the file that failed
					//error_code values
					//1 = 'FILE_LOAD_FAILED',
					//2 = 'IMAGE_LOAD_FAILED',
					//3 = 'THUMBNAIL_FAILED'
					//alert(error_code);
				}
				
				}).on('change', function(){
				//console.log($(this).data('ace_input_files'));
				//console.log($(this).data('ace_input_method'));
			});
	
			//dynamically change allowed formats by changing before_change callback function
			$('#id-file-format').removeAttr('checked').on('change', function() {
				var before_change
				var btn_choose
				var no_icon
				if(this.checked) {
					btn_choose = "Drop images here or click to choose";
					no_icon = "icon-picture";
					before_change = function(files, dropped) {
						var allowed_files = [];
						for(var i = 0 ; i < files.length; i++) {
							var file = files[i];
							if(typeof file === "string") {
								//IE8 and browsers that don't support File Object
								if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
							}
							else {
								var type = $.trim(file.type);
								if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
								|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
								) continue;//not an image so don't keep this file
							}
							
							allowed_files.push(file);
						}
						if(allowed_files.length == 0) return false;
						
						return allowed_files;
					}
				}
				else {
					btn_choose = "Drop files here or click to choose";
					no_icon = "icon-cloud-upload";
					before_change = function(files, dropped) {
						return files;
					}
				}
				var file_input = $('#file_image');
				file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
				file_input.ace_file_input('reset_input');
			});
			
			/*$("#agregar").on('click', function(){
				$("#comision tbody tr:eq(0)").clone().appendTo("#comision tbody");
			});*/
			/*$("#agregar2").on('click', function(){
				$("#organismos tbody tr:eq(0)").clone().appendTo("#organismos tbody");
			});*/
	function bool_upload(){

		var objeto=document.location.split("=");
		if(objeto[1]=="true"){
			document.getElementById("success").innerHTML='<div class="alert alert-block alert-success">								<button type="button" class="close" data-dismiss="alert">									<i class="icon-remove"></i>								</button>								<i class="icon-ok green"></i>								Welcome to								<strong class="green">									Ace									<small>(v1.1.2)</small>								</strong>								, the lightweight, feature-rich and easy to use admin template.							</div>';		
		}
		alert(objeto);
	}
	//bool_upload();

	var string =  document.location;
	var array = string.split(",");
	alert(array[0]);
	function sele(obj){		
		document.getElementById("oculto").value=obj.value;
	}
</script>