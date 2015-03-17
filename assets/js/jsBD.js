function prueba(){
	alert("hola");
}
function guardaCenso(){
	if(valida(formu)==false){	
		alert(ArmaCampos(formu));
	
		/*objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarRegistroInspeccion.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));*/
		//alert(ArmaCampos(formu));	
	}
}

function buscaInspeccion(){
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "buscaCita.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					document.getElementById("actualiza").innerHTML=objeto_ajax.responseText;
					//alert(objeto_ajax.responseText);
					//limpia(formu);
					
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));
}

function buscaCita(){
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "buscaCita.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					document.getElementById("actualiza").innerHTML=objeto_ajax.responseText;
					//alert(objeto_ajax.responseText);
					//limpia(formu);				
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));
}
function verifica_busquedad(){
	if(document.getElementById("info").innerHTML==""){
		alert("Debe realizar una busquedad");
	}else{
		document.formu.submit();
	}
}
function buscaFolio(aldea){
	//alert(aldea.options[aldea.selectedIndex].value);
	folio=document.getElementById("input_folio").value;
	var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "buscaFolio.php?hora="+hora+"&folio="+folio,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
					document.getElementById("info").innerHTML=objeto_ajax.responseText;
					

						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);
}
function registraInspeccion(formu){
	
	//console.log(ArmaCampos(formu));
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarRegistroInspeccion.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
				alert(objeto_ajax.responseText);
				limpia(formu);					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));
		//alert(ArmaCampos(formu));	
	}
}
function registraCita(formu){
	
	//alert(ArmaCampos(formu));
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarRegistroCita.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					//alert(objeto_ajax.responseText);
					if(objeto_ajax.responseText>0){
						imprimirCita(objeto_ajax.responseText);
					}else{
						alert("Ha ocurrido un error. Intente nuevamente.");
					}
					limpia(formu);
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));
		//alert(ArmaCampos(formu));	
	}
}

function registraRA(formu){
	
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
			objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarRegistroRA.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);			
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));
		alert(ArmaCampos(formu));	
	}	
}
function validaActividad(algo){
	for(i=1;i<=parseInt(document.getElementById("canActividad").value);i++){
		document.getElementById("actividad"+i).checked=false;	
	}
	algo.checked=true;
}
function validaCondicion(algo){
	for(i=1;i<=parseInt(document.getElementById("canCondicion").value);i++){
		document.getElementById("condicion"+i).checked=false;	
	}
	algo.checked=true;
}
function validaAccion(algo){
	for(i=1;i<=parseInt(document.getElementById("canAccion").value);i++){
		document.getElementById("accion"+i).checked=false;	
	}
	algo.checked=true;
}
function validaDanhos(algo){
	for(i=1;i<=parseInt(document.getElementById("canDanhos").value);i++){
		document.getElementById("danos"+i).checked=false;	
	}
	algo.checked=true;
}
function validaColapso(algo){
	for(i=1;i<=parseInt(document.getElementById("canColapso").value);i++){
		document.getElementById("colapso"+i).checked=false;	
	}
	algo.checked=true;
}
function validaGrieta(algo){
	for(i=1;i<=parseInt(document.getElementById("canGrieta").value);i++){
		document.getElementById("grieta"+i).checked=false;	
	}
	algo.checked=true;
}
function refugiosel(aldea){
	//alert(aldea.options[aldea.selectedIndex].value);
	
	var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "consul_refugio.php?hora="+hora+"&Id_Refugio="+refugio.options[refugio.selectedIndex].value,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
					
					obj=objeto_ajax.responseText.split("**");
						document.getElementById("direccion_refugio").value=obj[1];
						
						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);
}
function aldeasel(aldea){
	//alert(aldea.options[aldea.selectedIndex].value);
	
	var hora= new Date().getTime();
			objeto_ajax=objetoAjax(); 
			objeto_ajax.open("GET", "consul_aldea.php?hora="+hora+"&id_aldea="+aldea.options[aldea.selectedIndex].value,true);
			objeto_ajax.onreadystatechange=function() {	
				if (objeto_ajax.readyState==4) {
					
					obj=objeto_ajax.responseText.split("**");
						document.getElementById("estado11").value=obj[0];
						document.getElementById("ciudad11").value=obj[1];
						document.getElementById("parroquia11").value=obj[2];
						document.getElementById("municipio11").value=obj[3];
						//alert(objeto_ajax.responseText);					
				}
			}
			objeto_ajax.send(null);
}

function eliminaOtraPropiedad(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaOtraPropiedad.php?hora="+hora+"&propiedad="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaOtraPropiedad(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaOtraPropiedad.php?hora="+hora+"&propiedad="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarOtraPropiedad(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarOtraPropiedad.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function eliminaDanhosParte(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaDanhosParte.php?hora="+hora+"&danho="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaDanhosParte(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaDanhosParte.php?hora="+hora+"&danho="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarDanhosPartes(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarDanhosPartes.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaPartesVivienda(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaPartesVivienda.php?hora="+hora+"&parte="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaPartesVivienda(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaPartesVivienda.php?hora="+hora+"&parte="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}


function guardarPartesVivienda(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarPartesVivienda.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaMaterialElaboracion(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaMaterialElaboracion.php?hora="+hora+"&material="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaMaterialElaboracion(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaMaterialElaboracion.php?hora="+hora+"&material="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarMaterialElaboracion(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarMaterialElaboracion.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaCondicionVivienda(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaCondicionVivienda.php?hora="+hora+"&condicion="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaCondicionVivienda(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaCondicionVivienda.php?hora="+hora+"&condicion="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarCondicionVivienda(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarCondicionVivienda.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaTenenciaVivienda(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaTenenciaVivienda.php?hora="+hora+"&tenencia="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaTenenciaVivienda(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaTenenciaVivienda.php?hora="+hora+"&tenencia="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarTenenciaVivienda(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarTenenciaVivienda.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaTipoVivienda(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaTipoVivienda.php?hora="+hora+"&tipo="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaTipoVivienda(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaTipoVivienda.php?hora="+hora+"&tipo="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarTipoVivienda(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarTipoVivienda.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function eliminaEnser(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaEnser.php?hora="+hora+"&enser="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaEnser(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaEnser.php?hora="+hora+"&enser="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarEnser(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarEnser.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function eliminaNecesidad(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaNecesidad.php?hora="+hora+"&necesidad="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaNecesidad(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaNecesidad.php?hora="+hora+"&necesidad="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarNecesidad(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarNecesidad.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaCondicionFamiliar(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaCondicionFamiliar.php?hora="+hora+"&condicion="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaCondicionFamiliar(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaCondicionFamiliar.php?hora="+hora+"&condicion="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarCondicionFamiliar(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarCondicionFamiliar.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}


function eliminaTipoEvento(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaEventoCenso.php?hora="+hora+"&evento="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaTipoEvento(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaEventoCenso.php?hora="+hora+"&evento="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarTipoEvento(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarEventoCenso.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}








function eliminaEventoCenso(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaEventoCenso.php?hora="+hora+"&evento="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaEventoCenso(nuevo,viejo){

		
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaEventoCenso.php?hora="+hora+"&evento="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarEventoCenso1(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarEventoCenso1.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
//------------------------------ copiar de aca para arriba ------------------------------
function eliminaMotivoCenso(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaPuesto.php?hora="+hora+"&puesto="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaMotivoCenso(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaMotivoCenso.php?hora="+hora+"&puesto="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarMotivoCenso(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarMotivoCenso.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function eliminaPuesto(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaPuesto.php?hora="+hora+"&puesto="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaPuesto(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaPuesto.php?hora="+hora+"&motivo="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarPuesto(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarPuesto.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function eliminaCondicion(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaCondicion.php?hora="+hora+"&condicion="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaCondicion(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaCondicion.php?hora="+hora+"&condicion="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarCondicion(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarCondicion.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaTipoDanho(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaTipoDanhos.php?hora="+hora+"&daño="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaTipoDanho(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaTipoDanhos.php?hora="+hora+"&daño="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarTipoDanhos(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarTipoDanhos.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function eliminaOtrosOrganismos(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaOtrosOrganismo.php?hora="+hora+"&organismo="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaOtrosOrganismos(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaOtrosOrganismo.php?hora="+hora+"&organismo="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarOtrosOrganismos(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarOtrosOrganismo.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminaAccionTomada(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaAccionTomada.php?hora="+hora+"&accion="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaAccionTomada(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaAccionTomada.php?hora="+hora+"&accion="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarAccionTomada(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarAccionTomada.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}


function eliminaTipoActividad(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaTipoActividad.php?hora="+hora+"&actividad="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modificaTipoActividad(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaTipoActividad.php?hora="+hora+"&actividad="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarTipoActividad(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarTipoActividad.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function elimina_categoria(activo,categoria,viejo){
	
	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaCategoria.php?hora="+hora+"&categoria="+document.getElementById(categoria).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modifica_categoria(activo,categoria,viejo){
	
	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaCategoria.php?hora="+hora+"&categoria="+document.getElementById(categoria).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}



function guardarCategoria(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarCategoria.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function elimina_inspeccion(activo,nuevo,viejo,descripcion){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaTipoInspeccion.php?hora="+hora+"&inspeccion="+document.getElementById(nuevo).value+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modifica_inspeccion(activo,nuevo,viejo,descripcion){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaTipoInspeccion.php?hora="+hora+"&inspeccion="+document.getElementById(nuevo).value+"&activo1="+habilitado+"&viejo="+document.getElementById(viejo).value+"&descripcion="+document.getElementById(descripcion).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarTipoInspeccion(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarTipoInspeccion.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function eliminarRefugio(formu){
	
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "eliminaRefugio.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					traeListado();
					$("#myModal").modal("hide");
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function modificarRefugio(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "modificaRefugio.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					
					
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function guardarRefugio(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarRefugio.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function elimina_aldea(activo,parroquia,viejo,nuevo){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaAldea.php?hora="+hora+"&parroquia="+document.getElementById(parroquia).value+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}

function modifica_aldea(activo,parroquia,viejo,nuevo){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaAldea.php?hora="+hora+"&parroquia="+document.getElementById(parroquia).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarAldea(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarAldea.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function elimina_parroquia(activo,municipio,viejo,nuevo){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaParroquia.php?hora="+hora+"&municipio="+document.getElementById(municipio).value+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}

function modifica_evento1(activo,tipo,viejo,nuevo){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaEvento1.php?hora="+hora+"&tipo="+document.getElementById(tipo).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function modifica_parroquia(activo,municipio,viejo,nuevo){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaParroquia.php?hora="+hora+"&municipio="+document.getElementById(municipio).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarParroquia(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarParroquia.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

function elimina_ciudad(activo,municipio,viejo,nuevo){

	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaCiudad.php?hora="+hora+"&municipio="+document.getElementById(municipio).value+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modifica_ciudad(activo,municipio,viejo,nuevo){

	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaCiudad.php?hora="+hora+"&municipio="+document.getElementById(municipio).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}

function guardarCiudad(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarCiudad.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function elimina_municipio(activo,estado,viejo,nuevo){
	
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaMunicipio.php?hora="+hora+"&estado="+document.getElementById(estado).value+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);
					traeListado();					
			}
		}
		objeto_ajax.send(null);
}
function modifica_municipio(activo,estado,viejo,nuevo){
	
	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaMunicipio.php?hora="+hora+"&estado="+document.getElementById(estado).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value+"&nuevo="+document.getElementById(nuevo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarMunicipio(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarMunicipio.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function mensaje_elimina(){
	alert("Este item no se puede eliminar");
}
function elimina_estado(activo,estado,viejo){
	
	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaEstado.php?hora="+hora+"&estado="+document.getElementById(estado).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					traeListado();				
			}
		}
		objeto_ajax.send(null);
}
function modifica_estado(activo,estado,viejo){
	
	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifcaEstado.php?hora="+hora+"&estado="+document.getElementById(estado).value+"&activo="+habilitado+"&viejo="+document.getElementById(viejo).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarEstado(formu){
	//alert(ArmaCampos(formu));
	
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarEstado.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}
function modifica_usuario(activo,user){
	
	if(document.getElementById(activo).checked==true){
		habilitado="1";
	}else{
		habilitado="0";
	}
	//alert(document.getElementById(viejo).value);
	
	
	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_modifica_usuario.php?hora="+hora+"&activo="+habilitado+"&user="+document.getElementById(user).value,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
}
function guardarUsuario(formu){
	//alert(ArmaCampos(formu));
	if(document.getElementById("password").value!=document.getElementById("password2").value){
		document.getElementById("error").innerHTML='<span style="color:#FF0000; font-size:9px;"><strong>Las contraseñas no coinciden</strong></span>';
	}else if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
	
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardarUsuario.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					traeListado();
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

// JavaScript Document
//ESTA ES LA FUNCION QUE VAS A COPIAR Y PEGAR A CADA RATO =D tanto para modificar como registrar
function guardarCita(formu){
	//alert(ArmaCampos(formu));
	//alert(valida(formu));
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
		
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "guardoCita.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));		
	}	
}

//funcion buscar
function buscaPersona(){
		
		//aqui asignas el valor que quires eliminar, una cedula o cualquier otro registro
		cedula=document.getElementById("cedula").value;
		
		
		var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "busquedaPersona.php?hora="+hora+"&cedula="+cedula,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					document.getElementById("resultado_busqueda").innerHTML=objeto_ajax.responseText;
					//alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
		
		
}

//funcion buscar
function buscaPersonaEliminar(){
		
		
		cedula=document.getElementById("cedula").value;
		
		
		var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "busquedaPersonaEliminar.php?hora="+hora+"&cedula="+cedula,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					document.getElementById("resultado_busqueda").innerHTML=objeto_ajax.responseText;
					//alert(objeto_ajax.responseText);					
			}
		}
		objeto_ajax.send(null);
		
		
}

//esta funcion siguiente es identica que la de guardar, con la diferencia que vas a llamar el archivo php correspondiente donde vayas a poner el UPDATE
function funcionModificarPersona(formu){
	if(valida(formu)==false){	
		//alert(ArmaCampos(formu));
		
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("POST", "modificoPersona.php",true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					//document.getElementById("capa").innerHTML=objeto_ajax.responseText;
					alert(objeto_ajax.responseText);
					limpia(formu);
					document.getElementById("cedula").disabled=false;
					
			}
		}
		objeto_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		objeto_ajax.send(ArmaCampos(formu));
		
	}	
}


//FUNCION ELIMINAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARRRRRRR
function funcionEliminarPersona(){
		
		//aqui asignas el valor que quires eliminar, una cedula o cualquier otro registro
		cedula=document.getElementById("cedula").value;
		
		
		var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "eliminaPersona.php?hora="+hora+"&cedula="+cedula,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					alert(objeto_ajax.responseText);					
					limpia(formu);
					document.getElementById("cedula").disabled=false;
			}
		}
		objeto_ajax.send(null);
		
		/*
		esta funcion no es identica a la anterior, porque? porque no necesitamos estar tomando todos los datos del formulario para eliminar algo, si la ocacion lo amerita pues usa la anterior.. dentro del php obviamente pues llamas la BD y haces un DELETE donde el registro sea IGUAL al campo con nombre valor ($_REQUEST["valor"])
		*/
		
		
}



//DE AQUI PARA ABAJO NO MODIFICAR NADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
//DE AQUI PARA ABAJO NO MODIFICAR NADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
//DE AQUI PARA ABAJO NO MODIFICAR NADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
//DE AQUI PARA ABAJO NO MODIFICAR NADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
//DE AQUI PARA ABAJO NO MODIFICAR NADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
//DE AQUI PARA ABAJO NO MODIFICAR NADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
function objetoAjax(){ 
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function ArmaCampos(formu){
	var hora= new Date().getTime();
	var valores="";
	valores="hora="+hora;
	for(i=0;i<formu.length;i++){
		if(formu.elements[i].id!=""){
			if((formu.elements[i].type=='text' || formu.elements[i].type=='password')||formu.elements[i].type=='textarea' ||formu.elements[i].type=='hidden'){
				valores+="&"+formu.elements[i].id+"="+formu.elements[i].value;
			}else if(formu.elements[i].type=='select-one'){			
				valores+="&"+formu.elements[i].id+"="+formu.elements[i].options[formu.elements[i].selectedIndex].text;
			}else if(formu.elements[i].type=='radio'){
				if(formu.elements[i].checked){
					valores+="&"+formu.elements[i].name+"="+formu.elements[i].value;
				}
			}else if(formu.elements[i].type=='checkbox'){			
					valores+="&"+formu.elements[i].id+"="+formu.elements[i].checked;			
			}
		}
	}
	return valores;
	
}

function valida(formu){
	var boolean=false;
	var objE=document.getElementById('error');
	
	
	for(ii=0;ii<formu.length;ii++){ //hago for menor a la cantidad de elementos del formulario				
				if(formu.elements[ii].disabled==false&&formu.elements[ii].lang!="noObligatorio" && formu.elements[ii].id!="" ){	
					if((formu.elements[ii].type=='text' || formu.elements[ii].type=='password') && formu.elements[ii].value=='' ){
						formu.elements[ii].style.backgroundColor='#CEE3F6'; //color AZUL claro
						
						if(objE != null){ //verifico que de verdad exista el dic ERROR
							objE.innerHTML='<span style="color:#FF0000; font-size:9px;"><strong>Debe llenar todos los campos</strong></span>';
						}
						
						
						/*boolean=true;
						alert("soy true 1");
						alert(formu.elements[ii].type);
						if(formu.elements[ii].id==""){
							alert("11111111111");

						}*/
						boolean=true;
					}else if(formu.elements[ii].type=='textarea' && formu.elements[ii].value==''){
						formu.elements[ii].style.backgroundColor='#CEE3F6'; //color azul claro
						objE.innerHTML='<span style="color:#FF0000; font-size:9px;"><strong>Debe llenar todos los campos</strong></span>';
						boolean=true;
						
						
					}else if(formu.elements[ii].type=='select-one' && formu.elements[ii].options[formu.elements[ii].selectedIndex].text=='Seleccione'){
						formu.elements[ii].style.backgroundColor='#CEE3F6'; //color azul claro
						objE.innerHTML='<span style="color:#FF0000; font-size:9px;"><strong>Debe llenar todos los campos</strong></span>';
						boolean=true;
						
						
					}else if(formu.elements[ii].type=='text' || formu.elements[ii].type=='textarea' || formu.elements[ii].type=='select-one' || formu.elements[ii].lang=='obliga'){
						formu.elements[ii].style.backgroundColor='#FFFFFF'; // si hay algo escrito en el campo,se coloca otravez blanco
					}
					if(formu.elements[ii].lang=='obliga'){
						formu.elements[ii].style.backgroundColor='#FFFFFF'; // si hay algo escrito en el campo,se coloca otravez blanco
					}	
			   }
		}
		return boolean;
}
function limpia(formu){
	for(ii=0;ii<formu.length;ii++){ //hago for menor a la cantidad de elementos del formulario				
					if(formu.elements[ii].type=='text'){
						formu.elements[ii].value='';				
					}else if(formu.elements[ii].type=='textarea'){
						formu.elements[ii].value='';
					}else if(formu.elements[ii].type=='password'){
						formu.elements[ii].value='';
					}else if(formu.elements[ii].type=='select-one'){
						formu.elements[ii].selectedIndex=0;
					}
					else if(formu.elements[ii].type=='radio'){
						formu.elements[ii].checked=false;
					}
		}
		document.getElementById('error').innerHTML="";
}

function blanco(campo){
	campo.style.backgroundColor='#FFFFFF';
	if(document.getElementById("error")!=null)
		document.getElementById("error").innerHTML="";
}

function imprimirCita(cita){
	window.open("generador_pdf?p=1&cita="+cita, this.target,'width=500,height=500'); return false;	
}


function eliminaCita(cita){

	var hora= new Date().getTime();
		objeto_ajax=objetoAjax(); 
		objeto_ajax.open("GET", "man_eliminaCita.php?hora="+hora+"&cita="+cita,true);
		objeto_ajax.onreadystatechange=function() {	
			if (objeto_ajax.readyState==4) {
					
					alert(objeto_ajax.responseText);	
					
			}
		}
		objeto_ajax.send(null);
}