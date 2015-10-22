function BorrarUsuario(idParametro)
{
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUsuario",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("grilla");
		
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);
	});	
}

function EditarUsuario()
{
	Mostrar('alta');
	//alert("correo+clave");
	//Mostrar('alta');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"Editarsuario"
		}
	});

	funcionAjax.done(function(retorno){		
		//alert(retorno);
		var usuario =JSON.parse(retorno);		
		$("#id").val(usuario.id);
		//alert(usuario.id+usuario.nombre+usuario.correo+usuario.clave+usuario.tipo);
		$("#nombre").val(usuario.nombre);
		//alert(usuario.provincia);
		$("#correo").val(usuario.correo);
		$("#correo").hide();
		//$("#correo").attr("readonly",true);
		$("#clave").val(usuario.clave);
		$("#clave").hide();
		//$("#clave").attr("readonly",true);
		$("#tipo").val(usuario.tipo);
		$("#tipo").hide();
		$("#divFoto").hide();

	});
	funcionAjax.fail(function(retorno){
		alert(retorno);
	});
}

function GuardarUsuario()
{	
	var formData = new FormData(document.getElementById("FormIngreso"));
        formData.append("queHacer", "GuardarUsuario");

        //alert(formData);
		var funcionAjax=$.ajax({
		url: "nexo.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
	    processData: false
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		Mostrar("MostarLogin");	
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});	
}